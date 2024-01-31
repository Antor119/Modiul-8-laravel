<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
   public function index(Request $request, $name=null){
    //queery string
    $display=$request->input("display", "Women Photo");
    $limit=$request->input("limit",10);
    return response("Your Name {$name}-- Displaying {$display} and Limit {$limit}",200);

   }

   public function store(Request $request, $name, $accountId){
    if($name==null && $accountId==null){
        $name = $request->name;
        $accountId = $request->accountId;
        return response("Provide Name And AccountId",200);
    }
    else{
      return response("Your name {$name} and your account Id {$accountId}",200);
    }
   }

   public function update(){
    return view("form");
   }

   public function destroy(Request $request){
    $name=$request->input("name");
    $email=$request->input("email");
    $image=$request->file("image");
if($image){
    $imageName=time().".".$image->getClientOriginalExtension();
    $image->move(public_path("images"), $imageName);
}
else{
    $imageName=null;
}

    return view("createData", ["name"=>$name,"email"=>$email, "image"=>$imageName]);

   // return response("Your Name {$name}, and Email {$email}",200);
   }
}
