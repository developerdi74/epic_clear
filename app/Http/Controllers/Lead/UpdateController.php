<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lead\UpdateRequest;
use App\Models\Lead;
class UpdateController extends BaseController
{
    public function __invoke(Lead $lead, UpdateRequest $request){
        $data = $request->validated();
        $this->service->update($data, $lead);

        return redirect()->route('lead.index', $lead->id);
    }
}
