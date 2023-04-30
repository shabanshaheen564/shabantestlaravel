<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontrollr extends Controller
{
    public function main_page(){
        return view('project_admin_pages.main_page');
    }

}
