<?php 

namespace app\controllers;

use core\App;

class ArticleController {
    
    public function create () {
         return view('articles/create');
    }

    public function store()
    {
        var_dump($_POST);
        App::get('database')->
            insert('articles',
            [
                'name' => $_POST['name'],
                'body' => $_POST['body']

            ]);

    }

    public function index() {
        $articles = App::get('database') -> selectAll('articles');
        return view('articles/index', compact('articles'));
    }

    public function show () {
        $articles = App::get('database') -> select('articles', "id=?", [$_GET['id']]);
        return view('articles/show', compact('articles'));

    }

    public function edit()  {
        $articles = App::get('database') -> select('articles', "id=?", [$_GET['id']]);
        return view('articles/show', compact('articles'));
    }

    public function update() {
        $articles = App::get('database') -> update('articles', 
        "name=?, body=?",
        "id=?",
        [
             $_POST['name'],
             $_POST['body'],
             $_POST['id']


        ]

          );
          header('Location:/articles');
    }

    public function delete() {
        $articles = App::get('database') -> delete('articles', $_GET['id'] );
        header('Location:/articles');

    }
}