<?php

namespace App\Http\Controllers\Admin\Area;

use App\Http\Controllers\Controller;
use App\Http\Requests\Area\UpdateRequest;
use App\Models\Area;

class UpdateController extends Controller
{
    public function __invoke(Area $area, UpdateRequest $request){
        $data = $request->validated();
        $area->update($data);

        return redirect()->route('admin.area.index');
    }
}
