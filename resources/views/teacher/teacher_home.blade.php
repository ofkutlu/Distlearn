@extends('teacher.teacher_app')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            @foreach ($courses as $course)
                <div class="card" style="width: 25rem; margin-bottom: 1rem;">
                    <div class="card-body">
                        <h3 class="card-title" style="padding-bottom: 1rem">{{ $course->name }}</h3>
                        <a href="{{ route('teacher_weeks') }}" class="btn btn-dark">Dersi Görüntüle</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
