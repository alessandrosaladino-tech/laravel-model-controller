@extends('layout.app')


@section('content')

    <main>
        <div class="container">
            <h1 class="text-center mt-3">MODEL-CONTROLLER MOVIES</h1>
            <div class="row row-cols-1 row-cols-md-2 g-4 my-3">

                @include('partials.cards')

            </div>

        </div>
    </main>
@endsection