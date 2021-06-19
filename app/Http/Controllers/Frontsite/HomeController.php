<?php

namespace App\Http\Controllers\Frontsite;

use App\Models\Workspace\UiKits;
use App\Models\Workspace\ProductsDownloaded;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $ui_kits = UiKits::all();
        return view('pages.frontsite.product.index', compact('ui_kits'));
    }

    public function details($id){
        //
        
        $details_product = UiKits::where('id', '=', $id)->first();
        $total_downloaded = ProductsDownloaded::where('id_product', '=', $id)->count();

        if(!$details_product) {
            abort(404);
        }
        
        return view('pages.frontsite.product.details', compact('details_product', 'total_downloaded'));
    }
}