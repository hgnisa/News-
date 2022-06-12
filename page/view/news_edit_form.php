<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php
            include "head.php";
            include '../model/class_news.php';
            $news = new News(); 
        ?>
	</head>
	<body>
        <?php include "header.php"; ?>
        <div class="container-fluid">
            <div class="row fh5co-post-entry single-entry">
                <article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <span class="fh5co-meta fh5co-date animate-box">News Edit</span>
                    
                    <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <form action="../controller/process_news.php?action=update" method="post" enctype="multipart/form-data">
                                <?php 
									foreach ($news->edit($_GET['id']) as $m){
								?>
                                    <div class="form-group">
                                        <h4 class="heading">News Id</h4>
                                        <input name="id" type="text" class="form-control" readonly="" value="<?php echo $m['id'];?>">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="heading">News Title</h4>
                                        <input name="title" type="text" class="form-control" value="<?php echo $m['title'];?>">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="heading">News Content</h4>
                                        <textarea name="content" class="form-control" rows="10" cols="82"><?php echo $m['content'];?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="heading">News Cover</h4>
                                        <input name="cover" type="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="heading">News Author</h4>
                                        <input name="author" type="text" class="form-control" placeholder="author" value="<?php echo $m['author'];?>">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="heading">News Date</h4>
                                        <input name="date" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-outline-secondary btn-lg btn-block" value="Submit">
                                    </div>
                                    <div class="form-group">
                                        <center><a href="index.php">Cancel</a></center><br>
                                    </div>
                                <?php
                                    }
                                ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <?php include "footer.php"; ?>
	</body>
</html>

