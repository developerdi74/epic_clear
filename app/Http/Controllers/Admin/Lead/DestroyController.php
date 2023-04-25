<?php

namespace App\Http\Controllers\Admin\Lead;

use App\Http\Controllers\Controller;
use App\Models\Lead;

class DestroyController extends Controller
{
    public function __invoke(Lead $lead){
        $lead->delete();
        return redirect()->route('admin.lead.index');
    }
}
