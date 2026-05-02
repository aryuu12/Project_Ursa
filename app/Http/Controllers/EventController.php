<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
     public function index()
    {
        $events = DB::table('event')
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('admin.event', compact('events'));
    }
    
    public function publicEvent()
{
    $events = \DB::table('event')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('event', compact('events'));
}

    public function create()
    {
        return view('admin.tambahevent');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $path = null;

        // Upload foto ke public/event
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('event'), $namaFile);

            $path = 'event/' . $namaFile;
        }

        DB::table('event')->insert([
            'nama_event' => $request->nama_event,
            'tanggal' => $request->tanggal,
            'foto' => $path,
            'deskripsi' => $request->deskripsi,
            'jam' => $request->jam,
            'status' => 'aktif',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Event berhasil ditambahkan');
    }
}