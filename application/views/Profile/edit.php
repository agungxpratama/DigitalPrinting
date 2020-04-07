<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Data Konsumen</h1>
         </div>
         <!-- Content Row -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Keterangan Konsumen</h6>
           </div>
           <div class="card-body">
               <div class="row">
                   <div class="col col-md-3">
                       <img src="<?= base_url('asset_admin/img/'.$result->gambar); ?>" alt="" width="100%">
                   </div>
                   <div class="col">
                       <div class="table-responsive">
                           <table class="table" width="100%" cellspacing="0">
                               <form class="form" action="<?= base_url('index.php/konsumen/update_profil'); ?>" method="post">
                                   <tr>
                                       <th width="20%">Username</th>
                                       <th>
                                           <?= $result->username ?>
                                           <!-- <input class="form-control" type="text" name="username" value="<?= $result->username ?>"> -->
                                       </th>
                                   </tr>
                                   <tr>
                                       <td>Alamat</td>
                                       <td>
                                           <input class="form-control" type="text" name="alamat" value="<?= $result->alamat ?>">
                                        </td>
                                   </tr>
                                   <tr>
                                       <td>No Telepon</td>
                                       <td>
                                           <input class="form-control" type="text" name="noHp" value="<?= $result->noHp ?>">
                                        </td>
                                   </tr>
                                   <tr>
                                       <td></td>
                                       <td> <button type="submit" name="button" class="btn btn-primary">Update</button> </td>
                                   </tr>
                               </form>
                           </table>
                       </div>
                   </div>
               </div>
               <hr>
           </div>


       </div>
   </div>
