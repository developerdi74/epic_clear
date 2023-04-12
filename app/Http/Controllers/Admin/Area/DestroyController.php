<?php

namespace App\Http\Controllers\Admin\Area;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Lead;

class DestroyController extends Controller
{
    public function __invoke(Area $area){
        $area->delete();
        return redirect()->route('admin.area.index');
    }
}
