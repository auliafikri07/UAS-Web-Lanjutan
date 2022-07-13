@extends('layouts.app')  @section('content') 
<div class="container"> <h3>Daftar Siswa</h3> 

<a href="{{ url('siswa/create') }}">Tambah Data</a>
<table class="table table-bordered"> 
    <tr>  
    <td>NIS</td>  
    <td>NAMA SISWA</td> 
    <td>KELAS</td> 
    <td>ALAMAT SISWA</td>
    <td>NO HP</td>
    <td>EDIT</td>
    <td>HAPUS</td>    
    </tr> 
    @foreach($rows as $row)  
    <tr> 
        <td>{{ $row->nis }}</td>
        <td>{{ $row->nama_siswa }}</td> 
        <td>{{ $row->kelas }}</td>  
        <td>{{ $row->alamat_siswa }}</td>
        <td>{{ $row->no_hp }}</td>
    <td><a href="{{ url('siswa/' . $row->nis . '/edit') }}">Edit</a></td> 
    <td>  
        <form action="{{ url('siswa/' . $row->nis) }}" method="POST"> 
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