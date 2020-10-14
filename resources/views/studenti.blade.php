@extends('layouts.app')

@section('titolo','studenti')

@section('content')

  <div class="titolo-studenti text-center">
    <h2>I nostri ex-studenti su LinkedIn</h2>
    <h4>Tu ci metti l’impegno, noi tutta la trasparenza. Siamo pronti a scommettere su di te.</h4>

  </div>

  <div class="card-group">
    @foreach ($data as $key=> $student)
    <div class="card">
      <img src="{{$student->img}}" class="card-img-top" alt="{{$student->nome}}">
      <div class="card-body">
        <a href="{{ route('Student.show',['id' => $student->id])}}"><h5 class="card-title">{{$student->nome}} ({{$student->anni}} anni)</h5></a>
        <p class="card-text">Assunt{{($student->genere == 'f' ? 'a' : 'o')}} da {{$student->azienda}}</p>
        <p class="card-text descrizione">{{$student->descrizione}}</p>
      </div>
    </div>
    @endforeach
</div>
@endsection


{{-- @extends('layouts.app')

@section('titolo','studenti')

@section('content')

  <div class="titolo-studenti text-center">
    <h2>I nostri ex-studenti su LinkedIn</h2>
    <h4>Tu ci metti l’impegno, noi tutta la trasparenza. Siamo pronti a scommettere su di te.</h4>

  </div>

  <div class="card-group">
    @foreach ($data as $key=> $student)
    <div class="card">
      <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
      <div class="card-body">
        <a href="{{ route('Student.show',['id' => $key])}}"><h5 class="card-title">{{$student['nome']}} ({{$student['eta']}} anni)</h5></a>
        <p class="card-text">Assunt{{($student['genere'] == 'f' ? 'a' : 'o')}} da {{$student['azienda']}}</p>
        {{-- <p class="card-text descrizione">{{$student['descrizione']}}</p> --}}
{{--      </div>
    </div>
    @endforeach
</div>
@endsection --}}
