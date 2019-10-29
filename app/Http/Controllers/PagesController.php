<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        $id = request('id');
        $cost = request('cost');
        $data = ['Web Design', 'Programing', 'SEO', 'Marketing'];
//        return 'Service with id = ' . $id . ' and cost = ' . $cost;
        return view('pages.services', [
            'idForView' => $id,
            'costForView' => $cost,
            'services' => $data
        ]);
    }
}
