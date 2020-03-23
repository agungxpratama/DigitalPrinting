<div class="container-fluid">

<?php if($this->session->flashdata('flash') ): ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data supplier<strong> Success</strong> <?php echo $this->session->flashdata('flash');  ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
    </div> -->

    <?php endif ; ?>

    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>supplier/addsupplier" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Supplier</a>
            <a href="<?php echo base_url(); ?>laporanpdf/supplier" class="btn btn-primary"> <i class="fa fa-file"></i> Cetak Laporan</a>
        </div>
    </div> -->


    <!-- <div class="row mt-3">
        <div class="col-md-6"> -->
           <!-- <form action="<?php echo base_url(); ?>supplier/searchsupplier" method="post">
                    <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Supplier" name="katakuncisupplier" >
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" ><i class="fas fa-search"></i> Search</button>
            </div>
            </div>

           </form>  -->
        <!-- </div>
    </div> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <!-- <?php print_r($result) ?> -->
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID Invoice</th>
                <th>Tanggal Pesan</th>
                <th>Jumlah Barang</th>
                <th>Jumlah Bayar</th>
                <!-- <th>Edit</th> -->
                <th>Delete</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
                foreach ($result as $r) { ?>
            <tr>
                <td><?php echo $r->idinvoice ?></td>
                <td><?php echo $r->tglpesan ?></td>
                <td><?php echo $r->jumlahbarang ?></td>
                <td><?php echo $r->jumlahbayar ?></td>
                <!-- <td>
                    <a href="<?php echo base_url(); ?>supplier/updatesupplier/<?php echo $r->idinvoice; ?>" class="badge badge-success float-right" style=" padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-edit"></i> Edit</a> <br><br>

                </td> -->
                <td>
                    <a href="<?php echo base_url(); ?>supplier/hapussupplier/<?php echo $r->idinvoice; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda yakin?'); " style="padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-trash-alt"></i> Delete</a>
                </td>
                <td>
                    <?php if ( $r->status == 0){ ?>
                        <button type="button" class="btn btn-warning">
                          Belum di Proses <span class="badge badge-light">Admin</span>
                          <span class="sr-only">unread messages</span>
                        </button>
                    <?php } elseif ( $r->status == 1 ) { ?>
                        <button type="button" class="btn btn-success">
                          Sudah di Proses <span class="badge badge-light">Admin</span>
                          <span class="sr-only">unread messages</span>
                        </button>
                    <? } ?>
                </td>
            </tr>
        <?php } } ?>
        </tbody>

    </table>

        </div>
      </div>
    </div>

    </div>
    <!-- /.container-fluid -->
