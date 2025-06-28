<template>
    <!-- Hero Section Start -->
    <div class="hero hero-bg-image bg-section dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Welcome to Dr. Obeid’s Medical Clinic</h3>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Discover Your Best Self With Us!</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Hello Dr. Obeid, this is a static website created only as a demo to show the design. Once you approve the design, we can start developing the dynamic version, which will take around two weeks to complete.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Hero Button Start -->
                            <div class="hero-btn">
                                <Link href="/book-appointment" class="btn-default btn-highlighted">Get Started</Link>                                 
                            </div>
                            <!-- Hero Button End -->

                            <!-- Video Play Button Start -->
                            <div class="video-play-button">
                                <p>Watch Video</p>
                                <Link href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                    <i class="fa-solid fa-play"></i>
                                </Link> 
                            </div>
                            <!-- Video Play Button End -->
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

  </template>
  
  <script setup>
  import { onMounted } from 'vue';
  import { initCarousels } from 'flowbite';
import { Link } from '@inertiajs/vue3';
  
  onMounted(() => {
    initCarousels();
  });
  </script>
  
  <style scoped>
  .animate-fade-in {
    animation: fadeIn 1s ease-in-out;
  }
  
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  .display-1 {
    font-size: calc(1.625rem + 4.5vw);
    font-weight: 300;
    line-height: 1.2;
  }
  
  @media (min-width: 1200px) {
    .display-1 {
      font-size: 5rem;
    }
  }
  
  .h4 {
    font-size: 1.5rem;
  }
  
  .fs-5 {
    font-size: 1.25rem;
  }
  </style>