@extends('admin.admin')

@section('content_admin')
    <div class="container">
        <div class="row justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kullanıcı İsmi</th>
                        <th scope="col">E-Posta</th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a class="btn btn-danger" type="button">Sil</a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>

        </div>
    </div>
@endsection
