<?php
include_once 'header.php';
$mysqli = NEW mysqli('localhost', 'root', '', 'troll1');
//phpinfo();

$output = NULL;

if(isset($_POST['submit']))
{
    $content = $mysqli->real_escape_string($_POST['content']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $userto_id= $mysqli->real_escape_string($_POST['userto_id']);
        
    
    $query = $mysqli->query("SELECT * FROM messages WHERE content = $content");
    
    if ($_SERVER['REQUEST_METHOD'] == 'post')
        { 
        echo "Prosim vnesite vsa polja";
        }
        $id = $_SESSION['user_id'];
        $insert = $mysqli->query("INSERT INTO messages (userfrom_id, userto_id, content, title, date) VALUES ( $id, '$userto_id', '$content', '$title', CURRENT_TIMESTAMP)");
        if($insert != TRUE)
        {
            $output = "Prišlo je do problema";
            $output .= $mysqli->error;
            echo $output;
        }
        else
        {
            $output = "Sporočilo poslano !";
        }
}

?>

<div class="tabs">
    
    <html>
    <body>
        <form method="post" autocomplete="off">
            <table >
                <tr>
                    <td>
                        Uporabnik: <br>

                        <?php
                        
                            echo "<select name='userto_id'>"; 
                            $query = "SELECT * FROM users";
                             if($result = $mysqli->query($query))
            {            
                while($row = $result->fetch_assoc())
                            {
                                echo '<option value="' .$row['id'] . '">' . $row['username'] . '</option>';
                            }
            }
                           ?><br><?php
                        ?>
                    
                </tr>
                <tr>
                    <td>
                        <br>
                        Naslov: <br>
                        <input type="text" name="title" required />
                </tr>
                <tr>
                    <td>
                        <br>
                        Vsebina: <br>
                        <textarea name = "content" rows="4" cols="50" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <input type="submit" name="submit" value="Send Message" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

    
    
    
    
    
</div>
<?php
echo $output;
include_once 'footer.php';
?>

