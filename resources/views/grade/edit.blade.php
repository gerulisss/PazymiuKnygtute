@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Įvertinimo koregavimas</div>
                <div class="card-body">
<form method="POST" action="{{route('grade.update',[$grade])}}">
    Pasirinkite studentą: <select name="student_id" class="select-picker form-control">
        @foreach ($students as $student)
            <option value="{{$student->id}}" @if($student->id == $grade->student_id) selected @endif>
                {{$student->name}} {{$student->surname}}
            </option>
        @endforeach
</select>
Pasirinkite paskaitą: <select name="lecture_id" class="select-picker form-control">
    @foreach ($lectures as $lecture)
        <option value="{{$lecture->id}}" @if($lecture->id == $grade->lecture_id) selected @endif>
            {{$lecture->name}}
        </option>
    @endforeach
</select>
Paskaitos tema: <input type="text" name="grade_description" value="{{$grade->description}}" class="form-control">
<br>
Įvertinimas: <input type="text" name="grade_name" value="{{$grade->name}}" class="form-control">
<br>
    @csrf
    <button type="submit" class="btn btn-outline-primary btn-sm">Koreguoti</button>
    <a class="btn btn-outline-success btn-sm" href="{{route('grade.index')}}">Grįžti į įvertinimų sąrašą</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection