<?php

namespace App\Http\Controllers;

use App\Models\jualan;
use Illuminate\Http\Request;

class JualanController extends Controller
{
    public function index()
    {
        $jualans = jualan::all();
        return view('index', compact('jualans'));
    }
    public function form()
    {
       return view('form');
    }
    public function create(Request $request)
    {
      $jualans = jualan::create([
        'nama'=>$request->input('nama'),
        'tipe'=>$request->input('tipe')
    ]);
    return redirect('index');
    }
   public function edit($id)
   {
    $jualans = jualan::find($id);
    return view('update.edit', compact(['jualans']));
   }
   public function update($id, Request $request)
   {
    $jualans = jualan::find($id);
    $jualans->update($request->all());
    return redirect('index');
   }
   public function destroy($id)
   {
    $jualans = jualan::find($id);
    $jualans->delete();
    return redirect('index');
   }
}
