<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\menu_makanan;
use App\Models\User;

class BosController extends Controller
{
    public function loginAdmin(){
        return view('admin.login-admin');
    }
    public function dashboard(){
        return view('admin.pages.dashboard.index');
    }
    public function daftar(){
        return view('admin.pages.makanan.daftar');
    }
    public function daftar_create(){
        return view('admin.pages.makanan.tambah_produk');
    }
    public function kategori(){
        $tambahMenu = menu_makanan::all();
        return view('admin.pages.makanan.kategori',['tambahMenu' => $tambahMenu]);
    }
    public function create_kategori(){
        return view('admin.pages.makanan.tambah_kategori');
    }
    public function user(){
        $users = User::all();

        $data = [
            'users' => $users
        ];

        return view('admin.pages.user.index',$data);
    }
    public function insert(Request $request)
    {
        DB::table('menu_makanans')->insert([
            "kategori_makanan" => $request->kategori,
            "nama_makanan" => $request->nama,
            "harga" =>$request->harga,
            "deskripsi_makanan" => $request->deskripsi,
            "foto_produk" => $request->file('berkas')->store('uploads'),
        ]);
        return redirect('/admin-kategori');
    }

    // public function prosesFileUpload(Request $request){
    //     $request->validate([
    //         'berkas' => 'required|file|image|max:5000',
    //     ]);
        
    //     $path = $request->berkas->store('uploads');
    //     // echo "foto di $path";
    // }

    public function update($id){
        $id_pilih = Menu_makanan::where('id',$id)->first();
        return view('admin.pages.makanan.update',['id_pilih'=>$id_pilih]);
    }
    public function proses_update(Request $request, $id ){
        Menu_makanan::where('id',$id)->first()->update($request->all());
        return redirect('/admin-kategori');
    }

    public function destroy(Request $request,$id){
        Menu_makanan::where('id',$id)->first()->delete();
        return redirect('/admin-kategori');
    }
}
