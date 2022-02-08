@extends('admin.admin')

@section('content_admin')
    <div class="container">
        <div class="justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                 <a href="{{route('students_add')}}">
            <button class="btn btn-primary" style="margin-bottom: 1.5rem;" type="button">Yeni Öğrencii Ekle</button></a>
           <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Öğrenci İsmi</th>
                    </tr>
                </thead>
                 @foreach ($students as $student)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->name }}</td>
                            <td><a href="{{url('delete_student/'.$student->id)}}"><button class="btn btn-danger" type="button">Sil</button></a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
