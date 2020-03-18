<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <!-- <?php print_r($result) ?> -->
                 <thead>
                   <tr>
                     <th>ID Invoice</th>
                     <th>Tanggal Pemesanan</th>
                     <th>Jumlah Barang</th>
                     <th>Jumlah Bayar</th>
                   </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($result as $r): ?>
                     <tr>
                         <td><?= $r->idinvoice ?></td>
                         <td><?= $r->tglpesan ?></td>
                         <td><?= $r->jumlahbarang?> item</td>
                         <td>Rp. <?= $r->jumlahbayar ?></td>
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
