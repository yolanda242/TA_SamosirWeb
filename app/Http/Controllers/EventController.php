<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function __constructor()
    {
        parent::__constructor();
        date_default_timezone_set("Asia/Bangkok");
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function store(Request $request)
    {
        $validateData = $this->validate(
            $request,
            [
                'nama_event' => 'required',
                'deskripsi' => 'required',
                'waktu' => 'required',
                'gambar' => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'nama_event.required' => 'Wajib Memasukkan nama lengkap.',
                'deskripsi.required' => 'Pilih salah satu deskripsi.',
                'waktu.required' => 'Wajib Memasukkan tempat lahir.',
                'gambar.required' => 'Wajib upload gambar.',
                'gambar.mimes' => 'File harus berupa .jpg, .jpeg atau .png.'
            ]
        );

        $validateData['waktu'] = date_format(date_create($validateData['waktu']), 'Y-m-d H:i:s');

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('gambar');
        }

        if (EventModel::create($validateData)) {
            echo "Success";
        } else {
            echo "Failed";
        }
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
    public function edit(Request $request)
    {
        $event = EventModel::where('id_event', $request->input('id_event'))->first();
        $event->waktu = date_format(date_create($event->waktu), 'm/d/Y H:i A');
        echo json_encode($event);
    }

    public function update(Request $request, $id)
    {
        $validateData = $this->validate(
            $request,
            [
                'nama_event' => 'required',
                'deskripsi_edit' => 'required',
                'waktu_edit' => 'required',
                'gambar_edit' => 'mimes:jpg,jpeg,png'
            ],
            [
                'nama_event.required' => 'Wajib Memasukkan nama lengkap.',
                'deskripsi_edit.required' => 'Pilih salah satu deskripsi.',
                'waktu_edit.required' => 'Wajib Memasukkan tempat lahir.',
                'gambar_edit.mimes' => 'File harus berupa .jpg, .jpeg atau .png.'
            ]
        );

        $validateData['waktu_edit'] = date_format(date_create($validateData['waktu_edit']), 'Y-m-d H:i:s');

        $data = array(
            'nama_event' => $validateData['nama_event_edit'],
            'deskripsi' => $validateData['deskripsi_edit'],
            'waktu' => $validateData['waktu_edit'],
        );

        if ($request->file('gambar_edit')) {
            $validateData['gambar_edit'] = $request->file('gambar_edit')->store('gambar');
            $data['gambar'] = $validateData['gambar_edit'];
        }

        if (EventModel::where('id_event', $id)->update($data)) {
            echo "success";
        } else {
            echo "failed";
        }
    }


    public function destroy(Request $request)
    {
        $event = EventModel::where('id_event', $request->input('id_event'))->delete();
        if ($event) {
            echo "success";
        } else {
            echo "failed";
        }
    }
}
