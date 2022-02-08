@extends('admin.admin')

@section('content_admin')
    <div class="container">
        <div class="justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <a href="{{ action('App\Http\Controllers\Admin\DepartmentController@create') }}">
                <button class="btn btn-primary" style="margin-bottom: 1.5rem;" type="button">Yeni Bölüm Ekle</button></a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Bölüm İsmi</th>
                    </tr>
                </thead>
                @foreach ($departments as $department)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $department->id }}</th>
                            <td>{{ $department->name }}</td>
                            <td><a
                                    href="{{ action('App\Http\Controllers\Admin\DepartmentController@destroy', [$department->id]) }}"><button
                                        class="btn btn-danger" type="button">Sil</button></a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
