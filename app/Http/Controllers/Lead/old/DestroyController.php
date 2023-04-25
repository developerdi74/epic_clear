<?php

namespace App\Http\Controllers\Lead\old;

use App\Http\Controllers\Lead\BaseController;
use App\Models\Lead;
class DestroyController extends BaseController
{
    public function __invoke(Lead $lead){
        $lead->delete();
        return redirect()->route('lead.index');
    }
}
