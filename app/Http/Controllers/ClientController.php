<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use App\Models\Family;
use Illuminate\Http\Request;

class ClientController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clients.index')
            ->with('clients', Client::orderBy('id', 'desc')->paginate(10));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {

        if (!isset($request->family_id)) {
            return response("Le client doit appartenir à une famille.", 401);
        };

        $family = Family::find($request->family_id);
        $family->clients()->create($request->validated());

        return back();
        // return redirect()->route('clients.index');
    }

    /**
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return $client;
    }

    /**
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
