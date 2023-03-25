<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Database\Seeders\HomeSeed;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view("product.about");
    }
    public function home(Request $request){
        if($request->input("type")){
            $skills = Skills::where("type", $request->input("type"))->get();
        }else{
            $skills = Skills::limit(9)->get();
        }
        return view("product.home")->with("skills", $skills);
    }
    public function menu(){
        return view("product.menu");
    }
    public function contact(){
        return view("product.contact");
    }
    public function blog(Request $request){
        if($request->input("type")){
            $skills = Skills::where("type", $request->input("type"))->get();
        }else{
            $skills = Skills::get();
        }
        return view("product.blog")->with("skills", $skills);
    }
    public function skill(){
        return view("product.skill");
    }
    public function work(){
        return view("product.work");
    }
}
