<template>
    <!-- Photo Gallery Section Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box" ref="galleryContainer">
                <div class="col-lg-4 col-6">
                    <div class="photo-gallery wow fadeInUp">
                        <a href="/assets/images/gallery-1.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/assets/images/gallery-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- Add more gallery items here -->
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const galleryContainer = ref(null); // Template ref

onMounted(() => {
    // Ensure jQuery and Magnific Popup are loaded
    if (window.$ && window.$.fn.magnificPopup) {
        $(galleryContainer.value).magnificPopup({
            delegate: 'a', // Child selector
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom',
            image: {
                verticalFit: true,
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300,
                opener: function(element) {
                    return element.find('img');
                }
            }
        });
    } else {
        console.error('jQuery or Magnific Popup not loaded!');
    }
});
</script>