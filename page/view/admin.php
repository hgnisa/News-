<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php
            include "head.php";
            include '../model/class_admin.php';
            $adm = new Admin(); 
        ?>
	</head>
	<body>
        <?php include "header.php"; ?>
        
        <div class="container-fluid">
            <div class="row fh5co-post-entry single-entry">
                <article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <span class="fh5co-meta fh5co-date animate-box">Admin Database</span>
                    <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
                        <div class="row">
                            <div class="col-lg-12 animate-box">
                                <div class="col-lg-4 animate-box">
                                    <a href="admin_insert_form.php"><button class="btn btn-outline-secondary btn-lg btn-block">Add admin<i class="fas fa-plus"></i></button></a><br>
                                </div>
                                <div class="col-lg-4 animate-box">
                                    <a href="admin_export.php"><button class="btn btn-outline-secondary btn-lg btn-block">Export data<i class="fas fa-print"></i></button></a><br>
                                </div>
                                <div class="col-lg-4 animate-box">
                                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for admin.."><br>
                                </div>
                            </div>
                            <div class="col-lg-12 animate-box">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><center><b>Name</center></th>
                                            <th><center>Username</center></th>
                                            <th><center>Password</center></th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                    <?php
										$data = $adm->show();
										if($data!=0){
											foreach($data as $m){
									?>
                                                <tr>
                                                    <td><center><?php print $m['name']; ?></center></td> 
                                                    <td><center><?php print $m['username']; ?></center></td>
                                                    <td><center><?php print $m['password']; ?></center></td> 
                                                    <td><center>
                                                    <a href="admin_edit_form.php?id=<?php echo $m['id'];?>&action=edit"><button class="btn btn-outline-secondary btn-md">Edit</button></a>
                                                    <a href="../controller/process_admin.php?id=<?php echo $m['id']; ?>&action=delete"><button class="btn btn-outline-secondary btn-md">delete</button></a>
                                                    </center></td>
                                                </tr>
									<?php 
										    }
									    }
									?>
                                </table> 
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <?php include "footer.php"; ?>
	</body>
    <script>
        function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("bootstrap-data-table");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
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

