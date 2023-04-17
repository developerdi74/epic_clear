<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('admin');
    }


    public static function create(array $data)
    {
        $data['password']=$data['phone'];
        return User::firstOrCreate(['email'=>$data['phone']],[
            'name' => $data['name'],
            'email' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
