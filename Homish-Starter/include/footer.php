<footer>
    <!-- footer -->
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 column">
              <div class="row">
                <div class="col-md-4 column">
                  <h3>Şirket</h3>
                  <ul class="footer-gd-16">
                    <li><a href="index.php">Anasayfa</a></li>
                    <li><a href="about.php">Hakkımızda</a></li>
                    <li><a href="services.php">Hizmetler</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact.php">Bize Ulaşın</a></li>
                  </ul>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Hizmetlerimiz</h3>
                  <ul class="footer-gd-16">
                    <li><a href="#url">Gizlilik Politikası</a></li>
                    <li><a href="#url">Şartlarımız</a></li>
                    <li><a href="services.php">Hizmetler</a></li>
                    <li><a href="#url">Temsilcilerimiz</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
              <div class="end-column">
                <h4>En son ki güncellemeleri ve teklifleri alın.</h4>
                <form action="#" class="subscribe" method="post">
                  <input type="email" name="email" placeholder="Email Adres" required="">
                  <button type="submit">Gönder</button>
                </form>
                <p>So gelişmelerimizden haberdar olmak için kaydolun</p>
              </div>
            </div>
          </div>
          <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
            <div class="columns text-lg-left text-center">
              <p>&copy; 2020 Homish. All rights reserved.Design by <a href="https://w3layouts.com/" target="_blank">
                  W3Layouts</a>
              </p>
            </div>
            <div class="columns-2 mt-lg-0 mt-3">
              <ul class="social">
                <li><a href="https://www.facebook.com/"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li><a href="https://www.linkedin.com/"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
                <li><a href="https://www.twitter.com/"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li><a href="https://www.github.com/"><span class="fa fa-github" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
    </footer>