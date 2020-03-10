<section id="caraorder"></section>

<body>
    <div class="page-content" style="background-image: url('<?= base_url('assets/assets4/') ?>images/wizard-v3.jpg')">
        <div class="wizard-v3-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3 class="heading">Cara Order Barang</h3>
                    <!-- <p>Fill all form field to go next step</p> -->
                </div>
                <form class="form-register" action="#" method="post">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                            <span class="step-text">Buat Akun</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Account Information:</h3>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email" class="form-control" required>
                                            <span class="label">Email Address</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="username" name="username" required>
                                            <span class="label">Username</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="password" name="password_1" id="password_1" class="form-control" required>
                                            <span class="label">Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="password" name="comfirm_password_1" id="comfirm_password_1" class="form-control" required>
                                            <span class="label">Comfirm Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 2 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
                            <span class="step-text">Login Akun</span>

                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Login Akun:</h3>
                                <b> Gunakan Akun Yang Telah Dibuat</b><br><br>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="username" name="username" required>
                                            <span class="label">Username</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="password" name="password_1" id="password_1" class="form-control" required>
                                            <span class="label">Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                        </section>
                        <!-- SECTION 3 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-text">Cari Vendor</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Setelah membuat akun dan berhasil login, Cari vendor yang diinginkan pada Navbar</h3>

                        </section>
                        <!-- SECTION 4 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                            <span class="step-text">Pemesanan</span>
                        </h2>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Informasi Pemesanan:</h3>
                                Setelah memilih vendor dan memilih produk yang akan diorder, Lakukan Pembayaran melalui Transfer ke Vendor<br>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <input type="radio" name="radio1" id="pay-1" value="pay-1" checked>
                                        <label class="pay-1-label" for="pay-1"><img src="<?= base_url('assets/assets4/') ?>images/wizard_v3_icon_1.png" alt="pay-1">Credit Card</label>
                                        <input type="radio" name="radio1" id="pay-2" value="pay-2">
                                        <label class="pay-2-label" for="pay-2"><img src="<?= base_url('assets/assets4/') ?>images/wizard_v3_icon_2.png" alt="pay-2">Paypal</label>
                                    </div>
                                </div>
                                <!-- <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="holder" name="holder" required>
                                            <span class="label">Holder Name*</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div> -->
                                <!-- <div class="form-row">
                                    <div class="form-holder">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="card" name="card" required>
                                            <span class="label">Card Number*</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                    <div class="form-holder">
                                        <label class="form-row-inner">
                                            <input type="text" class="form-control" id="cvc" name="cvc" required>
                                            <span class="label">CVC*</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div> -->
                                <!-- <div class="form-row form-row-date form-row-date-1">
                                    <div class="form-holder form-holder-2">
                                        <label for="date" class="special-label">Expiry Date*:</label>
                                        <select name="month_1" id="month_1">
                                            <option value="Month" disabled selected>Month</option>
                                            <option value="Feb">Feb</option>
                                            <option value="Mar">Mar</option>
                                            <option value="Apr">Apr</option>
                                            <option value="May">May</option>
                                        </select>
                                        <select name="year_1" id="year_1">
                                            <option value="Year" disabled selected>Year</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                        </select> -->
                            </div>
                    </div>
            </div>
            </section>
            <!-- <section>
                            <div class="inner">
                                <h3>Confirm Details:</h3>
                                <div class="form-row table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr class="space-row">
                                                <th>Full Name:</th>
                                                <td id="fullname-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Email Address:</th>
                                                <td id="email-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Phone Number:</th>
                                                <td id="phone-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>User:</th>
                                                <td id="username-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Gender:</th>
                                                <td id="gender-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Address:</th>
                                                <td id="address-val"></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th>Card Type:</th>
                                                <td id="pay-val">Credit Card</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section> -->
        </div>
        </form>
    </div>
    </div>
    </div>

</body>

</html>