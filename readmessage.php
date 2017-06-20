<?php
include_once 'header.php';
include_once 'database.php';
//phpinfo();

$query = "SELECT messages FROM users u INNER JOIN users u ON m.user_id=u.id WHERE p.user_id";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
            {
            ?>
                <div class="tabs">  
                 <table class="ad" border="1"> 
                                <tr>
                                    <td> <b>Od:</b> <?php echo $row['username']; ?>, <?php echo $row['email']; ?> </td>
                                </tr>
                                
                                <tr>
                                    <td> <b>Datum:</b> <?php echo $row['date']; ?> </td>
                                </tr>
                                <tr>
                                  <td> <b>Naslov:</b> <?php echo $row['title']; ?> </td>
                                </tr>
                                
                                <tr>
                                  <td> <b>Sporočilo:</b> <br> <?php echo $row['content']; ?> </td>
                                </tr>
                </table> 
                <br>
                <br>  

                </div>
            <?php  
            }

include_once 'footer.php';
?>
