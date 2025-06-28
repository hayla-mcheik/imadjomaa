<template>


    <!-- Case Study Section Start -->
    <div class="case-study">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Case Study Content Start -->
                    <div class="case-study-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">case study's</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">loreum ipsum loreum ipsum</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum loreum ipsum</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Case Study Button Start -->
                        <div class="case-study-btn wow fadeInUp" data-wow-delay="0.4s">
                            <!-- <Link href="case-study.h" class="btn-default">All Case Study's</Link>  -->
                        </div>
                        <!-- Case Study Button End -->
                    </div>
                    <!-- Case Study Content End -->
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <Link href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="/assets/images/case-study-image-1.jpg" alt="">
                                        </figure>
                                    </Link> 
                                </div>
                                <!-- Case Study Image End -->
                        
                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><Link href="#">loreum ipsum loreum ipsum</Link> </h3>
                                    </div>
                                    <!-- Case Study Content End -->
                        
                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <Link href="#" class="readmore-btn"><img src="/assets/images/arrow-white.svg" alt=""></Link> 
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->                 
                            </div>
                            <!-- Case Study Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Case Study Item Start -->
                            <div class="case-study-item wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Case Study Image Start -->
                                <div class="case-study-image">
                                    <Link href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="/assets/images/case-study-image-2.jpg" alt="">
                                        </figure>
                                    </Link> 
                                </div>
                                <!-- Case Study Image End -->
                        
                                <!-- Case Study Body Start -->
                                <div class="case-study-body">
                                    <!-- Case Study Content Start -->
                                    <div class="case-study-item-content">
                                        <h3><Link href="#">loreum ipsum loreum ipsum</Link> </h3>
                                    </div>
                                    <!-- Case Study Content End -->
                        
                                    <!-- Case Study Button Start -->
                                    <div class="case-study-readmore-btn">
                                        <Link href="#" class="readmore-btn"><img src="/assets/images/arrow-white.svg" alt=""></Link> 
                                    </div>
                                    <!-- Case Study Button End -->
                                </div>
                                <!-- Case Study Body End -->                 
                            </div>
                            <!-- Case Study Item End -->
                        </div>

                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study Section End -->

  </template>
  
  <script setup>
  import { onMounted } from 'vue';
  import { initCarousels } from 'flowbite';
import { Link } from '@inertiajs/vue3';
  
  onMounted(() => {
    initCarousels();
  });
  </script>
  
