<script setup>
import { onMounted, ref } from 'vue';
import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

const events = ref([
  {
    id: 1,
    title: "GSMA Mobile World Congress",
    date: "February 26-29, 2024",
    location: "Barcelona, Spain",
    description: "The world's largest exhibition for the mobile industry, featuring the latest innovations in 5G, IoT, and AI.",
    logo: "../assets/images/madein-lebanon.webp"
  },
  {
    id: 2,
    title: "Web Summit",
    date: "November 11-14, 2024",
    location: "Lisbon, Portugal",
    description: "The world's premier tech conference where the tech world meets to discuss the future of digital innovation.",
    logo: "../assets/images/WWC-2025.webp"
  },
  {
    id: 3,
    title: "CES",
    date: "January 7-10, 2025",
    location: "Las Vegas, USA",
    description: "The most influential tech event in the world showcasing breakthrough technologies and global innovators.",
    logo: "../assets/images/madein-lebanon.webp"
  },
]);

onMounted(() => {
  new Swiper(".events-swiper", {
    modules: [Autoplay, Navigation, Pagination],
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    speed: 600,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".events-next-btn",
      prevEl: ".events-prev-btn",
    },
    pagination: {
      el: ".events-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return `<span class="${className} event-bullet"></span>`;
      },
    },
    breakpoints: {
      640: {
        slidesPerView: 1.5,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 32,
      },
    },
  });
});
</script>

<template>
  <div class="events-section relative py-16 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
      <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-gradient-to-r from-red-600 to-red-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
      <div class="absolute bottom-1/3 right-1/4 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    </div>
    
    <div class="container relative z-10 mx-auto px-4 max-w-7xl">
      <div class="section-title mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-white">Featured <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-red-500">Events</span></h2>
        <p class="text-gray-400 text-center mt-4 max-w-2xl mx-auto">Discover the premier events where innovation meets opportunity</p>
      </div>
      
      <div class="swiper events-swiper relative">
        <!-- Navigation Buttons -->
        <div class="events-next-btn absolute top-1/2 -right-4 z-20 -translate-y-1/2 cursor-pointer bg-black/30 backdrop-blur-sm rounded-full p-3 hover:bg-black/50 transition-all duration-300">
          <i class="fas fa-chevron-right text-white text-xl"></i>
        </div>
        <div class="events-prev-btn absolute top-1/2 -left-4 z-20 -translate-y-1/2 cursor-pointer bg-black/30 backdrop-blur-sm rounded-full p-3 hover:bg-black/50 transition-all duration-300">
          <i class="fas fa-chevron-left text-white text-xl"></i>
        </div>
        
        <div class="swiper-wrapper py-2">
          <!-- Event Cards -->
          <div v-for="event in events" :key="event.id" class="swiper-slide">
            <div class="event-card group h-full">
              <div class="event-gradient absolute inset-0 rounded-2xl overflow-hidden z-0 border border-white/10">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black opacity-95"></div>
                <div class="absolute top-0 left-0 w-full h-1 bg-white"></div>
              </div>
              
              <div class="event-content relative z-10 p-6 h-full flex flex-col">
                <div class="event-header mb-4">
                  <div class="event-logo-container flex items-center justify-center bg-white rounded-lg">
                    <img :src="event.logo" :alt="event.title + ' logo'" class="event-logo object-contain">
                  </div>
                </div>
                
                <div class="flex-grow">
                  <div class="event-date text-red-500 text-sm font-medium mb-2">
                    <i class="fas fa-calendar-alt mr-2"></i>{{ event.date }}
                  </div>
                  
                  <h3 class="event-title text-xl font-bold text-white mb-3 leading-tight">{{ event.title }}</h3>
                  
                  <div class="event-meta flex items-center mb-4">
                    <div class="event-location flex items-center gap-2 text-gray-300">
                      <i class="fas fa-map-marker-alt text-red-500"></i>
                      <span>{{ event.location }}</span>
                    </div>
                  </div>
                </div>
                
                <button class="event-cta w-full py-3 bg-white rounded-lg text-black font-medium hover:opacity-90 transition-all duration-300">
                  Learn More
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Pagination -->
        <div class="events-pagination mt-10 flex justify-center gap-2"></div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.events-section {
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
}

.event-card {
  @apply rounded-2xl overflow-hidden transition-all duration-300;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.swiper-slide {
  width: auto;
  height: auto;
}

.event-content {
  height: 100%;
  display: flex;
  flex-direction: column;
}

.event-bullet {
  @apply w-3 h-3 rounded-full bg-gray-700 opacity-70 transition-all duration-300;
}

.swiper-pagination-bullet-active {
  @apply w-8 bg-gradient-to-r from-orange-500 to-red-500 opacity-100;
}

/* Hover effects */
.event-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 40px rgba(239, 68, 68, 0.2);
}

.event-title {
  position: relative;
  display: inline-block;
}

/* Navigation button styling */
.events-next-btn, .events-prev-btn {
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0.7;
  transition: all 0.3s ease;
}

.events-next-btn:hover, .events-prev-btn:hover {
  opacity: 1;
  transform: scale(1.1);
}

@media (max-width: 768px) {
  .events-next-btn, .events-prev-btn {
    display: none;
  }
  
  .swiper-slide {
    max-width: 85%;
  }
}

/* Gradient underline for title */
.event-title::after {
  content: '';
  @apply absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-orange-500 to-red-500;
  transition: width 0.5s ease;
}

.event-card:hover .event-title::after {
  width: 100%;
}

/* Event card animation */
@keyframes float {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
  100% { transform: translateY(0px); }
}

.swiper-slide-active .event-card {
  animation: float 6s ease-in-out infinite;
}
</style>