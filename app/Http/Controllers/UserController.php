<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Auth\VerificationController;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User :: paginate(10);
        return view ('admin.user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        return view('register');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator::make($request->all(),
        [
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ],
        [
            'required' => ':attribute wajib diisi'
        ]);
        if ($validator->fails()) {
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view ('user.show',['user' =>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view ('user.edit',['user' =>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
        
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
            ]);
    
            User::where('id',$user->id)->update($validateData);
            return redirect()->route('users.show', ['mahasiswa'=>$user->id])
                ->with('pesan',"Update data {$validateData['nama']} berhasil");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with ('pesan',"Hapus data $user->nama berhasil");
    }
}
