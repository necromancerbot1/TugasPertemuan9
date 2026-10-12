<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Selamat Datang di Tugas 9',
            'description' => 'Setup Laravel berhasil terhubung dengan Database VPS.'
        ];
        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang Project Ini',
            'tech_stack' => ['Laravel', 'PHP 8+', 'MySQL VPS', 'Tailwind CSS'] 
        ];
        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Halaman Kontak',
            'email' => 'mahasiswa@kampus.ac.id',
            'github' => 'github.com/username-anda'
        ];
        return view('contact', $data);
    }
}