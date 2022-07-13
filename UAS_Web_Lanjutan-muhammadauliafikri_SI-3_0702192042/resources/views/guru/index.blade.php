@extends('layouts.app')  @section('content') 
<div class="container"> <h3>Daftar Guru</h3> 

<a href="{{ url('guru/create') }}">Tambah Data</a>
<table class="table table-bordered"> 
    <tr>  
    <td>NIP GURU</td>  
    <td>NAMA GURU</td> 
    <td>STATUS GURU</td> 
    <td>GURU MATA PELAJARAN</td>
    <td>EDIT</td>
    <td>HAPUS</td>    
    </tr> 
    @foreach($rows as $row)  
    <tr> 
        <td>{{ $row->nip_guru }}</td>
        <td>{{ $row->nama_guru }}</td> 
        <td>{{ $row->status_guru }}</td>  
        <td>{{ $row->guru_mapel }}</td>
        <td><a href="{{ url('guru/' . $row->guru_id . '/edit') }}">Edit</a></td>
</td>
<td>  
    <form action="{{ url('guru/' . $row->guru_id) }}" method="POST"> 
     @method('DELETE') 
     @csrf 
    <button>Hapus</button>
     </form> 
 </td>
    </tr> 
    @endforeach  
</table> 
</div>  
@endsection