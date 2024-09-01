<?php
  require_once 'header.php';
?>


<!-- NAVIGATION BEFORE FOOTER -->
<section style=' display:flex; background-color:var(--primary-color)' class="navBeforeFooter">
      <div class="box">
        <div><h2 style='font-size:2.3rem'><?= $business_name; ?></h2></div>
        <div>Sign Up For Special Offers</div>
        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tempore quas eaque pariatur consequuntur quos.</p>

        <div class="bf-text">Subscribe For Offers</div>

        <div class="subscribe">
          <input type="text">
          <button style='background: <?= $accent_color; ?>; border 1px solid <?= $accent_color; ?>;' class="btn">Subscribe</button>
        </div>
      </div>
      <div class="box">
        <div class="bf-text">Site Links</div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <!-- <li><a href="Services.php">Services</a></li> -->
          <li><a href="services.php">Sevices</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="icons">
          <a href="#" class="fa-brands fa-facebook-f"></a>
          <a href="#" class="fa-brands fa-instagram"></a>
          <!-- <a href="" class="fa-brands fa-google"></a>
          <a href="" class="fa-brands fa-youtube"></a> -->
        </div>
      </div>
      <div class="box">
        <div class="bf-text">Say Hi!</div>
        <ul class="sayHiItem">
          <li><a href="mailto:contact@yourbarbershop.com" rel="noopener noreferrer"><?= $business_email; ?></a></li>
          <!-- <li>
            <a href="">contact@yoursalon.com</a>
          </li> -->
        </ul>

        <div class="bf-text">Call Us</div>
        <ul class="sayHiItem">
          <li><a href="tel:+19803351233" rel="noopener noreferrer"><?= $business_phone; ?></a></li>
        </ul>

        <div class="bf-text">Visit Us</div>
        <a href="contact.php#google-map" style='color:#fff; text-decoration: none'>
          <p><?= $business_street_address; ?></p>
        <p><?= $business_city; ?>, <?= $business_state; ?> <?= $business_zip; ?></p></a>
        
      </div>
     </section>

    <footer style='background:var(--primary-color); display:flex'>
      <div class="fbox">
        Copyright &copy; 2024 <?= $business_name; ?> | Website designed and powered by
        <a style='color:#fff; text-decoration:none' href="https://webqwick.com/" target='_blank' rel="noopener noreferrer">WebQwick.com</a>.
      </div>
      <div>
        <p style="color:#fff">All other trademarks, service marks and trade names referenced in this
        material are the property of their respective owner.</p>
        
      </div>
    </footer>
  </body>
</html>