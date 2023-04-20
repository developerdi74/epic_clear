<?php

namespace App\Http\Controllers\Admin\Promotion;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(Promotion $promo, Request $request){
        $data = $request->validate([
            'title' => '',
            'description' => '',
            'category' => '',
            'image' => 'image',
            'image' => 'mimetypes:image/jpeg,image/png',
            'active'=>'',
        ]);
        if($request->file('image')){
            $file = $request->file('image');
            $upload_folder = 'public/promo';
            $filename = $file->getClientOriginalName();
            $uploadFile = Storage::putFileAs($upload_folder, $file, $filename);
            $data['image']='public/storage/promo/'.$filename;
        }
        $promo->update($data);
        return redirect()->route('admin.promo.index');
    }
}
