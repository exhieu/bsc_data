<?php

namespace App\Http\Controllers;

use App\Models\CanDoiKeToan;
use Illuminate\Http\Request;

class CanDoiKeToanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CanDoiKeToan::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Ticker' => 'required',
            'Year' => 'required',
            'Quarter' => 'required',
            'A1' => 'required',
            'A2'=>'required'
        ]);

        return CanDoiKeToan::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CanDoiKeToan::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cdkt = CanDoiKeToan::find($id);
        $cdkt ->update($request->all());
        return $cdkt;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return CanDoiKeToan::destroy($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function search($Ticker)
    {
        return CanDoiKeToan::where('Ticker','like','%'.$Ticker.'%')->get();
    }
}
