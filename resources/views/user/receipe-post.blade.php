@extends('user.layout.app')
@section('title', 'halaman resep')
@section('content')

    <style>
        .single-preparation-step p,
        .custom-control-label {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
        }

        .single-preparation-step {
            display: flex;
            align-items: flex-start;
        }

        .single-preparation-step p {
            flex: 1;
            min-width: 0;
            /* penting agar teks bisa wrap */
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
        }

        .custom-control-label {
            display: block;
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
        }

        .receipe-headline img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }

        .step {
            margin-bottom: 20px;
        }

        .card h3 {
            margin-top: 20px;
            font-size: 15px;
            color: #636363;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background: #146d40;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 14px;
            transition: .3s;
        }

        .btn:hover {
            background: #a84833;
        }
    </style>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay"
        style="background-image: url({{ asset('user/img/bg-img/breadcumb3.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Recipe</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="receipe-post-area section-padding-80">

        <!-- Receipe Post Search -->
        <div class="receipe-post-search mb-80">
            <div class="container">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <select name="select1" id="select1">
                                <select class="form-control" name="kategori_id">
                                    @foreach ($data_kategori as $kategori)
                                        <option value="{{ $kategori->id }}">
                                            {{ $kategori->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="search" name="search" placeholder="Search Receipies">
                        </div>
                        <div class="col-12 col-lg-3 text-right">
                            <button type="submit" class="btn delicious-btn">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Receipe Slider -->
        @if (isset($isDetail) && $isDetail)
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="receipe-slider owl-carousel">
                            <img src="{{ asset('storage/resep/' . $resep->gambar) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Receipe Content Area -->
        <div class="receipe-content-area">
            <div class="container">
                @if (isset($isDetail) && $isDetail)
                    <!-- DETAIL VIEW -->
                    <div class="receipe-headline my-5">
                        <img src="{{ asset('storage/' . $resep->gambar) }}" alt="{{ $resep->nama }}" class="img-fluid">

                        <span>April 05, 2018</span>
                        <h2>{{ $resep->nama }}</h2>

                        <div class="receipe-duration">
                            <p>{{ $resep->deskripsi }}</p>
                        </div>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4" style="margin-left: 100px">
                <h4>Steps</h4>
                @foreach ($datalangkah as $langkah)
                    <!-- Single Preparation Step -->
                    <div class="d-flex align-items-start">
                        <h4 class="mr-3">{{ $loop->iteration }}</h4>
                        <p class="mb-0">{{ $langkah->langkah }}</p>
                    </div>
                @endforeach
            </div>

            <div class="col-12 col-lg-4" style="margin-left: 100px">
                <h4>Ingredients</h4>
                @foreach ($databahan as $bahan)
                    <!-- Single Preparation Step -->
                    <div class="d-flex flex-col align-items-start">
                        <ul>
                            <li>
                                {{ $bahan->bahan }} {{ $bahan->jumlah }}
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <!-- LIST VIEW -->
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>All Recipes</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($resep as $item)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" class="img-fluid">
                        <div class="card px-2">
                            <h3><a href="#">
                                    <h5>{{ $item->nama ?? null }}</h5>
                                    <p>{{ $item->deskripsi }}</p>
                                </a></h3>
                            <a href="{{ route('user.resepdetail', $item->id) }}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </div>
    </div>
    </div>

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('user/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('user/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('user/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('user/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('user/js/active.js') }}"></script>

@endsection
