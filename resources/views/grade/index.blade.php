@extends('layouts.app')
@section('content')
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
  <div class="card-header">Įvertinimų sąrašas</div>
  <div class="card-body">

@if(count($grades))
@foreach ($grades as $grade)
  <form method="POST" action="{{route('grade.destroy', [$grade])}}">
   @csrf
   Studentas: {{$grade->gradeStudent->name}} Paskaita: {{$grade->gradeLecture->name}} Paskaitos tema: {{$grade->description}} Įvertinimas: {{$grade->name}}
   <a style="text-decoration:none;" href="{{route('grade.edit',[$grade])}}"><button type="button" class="btn btn-outline-primary btn-sm">Koreguoti</button></a>
   <button type="submit" class="btn btn-outline-danger btn-sm">Istrinti</button>
  </form>
  <br>
@endforeach
@else
Nėra įvertinimų
@endif
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection