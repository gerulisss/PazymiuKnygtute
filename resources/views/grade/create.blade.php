@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Įvertinimo pridėjimas</div>
                <div class="card-body">
                    <form method="POST" action="{{route('grade.store')}}">
                        Pasirinkite studentą: <select name="student_id" class="selectpicker form-control">
                           @foreach ($students as $student)
                               <option value="{{$student->id}}">{{$student->name}} {{$student->surname}}</option>
                           @endforeach
                       </select>
                       Pasirinkite paskaitą: <select name="lecture_id" class="selectpicker form-control">
                            @foreach ($lectures as $lecture)
                                <option value="{{$lecture->id}}">{{$lecture->name}}</option>
                            @endforeach
                     </select>
                    Paskaitos tema: <input type="text" name="grade_description" class="form-control">
                    <br>
                    Įvertinimas: <input type="text" name="grade_name" class="form-control">
                        <br>
                        @csrf
    <button type="submit" class="btn btn-outline-primary btn-sm">Pridėti</button>
    <a class="btn btn-outline-success btn-sm" href="{{route('grade.index')}}">Grįžti į įvertinimų sąrašą</a>
 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection