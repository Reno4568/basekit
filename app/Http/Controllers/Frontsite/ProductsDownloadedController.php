<?php


namespace App\Http\Controllers\Frontsite;
use App\Http\Controllers\Controller;
use App\Models\Workspace\UiKits;
use App\Models\Workspace\ProductsDownloaded;
use Auth;
use Illuminate\Http\Request;

class ProductsDownloadedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        //
        if(isset(Auth::user()->id)) {
            $id_user = Auth::user()->id;

            if(!$id_user) {
                return redirect('/gate');
            }

            $product = UiKits::where('id', '=', $id)->first();

            if(!$product) {
                abort(404);
            }
            
            $data = array(
                'id_product' => $product->id,
                'id_user' => $id_user,
            );

            $save_data = ProductsDownloaded::firstOrCreate($data);

            // return redirect()->route('index.details', ['id' => $id]);
            return redirect()->away($product->url_file);
        }
        return redirect('/login');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductsDownloaded  $productsDownloaded
     * @return \Illuminate\Http\Response
     */
    public function show(ProductsDownloaded $productsDownloaded)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductsDownloaded  $productsDownloaded
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductsDownloaded $productsDownloaded)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductsDownloaded  $productsDownloaded
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductsDownloaded $productsDownloaded)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductsDownloaded  $productsDownloaded
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductsDownloaded $productsDownloaded)
    {
        //
    }
}