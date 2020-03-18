<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="card-columns">
                       <?php
                       // while ($row=$result->fetch_assoc()) {
                           ?>
                       <?php foreach ($result as $r): ?>
                           <div class="card">
                               <img class="card-img-top" src="<?php echo base_url('assets_admin/img/'.$r->gambar); ?>" alt="Card image cap">
                               <div class="card-body">
                                   <h3 class="card-title"><?php echo $r->namabarang; ?></h3>
                                   <p class="card-text">
                                       <?php echo $r->ketbarang; ?><br>
                                       Harga : <?php echo $r->harga; ?><br>
                                       Stok : <?php echo $r->stok; ?>
                                   </p>
                                   <a href="<?= base_url('index.php/konsumen/pesan/').$r->idbarang ?>" class="btn btn-success">Pesan</a>
                                   <!-- <a href="" class="btn btn-warning">Hubungi</a> -->
                               </div>
                           </div>
                       <?php endforeach; ?>
                       <?php
                   // }
                        ?>
                     </div>
                   </div>
                 </thead>
                 <tfoot>

                 </tbody>
               </table>
             </div>
           </div>
         </div>

       </div>
       <!-- /.container-fluid -->

     </div>
     <!-- End of Main Content -->

   </div>
   <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->
