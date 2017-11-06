<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 04/11/2017
 * Time: 18:21
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductPhoto;
use Faker\Provider\File;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{

    public function uploadForm()
    {
        return view('upload_form');
    }

    public function uploadSubmit(Request $request)
    {
        $photos = [];
        $photo = $request->photos;

        $filename = $photo->store('photos');



        $photo_object = new \stdClass();
        $photo_object->name = str_replace('photos/', '', $photo->getClientOriginalName());
        $product_photo = ProductPhoto::create([
            'filename' => $photo_object->name
        ]);
        $photo_object->size = round(Storage::size($filename) / 1024, 2);
        $photo_object->fileID = $product_photo->id;
        $destinationPath = 'photos';
        $photo->move($destinationPath, $photo_object->name);
        $photos[] = $photo_object;

        return $photos;
    }

    public function postProduct(Request $request)
    {
        foreach ($request->get('idFotos') as $foto) {

            ProductPhoto::where('id', $foto)
                ->update(['product_id' => 1]);
        }

        return 'Product saved successfully';
    }

    public function sair(Request $request)
    {

        foreach ($request->get('idFotos') as $foto) {

          $oi=ProductPhoto::find($foto);
              dd(unlink('C:\wamp64\www\marcelo\imagem\public\photos'.'/'.$oi->filename));
              return ProductPhoto::find($foto)->delete();

        }
    }

}