@extends('layouts.app') 

 @section('content')  
 <div class="container"> 
    <h3>Tambah Data Guru</h3>  
    <form action="{{ url('/guru') }}" method="POST"> 
         @csrf  
          <div class="mb-3"> 
             <label>NIP GURU</label> 
          <input type="text" class="form-control" name="nip_guru"> </div> 
           <div class="mb-3">  
            <label>NAMA GURU</label> 
          <input type="text" class="form-control" name="nama_guru"> 
          </div>  
          <div class="mb-3">  
          <label>STATUS GURU</label> 
          <input type="text" class="form-control" name="status_guru"> 
          </div> 
          <div class="mb-3">  
            <label>GURU MATA PELAJARAN</label> 
          <textarea class="form-control" name="guru_mapel"></textarea> 
          </div>  
          <div class="mb-3"> 
            <input type="submit" value="SIMPAN">
    </div>  
</form> 
</div> 
@endsection