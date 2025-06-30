<template>


    <!-- Our Services Section Start -->
    <div class="our-services bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Services</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Services We Provided</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            
            <div class="row">
      

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-image">
                            <Link href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/assets/images/img-rhino.jpg" alt="">
                                </figure>
                            </Link>                            
                        </div>
                                  <div class="service-content mt-2">
                            <div class="service-content-title">
                                <h2><Link href="#" class="text-lg font-bold">loreum ipsum</Link> </h2>
                            </div>
                            <p class="text-sm">A loreum ipsum loreum ipsumloreum ipsum loreum ipsum</p>                            
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

           
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-image">
                            <Link href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/assets/images/rhino-img.jpg" alt="">
                                </figure>
                            </Link>                            
                        </div>
                                  <div class="service-content mt-2">
                            <div class="service-content-title">
                                <h2><Link href="#" class="text-lg font-bold">loreum ipsum</Link> </h2>
                            </div>
                            <p class="text-sm">A loreum ipsum loreum ipsumloreum ipsum loreum ipsum</p>                            
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-image">
                            <Link href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/assets/images/img-rhino.jpg" alt="">
                                </figure>
                            </Link>                            
                        </div>
                                  <div class="service-content mt-2">
                            <div class="service-content-title">
                                <h2><Link href="#" class="text-lg font-bold">loreum ipsum</Link> </h2>
                            </div>
                            <p class="text-sm">A loreum ipsum loreum ipsumloreum ipsum loreum ipsum</p>                            
                        </div>
                    </div>
                    <!-- Service Item End -->
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
  
