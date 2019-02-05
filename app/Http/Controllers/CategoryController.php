<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $category_list = [];

        if($request->filled('service_id')){

            $list_products = Category::where('service_id',$request->get('service_id') )->paginate(4);

        }else{

            $category_list = Category::paginate(4);

        }

        return response()->json($category_list);
    }

    public function show(Request $request, $id)
    {
        $result = [];

        if($request->has('show_product')){

            if($request->filled('service_id')) {

                $result = Category::with('product')->where('service_id', $request->get('service_id'))
                    ->first();

            }else{

                $result = Category::with('product')->findOrFail($id);

            }

        }else{

            if($request->filled('service_id')) {

                $result = Category::where('service_id', $request->get('service_id'))
                    ->first();

            }else{

                $result = Category::findOrFail($id);

            }


        }

        return response()->json($result);

    }

}
