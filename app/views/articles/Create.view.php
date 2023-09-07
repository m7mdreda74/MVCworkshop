<?php
require "app/views/partials/head.php";
?>


<h1>Create ARTICLE</h1>
<form method="post" action="\articles\store">
    <div>
        <input  type ="text" name="name" placeholder ="name">
    </div>
    <br>
    <div>
        <input  type ="text" name="body" placeholder ="body">
    </div>
    <br>
    <div>
        <button  type ="submit"> Creates </button>
    </div>
</form> 