<?php

namespace Modules\GuadalupeReports\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GuadalupeReportsController extends Controller
{
    public function index()
    {
        return view('guadalupereports::index');
    }
}
