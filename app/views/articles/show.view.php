<?php
if(! empty('article')) :
?>

<h1>
        <?= $article->name ;  ?>
    </h1>
    <p>
        <?= $article->body ;  ?>
    </p>


<?php endif; ?>