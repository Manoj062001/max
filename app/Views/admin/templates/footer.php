 <!-- Footer -->
 <footer class="footer">
     © 2024 <span class=""> - Crafted with <i class="mdi mdi-heart text-danger"></i> by ipopi ads</span>
 </footer>

 <!-- End Footer -->

 <!-- jQuery  -->
 <script src="<?= esc(base_url()) ?>/admin_assets/js/jquery.min.js"></script>
 <script src="<?= esc(base_url()) ?>/admin_assets/js/bootstrap.bundle.min.js"></script>
 <script src="<?= esc(base_url()) ?>/admin_assets/js/jquery.slimscroll.js"></script>
 <script src="<?= esc(base_url()) ?>/admin_assets/js/waves.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!-- App js -->
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

 <script src="<?= esc(base_url()) ?>/admin_assets/js/app.js?v=1.1"></script>
 <script>
     $(document).ready(function() {

         $('.image-popup-vertical-fit').magnificPopup({
             type: 'image',
             closeOnContentClick: true,
             mainClass: 'mfp-img-mobile',
             image: {
                 verticalFit: true
             }

         });
     })
 </script>
 <script>
     $('.statusselect').on("change", function() {
         var statusselect = $(this);
         var tablename = statusselect.siblings('.tablename');
         var rowid = statusselect.siblings('.rowid');
         var loading = statusselect.siblings('.loading');
         var url = "<?= esc(base_url()) ?>admin/changeStatus";
         loading.show();
         $.get(url, {
                 tablename: tablename.val(),
                 rowid: rowid.val(),
                 status: statusselect.val()
             })
             .done(function(data) {
                 loading.hide();
             });
     });
 </script>

 </body>

 </html>