<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Lecturer::all();
        return view('lecturers.index', compact('dosen'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('lecturers.create');
    }
    public function store(Request $request)
    {

        $request->validate([

            'nip' => 'required|max:8',
            'nama' => 'required|max:30',
            'keilmuan' => 'required|max:30',
            ]);
            // lakukan create/insert data ke tabel database
            $dosen = Lecturer::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'keilmuan' => $request->keilmuan,
            ]);
            
        // bisa juga langsung menggunakan request all untuk create data
        // $dosen = Lecturer::create($request->all());
        return redirect('/lecturers')->with('success', 'Lecturer created successfully.');
    }
    public function show(string $id)
    {
        dd('isi method show');
    }
    public function edit(string $id)
    {
        dd('isi method edit');
    }
    public function update(Request $request, string $id)
    {
        dd('isi method update');
    }
    public function destroy(string $id)
    {
        dd('isi method destroy');
    }
}
