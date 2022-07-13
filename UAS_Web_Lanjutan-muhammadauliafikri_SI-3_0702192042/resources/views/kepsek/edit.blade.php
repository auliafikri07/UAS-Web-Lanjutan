@extends('layouts.app') 

@section('content') 
<div class="container"> 
<h3>Edit Data Kepala Sekolah</h3> 
<form action="{{ url('/kepsek/' . $row->kepsek_id) }}" method="POST"> 
@method('PATCH') 
@csrf 
<div class="mb-3"> 
<label>NIP KEPALA SEKOLAH</label> 
<input type="text" class="form-control" name="nip_kepsek" value="{{ $row->nip_kepsek }}"></> 
</div>
<div class="mb-3"> 
    <label>NAMA KEPALA SEKOLAH</label> 
    <input type="text" class="form-control" name="nama_kepsek" value="{{ $row->nama_kepsek }}"></> 
    </div>   
<div class="mb-3"> 
<label>ALAMAT KEPALA SEKOLAH</label>  
<textarea class="form-control" name="alamat_kepsek">{{ $row->alamat_kepsek}}</textarea> 
</div> 
<div class="mb-3"> 
    <label>NO HP KEPALA SEKOLAH</label> 
    <input type="text" class="form-control" name="no_hp_kepsek"value="{{ $row->no_hp_kepsek}}"></> 
</div>
<div class="mb-3"> 
<input type="submit" value="UPDATE"> 
</div> 
</form> 
</div> 
@endsection