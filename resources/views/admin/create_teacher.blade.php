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
                    <select class="form-select" aria-label="Fakülte Seçiniz">
                        <option selected>Fakülte Seçiniz</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Bölüm Seçiniz">
                        <option selected>Bölüm Seçiniz</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Öğretmen İsim Soyisim"
                        aria-label="Öğretmen İsim Soyisim">
                    <input class="form-control" type="text" placeholder="Sicil No" aria-label="Sicil No">
                    <input class="form-control" type="text" placeholder="TC veya Pasaparot No"
                        aria-label="TC veya Pasaparot No">
                    <input class="form-control" type="email" placeholder="E-posta" aria-label="E-Posta">

                </div>
                <button class="btn btn-primary" type="button">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
