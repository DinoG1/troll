<?php
include_once 'header.php';
$mysqli = NEW mysqli('localhost', 'root', '', 'troll1');


$query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id";
$result = $mysqli->query($query);

$id = "SELECT id FROM posts";   // POPRAVIT

while($row = mysqli_fetch_array($result))
    {

if ($row['type'] == 0)
                { 
                ?>
                    <div class="trollPicture">
                    <?php
                       $email= $row['email'];
                       $email = trim($email);           //trima space
                       $email = strtolower($email);     //vse v male lowercase
                       $email_hash = md5($email);       //hasha email
                    ?>
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20" /></span>
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=<?php echo $row['id']; ?>">
                            <img src=" <?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>" width="200"/>
                        </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
                        
                        <form method="post" autocomplete="off">
                            <input type="submit" name="submit" value="Izbriši " />
                        </form>
                        <?php
                        
                       
                        if (isset($_POST['submit']))
                        {
                            {
                                $query = "DELETE FROM posts WHERE id = ".$row['id'];".";     //izbriše message od vnešenega idja
                                mysqli_query($mysqli, $query);
                            }
                        }
                        ?>
                        <hr />
                    </div>
                <?php
                }
                else
                {
                ?>
                    <div class="trollPicture">
                    <?php
                       $email= $row['email'];
                       $email = trim($email);           //trima space
                       $email = strtolower($email);     //vse v male lowercase
                       $email_hash = md5($email);       //hasha email
                    ?>
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20"/></span>
                        <span class="trollUser"><?php echo $row['username'];  ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=b <?php echo $row['id']; ?>"
                            <iframe width="320" height="240" src="https://www.youtube.com/embed/yHvFL92RXP4" frameborder="0" allowfullscreen></iframe>
                            <iframe width="320" height="240" src="https://www.youtube.com/embed/<?php echo $row['yturl']; ?>" frameborder="0" allowfullscreen></iframe>
                         </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
                        
                        
                        
                        <hr />
                    </div>
                <?php
                }
    }


include_once 'footer.php';