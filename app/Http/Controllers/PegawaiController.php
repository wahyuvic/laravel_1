<?php

namespace App\Http\Controllers;
use App\Http\Requests\pegawairequest;
use App\Models\pegawai;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //
        $keyword=$request->keyword;
        $datas= pegawai::where('nama','LIKE','%'.$keyword.'%')
        ->orwhere('gelar','LIKE','%'.$keyword.'%')
        ->orwhere('nip','LIKE','%'.$keyword.'%')
        ->paginate(5);
       $datas->withPath('pegawai');
       $datas->appends($request->all());
        return view('pegawai.index',compact(
            'datas','keyword'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model= new pegawai;
        return view('pegawai.create',compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(pegawairequest $request)
    {
     $model= new pegawai;
     $model->nama=$request->nama;
     $model->tanggal_lahir=$request->tanggal_lahir;
     $model->gelar=$request->gelar;
     $model->nip=$request->nip;
     if($request->file('foto_profile')){
        $file= $request->file('foto_profile');
        $nama_file=time().str_replace(" ","",$file->getClientOriginalName());
        $file->move('foto',$nama_file);
        $model->foto_profile=$nama_file;
     }
     $model->save();

     return redirect('pegawai')->with('success',"data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $model= pegawai::find($id);
        return view('pegawai.edit',compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(pegawairequest $request, $id)
    {
        $model= pegawai::find($id);
        $model->nama=$request->nama;
        $model->tanggal_lahir=$request->tanggal_lahir;
        $model->gelar=$request->gelar;
        $model->nip=$request->nip;
        if($request->file('foto_profile')){
            $file= $request->file('foto_profile');
            $nama_file=time().str_replace(" ","",$file->getClientOriginalName());
            $file->move('foto',$nama_file);
            file::delete('foto',$model->foto_profile);
            $model->foto_profile=$nama_file;
         }
        $model->save();
        return redirect('pegawai')->with('success',"data berhasil di perbaharui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model= pegawai::find($id);
        $model->delete();
        return redirect('pegawai');
    }
}
