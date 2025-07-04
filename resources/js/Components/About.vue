<template>
  <!-- About Section Start -->
  <div class="about-section relative overflow-hidden pt-16 page-project-single border-b-8 border-white">
    <!-- Optimized Space Background -->
    <div class="absolute inset-0 bg-black">
      <!-- Lightweight Stars -->
      <div class="stars"></div>
      <div class="stars stars-2"></div>
    </div>
    
    <div class="container relative mx-auto px-4 max-w-7xl">
      <div class="max-w-4xl mx-auto text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
          About Us
        </h2>
        
        <div class="about-description bg-black p-2">
          <p class="text-lg text-white/90 leading-relaxed">
            Dedicated to pushing the boundaries of innovation, Monty Mobile stands at the forefront of the telecommunications industry, 
            setting new benchmarks with our groundbreaking, in-house customized telecom solutions. With a relentless drive for improvement, 
            we have established ourselves as a prominent market force.
          </p>
        </div>
      </div>
      
      <!-- New Quote, Mission & Vision Section -->
      <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto mb-16 items-center">
        <!-- Image Column -->
        <div class="relative">
          <div class="rounded-2xl overflow-hidden border-2 border-purple-500/30 transform transition duration-700 hover:scale-105">
          <img src="/assets/images/38.jpg" class="img-fluid" />
          </div>
          
          <!-- Floating Quote -->
          <div class="absolute -bottom-6 -right-6 bg-gradient-to-r from-purple-900 to-red-900 p-6 rounded-xl border border-purple-500/40 max-w-xs transform rotate-3">
            <p class="text-white italic text-lg">"Innovate, Connect, Empower."</p>
          </div>
        </div>
        
        <!-- Mission & Vision Column -->
        <div class="grid grid-cols-1 gap-8">
          <div class="mission-vision-card bg-gradient-to-br from-red-900/30 to-transparent p-6 border border-red-500/30 rounded-xl">
            <div class="flex items-start">
                <div class="icon-container bg-red-900/80 p-3 rounded-lg mr-4">
                <i class="fas fa-eye text-xl text-white"></i>
              </div>
              <h3 class="text-2xl font-bold text-white">Quote</h3>
            </div>
            <p class="text-white/80 pl-14">
              To revolutionize the telecommunications landscape by delivering cutting-edge, customized solutions that enable seamless global connectivity.
            </p>
          </div>
          <!-- Mission Card -->
          <div class="mission-vision-card  bg-gradient-to-br from-red-900/30 to-transparent p-6 border border-red-500/30 rounded-xl">
            <div class="flex items-start">
                <div class="icon-container bg-red-900/80 p-3 rounded-lg mr-4">
                <i class="fas fa-eye text-xl text-white"></i>
              </div>
              <h3 class="text-2xl font-bold text-white">Our Mission</h3>
            </div>
            <p class="text-white/80 pl-14">
              To revolutionize the telecommunications landscape by delivering cutting-edge, customized solutions that enable seamless global connectivity.
            </p>
          </div>
          
          <!-- Vision Card -->
          <div class="mission-vision-card bg-gradient-to-br from-red-900/30 to-transparent p-6 border border-red-500/30 rounded-xl">
            <div class="flex items-start">
              <div class="icon-container bg-red-900/80 p-3 rounded-lg mr-4">
                <i class="fas fa-eye text-xl text-white"></i>
              </div>
              <h3 class="text-2xl font-bold text-white">Our Vision</h3>
            </div>
            <p class="text-white/80 pl-14">
              To be the world's leading enabler of digital transformation in the telecom sector, driving progress and empowering societies.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Value Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div 
          v-for="(card, index) in valueCards" 
          :key="index" 
          class="value-card"
          :style="{ '--delay': index * 0.1 + 's' }"
        >
          <div class="card-icon mb-6">
            <i :class="card.icon"></i>
          </div>
          <h3 class="card-title">{{ card.title }}</h3>
          <p class="card-description">{{ card.description }}</p>
        </div>
      </div>
    </div>
    
    <!-- Floating Satellites -->
    <div class="satellite sat-1"></div>
    <div class="satellite sat-2"></div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const valueCards = ref([
  {
    icon: 'fas fa-lightbulb text-white text-3xl',
    title: 'Innovation',
    description: 'Pioneering new solutions that redefine industry standards'
  },
  {
    icon: 'fas fa-users text-white text-3xl',
    title: 'Excellence',
    description: 'Delivering exceptional quality in every product and service'
  },
  {
    icon: 'fas fa-rocket text-white text-3xl',
    title: 'Growth',
    description: 'Continuously expanding our capabilities and market reach'
  }
]);
</script>

<style scoped>
/* Existing styles remain unchanged */

/* Add new styles for the mission/vision section */
.mission-vision-card {
  backdrop-filter: blur(10px);
  transition: all 0.4s ease;
  opacity: 0;
  transform: translateY(30px);
  animation: card-appear 0.8s forwards;
  animation-delay: calc(var(--index) * 0.2s);
}

.mission-vision-card:nth-child(1) {
  --index: 1;
}

.mission-vision-card:nth-child(2) {
  --index: 2;
}

.mission-vision-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(139, 92, 246, 0.2);
}

.icon-container {
  box-shadow: 0 0 15px rgba(139, 92, 246, 0.4);
}

/* Ensure existing animations work with new elements */
@keyframes card-appear {
  to { opacity: 1; transform: translateY(0); }
}

/* Responsive adjustments for new section */
@media (max-width: 768px) {
  .mission-vision-card {
    padding: 20px;
  }
  
  .mission-vision-card p {
    padding-left: 0;
    margin-top: 15px;
  }
}
</style>