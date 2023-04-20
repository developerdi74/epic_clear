<?php

namespace App\Http\Controllers\Admin\Promotion;

use App\Http\Controllers\Controller;
use App\Models\Promotion;

class DestroyController extends Controller
{
    public function __invoke(Promotion $promo){
        $promo->delete();
        return redirect()->route('admin.promo.index');
    }
}
