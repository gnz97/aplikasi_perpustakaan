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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        
                        
                    <?php $this->load->view('admin/_partials/footer.php');?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

  <?php $this->load->view('admin/_partials/js.php');?>

</body>

</html>
<!-- end document-->
