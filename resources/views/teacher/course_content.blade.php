@extends('teacher.teacher_app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('attachments.uploadedVideo') }}" enctype="multipart/form-data">
            @csrf
            <div class="jumbotron" style="margin-bottom: 1rem; text-align:center">
                <div class="card-header">
                    <h1 class="display-4">Yapay Zeka</h1>
                </div>
            </div>
           <div class="jumbotron">
                <div class="card-header">
                    <h1 class="card-title">1.Hafta</h1>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Ders açıklaması veya notunuzu giriniz">
                </div>
            </div>
           <div class="jumbotron">
                <div class="card-header">
                    <h1 class="card-title">Video</h1>
                    <p class="card-text">Ders Videosu Yükle</p>
                    <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="video">
                    </div>
                </div>
            </div>
            <div class="jumbotron">
                <div class="card-header">
                    <h1 class="card-title">Doküman</h1>
                    <p class="card-text">Ders Dokümanını Yükle</p>
                    <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="document">
                    </div>
                </div>
            </div>
           <div class="jumbotron">
                <div class="card-header">
                    <h1 class="card-title">Ödev</h1>
                    <p class="card-text">Ödev Dokümanını Yükle</p>
                    <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="taskdocument">
                    </div>
                </div>
            </div>

                <button class="btn btn-dark" type="submit">Kaydet</button>

        </form>
    </div>
@endsection
