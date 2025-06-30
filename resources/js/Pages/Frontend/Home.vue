<script setup>
import { onMounted, onUpdated } from 'vue';
import { initCarousels } from 'flowbite';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import HeroSlider from '@/Components/HeroSlider.vue'
import About from '@/Components/About.vue'
import Services from '@/Components/Services.vue'
import Whatwedo from '@/Components/Whatwedo.vue';
// import IntroVideo from '@/Components/IntroVideo.vue'
import CaseStudy from '@/Components/CaseStudy.vue'
import Whywechoose from '@/Components/Whywechoose.vue'
import Howitworks from '@/Components/Howitworks.vue'
import Testimonials from '@/Components/Testimonials.vue'
import Results from '@/Components/Results.vue'
import Appointment from '@/Components/Appointment.vue'
import IntroVideo from '@/Components/IntroVideo.vue';
import QA from '@/Components/QA.vue';
// Initialize carousel when component mounts or updates
const initializeCarousel = () => {
  // Ensure we're in the browser environment
  if (typeof window !== 'undefined') {
    initCarousels();
  }
};

onMounted(() => {
  initializeCarousel();
});

onUpdated(() => {
  initializeCarousel();
});
</script>

<template>

 
<GuestLayout>
<!-- Carousel -->

<HeroSlider />
<About />
  <IntroVideo /> 
 <Services /> 

 <Results />
  <Testimonials /> 
<QA />

<Appointment />
</GuestLayout>
</template>

<style scoped>
/* Animation styles */
.animate-fade-in {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Custom button styles */
.btn-primary {
  background-color: #0d6efd;
  color: white;
  border: none;
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background-color: #0b5ed7;
}

/* Text sizes */
.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}

.h4 {
  font-size: 1.5rem;
}

.fs-5 {
  font-size: 1.25rem;
}

@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}
</style>