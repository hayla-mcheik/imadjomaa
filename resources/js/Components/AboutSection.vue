<template>
  <div class="our-story">
    <!-- Hero Section -->
    <section class="hero bg-gradient-to-r from-indigo-900 to-purple-800 text-white py-24 px-4">
      <div class="container mx-auto text-center max-w-4xl">
        <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Our Journey</h1>
        <p class="text-xl md:text-2xl opacity-90 max-w-2xl mx-auto">
          A tale of passion, innovation, and shared dreams
        </p>
      </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-20 px-4">
      <div class="container mx-auto max-w-5xl">
        <h2 class="text-3xl font-serif font-bold text-center mb-16 text-gray-800">Our Story Unfolds</h2>
        
        <div class="timeline">
          <div 
            v-for="(event, index) in timelineEvents" 
            :key="index" 
            class="timeline-event flex flex-col md:flex-row mb-16"
          >
            <!-- Event Content -->
            <div 
              class="timeline-content p-8 rounded-2xl shadow-lg bg-white transform transition-all duration-500 hover:scale-[1.02]"
              :class="index % 2 === 0 ? 'md:mr-auto md:text-right md:pr-16' : 'md:ml-auto md:pl-16'"
            >
              <span class="text-purple-600 font-bold text-sm tracking-wider">{{ event.year }}</span>
              <h3 class="text-2xl font-bold my-3 text-gray-800">{{ event.title }}</h3>
              <p class="text-gray-600 mb-4">{{ event.description }}</p>
              <div v-if="event.image" class="mt-4 overflow-hidden rounded-lg">
                <img 
                  :src="event.image" 
                  :alt="event.title" 
                  class="w-full h-56 object-cover transition-transform duration-700 hover:scale-110"
                >
              </div>
            </div>
            
            <!-- Timeline Middle Line & Dot -->
            <div class="timeline-middle flex items-center justify-center relative">
              <div class="absolute h-full w-1 bg-indigo-200 z-0"></div>
              <div class="w-8 h-8 rounded-full bg-indigo-600 border-4 border-white z-10 shadow-lg"></div>
            </div>
            
            <!-- Year Marker -->
            <div class="timeline-year self-center text-center py-2 px-4 rounded-full bg-indigo-600 text-white font-bold shadow-lg z-10 md:absolute"
              :class="index % 2 === 0 ? 'md:left-1/2 md:transform md:-translate-x-1/2' : 'md:right-1/2 md:transform md:translate-x-1/2'">
              {{ event.year }}
            </div>
          </div>
        </div>
        
        <!-- Final Message -->
        <div class="text-center mt-24 max-w-2xl mx-auto">
          <div class="text-5xl text-indigo-600 mb-6">···</div>
          <h3 class="text-3xl font-serif font-bold text-gray-800 mb-6">The Journey Continues</h3>
          <p class="text-gray-600 text-lg">
            Our story is still being written, with new chapters added every day. 
            We're excited for what the future holds and grateful to have you with us.
          </p>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'OurStory',
  data() {
    return {
      timelineEvents: [
        {
          year: "2015",
          title: "The Beginning",
          description: "It all started in a small garage with nothing but a dream and endless cups of coffee. Our founders met at a local tech meetup and discovered their shared passion.",
          image: ""
        },
        {
          year: "2017",
          title: "First Breakthrough",
          description: "After two years of tireless work, we launched our first product to critical acclaim. This was the validation we needed to pursue our vision full-time.",
          image: ""
        },
        {
          year: "2019",
          title: "Expanding Horizons",
          description: "We moved into our first real office and doubled our team. This year marked our international expansion with clients in 12 countries.",
          image: ""
        },
        {
          year: "2021",
          title: "Innovation Award",
          description: "Our groundbreaking approach was recognized with the Global Innovation Award, cementing our position as industry pioneers.",
          image: ""
        },
        {
          year: "2023",
          title: "New Chapter",
          description: "With over 100 team members worldwide, we launched our sustainability initiative, committing to make a positive impact beyond just business.",
          image: ""
        }
      ]
    }
  }
}
</script>

<style scoped>
.hero {
  background-image: black;
  background-size: cover;
  background-position: center;
}

.timeline-event {
  position: relative;
}

.timeline-middle {
  width: 100%;
  height: auto;
  padding: 20px 0;
}

.timeline-year {
  margin: 20px 0;
}

@media (min-width: 768px) {
  .timeline-event {
    min-height: 250px;
  }
  
  .timeline-middle {
    width: 50px;
    min-width: 50px;
    height: 100%;
  }
  
  .timeline-content {
    width: calc(50% - 50px);
  }
  
  .timeline-year {
    position: absolute;
    top: 40px;
    margin: 0;
  }
}

.timeline-event:last-child .timeline-middle > div:first-child {
  height: 50%;
}
</style>