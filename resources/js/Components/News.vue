<script setup>
import { onMounted, ref } from 'vue';
import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

const newsItems = ref([
  {
    id: 1,
    title: "Promomedia Wins Tech Innovation Award 2024",
    date: "May 15, 2024",
    category: "Company News",
    excerpt: "Our groundbreaking AR platform recognized as industry leader in digital marketing solutions.",
    image: "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
  },
  {
    id: 2,
    title: "How AI is Revolutionizing Event Marketing",
    date: "April 28, 2024",
    category: "Industry Insights",
    excerpt: "Exploring the future of personalized event experiences through artificial intelligence.",
    image: "https://images.unsplash.com/photo-1533750349088-cd871a92f312?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
  },
  {
    id: 3,
    title: "Case Study: GSMA MWC Brand Activation",
    date: "March 10, 2024",
    category: "Success Stories",
    excerpt: "How we delivered a 300% ROI for our client at Mobile World Congress Barcelona.",
    image: "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
  },
  {
    id: 4,
    title: "The Future of Hybrid Events",
    date: "February 22, 2024",
    category: "Trend Analysis",
    excerpt: "Blending physical and digital experiences for maximum engagement and reach.",
    image: "https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80"
  }
]);

onMounted(() => {
  new Swiper(".news-swiper", {
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
      nextEl: ".news-next-btn",
      prevEl: ".news-prev-btn",
    },
    pagination: {
      el: ".news-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return `<span class="${className} news-bullet"></span>`;
      },
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
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
  <div class="news-section relative py-16 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
      <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-white rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
      <div class="absolute bottom-1/3 right-1/4 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    </div>
    
    <div class="container relative z-10 mx-auto px-4 max-w-7xl">
      <div class="section-title mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-white">Latest <span class="text-transparent bg-clip-text bg-white">News</span></h2>
        <p class="text-gray-400 text-center mt-4 max-w-2xl mx-auto">Stay updated with our insights, achievements, and industry trends</p>
      </div>
      
      <div class="swiper news-swiper relative">
        <!-- Navigation Buttons -->
        <div class="news-next-btn absolute top-1/2 -right-4 z-20 -translate-y-1/2 cursor-pointer bg-black/30 backdrop-blur-sm rounded-full p-3 hover:bg-black/50 transition-all duration-300">
          <i class="fas fa-chevron-right text-white text-xl"></i>
        </div>
        <div class="news-prev-btn absolute top-1/2 -left-4 z-20 -translate-y-1/2 cursor-pointer bg-black/30 backdrop-blur-sm rounded-full p-3 hover:bg-black/50 transition-all duration-300">
          <i class="fas fa-chevron-left text-white text-xl"></i>
        </div>
        
        <div class="swiper-wrapper py-2">
          <!-- News Cards with Content Over Image -->
          <div v-for="item in newsItems" :key="item.id" class="swiper-slide">
            <div class="news-card group h-full relative overflow-hidden rounded-2xl">
              <!-- Background Image -->
              <div 
                class="absolute inset-0 bg-cover bg-center transition-all duration-700 group-hover:scale-110"
                :style="{ backgroundImage: `url(${item.image})` }"
              >
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
              </div>
              
              <!-- Content Overlay -->
              <div class="relative z-10 p-6 h-full flex flex-col justify-end min-h-[400px]">
                <div class="news-category mb-3">
                  <span class="inline-block px-3 py-1 bg-black text-white text-xs font-semibold rounded-full">
                    {{ item.category }}
                  </span>
                </div>
                
                <h3 class="news-title text-xl font-bold text-white mb-3 leading-tight">{{ item.title }}</h3>
                
                <div class="news-meta flex items-center mb-4 text-sm">
                  <div class="news-date flex items-center gap-2 text-white">
                    <i class="far fa-calendar"></i>
                    <span>{{ item.date }}</span>
                  </div>
                </div>
                
                <p class="news-excerpt text-gray-200 text-sm mb-5">{{ item.excerpt }}</p>
                
                <button class="news-cta w-full py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg text-white font-medium hover:bg-white/20 transition-all duration-300 flex items-center justify-center gap-2">
                  Read More
                  <i class="fas fa-arrow-right text-xs"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Pagination -->
        <div class="news-pagination mt-10 flex justify-center gap-2"></div>
      </div>
      
      <div class="text-center mt-12">
        <button class="view-all-btn px-6 py-3 bg-black text-white font-medium hover:opacity-90 transition-all duration-300">
          View All News
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>
.news-section {
  background: linear-gradient(135deg, #0f172a 0%, #1d2839 100%);
}

.news-card {
  @apply rounded-2xl overflow-hidden transition-all duration-300;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.swiper-slide {
  width: auto;
  height: auto;
}

.news-bullet {
  @apply w-3 h-3 rounded-full bg-white opacity-70 transition-all duration-300;
}

.swiper-pagination-bullet-active {
  @apply w-8 bg-white;
}

/* Hover effects */
.news-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 40px rgba(212, 20, 6, 0.2);
}

.news-title {
  position: relative;
  display: inline-block;
}

/* Navigation button styling */
.news-next-btn, .news-prev-btn {
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0.7;
  transition: all 0.3s ease;
}

.news-next-btn:hover, .news-prev-btn:hover {
  opacity: 1;
  transform: scale(1.1);
}

@media (max-width: 768px) {
  .news-next-btn, .news-prev-btn {
    display: none;
  }
  
  .swiper-slide {
    max-width: 85%;
  }
}

/* News card animation */
@keyframes float {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
  100% { transform: translateY(0px); }
}

.swiper-slide-active .news-card {
  animation: float 6s ease-in-out infinite;
}

/* Gradient underline effect for title */
.news-title::after {
  content: '';
  @apply absolute bottom-0 left-0 w-0 h-0.5 bg-white;
  transition: width 0.5s ease;
}

.news-card:hover .news-title::after {
  width: 100%;
}

/* Category tag styling */
.news-category span {
  box-shadow: 0 4px 10px rgba(6, 182, 212, 0.3);
}

/* CTA button hover effect */
.news-cta:hover {
  box-shadow: 0 0 15px rgba(6, 182, 212, 0.5);
}

/* View all button styling */
.view-all-btn {
  box-shadow: 0 4px 15px rgba(6, 182, 212, 0.4);
  transition: all 0.3s ease;
}

.view-all-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 7px 20px rgba(6, 182, 212, 0.5);
}
.swiper-pagination-bullet{
  background-color: white !important;
  background: white !important;
}
.max-w-7xl {
  max-width: 90%;
}
</style>