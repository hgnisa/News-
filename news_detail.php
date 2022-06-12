
<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php
            include "head.php";
            include 'page/model/class_news.php';
            $news = new News(); 
        ?>
	</head>
	<body>
        <div id="fh5co-offcanvas">
            <a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
            <div class="fh5co-bio">
                <h3 class="heading">About Us</h3>
                <h2>News &mdash;</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul class="fh5co-social">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>
            <div class="fh5co-menu">
                <div class="fh5co-box">
                    <h3 class="heading">Login</h3>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <button>
                        </div>
                    </form>
                    <h3 class="heading">Register</h3>
                    <ul>
                        <li><a href="create_account.php">Create a account</a></li>
                    </ul>
                </div>
            </div>
        </div>
	    <!-- END #fh5co-offcanvas -->

        <?php include "header.php"; ?>
	
        <div class="container-fluid">
            <div class="row fh5co-post-entry single-entry">
                <?php 
					foreach ($news->detail($_GET['id']) as $m){
                        $imageURL = 'images/'.$m["cover"];
                        $date = $m['date'];
                        $newDate = date("d F, Y (l)", strtotime($date));
				?>
                <article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <figure class="animate-box">
                        <img src="<?php echo $imageURL;?>" alt="Image" class="img-responsive">
                    </figure>
                    <h2 class="fh5co-article-title animate-box"><?php echo $m['title'];?></h2>
                    <span class="fh5co-meta fh5co-date animate-box"><?php echo $newDate;?></span>
                        
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <p><?php echo $m['content'];?></p>
                        </div>
                    </div>
                </article>
                <?php
                    }
                ?>
            </div>
        </div>
        <?php include "footer.php"; ?>
	</body>
</html>

