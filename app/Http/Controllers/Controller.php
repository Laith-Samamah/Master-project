<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $newProduct = Product::orderBy("created_at", "DESC")->limit(6)->get();
        $subCate = SubCategory::all();
        return view('index', ['newProduct' => $newProduct], ['subCate' => $subCate]);
    }
}
