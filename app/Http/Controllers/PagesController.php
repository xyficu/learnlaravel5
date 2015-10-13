<?php
/**
 * Created by PhpStorm.
 * User: amd48
 * Date: 2015/10/12
 * Time: 20:16
 */

namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller {

    public function show($id)
    {
        return view('pages.show')->withPage(Page::find($id));
    }

}