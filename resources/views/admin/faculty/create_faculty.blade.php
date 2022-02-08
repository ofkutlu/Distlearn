@extends('admin.admin')

@section('content_admin')
    <div class="container">
        <div class="justify-content-center">
            @if (Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif

               @if (Session::get('fail'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('fail')}}
                </div>
            @endif
            <form action="add_faculty" method="post">
                @csrf
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Fakülte Adı Gir" name="faculty_name"
                        aria-label="Fakülte adı gir" value="{{old('faculty_name')}}">
                    @error('faculty_name')
                        <span style="color: red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Fakülte Kodunu Gir" name="faculty_id"
                        aria-label="Fakülte kodu gir" value="{{old('faculty_id')}}">
                    @error('faculty_id')
                        <span style="color: red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
