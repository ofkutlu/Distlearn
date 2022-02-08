@extends('admin.admin')

@section('content_admin')
    <div class="container">
        <div class="justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <a href="{{route('faculties_add')}}">
            <button class="btn btn-primary" style="margin-bottom: 1.5rem;" type="button">Yeni Fakülte Ekle</button></a>
           <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fakülte İsmi</th>
                    </tr>
                </thead>
                 @foreach ($faculties as $faculty)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $faculty->id }}</th>
                            <td>{{ $faculty->name }}</td>
                            <td><a href="{{url('delete_faculty/'.$faculty->id)}}" class="btn btn-danger" type="button">Sil</a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
