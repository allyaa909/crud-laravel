<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
   public function index (){
    //    $gurus = DB::table('guru_')->get();
        $gurus = guru::all();
       return view('backend.dataguru', ['guru' => $gurus]);
   }
   public function public(){
    //    $gurus = DB::table('guru_')->get();
        $gurus = guru::all();
       return view('backend.guru', ['guru' => $gurus]);
   }
   //public function edit(guru_ $guru){
       //return response()->json($guru);
   //}
    
    public function tambah(){
 return view('backend.guru_tambah');
}
public function simpan(Request $request)
{


    $this->validate($request,[
        'nip' => 'required:unique:guru',
        'nama' => 'required',
        
    ]);

    // $image = array();
    // if($request->hasfile('image'))
    // {

    //    foreach($request->file('image') as $image)
    //    {
    //        $name=$image->getClientOriginalName();
    //        $image->move(public_path().'/storage/post-images/', $name);  
    //        $image[] = $name;  
    //    }
    // }

    // $form= new guru();
    // $form->image=json_encode($image);
    // $form->save();

    $input=$request->all();
    $imgData = array();
    if($request->hasfile('image')) {
        foreach($request->file('image') as $file)
        {
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/storage/post-images/', $name);  
            $imgData[] = $name;  
        }

        // $fileModal = new guru();
        // // $fileModal->name = json_encode($imgData);
        // $fileModal->image= json_encode($imgData);

        // $fileModal->save();
    }

    guru::insert([
        'nip' => $input['nip'],
        'nama' => $input['nama'],
        'gelar' => $input['gelar'],
        'mapel' => $input['mapel'],
        'image' => implode("|" ,$imgData)
        
    ]);

   
    

    
    return redirect('/guru');
}
public function edits(guru $guru)
 {
    //  $guru = guru::find($id);
     return view('backend.guru_edit', ['guru' => $guru]);
 }
 public function update($id, Request $request)
{
    $this->validate($request, [
        'nip' => 'required:unique:guru',
        'nama' => 'required',
        'gelar' => 'required',
        'mapel' => 'required',
    ]);
        
    
    
    // (guru $guru, Request $request)
    // $guru->update([
    //     'nip'   => $request->nip,
    //     'nama'  => $request->nama
    // ]);

    $guru = guru::find($id);
    $guru->nip = $request->nip;
    $guru->nama = $request->nama;
    $guru->gelar = $request->gelar;
    $guru->mapel = $request->mapel;
    $guru->save();
    
    return redirect('/guru');
}
public function delete($id)
{
    $guru = guru::find($id);
    $guru->delete();
    return redirect('/guru');
}
public function tampil($id){
    $guru = guru::find($id);
    return view('detail', [
        "guru" => $guru 
    ]);
}

}