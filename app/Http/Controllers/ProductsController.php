<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
        $objProduct = Product::query();



        if($request->filled('service_id')){

            $objProduct->where('service_id',$request->get('service_id') );

        }

        if($request->filled('search')){

            $objProduct->where('product_name', 'like', '%'.$request->get('search'));
            $objProduct->orWhere('product_name', 'like', $request->get('search').'%');
            $objProduct->orWhere('product_name', 'like', '%'.$request->get('search').'%');
        }

        $list_products = $objProduct->paginate(10);

        return response()->json($list_products);
    }

    public function show(Request $request, $id)
    {
        $result = [];

        if($request->has('show_product')){

            if($request->filled('service_id')) {

                $result = Product::where('service_id', $request->get('service_id'))
                    ->first();

            }else{

                $result = Product::findOrFail($id);

            }

        }else{

            if($request->filled('service_id')) {

                $result = Product::where('service_id', $request->get('service_id'))
                    ->first();

            }else{

                $result = Product::findOrFail($id);

            }

        }

        return response()->json($result);

    }

}
