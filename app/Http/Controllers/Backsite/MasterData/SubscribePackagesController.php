<?php


namespace App\Http\Controllers\Backsite\MasterData;

use App\Models\Workspace\SubscribePackages;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


use Gate;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use Auth;


class SubscribePackagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        abort_if(Gate::denies('spackages_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $spackages = SubscribePackages::paginate(3);
        return view('pages.backsite.master-data.spackages.index', compact('spackages'));
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
    public function show(SubscribePackages $subscribePackages, $id)
    {
        //
        abort_if(Gate::denies('spackages_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $spackages = SubscribePackages::where('id', '=', $id)->first();
        return view('pages.backsite.master-data.spackages.show', compact('spackages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubscribePackages  $subscribePackages
     * @return \Illuminate\Http\Response
     */
    public function edit(SubscribePackages $subscribePackages, $id)
    {
        //
        abort_if(Gate::denies('spackages_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $spackages = SubscribePackages::where('id', '=', $id)->first();
        return view('pages.backsite.master-data.spackages.edit', compact('spackages'));
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