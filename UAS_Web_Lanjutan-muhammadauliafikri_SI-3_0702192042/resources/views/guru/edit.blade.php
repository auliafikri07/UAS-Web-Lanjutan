@extends('layouts.app') 

@section('content') 
<div class="container"> 
<h3>Edit Data Siswa</h3> 
<form action="{{ url('/guru/' . $row->guru_id) }}" method="POST"> 
@method('PATCH') 
@csrf 
<div class="mb-3"> 
<label>NIP GURU</label> 
<input type="text" class="form-control" name="nip_guru" value="{{ $row->nip_guru }}"></> 
</div>
<div class="mb-3"> 
    <label>NAMA GURU</label> 
    <input type="text" class="form-control" name="nama_guru" value="{{ $row->nama_guru }}"></> 
    </div> 
    <div class="mb-3"> 
    <label>STATUS GURU</label> 
    <input type="text" class="form-control" name="status_guru"value="{{ $row->status_guru}}"></> 
</div>
<div class="mb-3"> 
<label>GURU MATA PELAJARAN</label>  
<textarea class="form-control" name="guru_mapel">{{ $row->guru_mapel }}</textarea> 
</div> 
<div class="mb-3"> 
<input type="submit" value="UPDATE"> 
</div> 
</form> 
</div> 
@endsection