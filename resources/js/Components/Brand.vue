<template>
    <div class="container">
                 <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our <span>Brands</span></h2>
                    </div>

  <div class="brand-slider">
    <swiper
      :modules="[Autoplay]"
      :slides-per-view="slidesPerView"
      :space-between="30"
      :autoplay="{
        delay: 2500,
        disableOnInteraction: false,
      }"
      :loop="true"
      :breakpoints="breakpoints"
    >
      <swiper-slide >
        <div class="logo-container bg-white p-5">
          <img src="/assets/images/playhub-logo.png" class="logo-image">
        </div>
      </swiper-slide>

            <swiper-slide >
        <div class="logo-container bg-white p-5">
          <img src="/assets/images/Tunehub logo.png" class="logo-image">
        </div>
      </swiper-slide>
            <swiper-slide >
        <div class="logo-container bg-white p-5">
          <img src="/assets/images/playhub-logo.png" class="logo-image">
        </div>
      </swiper-slide>
            <swiper-slide >
        <div class="logo-container bg-white p-5">
          <img src="/assets/images/Techpulse logo.png" class="logo-image">
        </div>
      </swiper-slide>
            <swiper-slide >
        <div class="logo-container bg-white p-5">
          <img src="/assets/images/promomedia-logo-black.png" class="logo-image">
        </div>
      </swiper-slide>
            <swiper-slide >
        <div class="logo-container bg-white p-5">
          <img src="/assets/images/Amazon ADS.png" class="logo-image">
        </div>
      </swiper-slide>
            <swiper-slide >
        <div class="logo-container bg-white p-5">
          <img src="/assets/images/playhub-logo.png" class="logo-image">
        </div>
      </swiper-slide>
            <swiper-slide >
        <div class="logo-container bg-white p-5">
          <img src="/assets/images/playhub-logo.png" class="logo-image">
        </div>
      </swiper-slide>
            <swiper-slide >
        <div class="logo-container bg-white p-5">
          <img src="/assets/images/playhub-logo.png" class="logo-image">
        </div>
      </swiper-slide>
    </swiper>
  </div>
  </div>
</template>

<script>
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Autoplay } from 'swiper/modules'
import 'swiper/css'

export default {
  components: { Swiper, SwiperSlide },
  setup() {
    const breakpoints = {
      320: { slidesPerView: 2 },
      640: { slidesPerView: 3 },
      768: { slidesPerView: 4 },
      1024: { slidesPerView: 5 },
      1280: { slidesPerView: 6 }
    }

    return {
      Autoplay,
      slidesPerView: 5,
      breakpoints
    }
  }
}
</script>

<style scoped>
.brand-slider {
  padding: 2rem 0;
}

.logo-container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100px;
  padding: 0 15px;
}

.logo-image {
  max-width: 100%;
  max-height: 80px;
  width: auto;
  height: auto;
  filter: grayscale(100%);
  opacity: 0.7;
  transition: all 0.3s ease;
}

.logo-image:hover {
  filter: grayscale(0%);
  opacity: 1;
  transform: scale(1.05);
}

/* Optional navigation buttons */
:deep(.swiper-button-prev),
:deep(.swiper-button-next) {
  color: #333;
  background: rgba(255,255,255,0.8);
  border-radius: 50%;
  width: 40px;
  height: 40px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

:deep(.swiper-button-prev::after),
:deep(.swiper-button-next::after) {
  font-size: 18px;
}
</style>