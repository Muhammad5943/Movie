<?php

namespace App\Http\Controllers\API;

use App\Genre;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Year;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allmovie()
    {
        $movie = Movie::with('years')->get();

        return apiReturn($movie,"Berhasilkan menampilkan movie");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year = Year::with(['movies.years'=>function($query){
            $query->where('year','!=',null);
        }],['movies.genres:genre'=>function($query1){
            $query1->where('genre','!=',null);
        }],'movies.qualities:quality')->get();

        // $year = Year::with('movies.genres','movies.qualities')->get();

        return apiReturn($year,"Berhasilkan menampilkan detail movie");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
