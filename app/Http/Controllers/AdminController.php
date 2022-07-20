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
use PhpParser\Node\Expr\AssignOp\Concat;

class AdminController extends Controller
{

    public function index()
    {
        $event = Event::all();
        $wisata = ObjekWisata::all();
        // $review = DB::table('reviews')->leftjoin('jenis_reviews','reviews.jenisreview_id','=','jenis_reviews.id')->get();
        $review = Review::leftjoin('jenis_reviews','reviews.jenisreview_id','=','jenis_reviews.id')->get();
        // return
        return view('admin.admin_dashboard', [
            'jumlah_event' => count($event), 
            'jumlah_wisata' => count($wisata),
            'review' => $review]);
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
            $createdata = $request->validate([
                'nama_objek' => 'required',
                'gambar' => 'required|image|file',
                'deskripsi' => 'required',
                'lokasi' => 'required'
            ]);
    
            if ($request->hasFile('gambar')){
                $file= $request->file('gambar')->getClientOriginalName();
                $request->file('gambar')->move('DataWisata',$file);
                $createdata['gambar'] = $file;
            } 
    
            // $createdata->save();
            ObjekWisata::create($createdata);
            return redirect('/admin/objek')->with('success-create', 'Berhasil menambahkan data');
        }
    
        
        public function editWisata($id){
            $edits = ObjekWisata::find($id);
            return view('admin.editWisata',compact('edits'));
        }
    
        public function updateWisata(request $request, $id){
        
            $objekWisata = ObjekWisata::find($id);
            $rules = [
                'nama_objek' => 'required',
                'deskripsi' => 'required',
                'lokasi' => 'required',
                'gambar' => 'image|file'
            ];

            $validatedData = $request->validate($rules);

            // $update = ObjekWisata::find($id);
            if ($request->hasFile('gambar')){
                $file= $request->file('gambar')->getClientOriginalName();
                $request->file('gambar')->move('DataWisata',$file);
                $validatedData['gambar'] = $file;
            } 
            // $validatedData['gambar'] = $file;
            ObjekWisata::where('id',$objekWisata->id)->update($validatedData);
            // $update->save();
            return redirect('/admin/objek')->with('success-update', 'Data berhasil di update');
    
        }
    
        
        public function detailWisata(Request $request, $id)
        {   
            $detail = ObjekWisata::find($id);
            return view('admin.detailWisata',compact('detail'));
        }
    
        public function deleteWisata($id){
            $delete = ObjekWisata::find($id);
            if( $delete->delete()){
                return redirect()->back()->with('success-delete', 'Data berhasil di hapus');
             } 
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

            $createdata = $request->validate([
                'nama_event' => 'required',
                'gambar' => 'required|image|file',
                'deskripsi' => 'required',
                'lokasi' => 'required'
            ]);

            if ($request->hasFile('gambar')){
                $file= $request->file('gambar')->getClientOriginalName();
                $request->file('gambar')->move('DataEvent',$file);
                $createdata['gambar'] = $file;
            } 
            // $createdata->save();
            Event::create($createdata);
            return redirect('/admin/event')->with('success-create', 'Berhasil menambahkan data');
        }
    
        public function editEvent($id){
            $edits = Event::find($id);
            return view('admin.editEvent',compact('edits'));
        }

        public function updateEvent(request $request, $id){

            $event = Event::find($id);
            $rules = [
                'nama_event' => 'required',
                'deskripsi' => 'required',
                'lokasi' => 'required',
                'gambar' => 'image|file'
            ];

            $validatedData = $request->validate($rules);

            // $update = ObjekWisata::find($id);
            if ($request->hasFile('gambar')){
                $file= $request->file('gambar')->getClientOriginalName();
                $request->file('gambar')->move('DataEvent',$file);
                $validatedData['gambar'] = $file;
            } 
            // $validatedData['gambar'] = $file;
            Event::where('id',$event->id)->update($validatedData);
            // $update->save();
            return redirect('/admin/event')->with('success-update', 'Data berhasil di update');
           
        }

        
        public function detailEvent(Request $request, $id)
        {
            $detail = Event::find($id);
            return view('admin.detailEvent',compact('detail'));
        }

        public function deleteEvent($id){
            $delete = Event::find($id);
            if( $delete->delete()){
                return redirect()->back()->with('success-delete', 'Data berhasil di hapus');
            } 
        }

        //Contact
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

            $createdata = $request->validate([
                'contact' => 'required',
                'jenis_contact' => 'required',
            ]);
            // $createdata->save();
            Contact::create($createdata);
            return redirect('/contactUs')->with('success-create', 'Berhasil menambahkan data');
        }

        
        public function editContact($id){
            $edits = Contact::find($id);
            return view('admin.editContact',compact('edits'));
        }

        public function updateContact(request $request, $id){
            $contact = Contact::find($id);
            $rules = [
                'contact' => 'required',
                'jenis_contact' => 'required',
            ];

            $validatedData = $request->validate($rules);

            // $validatedData['gambar'] = $file;
            Contact::where('id',$contact->id)->update($validatedData);
            // $update->save();
            return redirect('/contactUs')->with('success-update', 'Data berhasil di update');
        }

        public function deleteContact($id){
            $delete = Contact::find($id);
            if( $delete->delete()){
                return redirect()->back()->with('success-delete', 'Data berhasil di hapus');
            } 
        }

        //Review
        public function indexReview(){
            $review = JenisReview::all();
            return view('admin.indexJenisReview', ['review' => $review]);
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

            return redirect('/TambahJenisReview')->with('success-create', 'Berhasil menambahkan data');
        }

        public function deleteReview($id){
            $delete = JenisReview::find($id);
            if($delete -> delete()){
                return redirect()->back()->with('success-delete', 'Data berhasil di hapus');
            }
        }

        public function deleteReviewAdmin($id){
            $delete = Review::find($id);
            if($delete -> delete()){
                return redirect()->back()->with('success-delete', 'Data berhasil di hapus');
            }
        }
}
