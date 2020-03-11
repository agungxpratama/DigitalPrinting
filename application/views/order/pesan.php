<body>
    <div class="page-content" style="background-image: url('<?= base_url('assets/assets4/') ?>images/wizard-v3.jpg')">
        <div class="wizard-v3-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3 class="heading">PESANAN USER</h3>
                    <!-- <p>Fill all form field to go next step</p> -->
                </div>
                <form class="form-register" action="#" method="post">
                    <div id="form-total">
                        <section>
                            <div class="inner">
                                <table border=1 width="700px" align="center">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat Lengkap</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Bahan</th>
                                        </tr><br>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        foreach ($pesanan as $p):
                                            $no++;?>
                                        <tr>
                                            <th scope="row"><?= $no ?></th>
                                            <td><?= $p->nama ?></td>
                                            <td><?= $p->alamat ?></td>
                                            <td></td>
                                            <td><?= $p->jumlah ?></td>
                                            <td><?= $p->bahan ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                        <br><br><br>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>
                                                <a href="<?= base_url('index.php/jasa/formpesan') ?>">Tambah</a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table><br><br><br><br><br><br>
                        </section>
