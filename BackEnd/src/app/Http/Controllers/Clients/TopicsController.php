<?php

namespace App\Http\Controllers\Clients;

use App\Models\Clients\Topics;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTopicsRequest;
use App\Http\Requests\UpdateTopicsRequest;

class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTopicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopicsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clients\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function show(Topics $topics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function edit(Topics $topics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopicsRequest  $request
     * @param  \App\Models\Clients\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopicsRequest $request, Topics $topics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topics $topics)
    {
        //
    }
}
