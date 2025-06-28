<template>

    <!-- What We Do section Start -->
    <div class="what-we-do">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <!-- What We Image Start -->
                    <div class="what-we-image-1">
                        <img src="/assets/images/imgwhatwedo.jpg" alt="">
                    </div>
                    <!-- What We Image End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- What We Content Start -->
                    <div class="what-we-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">what we do</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Transforming beauty confidence</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Experience List Start -->
                        <div class="about-experience-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>loreum ipsum loreum ipsum</li>
                                <li>loreum ipsum loreum ipsum</li>
                                <li>loreum ipsum loreum ipsum</li>
                            </ul>
                        </div>
                        <!-- About Experience List End -->

                        <!-- What We Button Start -->
                        <div class="what-we-btn wow fadeInUp" data-wow-delay="0.6s">
                            <Link href="/contact" class="btn-default">learn more</Link> 
                        </div>
                        <!-- What We Button End -->
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- What We Image Start -->
                    <div class="what-we-image-2">
                        <figure class="image-anime">
                            <img src="/assets/images/what-we-image-2.jpg" alt="">
                        </figure>

                        <!-- Experirnce Box Start -->
                        <div class="experirnce-box">
                            <h2><span class="counter">25</span>+</h2>
                            <p>Years of Experirnce</p>
                        </div>
                        <!-- Experirnce Box End -->
                    </div>
                    <!-- What We Image Start -->                   
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do section End -->

  </template>
  
  <script setup>
  import { onMounted } from 'vue';
  import { initCarousels } from 'flowbite';
import { Link } from '@inertiajs/vue3';
  
  onMounted(() => {
    initCarousels();
  });
  </script>
  
