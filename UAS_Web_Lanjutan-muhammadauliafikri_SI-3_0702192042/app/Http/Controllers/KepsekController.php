<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kepsek;
class KepsekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Kepsek::all(); 
        return view('kepsek.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kepsek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(  
            [ 
            'nip_kepsek' => 'bail|required', 
            'nama_kepsek' => 'required' 
        ],
        [ 
        'nip_kepsek.required' => 'NIP wajib diisi',
        'nip_kepsek.unique' => 'NIP sudah ada', 
        'nama_kepsek.required' => 'Nama wajib diisi'  
        ]);

   Kepsek::create([ 
         'nip_kepsek' => $request->nip_kepsek, 
         'nama_kepsek' => $request->nama_kepsek, 
         'alamat_kepsek' => $request->alamat_kepsek, 
         'no_hp_kepsek' => $request->no_hp_kepsek 
         ]);  

        return redirect('kepsek');
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
        $row = Kepsek::findOrFail($id); 
        return view('kepsek.edit', compact('row'));
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
            'nip_kepsek' => 'bail|required', 
            'nama_kepsek' => 'required' 
        ],
        [ 
        'nip_kepsek.required' => 'NIP wajib diisi',
        'nip_kepsek.unique' => 'NIP sudah ada', 
        'nama_kepsek.required' => 'Nama wajib diisi'  
        ]
    );  
    $row = Kepsek::findOrFail($id); 
    $row->update([ 
    'nip_kepsek' => $request->nip_kepsek, 
    'nama_kepsek' => $request->nama_kepsek,  
    'alamat_kepsek' => $request->alamat_kepsek, 
    'no_hp_kepsek' => $request->no_hp_kepsek
    ]);
    return redirect('kepsek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Kepsek::findOrFail($id); 
        $row->delete();  
        return redirect('kepsek');
    }
}
