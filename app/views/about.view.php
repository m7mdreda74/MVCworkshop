<?php 
    require "partials/head.php";
?>



<body>
    <h1>About</h1>
    <?php if(! empty($articles)) {?>
        <?php foreach($articles as $article): ?>
            <h1><?= $article ['title'] ?></h1>
            <h1><?= $article ['description'] ?></h1>
        <?php endforeach; ?>
    <?php }?>


<?php 
        require "partials/footer.php";

?>