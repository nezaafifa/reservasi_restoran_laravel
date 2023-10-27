<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Menu;
use Storage;
use Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu'] = Menu::get();
        return view('backend.menu.index',$data);
    }
    public function uploadImage($name){

        if ($name) {
            $file = $name;
            $ext = $file->getClientOriginalExtension();
            $fillesize = $file->getSize() /1024;
            $file_path = '1/'.date('Y-m');
            Storage::makeDirectory('public/uploads/'.$file_path);

            $filename = Str::random().'.'.$ext;

            if (Storage::putFIleAs('public/uploads/'.$file_path, $file, $filename)) {
                return 'uploads/'.$file_path.'/'.$filename;
            } else {
                return 'null 1';
            }
        } else {
            return 'null 2';
        }
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = self::uploadImage(Request::file('img_menu'));
        $menu = new Menu;
        $menu->fill(Request::all());
        $menu->img_menu = $foto;
        $menu->save();
        return redirect(config('app.admin_path').'/backend/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['menu'] = Menu::find($id);
        return view('backend.menu.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->fill(Request::all());
        $menu->update();
        return redirect('backend/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id)->delete();
        return redirect('backend/menu');
    }
}