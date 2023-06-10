@extends('layouts.app')
@section('css')
	<!-- Sweet Alert CSS -->
	<link href="{{URL::asset('plugins/sweetalert/sweetalert2.min.css')}}" rel="stylesheet" />
@endsection

@section('content')

<form id="openai-form" action="{{ url('user/chat/google-search') }}" method="GET" enctype="multipart/form-data" class="mt-12">		
	@csrf
	<div class="row justify-content-md-center">	
		<div class="col-lg-8 col-md-12 col-sm-12">
			<div class="text-left mb-4" id="balance-status">
				<span class="fs-11 text-muted pl-3"><i class="fa-sharp fa-solid fa-bolt-lightning mr-2 text-primary"></i>{{ __('Your Balance is') }} <span class="font-weight-semibold" id="balance-number">{{ number_format(auth()->user()->available_words + auth()->user()->available_words_prepaid) }}</span> {{ __('Words') }}</span>
			</div>
            <div class="container">
                <div>
                    <h4>Web Search Result:</h4>
                    @foreach($search_result as $key => $search_row)
                    <p>[{{$key + 1}}]{!!html_entity_decode($search_row->htmlSnippet) !!}</p>
                    @endforeach
                </div>
                <input type="input" name="search" id="search" >
                <button type="submit" id="customSearch" name="customSearch">Submit</button>
            </div>							
		</div>
	</div>
</form>
@endsection

@section('js')
@endsection