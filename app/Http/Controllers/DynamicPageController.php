<?php

namespace App\Http\Controllers;

use App\Models\Page;

class DynamicPageController extends Controller
{
    public function __invoke(Page $page)
    {
        return view('pages.dynamic', compact('page'));
    }
}
