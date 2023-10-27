@forelse ($Movies as $Movie)
    <div class="col">

        <div class="card shadow h-100">

            <div class="card-body">

                <div class="card-img-top">
                    <img src="https://picsum.photos/400/200?random={{ $movie->id }}"
                        class="card-img-top rounded-2 mb-3" alt="{{ $movie->original_title }}">
                </div>

                <h4 class="card-title">{{ $movie->title }}</h4>
                <p><strong>Original title: </strong>{{ $movie->original_title }}</p>
                <p><strong>Released on: </strong>{{ $movie->date }}</p>
                <p><strong>Nationality: </strong>{{ $movie->nationality }}</p>
                <p><strong>Vote on: </strong>{{ $movie->vote }}</p>
            </div>
        </div>

    </div>

@empty

    <div class="col">
        <h2>No Movies in the database</h2>
    </div>
@endforelse
