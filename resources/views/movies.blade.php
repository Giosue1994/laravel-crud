<h1>Lista Film</h1>

@foreach ($movies as $movie)

<div>
  <h2>Titilo: <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></h2>
</div>

@endforeach
