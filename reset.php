 <?php
 
 $mysqli = NEW mysqli('localhost', 'root', '', 'troll1');
 
 $dollar = (int) $_GET['id'];
         
if (isset($_POST['submit']))
{
    {
        

        $query = "UPDATE posts SET upvote = 0, downvote = 0 WHERE id = $dollar";     //izbriše message od vnešenega idja
        mysqli_query($mysqli, $query);
        
        header('location: adminpannel.php');
    }
}
?>
