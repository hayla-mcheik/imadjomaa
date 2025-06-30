<template>
         <!-- <div class="footer-contact-btn">
                            <Link href="" class="btn-default">Chat on Whatsapp</Link> 
                        </div> -->
    <footer class="main-footer bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Footer Header Start -->
                    <div class="footer-header">
                        <!-- Section Title Start -->
                        <div class="section-title footer-newsletter-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">loreum ipsum loreum ipsum</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Footer Newsletter Form Start -->
                        <div class="footer-newsletter-form">
                            <form id="newslettersForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" id="mail" placeholder="Enter your email" required="">
                                    <button type="submit" class="readmore-btn"><img src="/assets/images/arrow-white.svg" alt=""></button>
                                </div>
                            </form>
                        </div>
                        <!-- Footer Newsletter Form End -->
                    </div>
                    <!-- Footer Header End -->                 
                </div>

                <div class="col-lg-4 col-md-12">
                    <!-- About Footer start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                  
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>loreum ipsum loreum ipsum loreum ipsum loreum ipsum.</p>
                        </div>
                        <!-- About Footer Content End -->

                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><Link href="#"><i class="fa-brands fa-x-twitter"></i></Link> </li>
                                <li><Link href="https://www.facebook.com/profile.php?id=100091064031710"><i class="fa-brands fa-facebook-f"></i></Link> </li>
                                <li><Link href="https://www.instagram.com/dr.mohamad_obeid/"><i class="fa-brands fa-instagram"></i></Link> </li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-8">
                    <div class="footer-links-box">
                        <!-- Footer Links Start -->
                        <div class="footer-links quick-links">
                            <h3>quick link</h3>
                            <ul>
                                <li><Link href="/">Home</Link> </li>
                                <li><Link href="/about">About us</Link> </li>
                                <li><Link href="/services">services</Link> </li>
                                <li><Link href="/contact">Contact us</Link> </li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>Open Hours:</h3>
                            <ul>
                                <li>Mon-Sat: 10:00 to 07:00</li>
                                <li>Saturday-Closed</li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    
                    <!-- Footer Contact Box Start -->
                    <div class="footer-contact-box">
                        <!-- Footer Contact Item Start -->
                        <div class="footer-links footer-contact-item">
                            <h3>Contact:</h3>
                            <ul>
                                <li><i class="fa-solid fa-phone"></i><a href="tel:+96170003161">+96170003161</a> </li>
                            </ul>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-links footer-contact-item">
                            <h3>E-mail:</h3>
                            <ul>
                                <li><i class="fa-solid fa-envelope"></i><a href="mailto:clinicobeid@gmail.com">clinicobeid@gmail.com</a> </li>
                            </ul>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-links footer-contact-item">
                            <h3>Address:</h3>
                            <ul>
                                <li><i class="fa-solid fa-location-dot"></i>beirut,lebanon</li>
                            </ul>
                        </div>
                        <!-- Footer Contact Item End -->
                    </div>
                    <!-- Footer Contact Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Section Start -->
                    <div class="footer-copyright">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                        <footer>
  <p>Copyright © 2025 Hayla – <a href="https://webgenix.info" target="_blank">Webgenix.info</a>. All Rights Reserved.</p>
</footer>

                        </div>
                        <!-- Footer Copyright Text End -->

                        <!-- Footer Privacy Policy Start -->
                        <div class="footer-privacy-policy">
                            <ul>
                                <li><Link href="#">Privacy policy</Link> </li>
                                <li><Link href="#">Term's & condition</Link> </li>
                                <li><Link href="#">help</Link> </li>
                            </ul>
                        </div>
                        <!-- Footer Privacy Policy End -->
                    </div>
                    <!-- Footer Copyright Section End -->
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';
</script>

<style scoped>
.footer-contact-btn{
    position: fixed;
    bottom: 1%;
    right:0%;
    z-index: 999;
}
</style>