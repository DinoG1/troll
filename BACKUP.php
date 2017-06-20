<?php
include_once 'header.php';
include_once 'database.php';
//phpinfo();

$output = NULL;

if(isset($_POST['submit']))
{
    $content = ($_POST['content']);
    $title =  ($_POST['title']);
    $userto_id = (int) $_POST['userto_id']; //shrani id uporabnika iz forma
    $content =  ($_POST['content']);
    
   // $query = ("SELECT * FROM messages WHERE content = $content");
    
    if ($_SERVER['REQUEST_METHOD'] == 'post')
        { 
        echo "Prosim vnesite vsa polja";
        } 
        //$query = sprintf ("INSERT INTO messages (userfrom_id, userto_id, content, title, date) VALUES ($id, '$userto_id', '$content', '$title', CURRENT_TIMESTAMP)");        
        
        $query = sprintf("INSERT INTO messages (userfrom_id, userto_id, content, title) 
        VALUES (%s,'%s','%s', '%s')", mysqli_real_escape_string($link, $_SESSION['user_id']), mysqli_real_escape_string($link, $userto_id), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $title));
        
        if($query != TRUE)
        {
            $output = "Prišlo je do problema";
            $output .= $mysqli->error;
            echo $output;
        }
        else
        {
            $output = "Sporočilo poslano !";;
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
                            $result = mysqli_query($link, $query);
                            while($row = mysqli_fetch_array($result))
                            {
                                echo '<option value="' .$row['id'] . '">' . $row['username'] . '</option>';
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

