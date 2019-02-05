<?php

namespace App\Http\Controllers;

use App\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $list_banner = Banner::query();

        $list_banner->where('valid_start_date', '<', Carbon::now())
            ->where('valid_end_date', '<', Carbon::now());

        if($request->filled('service_id')){

            $list_banner->where('service_id', $request->get('service_id'));

        }

        $list_banner = $list_banner->get();

        return response()->json($list_banner);
    }

}
