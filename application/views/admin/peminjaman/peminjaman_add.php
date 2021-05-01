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
                                <span>Tambah peminjaman</span>    
                            </div>
                            <div class="card-body ">
                                <div class="row mx-5 px-5">
                                    <div class="col-lg-12 ">               
                                        <div class="card">
                                            <div class="card-header">
                                               
                                            </div>
                                            <div class="card-body card-block px-5">
                                                <form action="" method="post" class="form-horizontal" id="formAdd">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="hf-email" class=" form-control-label">No peminjaman</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="nopeminjaman" name="nopeminjaman" placeholder="Enter No peminjaman..." class="form-control">
                                                            <!-- <span class="help-block">Please enter your No peminjaman</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="hf-email" class=" form-control-label">No Anggota</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="namapeminjaman" name="namapeminjaman" placeholder="Enter Nama peminjaman..." class="form-control">
                                                            <!-- <span class="help-block">Please enter your Nama peminjaman</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="hf-email" class=" form-control-label">Nama peminjaman</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="namapeminjaman" name="namapeminjaman" placeholder="Enter Nama peminjaman..." class="form-control" readonly>
                                                            <!-- <span class="help-block">Please enter your Nama peminjaman</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="hf-email" class=" form-control-label">No Buku</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="namapeminjaman" name="namapeminjaman" placeholder="Enter Nama peminjaman..." class="form-control">
                                                            <!-- <span class="help-block">Please enter your Nama peminjaman</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="hf-email" class=" form-control-label">Nama Buku</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="namapeminjaman" name="namapeminjaman" placeholder="Enter Nama peminjaman..." class="form-control" readonly>
                                                            <!-- <span class="help-block">Please enter your Nama peminjaman</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="kategoripeminjaman" class=" form-control-label">Kategori</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="kategoripeminjaman" name="kategoripeminjaman" placeholder="Enter Kategori..." class="form-control" readonly>
                                                            <!-- <span class="help-block">Please enter your Kategori</span> -->
                                                        </div>
                                                    </div>
                                                 
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" id="add" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Submit</button>
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

$(document).ready(function(){

    $('#add').on('click', function(){
        $.ajax({
            type : "POST",
            url  :"<?php echo base_url('admin/peminjaman/addpeminjaman')?>",
            dataType : "JSON",
            data : $('#formAdd').serialize(),
            success: function(data){
                console.log(data);
                if(data.status == 'success'){
                    console.log("sukses");
                
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Di Tambahkan!',
                    
                    }).then(function() {
                        window.location.assign("<?php echo base_url();?>admin/peminjaman");
                    });
                
                }else{
                    // $('.gejalaCode_error').html(data.gejalaCode);
                    // $('.gejalaNama_error').html(data.gejalaNama);
                } 
            }
        });
    return false;
    });

});

</script>

</body>

</html>
<!-- end document-->
