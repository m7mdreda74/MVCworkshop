<?php 
require "app/views/partials/head.php";
 ?>

<h1>All Articles</h1>

<?php
 foreach ($articles as $article) :
?>

    <h1><a href="/article?id=<?= $article->id ?>"><?= $article->name ;  ?></a></h1>
    <p><?= $article->body ;  ?></p>
    <a href="/article/edit?id=<?= $article->id ?>">Edit</a>


<?php 
endforeach; 
?>



<form method="post" action="\article\delete?id=<?= $article->id ?>">
    <button type="submit">Delete</button>
</form>