<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nama Siswa',
            'nis' => '123456789',
            'nisn' => '987654321',
            'npsn' => '12345678',
        ];
        return view('si');
    }
}
