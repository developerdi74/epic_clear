<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Models\Statistics;



class UpdateController extends Controller
{
    public function __invoke(Statistics $stat, Request $request){
        $data = $request->validate([
            'type' => '',
            'summa' => '',
            'label' => '',
        ]);
        $Lead->update($data);

        return redirect()->route('admin.statistics.finance');
    }
}
