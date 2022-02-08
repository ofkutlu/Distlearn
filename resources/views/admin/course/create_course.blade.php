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
                    <select class="form-select" aria-label="Bölüm Seçiniz">
                        <option selected>Bölüm Seçiniz</option>
                         @foreach ($departments as $department )
                          <option value="{{$department->id}}">{{$department->name}}</option>
                   @endforeach
                    </select>
                </div>
                  <div class="mb-3">
                    <select class="form-select" aria-label="Öğretmen Seçiniz">
                        <option selected>Öğretmen Seçiniz</option>
                          @foreach ($teachers as $teacher )
                          <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                   @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Ders Adı"
                        aria-label="Adı">
                    <input class="form-control" type="text" placeholder="Ders Kodu" aria-label="Ders Kodu">
                </div>
                <button class="btn btn-primary" type="button">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
