@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            @foreach ($courses as $course)
                <div class="card" style="width: 25rem; margin-bottom:3rem">
                    <div class="card-body">
                        <h3 class="card-title">{{$course->name}}</h3>
                        <a href="{{ route('student_weeks') }}" class="btn btn-secondary">Ders İçeriği</a>
                    </div>
                </div>
            @endforeach
        </div>

    @endsection
