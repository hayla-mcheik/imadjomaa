<template>
         <!-- <div class="footer-contact-btn">
                            <Link href="" class="btn-default">Chat on Whatsapp</Link> 
                        </div> -->
    <!-- Footer Start -->
    <footer class="main-footer">

        <!-- Footer Main Start -->
		<div class="footer-main">
			<div class="container">
				<div class="row">
                    <div class="col-lg-4">
                        <!-- About Footer Start -->
                        <div class="about-footer">
                            <!-- Footer Logo Start -->
                            <div class="footer-logo">
                                <img src="/assets/images/logo.png" alt="">
                            </div>
                            <!-- Footer Logo End -->
    
                            <!-- About Footer Content Start -->
                            <div class="about-footer-content">
                                <p>Quality Work with No Limits. Freelancing Made Simple and Successful.</p>
                            </div>
                            <!-- About Footer Content End -->
    
                            <!-- Footer Privacy Policy Start -->
                            <div class="footer-privacy-policy">
                                <ul>
                                    <li><Link href="#">help</Link></li>
                                    <li><Link href="#">Privacy policy</Link></li>
                                    <li><Link href="#">Term's & condition</Link></li>
                                </ul>
                            </div>
                            <!-- Footer Privacy Policy End -->
                        </div>
                        <!-- About Footer End -->
                    </div>
                    
                    <div class="col-lg-2 col-md-3">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>Quick link</h3>
                            <ul>
                                <li><Link href="/">home</Link></li>
                                <li><Link href="/about">about us</Link></li>
                                <li><Link href="/projects">Projects</Link></li>
                                <li><Link href="/news">PressKit</Link></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    
                    <div class="col-lg-3 col-md-5">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>Services</h3>
                            <ul>
                                <li><Link href="#">search engine optimization</Link></li>
                                <li><Link href="#">e-commerce solutions</Link></li>
                                <li><Link href="#">web design & development</Link></li>
                                <li><Link href="#">content management systems</Link></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <!-- Footer Content List Box Start -->
                        <div class="footer-links footer-content-list">
                            <h3>Contact</h3>

                            <!-- Footer Content Item Start -->
                            <div class="footer-contact-item">
                         
                                <div class="footer-contact-content">
                                    <p><Link href="tel:+96178913139">+96178913139</Link></p>
                                    <p><Link href="#">info@promo-fix.com</Link></p>
                                </div>
                            </div>
                            <!-- Footer Content Item End -->
                            
                            <!-- Footer Content Item Start -->
                            <div class="footer-contact-item">
                           
                                <div class="footer-contact-content">
                                    <p>beirut , lebanon</p>
                                </div>
                            </div>
                            <!-- Footer Content Item End -->
                        </div>
                        <!-- Footer Content List Box End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Footer CTA Box Start -->
                        <div class="footer-cta-box">
                            <!-- Footer Newsletter Form Start -->
                            <div class="footer-newsletter-form">
                                <h3>Subscribe our newsletter:</h3>
                                <form id="newslettersForm" action="#" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="mail" class="form-control" id="mail" placeholder="Enter Email" required="">
                                        <button type="submit" class="btn-highlighted">subscribe</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Footer Newsletter Form End -->

                            <!-- Footer Social Links Start -->
                            <div class="footer-social-links">
                                <span>Follow on: </span>
                                <ul>
                                    <li><Link href="#"><i class="fa-brands fa-whatsapp text-white"></i></Link></li>
                                    <li><Link href="#"><i class="fa-brands fa-x-twitter text-white"></i></Link></li>
                                    <li><Link href="#"><i class="fa-brands fa-facebook-f text-white"></i></Link></li>
                                    <li><Link href="#"><i class="fa-brands fa-instagram text-white"></i></Link></li>                                    								
                                </ul>
                            </div>
                            <!-- Footer Social Links End -->
                        </div>
                        <!-- Footer CTA Box End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2025 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright Text End -->
                    </div>
				</div>
			</div>
		</div>
		<!-- Footer Main End -->
    </footer>
    <!-- Footer End -->

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