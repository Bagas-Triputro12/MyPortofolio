<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'Website Toko Online',
                'description' => 'Aplikasi e-commerce dengan Laravel dan Bootstrap.',
                'image' => 'https://via.placeholder.com/600x400',
                'link' => '#'
            ],
            [
                'title' => 'Manajemen Proyek',
                'description' => 'Sistem untuk mengelola proyek dan tugas.',
                'image' => 'https://via.placeholder.com/600x400',
                'link' => '#'
            ],
            [
                'title' => 'Aplikasi Booking Hotel',
                'description' => 'Platform reservasi hotel berbasis web.',
                'image' => 'https://via.placeholder.com/600x400',
                'link' => '#'
            ],
        ];

        return view('portfolio.index', compact('projects'));
    }
}

