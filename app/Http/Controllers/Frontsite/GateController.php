<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;

use App\Http\Requests\Frontsite\Gates\StoreRegisterMemberRequest;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Role;
use App\Models\User;
use App\Models\DetailUsers;

use Ramsey\Uuid\Uuid;

class GateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.frontsite.register.index');
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
    public function store(StoreRegisterMemberRequest $request)
    {
        $data = $request->all();

        // set role to member
        $array_role = ['3'];

        // set uuid
        $uuid = Uuid::uuid4()->toString();
        $data['uuid'] = $uuid;

        // hash password
        $data['password'] = Hash::make($data['password']);

        // save to users
        $user = User::create($data);

        // save to detail
        $detail_user = new DetailUsers;
        $detail_user->users_id = $user['id'];
        $detail_user->status = 1; // active user
        $detail_user->save();

        // sync role by users select
        $user->roles()->sync($array_role);

        return redirect()->route('login');
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
