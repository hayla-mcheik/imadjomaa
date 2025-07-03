<template>
  <!-- About Section Start -->
  <div class="about-section relative overflow-hidden py-16">
    <!-- Optimized Space Background -->
    <div class="absolute inset-0 z-0 bg-black">
      <!-- Lightweight Stars -->
      <div class="stars"></div>
      <div class="stars stars-2"></div>
    </div>
    
    <div class="container relative z-10 mx-auto px-4 max-w-7xl">

      
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
      
      <!-- Value Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div 
          v-for="(card, index) in valueCards" 
          :key="index" 
          class="value-card"
          :style="{ '--delay': index * 0.1 + 's' }"
        >
          <div class="card-icon">
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
.about-section {
  min-height: 100vh;
  display: flex;
  align-items: center;
}

/* Lightweight Stars Background */
.stars {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  animation: stars-anim 120s linear infinite;
}

.stars::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: 
    radial-gradient(1px 1px at 10% 20%, #fff, transparent),
    radial-gradient(1px 1px at 20% 30%, #fff, transparent),
    radial-gradient(1px 1px at 30% 40%, #fff, transparent),
    radial-gradient(1px 1px at 40% 50%, #fff, transparent),
    radial-gradient(1px 1px at 50% 60%, #fff, transparent),
    radial-gradient(1px 1px at 60% 70%, #fff, transparent),
    radial-gradient(1px 1px at 70% 80%, #fff, transparent),
    radial-gradient(1px 1px at 80% 90%, #fff, transparent);
  background-repeat: repeat;
  background-size: 200px 200px;
}

.stars-2 {
  animation-duration: 80s;
  opacity: 0.6;
}

.stars-2::before {
  background-size: 300px 300px;
}

@keyframes stars-anim {
  from { background-position: 0 0; }
  to { background-position: 0 1000px; }
}

/* Planet Styling */
.planet-container {
  position: relative;
  width: 240px;
  height: 240px;
}

.planet {
  position: relative;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  overflow: hidden;
  transform-style: preserve-3d;
  animation: planet-float 15s infinite alternate ease-in-out;
}

.planet-surface {
  position: absolute;
  width: 100%;
  height: 100%;
  background: 
 black;
  border-radius: 50%;
  box-shadow: 
    inset -20px -20px 40px rgba(0, 0, 0, 0.8),
    inset 10px 10px 20px rgba(255, 255, 255, 0.1);
}

.planet-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 120%;
  height: 120%;
  background: radial-gradient(circle, rgba(188, 14, 14, 0.3) 0%, transparent 70%);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  animation: planet-glow-pulse 4s infinite alternate;
}

@keyframes planet-float {
  0% { transform: translateY(0) rotate(0deg); }
  100% { transform: translateY(-20px) rotate(3deg); }
}

@keyframes planet-glow-pulse {
  0% { opacity: 0.2; transform: translate(-50%, -50%) scale(0.95); }
  100% { opacity: 0.4; transform: translate(-50%, -50%) scale(1.05); }
}

/* Value Cards */
.value-card {
  background: rgba(15, 23, 42, 0.7);
  backdrop-filter: blur(10px);
  border-radius: 16px;
  border: 1px solid rgba(139, 92, 246, 0.2);
  padding: 30px;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  opacity: 0;
  transform: translateY(30px);
  animation: card-appear 0.8s forwards;
  animation-delay: var(--delay);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.value-card:hover {
  transform: translateY(-10px);
  box-shadow: 
    0 15px 35px rgba(139, 92, 246, 0.25),
    0 0 0 1px rgba(139, 92, 246, 0.3);
}

@keyframes card-appear {
  to { opacity: 1; transform: translateY(0); }
}

.card-icon {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: rgba(139, 92, 246, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 25px;
  border: 1px solid rgba(139, 92, 246, 0.3);
  box-shadow: 0 0 20px rgba(139, 92, 246, 0.2);
}

.card-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: white;
  margin-bottom: 15px;
  background: linear-gradient(90deg, red, #fff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.card-description {
  color: #cbd5e1;
  font-size: 1.1rem;
  line-height: 1.6;
}

/* Satellites */
.satellite {
  position: absolute;
  border-radius: 50%;
  background: white;
  box-shadow: 0 0 10px 2px red;
}

.sat-1 {
  width: 12px;
  height: 12px;
  top: 30%;
  left: 15%;
  animation: satellite-orbit 18s infinite linear;
}

.sat-2 {
  width: 8px;
  height: 8px;
  top: 65%;
  right: 20%;
  animation: satellite-orbit 22s 3s infinite linear;
}

@keyframes satellite-orbit {
  0% { 
    transform: 
      rotate(0deg) 
      translateX(100px) 
      rotate(0deg); 
  }
  100% { 
    transform: 
      rotate(360deg) 
      translateX(100px) 
      rotate(-360deg); 
  }
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .planet-container {
    width: 180px;
    height: 180px;
    margin-top: 40px;
  }
  
  .about-description p {
    font-size: 1rem;
  }
  
  .card-icon {
    width: 70px;
    height: 70px;
  }
  
  .card-title {
    font-size: 1.3rem;
  }
  
  .card-description {
    font-size: 1rem;
  }
}
.max-w-7xl {
  max-width: 90%;
}
</style>