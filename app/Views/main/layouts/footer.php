</div>
</main>
<footer class="text-center my-4">
   <ul class="footer-links">
      <li>
         <a href="<?= base_url('about-us') ?>">About Us</a>
      </li>
      <li>
         <a href="<?= base_url('terms-and-conditions') ?>">Terms and Conditions</a>
      </li>
      <li>
         <a href="<?= base_url('blog') ?>">News</a>
      </li>
      <li>
         <a href="<?= base_url('contact-us') ?>">Contact Us</a>
      </li>
   </ul>
   <span>© 2025 Maxvita Foods Pvt Ltd</span><br>
   <span>Premium Website Developed with
      Care by <a href="http://ipopi.in" target="_new" style="color:black">ipopi</a></span>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/https://kit.fontawesome.com/453c60cca9.js') ?>"></script>

<script src="<?= base_url('js/script.js') ?>"></script>
<script>
   new WOW().init();

   // $('.alertmsg').hide();
   // $('.alerterror').hide();
   // $('.alertsuccess').hide();
   $("#contactForm").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var form = $(this);
      var url = 'db/contactus.php';
      $.ajax({
         type: "POST",
         url: url,
         data: form.serialize(), // serializes the form's elements.
         success: function(data) {
            //alert(data); // show response from the php script.
            $('.alertmsg').html(data);
            $('.alertmsg').show();

            if (data.search('alertsuccess') != -1) {
               $("#contactForm").trigger("reset");
            }
         }
      });
   });
</script>
</body>

</html>