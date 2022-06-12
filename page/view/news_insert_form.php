<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php include "head.php"; ?>
	</head>
	<body>
        <?php include "header.php"; ?>
        <div class="container-fluid">
            <div class="row fh5co-post-entry single-entry">
                <article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <span class="fh5co-meta fh5co-date animate-box">Add News</span>
                    
                    <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <form action="../controller/process_news.php?action=add" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <h4 class="heading">News Title</h4>
                                        <input name="title" type="text" class="form-control" placeholder="title">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="heading">News Content</h4>
                                        <textarea name="content" class="form-control" rows="10" cols="82" placeholder="content"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="heading">News Cover</h4>
                                        <input name="cover" type="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="heading">News Author</h4>
                                        <input name="author" type="text" class="form-control" placeholder="author">
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

