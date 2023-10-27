<?php

namespace App\Http\Controllers;
use Request;
use App\Models\Chef;
use Storage;
use Str;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['chef'] = Chef::get();
        return view('backend.chef.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.chef.create');
    }
    public function uploadImage($name){
        if ($name) {
            $file = $name;
            $ext = $file->getClientOriginalExtension();
            $filesize = $file->getSize() / 1024;
            $file_path = '1/'.date('Y-m');

            Storage::makeDirectory('public/uploads/'.$file_path);

            $filename = Str::random().'.'.$ext;

            if (Storage::putFileAs('public/uploads/'.$file_path, $file, $filename)) {
                return 'uploads/'.$file_path.'/'.$filename; 
            } else {
                return 'null 1';
            }
        } else {
            return 'null 2';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = self::uploadImage(Request::file('img_chef'));
        $chef = new Chef; 
        $chef->fill(Request::all());
        $chef->img_chef = $foto;
        $chef->save();
        return redirect(config('app.admin_path').'backend/chef');
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
        $data['chef'] = Chef::find($id);
        return view('backend.chef.edit',$data);
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
        $chef = Chef::find($id);
        $chef->fill($request->all());
        $chef->update();
        return redirect('backend/chef');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chef = Chef::find($id)->delete();
        return redirect('backend/chef');
    }
}
