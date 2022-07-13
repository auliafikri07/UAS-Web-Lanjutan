<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Siswa::all(); 
        return view('siswa.index', compact('rows')); 
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 
        'nis' => 'bail|required|unique:siswa',  
        'nama_siswa' => 'required'  
    ], 

    [   
    'nis.required' => 'NIS wajib diisi',
    'nis.unique' => 'NIS sudah ada', 
    'nama_siswa.required' => 'Nama wajib diisi'  
    ]); 
     
     Siswa::create([ 
         'nis' => $request->nis, 
         'nama_siswa' => $request->nama_siswa, 
         'kelas' => $request->kelas, 
         'alamat_siswa' => $request->alamat_siswa,
         'no_hp' => $request->no_hp 
         ]);  

        return redirect('siswa');
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
    public function edit($id)
    {
        $row = Siswa::findOrFail($id); 
        return view('siswa.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
        [  
        'nis' => 'bail|required',  
        'nama_siswa' => 'required'  
    ],
    [ 
    'nis.required' => 'NIS wajib diisi', 
    'nama_siswa.required' => 'Nama wajib diisi' 
    ]  
    );
    $row = Siswa::findOrFail($id); $row->update(
    [ 
    'nis' => $request->nis,  
    'nama_siswa' => $request->nama_siswa, 
    'kelas' => $request->kelas,  
    'alamat_siswa' => $request->alamat_siswa,
    'no_hp' => $request->no_hp  
    ]
    ); 
    return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Siswa::findOrFail($id); 
        $row->delete();  
        return redirect('siswa');
    }
}
