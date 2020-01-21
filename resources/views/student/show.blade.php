@extends('layouts.app')
@section('content')
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
  <div class="card-header">Studento įvertinimai: {{$student->name}} {{$student->surname}}</div>
  <div class="card-body">

@if(count($student->studentGrades))
@foreach ($student->studentGrades as $grade)
  <form method="POST" action="{{route('grade.destroy', [$grade])}}">
   @csrf
   Id: {{$grade->id}} Paskaita: {{$grade->gradeLecture->name}} Paskaitos tema: {{$grade->description}} Įvertinimas: {{$grade->name}} Data: {{$grade->created_at}}
   <a style="text-decoration:none;" href="{{route('grade.edit',[$grade])}}"><button type="button" class="btn btn-outline-primary btn-sm">Koreguoti</button></a>
   <button type="submit" class="btn btn-outline-danger btn-sm">Istrinti</button>
  </form>
  <br>
@endforeach
@else
Neturi įvertinimų
@endif
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection