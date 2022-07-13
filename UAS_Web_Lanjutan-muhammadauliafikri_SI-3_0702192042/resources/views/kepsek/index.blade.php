@extends('layouts.app')  
@section('content') 
<div class="container"> 
<h3>Daftar Kepala Sekolah
</h3> 
<a href="{{ url('kepsek/create') }}">Tambah Data</a>
<table class="table table-bordered"> 
    <tr>  
    <td>NIP KEPSEK</td>  
    <td>NAMA KEPSEK</td> 
    <td>ALAMAT KEPSEK</td> 
    <td>NO HP KEPSEK</td>
    <td>EDIT</td>
    <td>HAPUS</td>
        
    </tr> 
    @foreach($rows as $row)  
    <tr> 
        <td>{{ $row->nip_kepsek }}</td>
        <td>{{ $row->nama_kepsek }}</td> 
        <td>{{ $row->alamat_kepsek }}</td>  
        <td>{{ $row->no_hp_kepsek }}</td>
        <td><a href="{{ url('kepsek/' . $row->kepsek_id . '/edit') }}">Edit</a></td>
        <td>  
        <form action="{{ url('kepsek/' . $row->kepsek_id) }}" method="POST"> 
         @method('DELETE') 
         @csrf 
         <button>Hapus</button>  
    </form>  
</td>
    </td>
    </tr> 
    @endforeach  
</table> 
</div>  
@endsection