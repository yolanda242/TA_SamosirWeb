<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('admin.admin_dashboard', ['jumlah_event' => count($event)]);
    }
}
