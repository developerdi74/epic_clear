<?php

namespace App\Http\Controllers\Admin\Area;

use App\Http\Controllers\Controller;
use App\Http\Requests\Area\UpdateRequest;
use App\Models\Area;

class StoreController extends Controller
{
    public function __invoke(UpdateRequest $request){
        //Приходящие данные из формы
        $data = $request->validated(); //Реквест для валидации данных из формы StoreRequest
        $area = Area::create($data);
        return redirect()->route('admin.area.index');
    }
}
