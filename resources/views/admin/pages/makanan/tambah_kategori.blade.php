@extends('admin.layouts.main')

@section("title","Kategori");

@section("css")
@endsection

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 >Tambah Makanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.insert') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <select class="form-control" name="kategori">
                                                <option>>>Pilih Kategori<<</option>
                                                <option value="makanan" name="makanan">Makanan</option>
                                                <option value="minuman" name="minuman">Minuman</option>
                                                <option value="snack" name="snack">Snack</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Nama Produk</label>
                                            <input type="text" class="form-control" placeholder="Nama Produk" name="nama">
                                            @error('nama')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Harga Produk</label>
                                            <input type="number" class="form-control" placeholder="Harga Produk" name="harga">
                                            @error('harga')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Deskripsi Produk</label>
                                            <textarea class="form-control" placeholder="Deskripsi Produk" name="deskripsi"></textarea>
                                            @error('deskripsi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>     
                                        <div class="form-group mb-2">
                                            <label for="berkas">Foto Produk</label>
                                            <input type="file" class="form-control" id="berkas" name="berkas" >
                                            @error('berkas')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <a href="/admin-kategori" class="btn btn-warning">Kembali</a>
                                        <button class="btn btn-primary" type="submit">Tambah</button>
                                        {{-- <button class="btn btn-primary" type="submit">Submit</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('admin.layouts.footer')
</div>
@endsection

@section("script")
@endsection