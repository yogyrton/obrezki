<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class MainPageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show()
    {
        return view('add-new-advert');
    }
}
