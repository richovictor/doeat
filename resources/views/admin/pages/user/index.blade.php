@extends('admin.layouts.main')

@section("title","User");

@section("css")
@endsection

@section('content')

<div id="layoutSidenav_content">

<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-lg-6 ">
          <h2 class="mr-auto">Tabel user</h2>
        </div>
        <div class="col-lg-6 d-flex justify-content-end mb-3">
        </div>

        @if (session()->has('pesan'))
          <div class="alert alert-success">{{ session()->get('pesan') }}
          </div>
        @endif
      </div>

    <table class="table table-striped">
      <thead>
        <tr>

          <th>#</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($users as $user)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{$user->nama}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
          </tr>
        @empty
          <td colspan="6" class="text-center">Tidak ada data...</td>
        @endforelse
      </tbody>
    </table>
    </div>
  </div>
</div>

    {{-- <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
            </ol>
            <div class="row">
            </div>
            
            
        </div>
    </main> --}}
    @include('admin.layouts.footer')
</div>
@endsection

@section("script")
@endsection