<template>

    <!-- Our Result Section Start -->
    <div class="our-results">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">See the Difference</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our real patient transformation & stunning results</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">					
                    <!-- Transformation Image Start -->
                    <div class="transformation-image wow fadeInUp" data-wow-delay="0.2s">					
                        <figure class="transform-img-1">
                            <img src="/assets/images/transformation-img-1.jpg" alt="">
                        </figure>
						<figure class="transform-img-2">
                            <img src="/assets/images/transformation-img-2.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Transformation Image End -->
                </div>

                <div class="col-md-6">					
                    <!-- Transformation Image Start -->
                    <div class="transformation-image wow fadeInUp" data-wow-delay="0.4s">					
                        <figure class="transform-img-1">
                            <img src="/assets/images/transformation-img-3.jpg" alt="">
                        </figure>
						<figure class="transform-img-2">
                            <img src="/assets/images/transformation-img-4.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Transformation Image End -->
                </div>
                
                <div class="col-lg-12">
                    <!-- Facts Counter Box Start -->
                    <div class="facts-counter-box">
                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="/assets/images/icon-facts-counter-1.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">10</span>+</h3>
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="/assets/images/icon-facts-counter-2.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">150</span>K+</h3>
                                <p>Satisfied clients</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="/assets/images/icon-facts-counter-3.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">5</span>+</h3>
                                <p>Countries Reached</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->

                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <div class="icon-box">
                                <img src="/assets/images/icon-facts-counter-4.svg" alt="">
                            </div>
                            <div class="facts-counter-content">
                                <h3><span class="counter">2</span>K+</h3>
                                <p>loreum ipsum</p>
                            </div>
                        </div>
                        <!-- Facts Counter Item End -->
                    </div>
                    <!-- Facts Counter Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Result Section End -->

  </template>
  
  <script setup>
  import { onMounted } from 'vue';
  import { initCarousels } from 'flowbite';
  
  onMounted(() => {
    initCarousels();
  });
  </script>
  
