<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function execute()
    {
        return view('frontend.pages.home');
    }
}
