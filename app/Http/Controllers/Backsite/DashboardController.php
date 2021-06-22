<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

// use App\Models\Audit\Audits;
// use App\Models\Audit\AuditsOrganizations;
// use App\Models\DataReference\AuditTypes;
// use App\User;
// use App\Models\Administration\Organizations;
// use App\Models\Administration\OrganizationsUser;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Workspace\SubscribeTransactions;
use App\Models\Workspace\ProductsDownloaded;
use App\Models\User;
use Carbon\Carbon;

use Gate;
use File;
use Excel;
use Auth;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DashboardController extends Controller
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
        $total_users = User::all()->count();
        $total_downloaded = ProductsDownloaded::all()->count();
        $total_trial_ended = SubscribeTransactions::where('expired_at', '<', Carbon::now())->count();
        $total_trial_ongoing = SubscribeTransactions::where('expired_at', '>', Carbon::now())->count();

        return view('pages.backsite.dashboard.index', compact('total_users', 'total_downloaded', 'total_trial_ended', 'total_trial_ongoing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }
}