<?php

namespace App\Http\Controllers\Admin\Lead;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lead\StoreRequest;
use App\Models\Area;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        //Приходящие данные из формы
        $data = $request->validated(); //Реквест для валидации данных из формы StoreRequest

        $this->service->store($data);
        return redirect()->route('admin.calendar.index');
    }
}
