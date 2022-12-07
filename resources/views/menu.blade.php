@extends('main')

@section('content')
<link rel="stylesheet" href="card-menu.css" />
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
<div class="container-xxl py-5 bg-dark hero-header mb-3">
    <div class="container text-center  pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Menu Makan</h1>
        <nav aria-label="breadcrumb">
        </nav>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Menu Terpopuler</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-2 ms-0 pb-2 @if(request()->is('/menu?kategori=makanan')) active @endif" href="/menu?kategori=makanan">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Menu</small>
                            <h6 class="mt-n1 mb-0">Makan</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-2 pb-2 " href="/menu?kategori=snack">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Menu</small>
                            <h6 class="mt-n1 mb-0">Snack</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-2 me-0 pb-2" href="menu?kategori=minuman">
                        <i class="fa  fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Menu</small>
                            <h6 class="mt-n1 mb-0">Minum</h6>
                        </div>
                    </a>
                </li>
            </ul>
              
                  {{-- <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Kategori</th>
                        <th>Nama</th>
                        <th>harga</th>
                        <th>Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($tambahMenu as $tambahMenus)
                      <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$tambahMenus->kategori_makanan}}</td>
                        <td>{{$tambahMenus->nama_makanan}}</td>
                        <td>{{$tambahMenus->harga}}</td>
                        <td>{{$tambahMenus->deskripsi_makanan}}</td>
                      </tr>
                      @empty
                        <td colspan="6" class="text-center">Tidak ada data...</td>
                      @endforelse
                    </tbody>
                  </table> --}}

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 gy-4  d-flex justify-content-center">
                @forelse ($menu as $row)
                <div class="col">
                        <div class="profile-card">
                            <div class="image">
                                <img src="{{ asset('storage/'. $row->foto_produk) }}" alt="" class="profile-img"/>
                            </div>
                            <div class="text-data">
                                <span class="name">{{ $row->nama_makanan }}</span>
                                <span class="job">{{ $row->deskripsi_makanan }}</span>
                            </div>
                            <p>Rp. {{ $row->harga}}</p>
                            <div class="buttons">
                                <button class="button">Pesan</button>
                            </div>
                        </div>
                </div>
                @empty
                    <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
            </div>
        </div>          
                
                
        </div>
    </div>
</div>            
            
        </div>
    </div>
</div>
@endsection