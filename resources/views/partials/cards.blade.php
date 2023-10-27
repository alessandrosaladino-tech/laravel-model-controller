@forelse ($movies as $movie)
    <div class="col">

        <div class="card shadow h-100">

            
            <div class="card-img-top">
                <img src="https://picsum.photos/200/200?random={{ $movie->id }}"
                class="card-img-top rounded-2 mb-3" alt="{{ $movie->original_title }}">
            </div>
            
            <div class="card-body">
                <h4 class="card-title">{{ $movie->title }}</h4>
                <p>Original title:{{ $movie->original_title }}</p>
                <p>Released on:{{ $movie->date }}</p>
                <p>Nationality:{{ $movie->nationality }}</p>
                <p>Vote on:{{ $movie->vote }}</p>
            </div>
        </div>

    </div>

@empty

    <div class="col">
        <div class="container">
            <h2>No Movies in the database</h2>
        </div>
    </div>
@endforelse
