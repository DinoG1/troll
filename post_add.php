<?php
    include_once 'header.php';
?>
<h1>Dodajanje trollov</h1>
<form action="post_insert.php" method="post" enctype="multipart/form-data">
    <label for="title">Naslov</label>
    <input type="text" name="title" id="title" required="required"/><br />
    <label for="url">Naloži sliko</label>
    <input type="file" name="file" id="url" required="required"/><br />
    <label for="tags">Značke slike</label>
    <input type="text" name="tags" id="tags"  /><br />
    <input type="submit" name="submit" value="Naloži" />
</form>
<br />
<h1>Dodaj video</h1>
<form action="video_insert.php" method="post" enctype="multipart/form-data">
    <label for="title2">Naslov</label>
    <input type="text" name="title2" id="title2" required="required"/><br />
    <label for="url">Prilepi URL</label>
    <input type="text" name="video" id="video" required="required"/><br />
    <input type="submit" name="submit" value="Naloži" />
    
</form>
<?php
    include_once 'footer.php';
?>