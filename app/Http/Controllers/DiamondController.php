<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diamond;

class DiamondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diamonds = Diamond::all();
        return view('diamond', ['diamonds' => $diamonds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-diamond');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diamond = new Diamond();
        $diamond->carat = $request->input('carat');
        $diamond->cut = $request->input('cut');
        $diamond->color = $request->input('color');
        $diamond->clarity = $request->input('clarity');
        $diamond->save();
        return redirect()->route('diamond.index');
    }
}