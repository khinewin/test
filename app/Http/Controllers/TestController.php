<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
class TestController extends Controller
{
    public function delete(Request $request){
        $id=$request['id'];
        $test=Test::where('id', $id)->first();
        $test->delete();
        echo "<div class='alert alert-success'>Delete Success</div>";
    }
    public function postNewData(Request $request){
        $title=$request['title'];
        $price=$request['price'];
        $t=new Test();
        $t->title=$title;
        $t->price=$price;
        $t->save();
        echo "<div class='alert alert-success'>Insert data success.</div>";
    }
    public function getPreShow(){
        $test=Test::OrderBy('id', 'desc')->get();
        return view ('pre-show')->with(['tests'=>$test]);
    }
}
