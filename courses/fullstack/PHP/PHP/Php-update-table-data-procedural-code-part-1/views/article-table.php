<table border = 1 >
    <tr>
        <th>Id</th>
        <th>Heading</th>
        <th>Text</th>
        <th>Author</th>
        <th>Published</th>
        <th>Update</th>
    </tr>
    
    <?php foreach ($result as $key => $item):?>
    <tr>
        <td><?php print $item['id']; ?></td>
        <td><?php print $item['heading']; ?></td>
        <td><?php print $item['text']; ?></td>
        <td><?php print $item['author']; ?></td>
        <td><?php print $item['published']; ?></td>
        <td><a href="update.php?id=<?php print $item['id']; ?>">Update</a></td>
    </tr>
    
    <?php endforeach ?>
    
    
    
    
    
    
</table>