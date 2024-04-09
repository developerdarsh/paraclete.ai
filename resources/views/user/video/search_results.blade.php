@foreach ($searchResults as $result)
    <div class="news-item">
        <h2>{{ $result->title }}</h2>
        <p>{{ $result->description }}</p>
        <a href="{{ $result->link }}" target="_blank">Read more</a>
    </div>
@endforeach