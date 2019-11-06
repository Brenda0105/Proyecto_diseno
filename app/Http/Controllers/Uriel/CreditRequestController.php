<?php

namespace App\Http\Controllers\Uriel;

use App\CreditRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CreditRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uriel.fcoppel_credit');
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
        //return view('uriel.confirm_credit', ["credit_request" => $credit_request]);
        return view('uriel.fconfirm', ["data" => $credit_request]);
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
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        if ($request->new_password and $request->confirm_password) {

            if ($request->new_password == $request->confirm_password) {
                //cambiar
                $user->password = Hash::make($request->new_password);
            }
        }

        $user->name = $request->name;
        $user->surnames = $request->surnames;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone_number;
        $user->birth_date = $request->birth_date;
        $user->update();


        return redirect()->route('account_status');
    }


    public function update2(Request $request, $id)
    {

        $user = User::find($id);
        $user->update($request->all());



        return redirect()->route('account_status');
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

    public function confirm()
    {
        #$credit = CreditRequest::find($id);
        return view('uriel.confirm');
    }


    public function account_status()
    {
        return view('uriel.account.status', ['user' => Auth::user()]);
    }

    public function account_status2()
    {
        return view('uriel.account.ac_status', ['user' => Auth::user()]);
    }
}
