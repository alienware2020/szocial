<section class="footer-us sec-padding" id="footer">
    <div class="container">
        <div class="section-heading section-heading-white">
            <h1>Üzenjen <span>Nekünk!</span></h1>
            <p>Kérje személyre szabott árajánlatunkat!</p>
            <img src="<?php bloginfo('template_directory');?>/assets/images/section-btm.png" alt="" />
        </div>
        <div class="subcribe-box">
            <div class="row">
                <form name="contactform" method="post" action="send_form_email.php">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="NÉV">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="EMAIL">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="inputEmail3" placeholder="TÁRGY">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="ÜZENET"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Írjon Nekünk</button>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-social">
                        <a href="<?php echo esc_url(onepage_get_option('szocial_facebook_link', '#')); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="<?php echo esc_url(onepage_get_option('szocial_twitter_link', '#')); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="<?php echo esc_url(onepage_get_option('szocial_google_plus_link', '#')); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="<?php echo esc_url(onepage_get_option('szocial_linkedin_link', '#')); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="copyright-text">
                    Copyright 2016 <a href="#">sz.o.cial</a> All Rights Reserved.
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.min.js"></script>
<?php
    wp_footer();
?>
</body>
</html>