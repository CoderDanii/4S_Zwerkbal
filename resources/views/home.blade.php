@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Test</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eligendi porro! Asperiores odio deleniti voluptatibus obcaecati corporis tempora quos numquam molestiae! Dolorum quis hic doloribus debitis nesciunt minima, quisquam optio.</p>

    <div class="stats-container">
        <div class="stats-sub-container">
            <div class="first">
                <p>Aantal aankomende toernooien:</p>
                <p>5</p>
            </div>
            <div class="second">
                <p>Totaal aantal teams:</p>
                <p>26</p>
            </div>
        </div>
        <div class="third">
                <p><img src="../public/img/snitch.png" alt="plaatje"></p>
            </div>
    </div>
@endsection