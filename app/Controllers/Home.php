<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index(): string
    {

        $mensaje = -1;

        $mens = ["mensaje" => $mensaje];

        return view('view_html_header').view('view_html_main', $mens).view('view_html_footer');
    }
}
