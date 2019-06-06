@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Üdvözöllek! Itt jelenik meg pár adat a kvízről.</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h1>{{ $questions }}</h1>
                            Összes kérdések száma
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $users }}</h1>
                            Összes felhasználók száma
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $quizzes }}</h1>
                            Kitöltött kvízek száma
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ number_format($average, 2) }} / 10</h1>
                            Átlag pontszám
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('tests.index') }}" class="btn btn-success">Töltsd ki egy kvízt!</a>
        </div>
    </div>
@endsection
