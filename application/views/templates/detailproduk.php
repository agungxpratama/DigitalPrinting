<div class="about_area">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-lg-5 offset-lg-1">
        <div class="about_info">
          <div class="section_title white_text">

            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Detail Produk </h3>
            <h3 p class="mid_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Kalender</p>
            </h3>

            <form action="<?= base_url('index.php/jasa/formpesan') ?>" method="post">
            <span class="form-sub-label-container" style="vertical-align:top">
              <label class="form-sub-label" for="input_3_quantity_1006_0" style="min-height:13px"> Quantity </label>
              <select class="form-control" name="q3_input3[special_1006][item_0]" id="exampleFormControlSelect1">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
              </select>
            </span>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Ukuran</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>35 x 50 cm</option>
                  <option>42 x 60 cm</option>
                  <option>50 x 70 cm</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Bahan</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Kertas HVS</option>
                  <option>Kertas Art Paper</option>
                  <option>Kertas Ivory</option>
                </select>
              </div>

            <p class="last_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Silahkan pilih</p>
            <!-- <a href="<?= base_url('jasa/formpesan') ?>" class="boxed-btn3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">Pesan</a> -->
            <button type="submit" name="Pesan" class="boxed-btn3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">Pesan</button>
            </form>




          </div>
        </div>
      </div>
    </div>
  </div>
</div>
