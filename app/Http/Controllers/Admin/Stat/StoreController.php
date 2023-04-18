<?php

namespace App\Http\Controllers\Admin\Stat;

use App\Http\Controllers\Controller;
use App\Models\Statistics;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request){
        $data = $request->validate([
            'type' => '',
            'summa' => '',
            'user_id' => '',
            'label' => '',
        ]);
        $stat = Statistics::create($data);
        return redirect()->route('admin.statistics.index');
    }
}
