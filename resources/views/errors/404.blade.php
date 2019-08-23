@extends('layouts.layout',['title' => " 404 ошибка.Вы попали не туда "])

@section('content')
    <div class="card" >
        <h2 class="card-header">Вы зашли совсем не туда(ошибка 404)</h2>
        <img src="{{ asset('img/dove.jpg') }}" alt="smoke" style="height: 700px">
    </div>

    <a href="/" class="btn btn-outline-primary"> Срочно вернуться на главную </a>
@endsection
