<?php

namespace App\Http\Controllers;
use App\Models\desti;
use Illuminate\Http\Request;
class destii extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=desti::all();
        return view('isian.tampildata')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.uas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'Nama'=> 'required',
            'Email'=> 'required',
            'Nomortelepon'=> 'required|numeric',
            'Seat'=> 'required',
            'Jumlahtiket'=> 'required',

        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'Email'=> $request->input('Email'),
            'Nomortelepon'=> $request->input('Nomortelepon'),
            'Seat'=> $request->input('Seat'),
            'Jumlahtiket'=> $request->input('Jumlahtiket'),
        ];
        desti::create($data);
        return redirect('/desti');
    }

    /**
     * Display the specified resource.
     */
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = desti::where('Nama',$id)->first();
        return view('isian.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'Nama'=> 'required',
            'Email'=> 'required',
            'Nomortelepon'=> 'required|numeric',
            'Seat'=> 'required',
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'Email'=> $request->input('Email'),
            'Nomortelepon'=> $request->input('Nomortelepon'),
            'Seat'=> $request->input('Seat'),
        ];
        desti::where('Nama', $id)->update($data);
        return redirect('/desti')->with('succes','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        desti::where('Nama', $id)->delete();
        return redirect('/desti')->with('success','Data berhasil dihapus');
    }
}
