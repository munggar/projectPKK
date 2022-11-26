<section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="/simpanpesan" method="post">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-lg-12">
                    <h2 align="center">KONTAK KAMI</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="nama" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="nis" type="text" id="kelas" placeholder="YOURNIS...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL...*" required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="masukan" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE...*" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">KIRIM PESAN</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Admin Phone Number</h6>
                <span>0858-7725-3117</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>deckaazqiaa17@gmail.com</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Cibayawak Street</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Decksite. 
          <br>Design: DIKA TEAM</p>
    </div>
  </section>