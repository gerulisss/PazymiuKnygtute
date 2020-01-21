@extends('layouts.app')
@section('content')
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
  <div class="card-header">Paskaitų sąrašas</div>
  <div class="card-body">

@if(count($lectures))
@foreach ($lectures as $lecture)
  <form method="POST" action="{{route('lecture.destroy', [$lecture])}}">
   @csrf
   {{$lecture->name}}
   <a style="text-decoration:none;" href="{{route('lecture.edit',[$lecture])}}"><button type="button" class="btn btn-outline-primary btn-sm">Koreguoti</button></a>
   <button type="submit" class="btn btn-outline-danger btn-sm">Istrinti</button>
  </form>
  <br>
@endforeach
@else
Nėra Paskaitų
@endif
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection