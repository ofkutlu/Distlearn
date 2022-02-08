@extends('.layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron" style="margin-bottom: 1rem; text-align:center">
            <div class="card-header">
                <h1 class="display-4">Yapay Zeka</h1>
            </div>
        </div>
        <div class="jumbotron">
            <div class="card-header">
                <h1 class="card-title">1.Hafta</h1>
                <p class="card-text">Yapay zeka ile ilgili bu hafta yapay sinir ağları konusu işlenmiştir</p>
            </div>
        </div>
        <div class="jumbotron">
            <div class="card-header">
                <h1 class="card-title">Ders Videosu</h1>
                <video width="500" height="240" controls>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="jumbotron">
            <div class="card-header">
                <h1 class="card-title">Ders Dokümanı</h1>
                <a href="/images/myw3schoolsimage.jpg" download>
                    <span>Yapay Zeka-1.hafta-Uygulama Ödevi.pdf</span>
                </a>
            </div>
        </div>
        <div class="jumbotron">
            <div class="card-header">
                <h1 class="card-title">Ödev Dokümanı</h1>
                <a href="/images/myw3schoolsimage.jpg" download>
                    <span>Yapay Zeka-1.hafta-Uygulama Ödevi.pdf</span>
                </a>
            </div>
        </div>
        <div class="jumbotron">
            <div class="card-header">
                <h1 class="card-title">Ödev Yükle</h1>
                <input class="form-control" type="file" id="formFile" name="taskdocument">
                <button class="btn btn-secondary" type="submit">Kaydet</button>
            </div>
        </div>
    </div>
@endsection
