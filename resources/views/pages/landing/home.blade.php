@extends("layouts/landing.app")

@section('main-content')
<div class="jumbotron text-white">
    <div class="container">
        <h1 class="display-4">Selamat datang di Portal Berita!</h1>
        <p class="lead">Ayo temukan berita terbaru dan terkini!.</p>
        <a class="btn btn-primary btn-md" href="#" role="button">Selengkapnya</a>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Berita Terbaru</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Berita 1">
                <div class="card-body">
                    <h5 class="card-title">Judul Berita 1</h5>
                    <p class="card-text">Deskripsi singkat berita pertama.</p>
                    <p class="card-text"><small class="text-muted">Baru saja</small></p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Berita 2">
                <div class="card-body">
                    <h5 class="card-title">Judul Berita 2</h5>
                    <p class="card-text">Deskripsi singkat berita kedua.</p>
                    <p class="card-text"><small class="text-muted">2 menit yang lalu</small></p>
                    <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Berita 3">
                <div class="card-body">
                    <h5 class="card-title">Judul Berita 3</h5>
                    <p class="card-text">Deskripsi singkat berita ketiga.</p>
                    <p class="card-text"><small class="text-muted">10 menit yang lalu</small></p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection