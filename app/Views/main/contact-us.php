<div class="contactcontainer mt-4">
    <div class="row rowheading wow bounceInUp">
        <div class="col-sm-12">
            <h2>Address</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-1 contact-address">
            <h5>MAXVITA foods india Pvt Ltd </h5>
            <p>Plot No 48, Behind NIEIT Engineering college</p>
            <p>Hebbal 2nd Phase Industrial Area,</p>
            <p>Anaganahalli, Mandya-571606</p>
            <p>Karnataka, India</p>
            <p>T : 0821 - 2975098</p>
            <p>P : +91 805 032 0101</p>
            <p>E : info@maxvitafoods.com</p>

            <div class="soicons">
                <a href="https://www.facebook.com/MaxvitaFoodsofficial/" target="_new"> <i class="fab fa-facebook-square fa-2x"></i> </a>
                <a href="https://www.instagram.com/maxvita_foods/" target="_new"> <i class="fab fa-instagram fa-2x"></i> </a>
                <!-- <a href=""> <i class="fab fa-youtube fa-2x"></i> </a>
                <a href=""> <i class="fab fa-whatsapp fa-2x"></i> </a> -->
            </div>
        </div>
        <div class="col-md-6 contact-form">
            <form id="contact-form" method="post" action="<?= base_url('forms/contact') ?>">
                <?= csrf_field() ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="2" name="message" id="message" required></textarea>
                </div>
                <div class="text-center">
                    <div class="alertmsg"></div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15588.5608279532!2d76.5888553!3d12.3735392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20ad325a7ce1c8b0!2sMaxvita%20Foods!5e0!3m2!1sen!2sin!4v1675921002266!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>