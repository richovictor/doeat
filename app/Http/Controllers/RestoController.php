<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\menu_makanan;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Auth\VerificationController;

class RestoController extends Controller
{
    public function menu(Request $request){
        // $tambahMenu = menu_makanan::all();
        // return view('menu',['tambahMenu' => $tambahMenu]);

        $menu = new menu_makanan();
        if(!empty($request->kategori))
        {
            $menu = $menu->where("kategori_makanan",$request->kategori);
        }
        $menu = $menu->get();

        $data = [
            'menu' => $menu,
        ];
        return view('menu',$data);
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function forgot(){
        return view('forgot');
    }
    public function tentang(){
        return view('tentang');
    }

    //tabel user
    public function prosesFormValidator(Request $request){
        $rules =[
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:3|max:8',
            'phone'=>'required|min:10|max:12'
        ];
        $error_massage =[
            'required' => ':attribute wajib diisi',
            'email' => ':attribute harus berisi @',
            'min' => ':attribute harus berisi minimal :min karakter',
            'max' => ':attribute harus berisi minimal :max karakter',
        ];
        $validator = Validator :: make ($request->all(), $rules, $error_massage);
        if($validator->fails()){
            return redirect('/register')->withErrors($validator)->withInput();
        }else {
            $data = [
                "nama" => $request->nama,
                "phone" => $request->phone,
                "email" => $request->email,
                "password" =>bcrypt($request->password)
            ];
            $user = User::create($data);
            event(new Registered($user));
            auth()->login($user); 
            return redirect()->route('verification.notice')->with('success', 'Akun berhasil dibuat, silahkan verifikasi 
            Email Anda');
        }
    }
}
