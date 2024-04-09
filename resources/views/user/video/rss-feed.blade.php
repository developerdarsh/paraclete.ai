@extends('layouts.app')
@section('css')
	<style>
		 #search-results {
            width: 45%;
            margin: 0 auto; /* Center align the search results */
        }
        
        .search-results-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

		.input-group {
			position: relative;
		}

		#clear-search-results {
			 position: absolute;
			right: 30px; /* Adjust the position as needed */
			top: 50%;
			transform: translateY(-50%);
		}

	</style>
@endsection
@section('content')

<h1></h1>

<div class="search-template">
	<div class="input-box">
	<div class="form-group">
		<div class="input-group">
			<input type="text" class="form-control" id="search-query" placeholder="Search for news..." name="search">
			<div class="input-group-append">
				<a id="clear-search-results" style="display: none;" href="javascript:void(0)">
					<i class="fas fa-times"></i> 
				</a>
			</div>
		</div>
	</div>
	</div>
	<div class="templates-nav-menu">
		<div class="template-nav-menu-inner">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">{{ __('All Feeds') }}</button>
				</li>
				@foreach($dataSet as $data)
				<li class="nav-item category-check" role="presentation">
					<button class="nav-link" id="{{ $data['id'] }}" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">{{ $data['name'] }}</button>
				</li>
				@endforeach
			</ul>
		</div>
	</div>	
</div>

<div class="search-results-container">
    <div id="search-results"></div>
</div>
<div class="tab-search-results-container"></div>


<div id="all-results-container">
	@foreach($dataSet as $data)
		<rssapp-wall id='{{ $data['id'] }}'></rssapp-wall>
	@endforeach
</div>

@endsection

@section('js')
<script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		const searchResults = document.getElementById('search-results');
		const clearSearchResultsButton = document.getElementById('clear-search-results');
		const searchQuery = document.getElementById('search-query');
        const rssWall = document.getElementById('all-results-container');
		
		searchQuery.addEventListener('keyup', function () {
			if (event.key === 'Enter') {
				searchResults.innerHTML = '';
                searchFeeds(); // Call the search function when Enter is pressed.
				clearSearchResultsButton.style.display = 'block'; 
				$('#clear-search-results').show();
            }
		});

		clearSearchResultsButton.addEventListener('click', function () {
            searchResults.innerHTML = '';
			searchQuery.value = '';
            clearSearchResultsButton.style.display = 'none'; // Hide the clear button
            rssWall.style.display = 'block'; // Show the RSS wall
        });

		function searchFeeds() {
			searchResults.innerHTML = '';
            const query = searchQuery.value;
            const url = `/user/search-feeds?query=${query}`;

            fetch(url, {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
             .then(response => response.json())
            .then(data => {
                if (data.results) {
					$(".tab-search-results-container").hide();
					rssWall.style.display = 'none'; // Hide the RSS wall.
                    searchResults.innerHTML = data.results;
                    
                } else {
                    searchResults.innerHTML = 'No results found for your query.';
                }
            })
            .catch(error => {
                console.error(error);
            });
        }
		searchResults.innerHTML = '';
		$(".nav-link").click(function () {
			var navLinkId = $(this).attr("id");
			if(navLinkId == 'all-tab'){
				$(".tab-search-results-container").hide();
				$("#all-results-container").show();
			}else{
				$("#all-results-container").hide();
				var html = "<rssapp-wall id='"+ navLinkId +"'></rssapp-wall>";
				$(".tab-search-results-container").html();
				$(".tab-search-results-container").show();
				$(".tab-search-results-container").html(html);
			}
			
			
		});	
	});
</script>
@endsection