<?php

namespace App\Http\Controllers\Admin\Lead;

use App\Http\Controllers\Controller;
use App\Services\Lead\Service;

class BaseController extends Controller{

    public $service;

    public function __construct(Service $service){
        $this->service = $service;
    }
}
