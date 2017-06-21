<?php
include_once 'header.php';
include_once 'database.php';
//phpinfo();
?>
<div class="tabs">
    <ul class="tab-links">
        <li class="active">
        <a href="#tab1">New</a></li>
        <li><a href="#tab2">Top</a></li>
        <li><a href="#tab3">Worst</a></li>
        <li><a href="#tab4">My</a></li>
        <li>|</li>
        <li><a href="#tab5">B - Week</a></li>
        <li><a href="#tab6">B - Month</a></li>
        <li><a href="#tab7">B - Year</a></li>
        <li>|</li>
        <li><a href="#tab8">W - Week</a></li>
        <li><a href="#tab9">W - Month</a></li>
        <li><a href="#tab10">W - Year</a></li>
    </ul>

    <div class="tab-content">
        
        <!--1 NEW-->
        <div id="tab1" class="tab active">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id ORDER BY p.date_add DESC";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
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
            ?>
        </div>
        
        <!--2 TOP-->
        <div id="tab2" class="tab">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id ORDER BY p.upvote DESC";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
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
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20"/></span>
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=<?php echo $row['id']; ?>">
                            <img src=" <?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>" width="200"/>
                        </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
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
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
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
            ?>
        </div>
        
        <!--3 WORST-->
        <div id="tab3" class="tab">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id ORDER BY p.downvote DESC";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
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
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20"/></span>
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=<?php echo $row['id']; ?>">
                            <img src=" <?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>" width="200"/>
                        </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
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
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
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
            ?>
        </div>

        <!--4 MY-->
        <div id="tab4" class="tab">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id WHERE p.user_id = ".$_SESSION['user_id']." ORDER BY p.date_add DESC";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
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
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20"/></span>
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=<?php echo $row['id']; ?>">
                            <img src=" <?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>" width="200"/>
                        </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
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
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
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
            ?>
        </div>
        
        <!------------->
        
        <!--5 B - Week-->
        <div id="tab5" class="tab active">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id WHERE WEEKOFYEAR(date_add) = WEEKOFYEAR(NOW()) AND year(date_add) = year(CURRENT_DATE) ORDER BY p.upvote DESC";
                        $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
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
            ?>
        </div>
    
        <!--6 B - Month-->
        <div id="tab6" class="tab active">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id WHERE month(date_add) = month(CURRENT_DATE) AND year(date_add) = year(CURRENT_DATE) ORDER BY p.upvote DESC";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
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
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20"/></span>
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=<?php echo $row['id']; ?>">
                            <img src=" <?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>" width="200"/>
                        </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
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
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
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
            ?>
        </div>
    
        <!--7 B - Year-->
        <div id="tab7" class="tab active">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id WHERE year(date_add) = year(CURRENT_DATE) ORDER BY p.upvote DESC";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
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
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20"/></span>
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=<?php echo $row['id']; ?>">
                            <img src=" <?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>" width="200"/>
                        </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
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
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
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
            ?>
        </div>
        
        <!------------->
        
         <!--8 W - Week-->
        <div id="tab8" class="tab active">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id WHERE WEEKOFYEAR(date_add) = WEEKOFYEAR(NOW()) AND year(date_add) = year(CURRENT_DATE) ORDER BY p.upvote DESC";
                        $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
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
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20"/></span>
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=<?php echo $row['id']; ?>">
                            <img src=" <?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>" width="200"/>
                        </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
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
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
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
            ?>
        </div>
    
        <!--9 W - Month-->
        <div id="tab9" class="tab active">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id WHERE month(date_add) = month(CURRENT_DATE) AND year(date_add) = year(CURRENT_DATE) ORDER BY p.upvote DESC";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) 
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
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20"/></span>
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=<?php echo $row['id']; ?>">
                            <img src=" <?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>" width="200"/>
                        </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
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
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
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
            ?>
        </div>
    
        <!--10 W - Year-->
        <div id="tab10" class="tab active">
            <?php
            $query = "SELECT p.*, u.username, u.email FROM posts p INNER JOIN users u ON p.user_id=u.id WHERE year(date_add) = year(CURRENT_DATE) ORDER BY p.upvote DESC";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result))
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
                        <span class="trollUser"><img src="http://www.gravatar.com/avatar/<?php echo $email_hash?>?s=20"/></span>
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
                        <span class="trollDate"><?php echo $row['date_add']; ?></span>
                        <br />
                        <a href="post.php?id=<?php echo $row['id']; ?>">
                            <img src=" <?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>" width="200"/>
                        </a>
                        <br />
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=1">Upvote (<?php echo $row['upvote']; ?>)</a>
                        <a href="post_vote.php?post_id=<?php echo $row['id']; ?>&vote=0">Downvote (<?php echo $row['downvote']; ?>)</a>
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
                        <span class="trollUser"><?php echo $row['username']; ?> |</span>
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
            ?>
        </div>
      
        
        
        
        
        
    </div>
</div>

<?php


//v bazi pogleda uporabnika in ga primerja z SESSIONu z prijavljenim in nato izpiše vse kar je v while.
$query = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'";
if($result = mysqli_query($link, $query))
{
    while($row = $result->fetch_assoc())
    {
            if($row['type'] == 1)     // preveri če je admin
            {
               ?>
                <li class="linav"><a href="adminpannel.php">ADMIN PANEL</a></li>
               <?php
            }

    }
}



include_once 'footer.php';
?>

