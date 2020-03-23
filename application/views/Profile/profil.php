<body>
    <div class="page-content" style="background-image: url('<?= base_url('assets/assets4/') ?>images/wizard-v3.jpg')">
        <div class="wizard-v3-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3 class="heading">Info Profil</h3>
                    <!-- <p>Fill all form field to go next step</p> -->
                </div>
                <form class="form-register" action="#" method="post">
                    <div id="form-total">
                        <section>
                            <div class="inner">
                                <center>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <div class="card-title mb-4">
                                                            <div class="d-flex justify-content-start">
                                                                <div class="image-container">
                                                                    <img src="<?= base_url('assets_admin/img').$result->gambar ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                                                    <div class="middle">
                                                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="userData ml-3">
                                                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">Informasi Profile</a></h2>

                                                                </div> -->
                                                                <!-- <div class="ml-auto">
                                                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                                                </div> -->
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-3 col-md-2 col-5">
                                                                <label style="font-weight:bold;">Nama Lengkap</label>
                                                            </div>
                                                            <div class="col-md-8 col-6">
                                                                <?= $result->username ?>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-sm-3 col-md-2 col-5">
                                                                <label style="font-weight:bold;">Alamat</label>
                                                            </div>
                                                            <div class="col-md-8 col-6">
                                                                <?= $result->alamat ?>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-sm-3 col-md-2 col-5">
                                                                <label style="font-weight:bold;">No HP</label>
                                                            </div>
                                                            <div class="col-md-8 col-6">
                                                                <?= $result->noHp ?>

                                                            </div>
                                                        </div>
                                                        <hr />

                                                    </div>

                                                    <button type="button" class="btn btn-info">Edit Profile</button><br><br>


                                                    <!-- <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                                        Facebook, Google, Twitter Account that are connected to this account
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                            </div>
                    </div>
            </div>
        </div>
        </center>
