<?php

namespace App\Http\Controllers;

use App\Models\IMG;
use App\Models\MyInfo;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class MainPageController extends Controller
{
    public function SendData()
    {
        $img = new IMG;
        $MyInfo = new MyInfo;

        return view('section.body',['data2' => MyInfo::all()])
        -> with('data', IMG::all());
        
    }
    public function SendData1()
    {

        return view('CRUDS.index');
    }
    public function SendData2(Request $request) {
        //dd($request);
        $validated = $request->validate([
            'Modelname' => ['required'],
            'Description' => ['required'],
            'Directory' => ['required'],
        ]);

        MyInfo::create($validated);

        return redirect('/') ->with('message', 'Successfully Registered!');
    }
    public function Admins()
    {
        return view('Page.admin',['data2' => MyInfo::all()])
        -> with('data', IMG::all());
    }
    public function ToUpdate($id)
    {
        return view('CRUDS.update',['data2' => MyInfo::findOrFail($id)])
        -> with('data', IMG::all());
    }
    public function Updating(Request $request,$id) {
        $validated = $request->validate([
            'Modelname' => ['required'],
            'Description' => ['required'],
            'Directory' => ['required'],
        ]);
        $dataname =  MyInfo::findOrFail($id);
        $dataname->Modelname =$validated['Modelname'];
        $dataname->Description =$validated['Description'];
        $dataname->Directory =$validated['Directory'];
        $dataname->update();
        // MyInfo::create($validated);

        return redirect('admin') ->with('message', 'Successfully Update!');
    }
    public function delete($id)
    {
        $dataname =  MyInfo::findOrFail($id);
        $dataname->delete();
        return redirect('admin');
    }
}