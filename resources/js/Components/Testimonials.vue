<script setup>
import { ref, onMounted } from 'vue';
import Swiper from 'swiper';
import 'swiper/css';

const swiperInstance = ref(null);

onMounted(() => {
    swiperInstance.value = new Swiper('.testimonial-slider .swiper', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
        },
            breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      386: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      576: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
      1400: {
        slidesPerView: 3,
      },
    },
    });
});
</script>

<template>
    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials bg-section dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-testimonial-image">
                        <figure class="image-anime reveal">
                            <img src="/assets/images/testimonial-image.jpg" alt="Happy Clients">
                        </figure>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Our Testimonial Content Start -->
                    <div class="our-testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Testimonials</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Life-Changing Results From Our Clients</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">"We take pride in the transformations our clients experience. Here's what they have to say about their journey with us."</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Content Button Start -->
                        <div class="testimonial-author-details wow fadeInUp" data-wow-delay="0.4s">
                            <h3>Sarah Johnson</h3>
                            <p>Marketing Director</p>
                        </div>
                        <!-- Testimonial Content Button End -->
                    </div>
                    <!-- Our Testimonial Content End -->
                </div>

                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-content">
                                            <p>"Working with this team completely transformed our business approach. Their innovative strategies helped us increase revenue by 150% in just six months!"</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="/assets/images/author-1.jpg" alt="Michael Thompson">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>Michael Thompson</h3>
                                                <p>CEO, Tech Innovations</p>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>     
                                
                                <!-- Additional Testimonial Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-content">
                                            <p>"The attention to detail and personalized approach made all the difference. We've seen a 300% ROI on our marketing spend since implementing their recommendations."</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="/assets/images/author-2.jpg" alt="Jessica Williams">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>Jessica Williams</h3>
                                                <p>Marketing Director, Global Solutions</p>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                
                                <!-- Additional Testimonial Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-content">
                                            <p>"Their expertise in digital transformation helped us modernize our operations. We've reduced costs by 40% while improving customer satisfaction scores significantly."</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="/assets/images/author-3.jpg" alt="Robert Chen">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>Robert Chen</h3>
                                                <p>Operations Director, Manufacturing Inc</p>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            
                            <!-- Add Swiper controls -->
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->
</template>

<style scoped>
.testimonial-slider {
    position: relative;
    margin-top: 50px;
}

.swiper {
    padding: 20px 40px;
}

.swiper-button-prev, .swiper-button-next {
    color: #fff;
    background: rgba(0,0,0,0.3);
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.swiper-button-prev:after, .swiper-button-next:after {
    font-size: 20px;
}

.swiper-pagination-bullet {
    background: #fff;
    opacity: 0.5;
}

.swiper-pagination-bullet-active {
    opacity: 1;
}
</style>