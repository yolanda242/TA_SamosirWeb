<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Contact;
use App\Models\JenisReview;
use App\Models\ObjekWisata;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function index()
    {
        $event = Event::all();
        $wisata = ObjekWisata::all();
        $review = DB::table('reviews')->get();
        return view('admin.admin_dashboard', [
            'jumlah_event' => count($event), 
            'jumlah_wisata' => count($wisata),
            'review' => Review::all()]);
    }

    public function dashboard_admin()
    {
        if(!Session::get('key'))
        return redirect('/login');
        $objek = DB::table('objek_wisata')->orderBy('id_objek', 'desc')->simplepaginate(6);
        // var_dump($jurnal);
        return view('admin.dashboard_admin',['objek_wisata' => $objek]);
    }

    //Event
    public function indexEvent()
    {
        $event = Event::all();
        return view('admin.admin_event', ['event' => $event]);
    }
    public function createDataEvent()
    {
        return view('admin.createEvent');
    }
    
    public function addEvent(Request $request){
        $createdata = new Event();
        $createdata -> nama_event = $request->nama_event;
        $createdata -> deskripsi = $request->deskripsi;
        $createdata -> lokasi = $request->lokasi;

        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('DataEvent',$file);
            $createdata->gambar = $file;
        } 
        $createdata->save();
        return redirect('/admin/event');
    }

    // public function detailEvent($id){
    //     $edits = Event::find($id);
    //     return view('layouts.Admin.editPmb',compact('edits'));
    // }

    
    public function editEvent($id){
        $edits = Event::find($id);
        return view('admin.editEvent',compact('edits'));
    }

    public function updateEvent(request $request, $id){
        $update = Event::find($id);
        $update -> nama_event = $request->nama_event;
        $update -> deskripsi = $request->deskripsi;
        $update -> lokasi = $request->lokasi;
        $file = $update -> gambar;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('DataEvent',$file);
            $update -> gambar = $file;
        } 
        $update -> gambar = $file;
        $update->save();
        return redirect('/admin/event');

    }

    
    public function detailEvent(Request $request, $id)
    {
        $detail = Event::find($id);
        return view('admin.detailEvent',compact('detail'));
    }

    public function deleteEvent($id){
        $delete = Event::find($id);
        if( $delete->delete()){
            return redirect()->back();
         } 
    }

    // Objek Wisata

    public function indexWisata()
    {
       $wisata = DB::table('objek_wisatas')->get();
       return view('admin.indexWisata', ['ObjekWisata' => $wisata]);
    }
    
    public function createDataWisata()
    {
        return view('admin.createWisata');
    }
    
    public function addWisata(Request $request){
        $createdata = new ObjekWisata();
        $createdata -> nama_objek = $request->nama_objek;
        $createdata -> deskripsi = $request->deskripsi;
        $createdata -> lokasi = $request->lokasi;

        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('DataWisata',$file);
            $createdata->gambar = $file;
        } 
        $createdata->save();
        return redirect('/admin/objek');
    }

    
    public function editWisata($id){
        $edits = ObjekWisata::find($id);
        return view('admin.editWisata',compact('edits'));
    }

    public function updateWisata(request $request, $id){
    
        $update = ObjekWisata::find($id);
        $update -> nama_objek = $request->nama_objek;
        $update -> deskripsi = $request->deskripsi;
        $update -> lokasi = $request->lokasi;
        $file = $update -> gambar;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('DataWisata',$file);
            $update -> gambar = $file;
        } 
        $update -> gambar = $file;
        $update->save();
        return redirect('/admin/objek');

    }

    
    public function detailWisata(Request $request, $id)
    {   
        $detail = ObjekWisata::find($id);
        return view('admin.detailWisata',compact('detail'));
    }

    public function deleteWisata($id){
        $delete = ObjekWisata::find($id);
        if( $delete->delete()){
            return redirect()->back();
         } 
    }

    public function indexContact(){
        $contact = DB::table('contact')->get();
        return view('admin.indexContact', [
            'contact' => Contact::all()
        ]);
    }


    public function createDataContact()
    {
        return view('admin.createContact');
    }
    
    public function addContact(Request $request){
        $createcontact = new Contact();
        $createcontact -> contact = $request -> contact;
        $createcontact -> jenis_contact = $request->jenis_contact;

        $createcontact->save();
        return redirect('/contactUs');
    }

    
    public function editContact($id){
        $edits = Contact::find($id);
        return view('admin.editContact',compact('edits'));
    }

    public function updateContact(request $request, $id){
        $update = Contact::find($id);
        $update -> contact = $request -> contact;
        $update -> jenis_contact = $request -> jenis_contact;
        $update->save();
        return redirect('/contactUs');

    }

    public function deleteContact($id){
        $delete = Contact::find($id);
        if( $delete->delete()){
            return redirect()->back();
         } 
    }

    public function indexReview(){
        $review = JenisReview::all();
        return view('admin.indexJenisReview', ['review' => $review]);
        // $review = DB::table('jenis_reviews')->get();
        // return view('admin.indexJenisReview', ['JenisReview' => $review]);
    }

    public function tambahjenisreview(){
        return view('admin.indexTambahJenisReview');
    }

    public function addJenisReview(Request $request){

        $dataJenisReview = $request->validate([
            'kode_review' => 'required|max:6|unique:jenis_reviews',
            'nama_review' => 'required|max:200'
        ]);

        JenisReview::create($dataJenisReview);

        return redirect('/TambahJenisReview')->with('success','Data berhasil di tambahkan');
    }

    public function deleteReview($id){
        $delete = JenisReview::find($id);
        if($delete -> delete()){
            return redirect()->back();
        }
    }
}
