<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DemoController extends Controller
{
    //string int null blooan reponse
    public function demo1():string|null|int|bool{
        return("Hello");

    }

    //Array and Associative array reponse
    public function demo2(){
        $city=['Dhaka','Khulna','Boira'];
        $acco=array([
            'Name'=> 'Antor',
            'City'=> 'Khulna',
            'Country'=> 'Bangladesh',
            'Age'=> 23,
        ],
        [
            'Name'=> 'Sabbir',
            'City'=> 'Dhaka',
            'Country'=> 'Banladesh',
            'Age'=> 24,
        ],

        [
            'Name'=> 'Karim',
            'City'=> 'Nator',
            'Country'=> 'Banladesh',
            'Age'=> 25,
        ]
    );
        return($acco);
    }

    //Json Response
    public function demo3(){
        $city=['Dhaka','Khulna','Boira'];
        $acco=array([
            'Name'=> 'Antor',
            'City'=> 'Khulna',
            'Country'=> 'Bangladesh',
            'Age'=> 23,
        ],
        [
            'Name'=> 'Sabbir',
            'City'=> 'Dhaka',
            'Country'=> 'Banladesh',
            'Age'=> 24,
        ],

        [
            'Name'=> 'Karim',
            'City'=> 'Nator',
            'Country'=> 'Banladesh',
            'Age'=> 25,
        ]
    );

    return response()->json($acco);

    }
    //Response with data, msg code
    public function demo4():JsonResponse{
        $city=['Dhaka','Khulna','Boira'];
        $acco=array([
            'Name'=> 'Antor',
            'City'=> 'Khulna',
            'Country'=> 'Bangladesh',
            'Age'=> 23,
        ],
        [
            'Name'=> 'Sabbir',
            'City'=> 'Dhaka',
            'Country'=> 'Banladesh',
            'Age'=> 24,
        ],

        [
            'Name'=> 'Karim',
            'City'=> 'Nator',
            'Country'=> 'Banladesh',
            'Age'=> 25,
        ]
    );

    return response()->json(['status'=>'Success', 'data'=>$acco],206);

    }
    //Response Redirect
    public function demo5(){
        return redirect('/demo4');

    }
//Binary file response
    public function demo6():BinaryFileResponse{
        $path='img2.jpg';
        return response()->file($path);

    }
    //File download response

    public function demo7():BinaryFileResponse{
        $path='img2.jpg';
        return response()->download($path);

    }
    //Response Cookies

    public function demo8(){
        $name='Ostad';
        $vlaue='Ostad123';
        $expTime=60;
        $path= '/demo4';
        $domain= $_SERVER['SERVER_NAME'];
        $secure=true;
        $httpOnly=true;

        return response("Cookie Set Successfuly")->cookie($name, $vlaue, $expTime, $path, $domain, $secure, $httpOnly);

    }

    //Response with header properties

    public function demo9(){

        return response("Cookie Set Successfuly")
                        ->header(key:'Ostad1',values:'Ostad-vlaues1')
                        ->header(key:'Ostad2',values:'Ostad-vlaues2')
                        ->header(key:'Ostad4',values:'Ostad-vlaues4')
                        ->header(key:'Ostad5',values:'Ostad-vlaues5')
                        ->header(key:'Ostad6',values:'Ostad-vlaues6');
    }

    //Response blade view

    public function demo10(){

    }

}
