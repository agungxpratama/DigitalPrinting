<div class="container-fluid">
         <!-- DataTales Example -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Pesan <?= $result->namabarang ?></h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <form method="POST" action="<?php echo base_url('index.php/konsumen/simpan_pesanan'); ?>" enctype="multipart/form-data">
                 <table>
                   <tr>
                     <td>Nama Barang</td>
                     <td><?= $result->namabarang ?></td>
                   </tr>
                   <tr>
                     <td>Keterangan Barang</td>
                     <td><?= $result->ketbarang ?></td>
                   </tr>
                   <tr>
                     <td>Harga</td>
                     <input type="hidden" value="<?= $result->harga ?>" class="form-control bg-light border-1 small" placeholder="" name="harga">
                     <td><?= $result->harga ?></td>
                   </tr>
                   <tr>
                     <td>Stok</td>
                     <td><?= $result->stok ?></td>
                     <input type="hidden" value="<?= $result->idbarang ?>" class="form-control bg-light border-1 small" placeholder="" name="id_barang">
                   </tr>
                   <tr>
                     <td>Tanggal Pesan</td>
                     <td><input type="date" class="form-control bg-light border-1 small" placeholder="" name="tgl_pesan"></td>
                   </tr>
                   <tr>
                     <td>Tanggal Bayar</td>
                     <td><input type="date" class="form-control bg-light border-1 small" placeholder="" name="tgl_bayar"></td>
                   </tr>
                   <tr>
                     <td>Jumlah Barang</td>
                     <td><input type="number" class="form-control bg-light border-1 small" placeholder="" name="jumlahbarang"></td>
                   </tr>
                 </table>
               <button class="btn btn-info" type="submit" name="submit">Pesan</button>
               </form>
               <br>
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
