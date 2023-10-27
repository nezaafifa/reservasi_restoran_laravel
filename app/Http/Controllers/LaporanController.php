<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Models\Reservation;

class LaporanController extends Controller
{
    public function index()
    {
        $query = DB::table('reservation')
        ->where('name',Request::get('name'))
        ->get();

        $data['data'] = $query;
        return view('backend.laporan.index',$data);
    }
    public function cetak()
    {
        $query = DB::table('reservation')
        ->where('name',Request::get('name'))
        ->get();

        $data['data'] = $query;
        return view('backend.laporan.cetak',$data);
    }
}
