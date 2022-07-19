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
      $objwisata = DB::table('objek_wisatas')->limit(3)->get();
      $event = DB::table('events')->limit(3)->get();
      $contact = DB::table('contact')->get();
      $review = Review::leftjoin('jenis_reviews','reviews.jenisreview_id','=','jenis_reviews.id')->paginate(1);
      return view('user.home', [
        'objwisata' => $objwisata,
        'event' => $event,
        'contact' => Contact::all(),
        'jenis_review' => JenisReview::all(),
        'review' => $review
      ]);
    }

    public function indexObjek(){
      $objek_wis = ObjekWisata::all();
      if(request('search')){
        $objek_wis= ObjekWisata::where('nama_objek','like', '%'.request('search').'%')->
        orwhere('lokasi','like', '%'.request('search').'%')->
        orwhere('deskripsi', 'like', '%'.request('search').'%')->get();
      }

      $objek = DB::table('objek_wisatas')->get();
        return view('user.objekWisata', [
          'objek' => $objek_wis,
          'contact' => Contact::all()
        ]);
    }

    public function indexEvent(){
      $event = Event::all();
      if(request('search')){
        $event = Event::where('nama_event', 'like', '%'.request('search').'%')->
        orwhere('deskripsi', 'like', '%'.request('search').'%')->
        orwhere('lokasi', 'like', '%'.request('search').'%')->get();
      }
      $even = DB::table('events')->get();
        return view('user.Event', [
          'even' => $event,
          'contact' => Contact::all()
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
  }

      
  public function detailWisata( $id)
  {
    $contact = DB::table('contact')->get();
      $detailWisata = ObjekWisata::find($id);
      return view('user.detailWisata',[
        'detailWisata' => ObjekWisata::find($id),
        'contact' => Contact::all(),
        'jenis_review' => JenisReview::all(),
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
