<template>
    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Reach out for your perfect look!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Loreum ipsum loreum ipsum loreum ipsum loreum ipsum.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>

                <div class="col-lg-8">
                    <!-- Contact Info List Start -->
                    <div class="contact-info-list">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/assets/images/icon-location.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>location</h3>
                                <p>beirut , lebanon.</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                         
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/assets/images/icon-phone.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>contact us</h3>
                                <p><a href="tel:+96170003161">+96170003161</a> </p>
                                <p><a href="tel:+96170003161">+96170003161</a> </p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <img src="/assets/images/icon-mail.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>email</h3>
                                <p><a href="mailto:clinicobeid@gmail.com">clinicobeid@gmail.com</a> </p>
                                <p><a href="mailto:clinicobeid@gmail.com">clinicobeid@gmail.com</a> </p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Contact Form Start -->
    <div class="conatct-us-form">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Have any questions?</h2>
                        </div>
                        <!-- Section Title End -->
                         
                        <!-- Contact Form Start -->
                        <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone No." required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write Message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default"><span>submit now</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Form End -->
                </div>

                <!-- Google Map Start -->
                <div class="col-lg-6">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://maps.app.goo.gl/1Jo5S8wisx8MMgBe7" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
                <!-- Google Map End -->
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
</template>

<script setup>
import { Link } from '@inertiajs/vue3';


</script>

<style scoped>

</style>