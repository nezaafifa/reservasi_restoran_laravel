<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class BackendController extends Controller
{
    public function backend_home()
    {
        return view('backend.index');
    }
    public function index()
    {
        $data['about'] = About::get();
        return view('backend.about.index',$data);
    }
    public function create()
    {
        return view('backend.about.create');
    }
    public function store(Request $request)
    {
        $about = new About;
        $about->fill($request->all());
        $about->save();
        return redirect('backend/about');
    }
    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->fill($request->all());
        $about->update();
        return redirect('backend/about');
    }
    public function edit($id)
    {
        $data['about'] = About::find($id);
        return view('backend.about.edit',$data);
    }
    public function destroy($id)
    {
        $about = About::find($id)->delete();
        return redirect('backend/about');
    }
}
