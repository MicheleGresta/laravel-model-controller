@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row row-cols-4">
            @foreach ($movies as $singleMovie)
                <div class="col gap-2 py-3">
                    <div class="card">
                        <div class="p-3">
                            <h3> {{ $singleMovie->title }}</h3>
                            <h6> Lingua: {{ $singleMovie->nationality }}</h6>
                            <h6> Data uscita: {{ $singleMovie->date }}</h6>
                            <h5> Voto: {{ $singleMovie->vote }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
