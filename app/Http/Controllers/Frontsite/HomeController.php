<?php

namespace App\Http\Controllers\Frontsite;

use App\Models\Workspace\UiKits;
use App\Models\MasterData\Category;
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

    public function oops()
    {
        return view('pages.frontsite.product.oops');
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

    public function category($id){
        //
        
        $all_products = UiKits::where('id_category', '=', $id)->get();
        $category = Category::where('id', '=', $id)->first();
        $category_name = $category->name;

        if(!$all_products) {
            abort(404);
        }
        
        return view('pages.frontsite.product.category', compact('all_products', 'category_name'));
    }
}