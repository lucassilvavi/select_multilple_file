<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 04/11/2017
 * Time: 16:26
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class FotoController extends Controller
{

    function uploadPhoto(Request $request){
//dd($request->get('pedidos'));
//        $file= Input::file($request->file('peditos'));
//        dd($file);
//        $filename = $file->getClientOriginalName();
//
//        $oi = $request->file('peditos');

//        var_dump(json_decode($oi,$request->all()));
    }
}