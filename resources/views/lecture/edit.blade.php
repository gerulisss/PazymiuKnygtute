@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Paskaitos koregavimas</div>
                <div class="card-body">

<form method="POST" action="{{route('lecture.update',[$lecture])}}">
    Pavadinimas: <input type="text" name="lecture_name" value="{{$lecture->name}}" class="form-control">
    {{-- Paskaitos tema: <input type="text" name="lecture_description" value="{{$lecture->description}}" class="form-control"> --}}
    <br>
    @csrf
    <button type="submit" class="btn btn-outline-primary btn-sm">Koreguoti</button>
    <a class="btn btn-outline-success btn-sm" href="{{route('lecture.index')}}">Grįžti į paskaitų sąrašą</a>
 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
