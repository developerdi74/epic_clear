<?php

namespace App\Http\Controllers\Admin\Stat;

use App\Http\Controllers\Controller;
use App\Models\Statistics;

class DestroyController extends Controller
{
    public function __invoke(Statistics $stat){
        $stat->delete();
        return redirect()->route('admin.statistics.index');
    }
}
