<?php
include_once 'header.php';
$mysqli = NEW mysqli('localhost', 'root', '', 'troll1');



$query = "SELECT m.*, u.* FROM users u INNER JOIN messages m ON m.userfrom_id=u.id WHERE m.userto_id = ".$_SESSION['user_id']."";
$result = $mysqli->query($query);
while($row = mysqli_fetch_array($result))
    {
?>

<div class="tabs">
    <table class="ad" border="1"> 

                   <tr>
                      <td> <b>Od:</b> <?php echo $row['username']; ?><br>
                  </tr>
                  
                  <tr>
                      <td> <b>Datum:</b> <?php echo $row['date']; ?> <br>______________________</td> 
                  </tr>
                  
                  <tr>
                    <td> <b>Naslov:</b> <?php echo $row['title']; ?> <br>______________________</td> 
                  </tr>
                  
                  <tr>
                    <td> <b>Sporočilo:</b> <br> <?php echo $row['content']; ?>
                  </tr>
                  
                  <tr>
                  _______________________________________________________________________________________________<br>
                  _______________________________________________________________________________________________<br>
                  </tr>
        </table> 
    
</div>
<?php
    }

include_once 'footer.php';
?>
