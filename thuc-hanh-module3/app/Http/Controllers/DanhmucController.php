<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmucs = Danhmuc::get();
        $param =[
          'danhmucs'=> $danhmucs
        ];
        return view('user.index', $param );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'danhmuc' => 'required',
            'ngay' => 'required',
            'sotien' => 'required',
            'ghichu' => 'required',
        ],
            [
                'danhmuc.required'=>'Không được để trống',
                'ngay.required'=>'Không được để trống',
                'sotien.required'=>'Không được để trống',
                'ghichu.required'=>'Không được để trống',
            ]);
        $danhmucs = new Danhmuc();
        $danhmucs->danhmuc = $request->danhmuc;
        $danhmucs->ngay = $request->ngay;
        $danhmucs->sotien = $request->sotien;
        $danhmucs->ghichu = $request->ghichu;
        $danhmucs->save($request->all());
        // return redirect('home');
        return redirect()->route('danhmuc.index');
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
        $danhmucs = Danhmuc::find($id);
        return view('user.edit', compact(['danhmucs']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $danhmucs = Danhmuc::find($id);
        $danhmucs->danhmuc = $request->danhmuc;
        $danhmucs->ngay = $request->ngay;
        $danhmucs->sotien = $request->sotien;
        $danhmucs->ghichu = $request->ghichu;
        $danhmucs->save();

        // return redirect('home');
        return redirect()->route('danhmuc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Danhmuc::find($id)->delete();
        return redirect()->route('danhmuc.index');

    }
}
