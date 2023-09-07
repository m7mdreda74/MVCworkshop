
<h1>Edit ARTICLE</h1>
<form method="post" action="\article\update">

    <input type="hidden" name="id" value="<?= $article->id ?>" >

    <div>
        <input  type ="text" name="name" placeholder ="name" value="<?= $article->name ?>">
    </div>
    <br>
    <div>
        <input  type ="text" name="body" placeholder ="body" value="<?= $article->body ?>">
    </div>
    <br>
    <div>
        <button  type ="submit"> Edit</button>
    </div>
</form> 