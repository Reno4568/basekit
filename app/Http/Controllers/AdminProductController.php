<?php

namespace App\Http\Controllers;

use App\Models\UIKit;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    //
    public function index()
    {
        $all_uikit = UIKit::all();

        return view('cms.index', compact('all_uikit'));

    }

    public function create()
    {
        return view('cms.new');
    }

    public function store(Request $request)
    {

       if ($request->file('thumbnail')) {

            $data = $request->all();
            $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail', 'public');
            UIKit::create($data);
            return redirect()->route('admin.products');
       } else {
            return redirect()->route('admin.products');
       }
    }

    public function destroy($id)
    {
        //
        $my_product = UIKit::findOrFail($id);
        $my_product->delete();

        return redirect()->route('admin.products');
    }
}