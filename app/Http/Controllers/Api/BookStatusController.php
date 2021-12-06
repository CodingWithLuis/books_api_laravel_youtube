<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookStatusResource;
use App\Models\BookStatus;
use Illuminate\Http\Request;

class BookStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookStatusResource::collection(BookStatus::all());
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
     * @param  \App\Models\BookStatus  $bookStatus
     * @return \Illuminate\Http\Response
     */
    public function show(BookStatus $bookStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookStatus  $bookStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookStatus $bookStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookStatus  $bookStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookStatus $bookStatus)
    {
        //
    }
}
