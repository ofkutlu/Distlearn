@extends('admin.admin')

@section('content')
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <input class="form-control" type="text" placeholder="Fakülte Adı Gir" name="faculty_name"
                aria-label="Fakülte adı gir" value="{{ old('faculty_name') }}">
            @error('faculty_name')
                <span style="color: red">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <input class="form-control" type="text" placeholder="Fakülte Kodunu Gir" name="faculty_id"
                aria-label="Fakülte kodu gir" value="{{ old('faculty_id') }}">
            @error('faculty_id')
                <span style="color: red">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Kaydet</button>
    </form>
@endsection
