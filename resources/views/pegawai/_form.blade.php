<div class="row clearfix">
<div class="col-md-6">    
Nama Lengkap</div><div class="col-md-6"><input  class="form-control" type="text" name="nama" value="{{$model->nama}}"></br>
@foreach($errors->get('nama') as $msg)
<p class="text-danger">{{$msg}}</p>

@endforeach
</div>
</div>
<div class="row clearfix">
<div class="col-md-6">    
    Tanggal lahir : </div><div class="col-md-6">
        
    <input class="form-control" type="text" name="tanggal_lahir" value="{{$model->tanggal_lahir}}"></br>
    @foreach($errors->get('tanggal_lahir') as $msg)
    <p class="text-danger">{{$msg}}</p>
    @endforeach
    
</div>
</div>
<div class="row clearfix">
<div class="col-md-6">    
        Gelar : </div><div class="col-md-6">
            <input class="form-control" type="text" name="gelar" value="{{$model->gelar}}"></br>
            @foreach($errors->get('gelar') as $msg)
    <p class="text-danger">{{$msg}}</p>
    @endforeach
    
        </div>
</div>
<div class="row clearfix">
<div class="col-md-6">    
            Nip : </div><div class="col-md-6"> <input class="form-control" type="text" name="nip" value="{{$model->nip}}"></br>
            @foreach($errors->get('nip') as $msg)
            <p class="text-danger">{{$msg}}</p>
            @endforeach
        
        </div>
</div>
<div class="row clearfix">
<div class="col-md-6">    
            foto </div><div class="col-md-6"> <input class="form-control" type="file" name="foto_profile" value="{{$model->nip}}"></br>
            @foreach($errors->get('foto_profile') as $msg)
            <p class="text-danger">{{$msg}}</p>
            @endforeach
            @if(strlen($model->foto_profile)>0)
            <img src="{{asset('foto/'.$model->foto_profile)}}" width="100">
            @endif
        
        </div>
</div>
            <button type="submit" class="btn btn-info">Simpan</button>