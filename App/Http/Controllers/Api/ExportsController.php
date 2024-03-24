<?php

namespace Modules\GuadalupeReports\App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\GuadalupeReports\Services\ExportService;


class ExportsController extends Controller
{

    private ExportService $service;

    public function __construct(ExportService $service)
    {
        $this->service = $service;
    }

    public function all_products()
    {
        return $this->service->exportAllProducts();
    }
}
