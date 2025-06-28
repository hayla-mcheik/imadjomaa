<template>
    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-images">
                        <div class="why-choose-image img-1">
                            <figure class="image-anime reveal">
                                <img src="/assets/images/why-choose-image-1.jpg" alt="">
                            </figure>
                        </div>

                        <div class="why-choose-image img-2">
                            <figure class="image-anime reveal">
                                <img src="/assets/images/why-choose-image-2.jpg" alt="">
                            </figure>
                        </div>

                        <!-- Years Experience Text Start -->
                        <div class="years-experience-text">
                            <p>10 years experience</p>
                        </div>
                        <!-- Years Experience Text End -->
                    </div>
                    <!-- Why Choose Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">why choose us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Experience the art of beauty with expert hands</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Contact Box Start -->
                        <div class="why-choose-contact-box">
                            <h3 class="wow fadeInUp" data-wow-delay="0.4s">"loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum"</h3>
                            <div class="why-choose-contact-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="/assets/images/author-2.jpg" alt="">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="why-choose-contact-item-content">
                                    <p>Contact Us: <a href="tel:70003161">70003161</a> </p>
                                </div>
                            </div>
                        </div>
                        <!-- Why Choose Contact Box End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>                
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

  </template>
  
  <script setup>
  import { onMounted } from 'vue';
  import { initCarousels } from 'flowbite';
  
  onMounted(() => {
    initCarousels();
  });
  </script>
  
