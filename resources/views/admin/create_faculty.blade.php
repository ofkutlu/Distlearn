@extends('admin.admin')

@section('content_admin')
    <div class="container">
        <div class="justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Fakülte Adı Gir" aria-label="Fakülte adı gir">
                    <input class="form-control" type="text" placeholder="Fakülte Kodunu Gir" aria-label="Fakülte kodu gir">
                </div>
                <button class="btn btn-primary" type="button">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
