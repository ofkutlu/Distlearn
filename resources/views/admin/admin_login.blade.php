@extends('admin.admin')

@section('content_admin')
    <div class="container">
        <div class="row justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <p style="font-weight: bold"># &emsp;&emsp; Kullanıcı
                        İsmi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Email
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Oluşturulma Tarihi
                    </p>
                </li>

                {{-- Burdan İtibaren li tagı foreach döngüsüne alınıp teker teker fakülte isimleri ve sıralama veritabanından çekilecek --}}
                <li class="list-group-item">

                    <p> 1. &emsp;&emsp; Ömer Faruk Kutlu
                        <button class="btn btn-dark" style="margin-left:20rem;" type="button">Düzenle</button>
                        <button class="btn btn-danger" style="margin-left:15rem;" type="button">Sil</button>
                    </p>
                </li>
            </ul>
        </div>
    </div>
@endsection
