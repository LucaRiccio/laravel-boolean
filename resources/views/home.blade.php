@extends('layouts.app')

@section('titolo','home')

@section('content')
  <div class="jumbotron">
    <h1 class="display-4">Cambia la tua vita. Entra in Boolean.</h1>
    <p class="lead">Segui il corso, diventi un web developer e trovi lavoro.</p>
    <hr class="my-4">
    <p> <strong><i class="fas fa-angle-right"></i></strong> 6 mesi di corso full time, online e in diretta.</p>
    <p> <strong><i class="fas fa-angle-right"></i></strong> Nessuna competenza di programmazione richiesta.</p>
    <p> <strong><i class="fas fa-angle-right"></i></strong> Se non trovi lavoro ti rimborsiamo.</p>
    {{-- <a class="btn btn-primary btn-lg" href="#" role="button">Candidati ora</a> --}}
    <button type="button" class="btn btn-lg btn-outline-success">Candidati ora</button>
  </div>

  <div class="prova">
    <img src="https://www.boolean.careers/images/visual/homeHeader.gif" alt="">
  </div>
@endsection
