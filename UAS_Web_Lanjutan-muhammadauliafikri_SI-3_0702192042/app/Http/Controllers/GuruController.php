<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Guru::all();  
        return view('guru.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
        'nip_guru' => 'bail|required|unique:guru', 
        'nama_guru' => 'required' 
    ],
    [ 'nip_guru.required' => 'NIP wajib diisi', 
      'nip_guru.unique' => 'NIP sudah ada', 
     'nama_guru.required' => 'Nama wajib diisi' 
    ]);

    Guru::create([  
    'nip_guru' => $request->nip_guru, 
    'nama_guru' => $request->nama_guru,  
    'status_guru' => $request->status_guru, 
    'guru_mapel' => $request->guru_mapel 
    ]);
    return redirect('guru');
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
        $row = Guru::findOrFail($id); 
        return view('guru.edit', compact('row'));
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
        'nip_guru' => 'bail|required', 
        'nama_guru' => 'required' 
    ],
    [ 
    'nip_guru.required' => 'NIP wajib diisi',
    'nip_guru.unique' => 'NIP sudah ada', 
    'nama_guru.required' => 'Nama wajib diisi'  
    ]
);  
$row = Guru::findOrFail($id); 
$row->update([ 
'nip_guru' => $request->nip_guru, 
'nama_guru' => $request->nama_guru,  
'status_guru' => $request->status_guru, 
'guru_mapel' => $request->guru_mapel
]);
return redirect('guru');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Guru::findOrFail($id); 
        $row->delete(); 
        return redirect('guru');
    }
}
