<?php
namespace app\PageControllers;
class PageController{
    public function about(){
    $articles =[
       [ 'title'=>'About',
       'description'=>'About',
       'url'=>'About'
    ],
    [ 'title'=>'About2',
       'description'=>'About2',
       'url'=>'About2'
    ],
     
];
        return view('about', compact('articles'));
    }
}