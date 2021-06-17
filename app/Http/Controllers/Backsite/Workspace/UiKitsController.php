<?php

namespace App\Http\Controllers\Backsite\Workspace;

use App\Http\Controllers\Controller;

use App\Http\Requests\Backsite\Workspace\StoreUiKitsRequest;
use App\Http\Requests\Backsite\Workspace\UpdateUiKitsRequest;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Gate;
use File;

use App\Models\Workspace\UiKits;

use Ramsey\Uuid\Uuid;

class UiKitsController extends Controller
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
        abort_if(Gate::denies('ui_kit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ui_kits = UiKits::orderBy('created_at', 'desc')->paginate(500);

        return view('pages.backsite.workspace.ui-kits.index', compact('ui_kits'));
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
    public function store(StoreUiKitsRequest $request)
    {
        $data = $request->all();

        // change file locations
        if(isset($data['thumbnail'])){
            $data['thumbnail'] = $request->file('thumbnail')->store(
                'assets/file-ui-kit', 'public'
            );
        }else{
            $data['thumbnail'] = "";
        }

        $ui_kits = UiKits::create($data);

        alert()->success('Success Message', 'Save data has been success');

        return redirect()->route('backsite.ui_kits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UiKits $ui_kit)
    {
        abort_if(Gate::denies('ui_kit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.workspace.ui-kits.show', compact('ui_kit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(UiKits $ui_kit)
    {
        abort_if(Gate::denies('ui_kit_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.workspace.ui-kits.edit', compact('ui_kit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUiKitsRequest $request, UiKits $ui_kit)
    {
        // update ui kit
        $data = $request->all();

        // change format photo
        if(isset($data['thumbnail'])){

            $data['thumbnail'] = $request->file('thumbnail')->store(
                'assets/file-ui-kit', 'public'
            );

            // first checking old photo to delete from storage
            $get_item = UiKits::where('id', $ui_kit['id'])->first();
            $get_item = $get_item['thumbnail'];

            $data_old = 'storage/'.$get_item;
            if (File::exists($data_old)) {
                File::delete($data_old);
            }else{
                File::delete('storage/app/public/'.$get_item);
            }

        }

        $ui_kit->update($data);

        alert()->success('Success Message', 'Update data has been success');

        return redirect()->route('backsite.ui_kits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UiKits $ui_kit)
    {
        abort_if(Gate::denies('ui_kit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // first checking old file to delete from storage
        $get_item = UiKits::where('id', $ui_kit['id'])->first();
        $get_item = $get_item['thumbnail'];

        $data = 'storage/'.$get_item;
        if (File::exists($data)) {
            File::delete($data);
        }else{
            File::delete('storage/app/public/'.$get_item);
        }

        // delete ui kit
        $ui_kit->forceDelete();

        alert()->success('Success Message', 'Delete data has been success');

        return back();
    }
}
