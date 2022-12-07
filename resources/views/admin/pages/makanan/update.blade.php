@extends('admin.layouts.main')

@section("title","Update");

@section("css")
@endsection

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 >Tambah Makanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Update</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('/admin/pages/makanan/update/'.$id_pilih->id) }}" method="POST">
                                @method('PATCH')
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
                                            <input type="text" class="form-control" placeholder="Nama Produk" name="nama_makanan">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Harga Produk</label>
                                            <input type="text" class="form-control" placeholder="Harga Produk" name="harga">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Deskripsi Produk</label>
                                            <textarea class="form-control" placeholder="Deskripsi Produk" name="deskripsi_makanan"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Foto Produk</label>
                                            <input type="file" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <a href="/admin-kategori" class="btn btn-warning">Kembali</a>
                                        <button class="btn btn-primary" type="submit">Update</button>
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