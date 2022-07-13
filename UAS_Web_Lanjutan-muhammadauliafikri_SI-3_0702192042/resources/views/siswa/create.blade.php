@extends('layouts.app') 

 @section('content')  
 <div class="container"> 
    <h3>Tambah Data Siswa</h3>  
    <form action="{{ url('/siswa') }}" method="POST"> 
         @csrf  
          <div class="mb-3"> 
             <label>NIS</label> 
          <input type="text" class="form-control" name="nis"> </div> 
           <div class="mb-3">  
            <label>NAMA SISWA</label> 
          <input type="text" class="form-control" name="nama_siswa"> 
          </div>  
          <div class="mb-3">  
          <label>KELAS</label> 
          <input type="text" class="form-control" name="kelas"> 
          </div> 
          <div class="mb-3">  
            <label>ALAMAT SISWA</label> 
          <textarea class="form-control" name="alamat_siswa"></textarea> 
          </div>  
          <div class="mb-3">  
          <label>NO HP</label> 
          <input type="text" class="form-control" name="no_hp"> 
          </div> 
          <div class="mb-3"> 
            <input type="submit" value="SIMPAN">
    </div>  
</form> 
</div> 
@endsection