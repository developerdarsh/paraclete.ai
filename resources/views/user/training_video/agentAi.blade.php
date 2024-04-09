@extends('layouts.app')

@section('content')
	<form id="openai-form" action="" method="GET" enctype="multipart/form-data">		
		@csrf
		<button class="btn btn-primary special-btn" id="chat-button">
												submit
											</button>
									
										</form>

										<div id="response-container"></div>
@endsection
@section('js')

<script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            const mainForm = document.getElementById("openai-form");
            const responseContainer = document.getElementById("response-container");

            mainForm.addEventListener("submit", function (event) {
                event.preventDefault();
                fetch('users/agentAiCreate', {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'POST',
                })
                .then(response => response.json())
                .then(data => {
                    // Display the response in the response container
                    responseContainer.innerHTML = data;
                })
                .catch(error => {
                    console.error(error);
                    // Handle errors if needed
                });
            });
        });
    </script>
@endsection	
