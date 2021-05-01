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
                                <a href="<?=site_url('admin/Peminjaman/viewAddPeminjaman')?>" class="btn btn-primary">Tambah Peminjaman</a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive table--no-card m-b-30">
                                            <table class="table table-borderless table-striped table-earning" id="data_buku">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No Peminjaman</th>
                                                        <th>No Buku</th>
                                                        <th>ID Anggota</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i = 1;
                                                    foreach($peminjaman_data as $peminjaman){?>
                                                        <tr>
                                                            <td><?=$i++?></td>
                                                            <td><?=$peminjaman->buku_id?></td>
                                                            <td><?=$peminjaman->anggota_id?></td>
                                                            <td><?=$peminjaman->tanggalPinjam?></td>
                                                            <td>
                                                                <a href="<?=site_url('admin/Buku/viewEditBuku/'.$peminjaman->peminjamanID)?>"><button class="btn btn-primary">Edit</button></a>
                                                                <button class="btn btn-danger" id="btn-delete" value="<?=$peminjaman->peminjamanID?>">Delete</button>
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


    $('#data_buku').on('click','#btn-delete',function(){
        var id=$(this).attr('value');
        console.log(id);
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
        }).then((result) => {
            
        if (result.isConfirmed) {
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('admin/Buku/deletBuku')?>",
            dataType : "JSON",
            data : {id: id},
            success: function(data){
                console.log('success');
                if(data.status == 'success'){
                    swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    ).then(function(){
                        location.reload();
                    });  
                }
                               
            }     
        });
        return false;
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
            )
        }
        })

        // $('#modalHapus').modal('show');
        // $('[name="deletepenggunaID"]').val(id);
    });
} );
  
  </script>

</body>

</html>
<!-- end document-->
