<?php


namespace App\Http\Controllers\Frontsite;

use App\Models\Workspace\SubscribePackages;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


use Carbon\Carbon;
use Auth;


class SubscribePackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_packages = SubscribePackages::all();
        
        return view('pages.frontsite.product.pricing', compact('all_packages'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubscribePackages  $subscribePackages
     * @return \Illuminate\Http\Response
     */
    public function show(SubscribePackages $subscribePackages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubscribePackages  $subscribePackages
     * @return \Illuminate\Http\Response
     */
    public function edit(SubscribePackages $subscribePackages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubscribePackages  $subscribePackages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubscribePackages $subscribePackages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubscribePackages  $subscribePackages
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubscribePackages $subscribePackages)
    {
        //
    }
}