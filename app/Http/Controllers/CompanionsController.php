<?php

namespace App\Http\Controllers;

use App\Companions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Companions::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return Companions::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        return Companions::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param  Request $request
     * @return Response
     */
    public function update($id, Request $request)
    {
        $triage = $this->show($id);
        $triage->fill($request->all())->save();
        return $triage;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $triage = $this->show($id);
        $triage->delete();
        return $triage;
    }
}
