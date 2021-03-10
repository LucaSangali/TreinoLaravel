<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($nome)
    {

        return "<html><head><title>Olá</title></head><body>Olá $nome!</div></body></html>";

    }
}