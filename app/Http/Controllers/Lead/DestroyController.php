<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Lead;

class DestroyController extends BaseController
{
    public function __invoke(Lead $lead){
        $lead->delete();
        return redirect()->route('lead.index');
    }
}
