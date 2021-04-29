<!DOCTYPE html>
<html lang="en">

<head>
   <?php $this->load->view('admin/_partials/head.php');?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php $this->load->view('admin/_partials/navbar_mobile.php');?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php $this->load->view('admin/_partials/sidebar.php');?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view('admin/_partials/navbar_desktop.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <span>Edit Buku</span>    
                            </div>
                            <div class="card-body ">
                                <div class="row mx-5 px-5">
                                    <div class="col-lg-12 ">               
                                        <div class="card">
                                            <div class="card-header">
                                               
                                            </div>
                                            <div class="card-body card-block px-5">
                                                <form action="" method="post" class="form-horizontal">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="hf-email" class=" form-control-label">No Buku</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="hf-email" name="hf-email" placeholder="Enter No Buku..." class="form-control">
                                                            <!-- <span class="help-block">Please enter your No Buku</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="hf-email" class=" form-control-label">Nama Buku</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="hf-email" name="hf-email" placeholder="Enter Nama Buku..." class="form-control">
                                                            <!-- <span class="help-block">Please enter your Nama Buku</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="hf-email" class=" form-control-label">Kategori</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="hf-email" name="hf-email" placeholder="Enter Kategori..." class="form-control">
                                                            <!-- <span class="help-block">Please enter your Kategori</span> -->
                                                        </div>
                                                    </div>
                                                 
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Submit</button>
                                                <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset</button>
                                            </div>
                                        </div>
                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $this->load->view('admin/_partials/footer.php');?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

  <?php $this->load->view('admin/_partials/js.php');?>

  <script>
  
  
  
  </script>

</body>

</html>
<!-- end document-->
