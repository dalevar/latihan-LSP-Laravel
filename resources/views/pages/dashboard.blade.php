@extends('pages.layouts.main')

@section('content')
    <h4 class="text-center mb-5">Selamat datang di halaman dashboard School SMK ISFI Banjarmasin</h4>

    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <p class="text-center">Jumlah Data Produk</p>
            <div class="card">
                <div class="card-body text-center">
                    {{-- <h5>5</h5> --}}
                    <h5>{{ $jumlah }}</h5>
                    <span>Produk</span>
                </div>
            </div>
        </div>
    </div>
@endsection
