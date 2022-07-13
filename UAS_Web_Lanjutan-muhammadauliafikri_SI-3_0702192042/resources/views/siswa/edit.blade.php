@extends('layouts.app') 

@section('content') 
<div class="container"> 
<h3>Edit Data Siswa</h3> 
<form action="{{ url('/siswa/' . $row->nis) }}" method="POST"> 
@method('PATCH') 
@csrf 
<div class="mb-3"> 
<label>NIS</label> 
<input type="text" class="form-control" name="nis" value="{{ $row->nis }}"></> 
</div>
<div class="mb-3"> 
    <label>NAMA SISWA</label> 
    <input type="text" class="form-control" name="nama_siswa" value="{{ $row->nama_siswa }}"></> 
    </div> 
    <div class="mb-3"> 
    <label>KELAS</label> 
    <input type="text" class="form-control" name="kelas"value="{{ $row->kelas}}"></> 
</div>
<div class="mb-3"> 
<label>ALAMAT SISWA</label>  
<textarea class="form-control" name="alamat_siswa">{{ $row->alamat_siswa }}</textarea> 
</div> 
<div class="mb-3"> 
    <label>NO HP</label> 
    <input type="text" class="form-control" name="no_hp"value="{{ $row->no_hp}}"></> 
</div>
<div class="mb-3"> 
<input type="submit" value="UPDATE"> 
</div> 
</form> 
</div> 
@endsection