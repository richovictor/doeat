<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function poto(){
        $siswa0 = "img/try.jpg";
        $siswa1 = "img/victor.jpg";
        $siswa2 = "img/vania.jpg";
        $siswa3 = "img/windi.jpg";
        $siswa4 = "img/cantika.jpg";
        $teams = collect([
            [
                'image' => $siswa0,
                'name' => "Mr. Tryanda Pams",
                "profession" => "Web Developer"
            ],
            [
                'image' => $siswa1,
                'name' => "Mr. Richo Victor",
                "profession" => "Programmer"
            ],
            [
                'image' => $siswa2,
                'name' => "Mrs. Vania Putri",
                "profession" => "Supervisor"
            ],
            [
                'image' => $siswa3,
                'name' => "Mrs. Windi Wahyu",
                "profession" => "Master Chef"
            ],
            [
                'image' => $siswa4,
                'name' => "Mrs. Cantika",
                "profession" => "Chef"
            ],
        ]);
        
        
        return view('welcome', ['teams' => $teams]);
    }
}
