<?php

namespace App\Http\Controllers;

use App\CreditRequest;
use Illuminate\Http\Request;

class CreditRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uriel.coppel_credit');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credit_request =  CreditRequest::create($request->all());

        //return redirect()->route('store_credit_request');
        return view('uriel.confirm_credit', ["credit_request" => $credit_request]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CreditRequest  $creditRequest
     * @return \Illuminate\Http\Response
     */
    public function show(CreditRequest $creditRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CreditRequest  $creditRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(CreditRequest $creditRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CreditRequest  $creditRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreditRequest $creditRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CreditRequest  $creditRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreditRequest $creditRequest)
    {
        //
    }

    public function confirm($id)
    {
        $credit = CreditRequest::find($id);
    }
}
