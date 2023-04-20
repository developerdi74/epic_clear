<?php

namespace App\Http\Controllers\Admin\Promotion;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(Request $request){
        $data = $request->validate([
            'title' => '',
            'description' => '',
            'category' => '',
            'image' => 'image',
            'image' => 'mimetypes:image/jpeg,image/png',
        ]);
        if($request->file('image')){
            $file = $request->file('image');
            $upload_folder = 'public/promo';
            $filename = $file->getClientOriginalName();
            $uploadFile = Storage::putFileAs($upload_folder, $file, $filename);
            $data['image']='public/storage/promo/'.$filename;
        }
        $stat = Promotion::create($data);
        return redirect()->route('admin.promo.index');
    }
}
