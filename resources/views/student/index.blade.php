@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Studentų sąrašas</div>
                <div class="card-body">
                  @if(count($students))
@foreach ($students as $student)
  <form method="POST" action="{{route('student.destroy', [$student])}}">
    {{$student->name}} {{$student->surname}}
    <a style="text-decoration:none;" href="{{route('student.show',[$student])}}"><button type="button" class="btn btn-outline-success btn-sm">žiurėti įvertinimus</button></a>
   @csrf
   <button type="submit" class="btn btn-outline-danger btn-sm">Ištrinti</button>
  </form>
  <br>
@endforeach
@else
Nėra Studentų
@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

