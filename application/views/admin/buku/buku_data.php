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
                                <span>Data Buku</span>    
                                <a href="" class="btn btn-primary">Tambah Buku</a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive table--no-card m-b-30">
                                            <table class="table table-borderless table-striped table-earning" id="data_buku">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Buku No</th>
                                                        <th>Nama Buku</th>
                                                        <th>Kategori</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i = 1;
                                                    foreach($buku_data as $buku){?>
                                                        <tr>
                                                            <td><?=$i++?></td>
                                                            <td><?=$buku->bukuNo?></td>
                                                            <td><?=$buku->bukuNama?></td>
                                                            <td><?=$buku->bukuKategori?></td>
                                                            <td>
                                                                <button class="btn btn-primary">Edit</button>
                                                                <button class="btn btn-danger">Delete</button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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
  
  $(document).ready( function () {
    $('#data_buku').DataTable();
} );
  
  </script>

</body>

</html>
<!-- end document-->
