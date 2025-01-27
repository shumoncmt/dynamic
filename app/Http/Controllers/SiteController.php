<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    //Page start

    function about(){
        return view ('site/about');
        
    }
    function aboutus(){
        return view('site/aboutus');
    }
    function contact(){
        return view('site/contact');
    }
    function faq(){
        return view('site/faq');
    }
    function home(){
        return view('site/home');
    }
    function home2(){
        return view('site/home2');
    }
    function home3(){
        return view('site/home3');
    }
    function home4(){
        return view('site/home4');
    }
    function home5(){
        return view('site/home5');
    }
    function home6(){
        return view('site/home6');
    }
    function team(){
        return view('site/team');
    }
    function testimonials(){
        return view('site/testimonials');
    }

    function request(){
        return view('site/request');
    }



    //Page End

    //Product Start 
    function product(){
        return view('product/product');
    }
    function productdetails(){
        return view('product/productdetails');
    }
    function cart(){
        return view('product/cart');
    }
    function checkout(){
        return view('product/checkout');
    }





    //Product End


    //Industrial Sulotion  Start

    function agricultural(){
        return view ('solution/agricultural');
    }

    function alternate(){
        return view('solution/alternate');
    }
    function blogdetails(){
        return view('solution/blogdetails');
    }

    function chemical(){
        return view('solution/chemical');
    }

    function mechanical(){
        return view('solution/mechanical');
    }
    function meterial(){
        return view('solution/meterial');
    }
    function oil(){
        return view('solution/oil');
    }
    function power(){
        return view('solution/power');
    }
    function solutions(){
        return view('solution/solutions');
    }
    function resourcesdetails(){
        return view('solution/resourcesdetails');
    }
    function resources(){
        return view('solution/resources');
    }

    //Industrial Sulotion  End
    

    //Project Start

    function projectsdetails(){
        return view('project/projectsdetails');
    }

    function projects(){
        return view('project/projects');
    }
    function lightbox(){
        return view('project/lightbox');
    }
    function fullscreen(){
        return view('project/fullscreen');
    }
    function classic(){
        return view('project/classic');
    }


    //Project End

  


   


 

}


