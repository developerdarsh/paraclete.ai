@extends('layouts.app')


@section('content')
<input type="text" id="textToConvert">
<button id="convertButton">Convert to Speech</button>
<audio id="audioPlayer" controls></audio>
@endsection
@section('js')
<script src="{{URL::asset('plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{URL::asset('plugins/pdf/html2canvas.min.js')}}"></script>
<script src="{{URL::asset('plugins/pdf/jspdf.umd.min.js')}}"></script>
<script src="{{URL::asset('js/export-chat.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
 $('#convertButton').click(function() {
  	var text = $('#textToConvert').val();

	fetch('https://api.elevenlabs.io/v1/text-to-speech/21m00Tcm4TlvDq8ikWAM/stream?optimize_streaming_latency=0', {
  method: 'POST',
  headers: {
    'Accept': '*/*',
    'Xi-Api-Key': 'd2babf9c40d755b3190831cb00b3950c',
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    text: text,
    model_id: 'eleven_monolingual_v1',
    voice_settings: {
      stability: 0,
      similarity_boost: 0,
      style: 0.5,
      use_speaker_boost: true
    }
  })
})
  .then(response => response.blob())
  .then(blob => {
    const audioUrl = URL.createObjectURL(blob);
    const audioPlayer = document.getElementById('audioPlayer');
    audioPlayer.src = audioUrl;
    audioPlayer.play();
  })
  .catch(error => {
    console.error('Error:', error);
  });

});

});

</script>
@endsection