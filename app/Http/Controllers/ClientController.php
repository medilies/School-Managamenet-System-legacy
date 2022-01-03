<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients_page = Client::paginate(10);
        return view('clients.index')
            ->with('clients', $clients_page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'fname' => ['required',],
                'ar_fname' => ['',],
                'lname' => ['required',],
                'ar_lname' => ['',],
                'profession' => ['required',],
                'phone' => ['numeric', 'required'],
                'email' => ['email',],
                'address' => ['',],
            ]
        );

        Client::create([
            'fname' => ucwords(strtolower($request->fname)),
            'ar_fname' => $request->ar_lname,
            'lname' => strtoupper($request->lname),
            'ar_lname' => $request->ar_lname,
            'profession' => $request->profession,
            'phone' => $request->phone,
            'email' => strtolower($request->email),
            'address' => $request->address,
        ]);

        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return $client;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
