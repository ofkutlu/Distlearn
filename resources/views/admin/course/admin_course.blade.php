@extends('admin.admin')

@section('content_admin')
    <div class="container">
        <div class="justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <a href="{{ route('courses_add') }}">
                <button class="btn btn-primary" style="margin-bottom: 1.5rem;" type="button">Yeni Ders Ekle</button></a>
            <table class="table table-hover">
                <thead>
                    <tr style="margin-bottom: 1rem">
                        <th scope="col">#</th>
                        <th scope="col">Ders İsmi</th>
                    </tr>
                </thead>
                @foreach ($courses as $course)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $course->id }}</th>
                            <td>{{ $course->name }}</td>
                            <td><a href="{{url('delete_course/'.$course->id)}}"><button class="btn btn-danger" type="button">Sil</button></a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
