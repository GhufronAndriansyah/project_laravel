<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kotaku;

class kota extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Kotaku::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $data = new Kotaku();    
        $data->code = $request->code;
        $data->description = $request->description;
        $data->save();
        return "Data Berhasil Masuk";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'code'=>'required',
    //         'des'=>'required',
    //     ]);

    //     $data = new Kotaku();
    //     $data->code = $request->code;
    //     $data->description = $request->des;
    //     $data->save();

    //     return redirect()->route('kato.index')->with('alert_message', 'Berhasil menambahkan data!');
    // }


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
        $data = Kotaku::where('id', $id)->get();
        return view('KOTA_edit',compact('data'));
    }
    public function update(request $request, $id)
    {
        // $this->validate($request, [
        //     'code'=>'required',
        //     'des'=>'required',
        // ]);
        $nama = $request->nama;
        $alamat = $request->alamat;

        $data = Kotaku::find($id);
        $data->code = $request->code;
        $data->description = $request->description;
        $data->save();
        return "Data Berhasil di Update";

        // return redirect()->route('kato.index')->with('alert_message', 'Berhasil mengubah data!');

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kotaku::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kato.index')->with('alert_message', 'Berhasil menghapus data!');
    }
    public function delete($id)
    {
        $data = Kotaku::find($id);
        $data->delete();

        return "Data Berhasil di Hapus";

    }
}
