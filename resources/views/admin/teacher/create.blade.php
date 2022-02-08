@extends('admin.admin')

@section('content_admin')
    <div class="container">
        <div class="justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ action('App\Http\Controllers\Admin\TeacherController@store')}}" method="post">
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
                    <select class="form-select" aria-label="Bölüm Seçiniz" name="department_id" >
                        <option selected>Bölüm Seçiniz</option>
                            @foreach ($departments as $department )
                          <option value="{{$department->id}}">{{$department->name}}</option>
                   @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Öğretmen İsim Soyisim"
                        aria-label="Öğretmen İsim Soyisim" name="teacher_name"  value="{{old('teacher_name')}}">
                         <input class="form-control" type="text" placeholder="Sicil No"
                        aria-label="TC veya Pasaparot No" name="teacher_no"  value="{{old('teacher_no')}}">
                    <input class="form-control" type="email" placeholder="E-posta" aria-label="E-Posta" name="email"  value="{{old('email')}}">
                </div>
                <button class="btn btn-primary" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
