<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Json;

class JsonController extends Controller
{
    public function getMassive(Request $request)
    {
        $param['back'] = [];
        $param['back']['rgb'] = [];
        $param['back']['link'] = [];

        if ($request->input('background')){
            $back = $request->input('background');
            if (str_contains($back, ',')) {
                $param['depth'] = null;
                $param['back']['rgb'] = $back;
                $param['back']['link'] = null;
            }
            elseif (str_contains($back, ';')) {
                $param['depth'] = null;
                $param['back']['rgb'] = str_replace(';', ',', $back);
                $param['back']['link'] = null;
            }
            elseif (str_contains($back, ';')) {
                $param['depth'] = null;
                $param['back']['rgb'] = str_replace(';', ',', $back);
                $param['back']['link'] = null;
            }
            elseif (str_contains($back, '/')) {
                $param['depth'] = null;
                $param['back']['rgb'] = null;
                $param['back']['link'] = $back;
            }else {
                $param['depth'] = null;
                $param['back']['rgb'] = null;
                $param['back']['link'] = null;
            }
        }elseif ($request->input('depth')){
            $back = $request->input('depth');
            if (str_contains($back, 'max')) {
                $param['depth'] = 9999;
            }else{
                $param['depth'] = $back;
            }
        }else{
            $param['back']['rgb'] = null;
            $param['back']['link'] = null;
            $param['depth'] = null;
        }
        $json = Json::all();
        return view('welcome', [
            'json' =>  $json,
            'param' =>  $param,
        ]);
    }
    public function getMassivePost(Request $request)
    {
        if ($request->input('param_name') == 'background'){
            $back = $request->input('param_value');
            if (str_contains($back, ',')) {
                $param['depth'] = null;
                $param['back']['rgb'] = $back;
                $param['back']['link'] = null;
            }
            elseif (str_contains($back, ';')) {
                $param['depth'] = null;
                $param['back']['rgb'] = str_replace(';', ',', $back);
                $param['back']['link'] = null;
            }
            elseif (str_contains($back, ';')) {
                $param['depth'] = null;
                $param['back']['rgb'] = str_replace(';', ',', $back);
                $param['back']['link'] = null;
            }
            elseif (str_contains($back, '/')) {
                $param['depth'] = null;
                $param['back']['rgb'] = null;
                $param['back']['link'] = $back;
            }else {
                $param['depth'] = null;
                $param['back']['rgb'] = null;
                $param['back']['link'] = null;
            }
        }elseif ($request->input('param_name') == 'depth'){
            $back = $request->input('param_value');
            if (str_contains($back, 'max')) {
                $param['depth'] = 9999;
            }else{
                $param['depth'] = $back;
            }
            $param['back']['rgb'] = null;
            $param['back']['link'] = null;
        }else{
            $param['back']['rgb'] = null;
            $param['back']['link'] = null;
            $param['depth'] = null;
        }
        $json = Json::all();
        return view('welcome', [
            'json' =>  $json,
            'param' =>  $param,
        ]);

    }
}
