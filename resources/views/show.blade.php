@extends('layouts.app')

@section('titolo','Show')

@section('content')

  <div class="titolo-studenti text-center">
    <h2>I nostri ex-studenti su LinkedIn</h2>
    <h4>Tu ci metti l’impegno, noi tutta la trasparenza. Siamo pronti a scommettere su di te.</h4>

  </div>

  <div class="card-group">

    <div class="card">
      <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
      <div class="card-body">
        <h5 class="card-title">{{$student['nome']}} ({{$student['eta']}} anni)</h5>
        <p class="card-text">Assunt{{($student['genere'] == 'f' ? 'a' : 'o')}} da {{$student['azienda']}}</p>
        {{-- <p class="card-text descrizione">{{$student['descrizione']}}</p> --}}
      </div>
    </div>

</div>
@endsection
