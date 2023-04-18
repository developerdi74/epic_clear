<?php

namespace App\Http\Controllers\Admin\Stat;

use App\Http\Controllers\Controller;
use App\Models\Statistics;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Statistics $stat, Request $request){
        $data = $request->validate([
            'type' => '',
            'summa' => '',
            'user_id' => '',
            'label' => '',
        ]);
        $stat->update($data);
        return redirect()->route('admin.statistics.index');
    }
}
