<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Auth;

use App\Models\ObjekWisata;

class wisataController extends Controller
{
    public function index(){
        $model_ObjekWisata = ObjekWisata::paginate();

        return view('wisata.index')->with([
            'model_ObjekWisata' =>$model_ObjekWisata,
        ]);
    }

    public function tambahData(){
        return view('wisata.tambahdata');
    }



    public function add(Request $request){
        $model_ObjekWisata = new ObjekWisata();
        $user = Auth::user();

        $model_ObjekWisata->nama_objek=$request->nama_objek;
        $model_ObjekWisata->deskripsi=$request->deksripisi;
        $model_ObjekWisata->lokasi=$request->lokasi;

        if ($model_ObjekWisata->save()){
            Session::flash('success','Data berhasil disimpan');
        
        }else{
            Session::flash('danger','Data gagal disimpan');
        }
        return redirect()->back();
    }

    // public function edit($id_objek)
    // {
    //     $model_ObjekWisata = ObjekWisata::where('id',id_objek)->first();
    //     return View('backend') 
    //     $model_ObjekWisata;
    // }

   public function update(Request $request)
   {
        ObjekWisata::where('id',$request->id_objek)->update([
            'nama_objek'=>$request->nama_objek,
            'deskripsi'=>$request->deskripsi,
            'lokasi'=>$request->lokasi,
        ]);
        return redirect('ObjekWisata');
    }
    
    public function delete($id_objek)
    {
        ObjekWisata::where('id',$id_objek)->delete();
        return redirect('index');
    }

}




