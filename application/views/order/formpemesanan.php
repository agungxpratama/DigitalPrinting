<body>
    <div class="page-content" style="background-image: url('<?= base_url('assets/assets4/') ?>images/wizard-v3.jpg')">
        <div class="wizard-v3-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3 class="heading">FORM PEMSANAN</h3>
                    <!-- <p>Fill all form field to go next step</p> -->
                </div>
                <form class="form-register" method="post" action="<?= base_url('jasa/tambahpesanan') ?> ">
                    <div id="form-total">
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" required>
                                            <span class="label" name="nama">Nama</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" required>
                                            <span class="label" name="alamat">Alamat Lengkap</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" required>
                                            <span class="label" name="jumlah">Jumlah</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" required>
                                            <span class="label" name="bahan">Bahan</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <b>
                                    <h3>
                                        <p>Silahkan Lakukan Pembayaran ke rekening XXXXXXXXXXXXXXXX</p>
                                    </h3>
                                </b>


                                <center><button type="submit" class="btn btn-primary">Kirim Pesanan </button>
                                </center><br><br>
                        </section>