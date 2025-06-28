<template>


    <!-- Our Services Section Start -->
    <div class="our-services bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Services</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">loreum ipsum loreum ipsum loreum ipsum loreum ipsum</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            
            <div class="row">
      

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2><Link href="#">loreum ipsum loreum ipsum loreum ipsum loreum ipsum</Link> </h2>
                                <Link href="#" class="readmore-btn"><img src="/assets/images/arrow-white.svg" alt=""></Link> 
                            </div>
                            <p>A loreum ipsum loreum ipsumloreum ipsum loreum ipsum</p>                            
                        </div>
                        <div class="service-image">
                            <Link href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/assets/images/service-image-2.jpg" alt="">
                                </figure>
                            </Link>                            
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2><Link href="#">loreum ipsum loreum ipsum loreum ipsum loreum ipsum</Link> </h2>
                                <Link href="#" class="readmore-btn"><img src="/assets/images/arrow-white.svg" alt=""></Link> 
                            </div>
                            <p>A loreum ipsum loreum ipsumloreum ipsum loreum ipsum</p>                            
                        </div>
                        <div class="service-image">
                            <Link href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/assets/images/service-image-2.jpg" alt="">
                                </figure>
                            </Link>                            
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2><Link href="#">loreum ipsum loreum ipsum loreum ipsum loreum ipsum</Link> </h2>
                                <Link href="#" class="readmore-btn"><img src="/assets/images/arrow-white.svg" alt=""></Link> 
                            </div>
                            <p>A loreum ipsum loreum ipsumloreum ipsum loreum ipsum</p>                            
                        </div>
                        <div class="service-image">
                            <Link href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/assets/images/service-image-2.jpg" alt="">
                                </figure>
                            </Link>                            
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                
             
           
                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="1.2s">
                        <p><span>Free</span>Let's make something great work together. <Link href="/contact">Get Free Quote</Link> </p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

  </template>
  
  <script setup>
  import { onMounted } from 'vue';
  import { initCarousels } from 'flowbite';
import { Link } from '@inertiajs/vue3';
  
  onMounted(() => {
    initCarousels();
  });
  </script>
  
