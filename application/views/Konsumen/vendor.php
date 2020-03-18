<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Vendor</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <!-- <?php print_r($result) ?> -->
                 <thead>
                   <tr>
                     <th>Nama Toko</th>
                     <th>Keterangan Toko</th>
                     <th>Alamat</th>
                     <th>Foto</th>
                   </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($result as $r): ?>
                     <tr>
                         <td><?= $r->namatoko ?></td>
                         <td><?= $r->ket_toko ?></td>
                         <td><?= $r->alamat ?></td>
                         <td><?= $r->gambar ?></td>
                     </tr>
                   <?php endforeach; ?>
                 </tbody>
                 <tfoot>
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
