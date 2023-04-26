<div class="question">
            <div class="question__text">
              Do you have any questions?
            </div>
            <div id="reply" class="minibutton"> Write to us!</div>
            <div class="question__close">&times</div>
        </div>
        
        <div class="reply">
            <div class="reply__body">
                <div class="reply__title">
                  Leave your question here
                </div>
                <?php echo do_shortcode('[contact-form-7 id="141" title="Contact form 2"]') ?>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="footer__logo">
                        <?php the_custom_logo(); ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="footer__social">
                            <div class="footer__social-item">

                            </div>
                            <a href="<?php the_field('instagram', 2); ?>" class="footer__social-item">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.0959 0.442627H6.40873C3.11902 0.442627 0.442627 3.11915 0.442627 6.40885V16.096C0.442627 19.3858 3.11902 22.0622 6.40873 22.0622H16.0959C19.3858 22.0622 22.0622 19.3857 22.0622 16.096V6.40885C22.0624 3.11915 19.3858 0.442627 16.0959 0.442627ZM20.1442 16.096C20.1442 18.3281 18.3281 20.144 16.096 20.144H6.40873C4.17671 20.1442 2.36082 18.3281 2.36082 16.096V6.40885C2.36082 4.17684 4.17671 2.36082 6.40873 2.36082H16.0959C18.328 2.36082 20.144 4.17684 20.144 6.40885V16.096H20.1442Z" fill="white"/>
                                    <path d="M11.2525 5.68188C8.18067 5.68188 5.68164 8.18091 5.68164 11.2527C5.68164 14.3244 8.18067 16.8233 11.2525 16.8233C14.3243 16.8233 16.8233 14.3244 16.8233 11.2527C16.8233 8.18091 14.3243 5.68188 11.2525 5.68188ZM11.2525 14.905C9.23849 14.905 7.59984 13.2666 7.59984 11.2526C7.59984 9.23847 9.23836 7.59995 11.2525 7.59995C13.2666 7.59995 14.9051 9.23847 14.9051 11.2526C14.9051 13.2666 13.2664 14.905 11.2525 14.905Z" fill="white"/>
                                    <path d="M17.0568 4.0553C16.6873 4.0553 16.3242 4.20492 16.0632 4.46707C15.8009 4.72795 15.6501 5.09112 15.6501 5.46198C15.6501 5.83168 15.801 6.19473 16.0632 6.45688C16.3241 6.71775 16.6873 6.86865 17.0568 6.86865C17.4277 6.86865 17.7896 6.71775 18.0517 6.45688C18.3139 6.19473 18.4635 5.83155 18.4635 5.46198C18.4635 5.09112 18.3139 4.72795 18.0517 4.46707C17.7909 4.20492 17.4277 4.0553 17.0568 4.0553Z" fill="white"/>
                                </svg>
                            </a>
                            <a href="<?php the_field('facebook', 2); ?>" class="footer__social-item">
                                <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0252 0.237307L9.05681 0.232544C5.72194 0.232544 3.5668 2.44365 3.5668 5.86592V8.46328H0.582228C0.324325 8.46328 0.115479 8.67236 0.115479 8.93026V12.6935C0.115479 12.9514 0.324563 13.1603 0.582228 13.1603H3.5668V22.6562C3.5668 22.9142 3.77565 23.123 4.03355 23.123H7.92757C8.18547 23.123 8.39432 22.9139 8.39432 22.6562V13.1603H11.884C12.1419 13.1603 12.3507 12.9514 12.3507 12.6935L12.3522 8.93026C12.3522 8.80643 12.3029 8.68784 12.2155 8.60021C12.1281 8.51257 12.009 8.46328 11.8852 8.46328H8.39432V6.26146C8.39432 5.20318 8.6465 4.66594 10.0251 4.66594L12.0247 4.66523C12.2824 4.66523 12.4912 4.45614 12.4912 4.19848V0.704055C12.4912 0.446629 12.2826 0.237783 12.0252 0.237307Z" fill="white"/>
                                </svg>
                            </a>
                            <a href="<?php the_field('youtube', 2); ?>" class="footer__social-item">
                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.8697 6.04738C26.8228 4.803 24.8901 4.29541 21.1991 4.29541H7.80063C4.02511 4.29541 2.05965 4.83575 1.01678 6.16058C0 7.45229 0 9.35554 0 11.9897V17.0103C0 22.1135 1.2064 24.7045 7.80063 24.7045H21.1992C24.4 24.7045 26.1737 24.2566 27.3212 23.1584C28.4979 22.0323 29 20.1936 29 17.0103V11.9897C29 9.21175 28.9213 7.29728 27.8697 6.04738ZM18.6181 15.1931L12.5339 18.3729C12.3979 18.444 12.2491 18.4793 12.1006 18.4793C11.9324 18.4793 11.7646 18.434 11.6159 18.344C11.336 18.1744 11.1651 17.8711 11.1651 17.5438V11.2046C11.1651 10.8779 11.3355 10.5748 11.6149 10.4051C11.8943 10.2355 12.2418 10.2239 12.5317 10.3745L18.6159 13.5338C18.9255 13.6945 19.1199 14.0141 19.1204 14.3627C19.1207 14.7116 18.9272 15.0317 18.6181 15.1931Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-0 col-lg-6 col-xl-5 offset-xl-1">
                        <div class="footer__contacts">
                            <div class="footer__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/phone.svg" alt="телефон" class="footer__contacts-logo">
                                <div class="footer__contacts-tel">
                                    <a href="tel:<?php the_field('phone_number', 2); ?>"><?php the_field('phone_number', 2); ?></a>
                                    <a href="tel:<?php the_field('phone_number2', 2); ?>"><?php the_field('phone_number2', 2); ?></a>
                                </div>
                            </div>
                            <div class="footer__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/pointer.svg" alt="pointer" class="footer__contacts-logo">
                                <address><?php the_field('address', 2); ?></address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="footer__policy">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>
        <?php
            wp_footer();
        ?>
    </body>
</html>