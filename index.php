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
                    <form action="page/controller/process_login.php" method="post">
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-secondary btn-lg btn-block" value="Login">
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
            <div class="col-lg-12 animate-box">
                <div class="col-lg-9 animate-box"></div>
                <div class="col-lg-3 animate-box"><input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for news.."><br></div>
            </div>
            <div id="data-news" class="row fh5co-post-entry">
            <?php
				$data = $news->show();
                $i = 0;
				if($data!=0){
					foreach($data as $m){        
                        $imageURL = 'images/'.$m["cover"];
                        $date = $m['date'];
                        $newDate = date("d F, Y", strtotime($date));
                        $i++;

                        if($i == 1){
                            ?>
                            <div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>
                            <article class="col-lg-3 animate-box">
                                <figure>
                                    <a href="news_detail.php?id=<?php echo $m['id'];?>"><img src="<?php echo $imageURL; ?>" class="img-responsive"></a>
                                </figure>
                                <h2 class="fh5co-article-title"><a href="news_detail.php?id=<?php echo $m['id'];?>"><?php echo $m['title'];?></a></h2>
                                <span class="fh5co-meta fh5co-date"><?php echo $newDate;?></span>
                            </article>
                            <?php
                        }
                        else if($i == 3){
                            ?>
                            <div class="clearfix visible-xs-block"></div>
                            <article class="col-lg-3 animate-box">
                                <figure>
                                    <a href="news_detail.php?id=<?php echo $m['id'];?>"><img src="<?php echo $imageURL; ?>" class="img-responsive"></a>
                                </figure>
                                <h2 class="fh5co-article-title"><a href="news_detail.php?id=<?php echo $m['id'];?>"><?php echo $m['title'];?></a></h2>
                                <span class="fh5co-meta fh5co-date"><?php echo $newDate;?></span>
                            </article>
                            <?php
                        }
                        else{
                            ?>
                            <article class="col-lg-3 animate-box">
                                <figure>
                                    <a href="news_detail.php?id=<?php echo $m['id'];?>"><img src="<?php echo $imageURL; ?>" class="img-responsive"></a>
                                </figure>
                                <h2 class="fh5co-article-title"><a href="news_detail.php?id=<?php echo $m['id'];?>"><?php echo $m['title'];?></a></h2>
                                <span class="fh5co-meta fh5co-date"><?php echo $newDate;?></span>
                            </article>
                            <?php
                            if($i == 4){
                                $i = 0;
                            }
                        }
                    }
                }
            ?>
            </div>
        </div>
        <?php include "footer.php"; ?>
	</body>
    <script>
        function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("data-news");
        tr = table.getElementsByTagName("article");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("h2")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
        }
    </script>
</html>

