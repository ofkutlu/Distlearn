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
            <form action="{{ action('App\Http\Controllers\Admin\DepartmentController@store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <select class="form-select" aria-label="Fakülte Seçiniz" name="faculty_id">
                        <option selected>Fakülte Seçiniz</option>
                   @foreach ($faculties as $faculty )
                          <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                   @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Bölüm İsmi" aria-label="Bölüm İsmi" name="department_name" value="{{old('department_name')}}">
                    <input class="form-control" type="text" placeholder="Bölüm Kodunu Gir" aria-label="Bölüm Kodu" name="department_id" value="{{old('department_id')}}">
                </div>
                <button class="btn btn-primary" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
