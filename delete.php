 <?php
 
 $mysqli = NEW mysqli('localhost', 'root', '', 'troll1');
 
 $dollar = (int) $_GET['id'];
         
if (isset($_POST['submit']))
{
    {
        

        $query = "DELETE FROM posts WHERE id = $dollar";     //izbriše message od vnešenega idja
        mysqli_query($mysqli, $query);
        
        header('location: adminpannel.php');
    }
}
?>
