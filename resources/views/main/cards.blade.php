@extends('templates.main')
@section('title', 'CAPAG')
@section("script")
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/cards.css')}}">
@stop
@section("content")
<div class="container">
        <div class="card">
            <div class="icon">
                <ion-icon name="people"></ion-icon>
            </div>
            <div class="content">
                <h2>1.374.143</h2>
                <p>POBLACIÓN CON AGUA POTABLE EN EL ÁREA DE SERVICIO DE CAPAG</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <ion-icon name="water"></ion-icon>
            </div>
            <div class="content">
                <h2>5.031 KM.</h2>
                <p>DE RED DE DISTRIBUCIÓN DE CAÑERIAS CON 253.532 CONEXIONES</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <ion-icon name="build"></ion-icon>
            </div>
            <div class="content">
                <h2>2.308 KM.</h2>
                <p>DE RED DE ALCANTARILLADO SANITARIO</p>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@stop