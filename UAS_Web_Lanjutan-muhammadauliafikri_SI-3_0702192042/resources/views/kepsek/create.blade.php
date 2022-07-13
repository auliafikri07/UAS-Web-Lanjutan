@extends('layouts.app') 

 @section('content')  
 <div class="container"> 
    <h3>Tambah Data Kepala Sekolah</h3>  
    <form action="{{ url('/kepsek') }}" method="POST"> 
         @csrf  
          <div class="mb-3"> 
             <label>NIP KEPALA SEKOLAH</label> 
          <input type="text" class="form-control" name="nip_kepsek"> </div> 
           <div class="mb-3">  
            <label>NAMA KEPALA SEKOLAH</label> 
          <input type="text" class="form-control" name="nama_kepsek"> 
          </div>  
          <div class="mb-3">  
            <label>ALAMAT KEPALA SEKOLAH</label> 
          <textarea class="form-control" name="alamat_kepsek"></textarea> 
          </div>
          <div class="mb-3">  
          <label>NO HP KEPALA SEKOLAH</label> 
          <input type="text" class="form-control" name="no_hp_kepsek"> 
          </div>   
          <div class="mb-3"> 
            <input type="submit" value="SIMPAN">
    </div>  
</form> 
</div> 
@endsection