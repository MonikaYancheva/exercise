<form action = "update-process.php" method = "post">
    <?php foreach ($result as $key => $item_data): ?>
          <input type="hidden" name="id" value ="<?php print $item_data['id'] ?>">
       <div>
          <input type="text" name="heading" value ="<?php print $item_data['heading']?>">
       </div>
       <br> 
       <div>
           <textarea name = "text" id = "" cols = "30" rows = "10"><?php print $item_data['text'];  ?></textarea>
       </div>
       <br>
       <div>
           <input type = "text" nsme = "author" value = "<?php print $item_data['author']; ?>" >    
       </div>
       <br>
       <div>
           <input type = "text" name = "published" value = "<?php print $item_data['published']; ?> ">   
       </div>
       <br>
       <div>
           <input type = "submit" value = "Update">
       </div>
    <?php endforeach ?>
</form>

