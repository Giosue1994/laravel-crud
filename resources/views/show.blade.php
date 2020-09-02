<h1>Titolo: {{ $movie->title }}</h1>
<p>Anno: {{ $movie->year }}</p>
<p>Rating: {{ $movie->rating }}</p>
<p><b>Descrizione</b>: <br>{{ $movie->description }}.</p>

<p>
  <a href="{{ route('movies.index') }}">Torna indietro</a>
</p>
