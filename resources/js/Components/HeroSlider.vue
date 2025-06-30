<template>
    <!-- Hero Section Start -->
    <div class="hero hero-bg-image bg-section dark-section parallaxie">
        <div class="container">
            <div class="row justify-between">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp color-green">Welcome to Dr. Obeid’s Medical Clinic</h3>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Discover Your Best Self With Us!</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Hello Dr. Obeid, this is a static website created only as a demo to show the design. Once you approve the design, we can start developing the dynamic version, which will take around two weeks to complete.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Hero Button Start -->
                            <div class="hero-btn w-100">
                             
                                    <button class="appointment-btn">
                                        <i class="fas fa-calendar-check"></i> Book Appointment
                                    </button>
                                    
                              </div>
                            <!-- Hero Button End -->

                            <!-- Video Play Button Start -->
                  
                            <!-- Video Play Button End -->
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            <div class="col-md-3 d-none d-md-block float-end mt-48">
                            <div class="card-back-opacity">
                                <div class="doctor-card">
                                    <div class="doctor-header">
                                        <div class="doctor-avatar">
                                            <i class="fas fa-user-md"></i>
                                        </div>
                                        <div class="doctor-info">
                                            <h4 class="text-lg font-bold text-white">Dr. Mohammad Obeid</h4>
                                            <div class="text-xs text-white">Rhinoplasty Specialist</div>
                                        </div>
                                    </div>
                                
                                    <div class="availability-badge">
                                        <i class="fas fa-check-circle"></i>
                                        <span class="text-xs text-white">12+ Years of Surgical Experience</span>
                                    </div>
                                  
                                </div>
                            </div>
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
  

          /* Doctor Card */
        .card-back-opacity {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 10px;
            box-shadow: var(--card-shadow);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
            z-index: 999;
            position: relative;
        }
        
        .card-back-opacity:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        
        .doctor-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .doctor-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            gap: 10px;
        }
        
        .doctor-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            flex-shrink: 0;

        }
        
        .doctor-info {
            flex: 1;
        }
        
        .doctor-name {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
      
        .availability-badge {
                 background: linear-gradient(to right, var(--back-color), var(--secondary-color));
            color: #34a853;
            padding: 8px 15px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
        }
        
        .availability-badge i {
            font-size: 1rem;
        }
        
        .appointment-btn {
            background: linear-gradient(to right, var(--back-color), var(--secondary-color));
            color: white;
            padding: 14px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }
        

    
  </style>