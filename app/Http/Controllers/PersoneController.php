<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;
use Ramsey\Uuid\Type\Time;

use function PHPUnit\Framework\returnValue;

class PersoneController extends Controller
{
    function persone(Request $request, $name=null){
         //query String
         $display=$request->input("display");
         $limit=$request->input("limit", 10);
        //  $all=$request->all();
        //  print_r($all);
        //  die();
        return response("hello {$name}-Display {$display} and Limit= {$limit}", 200);
    }
    function personeById(Request $request, $id=null){
        if($id==null){
            return response("Please provide in id", 404);
        }
        else{
            return response("The id is {$id}", 200);
        }
    }


    // function personeAccount(Request $request, $name=null, $account=null){
    //     return response("Hello {$name}, Your account number is {$account}",200);
    // }

    function personAccount(Request $request , $name=null, $accountId=null){
        if($name==null && $accountId==null){
            return response("Please Provide name and Account Number",404);
        }
        else{
        return response("Hello {$name}, Your account Number {$accountId}", 200);
        }
    }


    function personeFrom(){
        return view("persone");
    }
    function createPersone(Request $request){
        // $request->validate([
        //     "image"=> "required |image|max=2048",
        // ]);
        $name=$request->input("name");
        $email= $request->input("email");
        $image= $request->file("image");
        if($image){
            $imageName= time().".".$image->getClientOriginalExtension();
            $image->move(public_path("images"), $imageName);

        }
        else{
            $imageName=null;
        }


        return view("newPersone", ["name"=>$name, "email"=>$email, "image"=>$imageName]);
        // return response("Persone Name {$name} with Email {$email} ,200);
}


    }



