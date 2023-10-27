<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\Reservation;

class FrontController extends Controller
{
    public function about()
    {
        $data['about'] = About::get();
        return view('about',$data);
    }
    public function menu()
    {
        $data['menu'] = Menu::get();
        return view('menu',$data);
    } 
    public function reservation()
    {
        $data['reservation'] = Reservation::get();
        return view('reservation',$data);
    }
    public function contact_us()
    {
        return view('contact_us');
    }
    public function chef()
    {
        $data['chef'] = Chef::get();
        return view('chef',$data);
    }
}
 