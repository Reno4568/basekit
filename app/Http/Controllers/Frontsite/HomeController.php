<?php

namespace App\Http\Controllers\Frontsite;

use App\Models\Workspace\UiKits;
use App\Models\MasterData\Category;
use App\Models\Workspace\SubscribePackages;
use App\Models\Workspace\ProductsDownloaded;
use App\Models\Workspace\SubscribeTransactions;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;
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

    public function ended()
    {
        return view('pages.frontsite.product.ended');
    }

    public function checkout($type)
    {
        return view('pages.frontsite.product.checkout', compact('type'));
    }

    public function pay($type)
    {
        $id_user = Auth::user()->id;

        if($type == 'trial')
        {
            $check_trial = SubscribeTransactions::where('id_user', '=', $id_user)->first();
            if(!$check_trial)
            {
                $data = array(
                    'id_package' => 0,
                    'id_user' => $id_user,
                    'total_price' => 0,
                    'status' => 'success',
                    'type' => $type,
                    'expired_at' => Carbon::now()->addDays(3),
                );
                $my_trial = SubscribeTransactions::firstOrCreate($data);
            }
            else {
                return redirect()->route('index.ended');
            }
        }
        return view('pages.frontsite.product.checkout', compact('type'));
    }

    public function pricing()
    {
        
        
        $all_packages = SubscribePackages::all();
        
        
        return view('pages.frontsite.product.pricing', compact('all_packages'));
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