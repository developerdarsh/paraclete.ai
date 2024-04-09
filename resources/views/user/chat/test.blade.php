<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text-to-Speech Demo</title>
</head>
<body>
    <label for="textInput">Enter Text:</label>
    <textarea id="textInput" rows="4" cols="50">Hello, this is a test.</textarea>
    <br>
    <button id="playButton">Play Audio</button>
    <audio id="audioPlayer" controls></audio>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#playButton').click(function () {
                $.get('{{ route("convert-text-to-audio") }}', function (voices) {
                    console.log(voices);
                     const audioUrl = "https://paraclete.ai/public/"+voices.result_url;
                    const audioPlayer = document.getElementById('audioPlayer');
                    audioPlayer.src = audioUrl;
                    audioPlayer.play();
                })
                .fail(function(error) {
                    console.error('Error fetching voices:', error);
                });
            });
        });
    </script>
</body>
</html>