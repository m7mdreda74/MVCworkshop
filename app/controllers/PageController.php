<?php

namespace app\controllers;

class PageController {

    public function about () {

        $articles =[
            [
                'title'=>'About',
                'description'=>'About',
                'url'=>'about'
            ],
            [
                'title'=>'About2',
                'description'=>'About2',
                'url'=>'about2'
            ]
        ];
        
        return view('about', compact('articles'));
    }
}