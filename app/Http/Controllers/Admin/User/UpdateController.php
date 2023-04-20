<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;



class UpdateController extends Controller
{
    public function __invoke(User $user, Request $request){
        $data = $request->validate([
            'name' => '',
            'notes' => '',
            'params' => '',
        ]);
        $user->update($data);
        return redirect()->route('admin.user.show',$user->id);
    }
}
