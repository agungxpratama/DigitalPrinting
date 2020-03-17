<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                   <tr>
                     <th>No</th>
                     <th>Nama Pemesan</th>
                     <th>Alamat</th>
                     <th>Jumlah</th>
                     <th>Jenis Bahan</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php foreach ($result as $r): ?>
                     <tr>
                       <td><?php echo $r->id_pesan ?></td>
                       <td><?php echo $r->nama ?></td>
                       <td><?php echo $r->alamat ?></td>
                       <td><?php echo $r->jumlah ?></td>
                       <td><?php echo $r->bahan ?></td>
                       <td>
                         <a href="<?php echo base_url("index.php/Admin/hapus_kos?kode_kos=$r->id_pesan") ?>" class="btn btn-primary">Hapus</a>
                         <a href="<?php echo base_url("index.php/Admin/edit_kos?kode_kos=$r->id_pesan") ?>" class="btn btn-danger">Edit</a>
                       </td>
                     </tr>
                 <?php endforeach; ?>
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
