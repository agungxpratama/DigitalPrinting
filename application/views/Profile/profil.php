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

                                                    <a href="<?= base_url('index.php/konsumen/view_profil/') ?>" type="button" class="btn btn-info" >Edit Profile</a><br><br>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                            <form class="" action="<?= base_url() ?>index.php/konsumen/update" method="post">
                                                                <div class="form-group col-md-6">
                                                                  <label for="inputEmail4">Nama Lengkap</label>
                                                                  <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama" value="<?= $result->username ?>">
                                                                  <input type="hidden" name="iduser" value="<?= $result->iduser ?>">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                  <label for="inputEmail4">Alamat</label>
                                                                  <input type="text" class="form-control" id="inputEmail4" placeholder="Alamat" name="alamat" value="<?= $result->alamat ?>">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                  <label for="inputEmail4">No Hp</label>
                                                                  <input type="text" class="form-control" id="inputEmail4" placeholder="No HP" name="no_hp" value="<?= $result->noHp ?>">
                                                                </div>
                                                                <input type="submit" class="btn btn-primary">Update</button>

                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </form>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

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
