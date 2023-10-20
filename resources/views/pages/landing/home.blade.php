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
    <h2 class="text-center">Berita Terbaru</h2>
    @if (count($data) > 0)
    <div class="row">
        @foreach ($data as $item)
        <div class="col-md-4 mt-4">
            <div class="card">
                @if ($item->attachment)
                <img src="{{$item->attachment}}" class="card-img-top" alt="Berita 1">
                @else                    
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Berita 1">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->description}}</p>
                    <p class="card-text"><small class="text-muted">Baru saja</small></p>
                    {{-- <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                </div>
            </div>
        </div>            
        @endforeach
    </div>
    @else
        
    @endif
</div>
@endsection