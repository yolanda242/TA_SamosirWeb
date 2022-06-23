<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Review;
use App\Models\Contact;
use App\Models\JenisReview;
use App\Models\ObjekWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
      $objwisata = DB::table('objek_wisatas')->get();
      $event = DB::table('events')->get();
      $contact = DB::table('contact')->get();
      return view('user.home', [
        'objwisata' => ObjekWisata::all(),
        'event' => Event::all(),
        'contact' => Contact::all(),
        'jenis_review' => JenisReview::all()
      ]);
    }

    public function createReview(){
      $contact = DB::table('contact')->get();
      return view('user.review',[
        'contact' => Contact::all(),
        'jenis_review' => JenisReview::all()
      ]);
    }

    public function addReview(Request $request){
      // return $request;
      $dataReview = $request->validate([
        'nama' => 'required|max:200',
        'alamat' => 'required|max:200',
        'jenisreview_id' => 'required|max:200',
        'deskripsi' => 'required|max:200'
      ]);

      Review::create($dataReview);

      return redirect()->back()->with('success','Data berhasil di tambahkan');


      // $createreview = new Review();
      // $createreview -> nama = $request->nama;
      // $createreview -> alamat = $request->alamat;
      // $createreview -> deskripsi_review = $request->deskripsi_review;

      // $createreview->save();
      // return redirect('/review');
  }

      
  public function detailWisata( $id)
  {
    $contact = DB::table('contact')->get();
      $detailWisata = ObjekWisata::find($id);
      return view('user.detailWisata',[
        'detailWisata' => ObjekWisata::find($id),
        'contact' => Contact::all(),
        'jenis_review' => JenisReview::all()
      ]);
  }

      
  public function detailEvent(Request $request, $id)
  {   
    $contact = DB::table('contact')->get();
      $detailEvent = Event::find($id);
      return view('user.detailEvent',[
        'detailEvent' => Event::first(),
        'contact' => Contact::all(),
        'jenis_review' => JenisReview::all()
      ]);
  }
    
    // public function indexObjekWisata(){
    //   $objwisata = DB::table('objek_wisatas')->get;
    //   return view('user.home');
    // }
}
