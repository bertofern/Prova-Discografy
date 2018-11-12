<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lps;
use App\Artists;

class LpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$lps=Lps::orderBy('id','DESC')->paginate(3);*/
        /*$lps=Lps::orderBy('id','DESC')->take(1)->get();*/
        /*$lps=Lps::orderBy('id','DESC')->get();*/
        /*$lps=DB::select('SELECT * FROM Lps');*/
        $lps=Lps::all();
        return view('Lps.index')->with('lps', $lps); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // For Artists
        $artist=Artists::find($id);
        //$artist=Artists::where('id', $id)->get();
        return view('Lps.create')->with('artist', $artist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            //'artist_id'=>'required',
            'name'=>'required',
            'description'=>'required'
        ]);

        // Create Artist
        $lp=new Lps;
        $lp->artist_id = $request->input('artist_id');
        $lp->name = $request->input('name');
        $lp->description = $request->input('description');
        $lp->save();

        return redirect('/Lps')->with('success','Lps Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lp=Lps::find($id);
        return view('Lps.show')->with('lp', $lp);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lp=Lps::find($id);
        return view('Lps.edit')->with('lp', $lp);
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
        $this->validate($request, [
            'name'=>'required',
            'description'=>'required'
        ]);

        // Update Artist
        $lp=Lps::find($id);
        $lp->artist_id = $request->input('artist_id');
        $lp->name = $request->input('name');
        $lp->description = $request->input('description');
        $lp->save();

        return redirect('/Lps')->with('success','Lps Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lp=Lps::find($id);
        $lp->delete();
        return redirect('/Lps')->with('success','Lps Deleted');
    }
}