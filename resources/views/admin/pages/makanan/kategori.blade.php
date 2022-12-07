@extends('admin.layouts.main')

@section("title","Kategori");

@section("css")
@endsection

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 >Tambah Makanan</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tambah Makanan</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <a href="/admin-kategori/create" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>#</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>harga</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                                
                            </thead>
                            <tbody>
                                @forelse ($tambahMenu as $tambahMenus)
                                <tr>
                                  <th>{{$loop->iteration}}</th>
                                  <td>{{$tambahMenus->kategori_makanan}}</td>
                                  <td>{{$tambahMenus->nama_makanan}}</td>
                                  <td>{{$tambahMenus->harga}}</td>
                                  <td>{{$tambahMenus->deskripsi_makanan}}</td>
                                  <td><img src="{{ asset('storage/'. $tambahMenus->foto_produk) }}"></td>
                                  <td>
                                    <a href="{{ url('/admin/pages/makanan/update',[$tambahMenus->id]) }}" >
                                        <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                                    </a>
                                    {{-- delete --}}
                                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('/admin/pages/makanan/delete',['id'=>$tambahMenus->id])  }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                    </form>
                                </td>
                                </tr>
                                @empty
                                  <td colspan="6" class="text-center">Tidak ada data...</td>
                                @endforelse
                              </tbody>
                        </table>
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