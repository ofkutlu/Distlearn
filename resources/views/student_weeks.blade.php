@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron" style="margin-bottom: 1rem; text-align:center">
            <div class="card-header">
                <h1 class="display-4">Yapay Zeka</h1>
            </div>
        </div>
        <div class="jumbotron">
            <h1 class="display-5">1.Hafta</h1>
            <p style="font-size: 20px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores totam temporibus
                harum eum exercitationem voluptates! Ex ipsam fugit magni ratione temporibus iusto quae, recusandae dolorum
                eum sed deserunt soluta reiciendis?</p>
            <p class="lead">
                <a class="btn btn-secondary btn-lg" href="{{ route('student_content') }}" role="button">Görüntüle</a>
            </p>
        </div>
        <hr class="my-4">
        <div class="jumbotron">
            <h1 class="display-5">2.Hafta</h1>
            <p style="font-size: 20px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores totam temporibus
                harum eum exercitationem voluptates! Ex ipsam fugit magni ratione temporibus iusto quae, recusandae dolorum
                eum sed deserunt soluta reiciendis?</p>
            <p class="lead">
                <a class="btn btn-secondary btn-lg" href="{{ route('student_content') }}" role="button">Görüntüle</a>
            </p>
        </div>
        <hr class="my-4">
        <div class="jumbotron">
            <h1 class="display-5">3.Hafta</h1>
            <p style="font-size: 20px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolores perferendis
                facilis voluptates accusantium tenetur harum excepturi non delectus, perspiciatis esse magni iure ipsum, ad
                fugiat in, molestias expedita. Ex fugiat molestias quia hic porro tempore, provident quisquam, ut nulla nisi
                asperiores aspernatur quasi et ipsa illum. Sint, adipisci itaque!</p>
            <p class="lead">
                <a class="btn btn-secondary btn-lg" href="{{ route('student_content') }}" role="button">Görüntüle</a>
            </p>
        </div>
    </div>
@endsection
