<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class HomeController
 */
class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @return Factory|Application|View|\Illuminate\Contracts\Foundation\Application
     */
    public function execute(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('frontend.pages.home');
    }
}
