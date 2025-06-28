<template>

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/assets/images/about-img-1.jpg" alt="">
                            </figure>

                            <!-- Experience Circle Start -->
                            <div class="company-experience-circle">
                                <img src="/assets/images/experience-circle.svg" alt="">
                            </div>
                            <!-- Experience Circle End -->      
                        </div>
                        <!-- About Image 1 End -->

                        <!-- About Image 2 Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="/assets/images/about-img-2.jpg" alt="">
                            </figure>
                        </div>
                        <!-- About Image 2 End -->                  
                    </div>
                    <!-- About Us Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Hero Content Box Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">About us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Your journey to radiant confidence</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Hello Dr. Obeid this is a static website created only as a demo to show the design. Once you approve the design, we can start developing the dynamic version, which will take around two weeks to complete</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Experience Box Start -->
                        <div class="about-experience-box">                           
                            <!-- About Experience List Start -->
                            <div class="about-experience-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>loreum ipsum loreum ipsum</li>
                                    <li>loreum ipsum loreum ipsum</li>
                                    <li>loreum ipsum loreum ipsum</li>
                                </ul>
                            </div>
                            <!-- About Experience List End -->

                            <!-- About Experience Image Start -->
                            <div class="about-experience-image">
                                <figure class="image-anime reveal">
                                    <img src="/assets/images/about-experience-image.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Experience Image End -->
                        </div>
                        <!-- About Experience Box End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Contact Box Start -->
                            <div class="about-contact-box">
                                <div class="icon-box">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="about-contact-box-content">
                                    <p>Need Help!</p>
                                    <h3><a href="tel:+96170003161">+96170003161</a> </h3>
                                </div>
                            </div>
                            <!-- About Contact Box End -->

                            <!-- About Contact Button Start -->
                            <div class="about-us-btn">
                                <Link href="/about" class="btn-default">more about</Link> 
                            </div>
                            <!-- About Contact Button End -->
                        </div>
                        <!-- About Us Body End -->
                    </div>
                    <!-- Hero Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->
  </template>
  
  <script setup>
  import { onMounted } from 'vue';
  import { initCarousels } from 'flowbite';
import { Link } from '@inertiajs/vue3';
  
  onMounted(() => {
    initCarousels();
  });
  </script>
  
<style scope>
.about-img-1 figure, .about-img-2 figure{
    visibility: visible;
}
</style>