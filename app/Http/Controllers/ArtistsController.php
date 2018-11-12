<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artists;
use App\Lps;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$artists=Artists::orderBy('id','DESC')->paginate(3);*/
        /*$artists=Artists::orderBy('id','DESC')->take(1)->get();*/
        /*$artists=Artists::orderBy('id','DESC')->get();*/
        /*$artists=DB::select('SELECT * FROM Artists');*/
        $artists=Artists::all();
        return view('Artists.index')->with('artists', $artists); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Artists.create');
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
            'name'=>'required',
            'description'=>'required'
        ]);

        // Create Artist
        $artist=new Artists;
        $artist->name = $request->input('name');
        $artist->description = $request->input('description');
        $artist->save();

        return redirect('/Artists')->with('success','Artists Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist=Artists::find($id);
        $lps=Lps::where('artist_id', $artist->id)->get();
        return view('Artists.show')->with(['artist' => $artist, 'lps' => $lps]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist=Artists::find($id);
        return view('Artists.edit')->with('artist', $artist);
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
        $artist=Artists::find($id);
        $artist->name = $request->input('name');
        $artist->description = $request->input('description');
        $artist->save();

        return redirect('/Artists')->with('success','Artists Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist=Artists::find($id);
        $artist->delete();
        return redirect('/Artists')->with('success','Artists Deleted');
    }
}
