@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Studento pridėjimas</div>
                <div class="card-body">
                    <form method="POST" action="{{route('student.store')}}">
                        Vardas: <input type="text" name="student_name" class="form-control">
                        Pavardė: <input type="text" name="student_surname" class="form-control">
                        Elektroninis paštas: <input type="text" name="student_email" class="form-control">
                        Telefonas: <input type="text" name="student_phone" class="form-control">
                        <br>
                        @csrf
    <button type="submit" class="btn btn-primary btn-sm">Pridėti</button>
    <a class="btn btn-success btn-sm" href="{{route('student.index')}}">Grįžti į studentų sąrašą</a>
 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection