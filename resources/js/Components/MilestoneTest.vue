<template>
  <div class="milestones-container">
    <div class="header">
      <h1>Our Journey</h1>
      <p>Discover the milestones that shaped our company's success story. Each achievement represents our commitment to excellence and innovation.</p>
    </div>
    
    <div class="timeline">
      <div class="timeline-line"></div>
      
      <div class="milestones-wrapper" ref="milestonesWrapper">
        <div 
          v-for="(milestone, index) in milestones" 
          :key="index" 
          class="milestone" 
          :class="{ 
            'visible': milestone.visible, 
            'active': activeIndex === index 
          }"
          @click="setActive(index)"
        >
          <i :class="milestone.icon" class="milestone-icon"></i>
          <div class="milestone-content">
            <div class="milestone-date">
              <i class="fas fa-calendar-alt"></i>
              {{ milestone.date }}
            </div>
            <h2 class="milestone-title">{{ milestone.title }}</h2>
            <p class="milestone-description">{{ milestone.description }}</p>
            
            <div class="milestone-stats">
              <div class="stat-item" v-for="(stat, statIndex) in milestone.stats" :key="statIndex">
                <div class="stat-value">{{ stat.value }}</div>
                <div class="stat-label">{{ stat.label }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="controls">
      <div class="control-btn" @click="prevMilestone">
        <i class="fas fa-chevron-left"></i>
      </div>
      <div class="control-btn" @click="nextMilestone">
        <i class="fas fa-chevron-right"></i>
      </div>
    </div>
    
    <div class="journey-continues">
      <div class="sparkle">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <p>Every milestone is a stepping stone to greater achievements. <span class="highlight">The journey continues...</span></p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Milestone',
  data() {
    return {
      activeIndex: 2,
      autoScroll: null,
      milestones: [
        {
          date: 'January 2018',
          title: 'Company Foundation',
          description: 'PromoFix was founded with a vision to revolutionize promotional solutions in Lebanon.',
          icon: 'fas fa-rocket',
          stats: [
            { value: '3', label: 'Team' },
            { value: '1', label: 'Office' },
            { value: '5', label: 'Clients' }
          ],
          visible: true
        },
        {
          date: 'June 2019',
          title: 'First Major Project',
          description: 'Secured our first enterprise client and delivered a nationwide promotional campaign.',
          icon: 'fas fa-trophy',
          stats: [
            { value: '15', label: 'Team' },
            { value: '120%', label: 'Growth' },
            { value: '50+', label: 'Clients' }
          ],
          visible: true
        },
        {
          date: 'March 2020',
          title: 'Digital Transformation',
          description: 'Launched our digital platform to serve clients remotely during challenging times.',
          icon: 'fas fa-laptop-code',
          stats: [
            { value: '300%', label: 'Online' },
            { value: '25', label: 'Team' },
            { value: '100+', label: 'Projects' }
          ],
          visible: true
        },
        {
          date: 'September 2021',
          title: 'Regional Expansion',
          description: 'Expanded our services to neighboring countries including Jordan and Egypt.',
          icon: 'fas fa-globe-asia',
          stats: [
            { value: '3', label: 'Countries' },
            { value: '45', label: 'Team' },
            { value: '250+', label: 'Clients' }
          ],
          visible: true
        },
        {
          date: 'May 2023',
          title: 'Innovation Award',
          description: 'Received the Lebanese Business Innovation Award for sustainable solutions.',
          icon: 'fas fa-award',
          stats: [
            { value: '1st', label: 'Place' },
            { value: '80+', label: 'Team' },
            { value: '500+', label: 'Projects' }
          ],
          visible: true
        }
      ]
    };
  },
  mounted() {
    // Center the active milestone on load
    this.$nextTick(() => {
      this.centerActiveMilestone();
    });
    
    // Auto-scroll every 5 seconds
    this.autoScroll = setInterval(() => {
      this.nextMilestone();
    }, 5000);
  },
  beforeUnmount() {
    clearInterval(this.autoScroll);
  },
  methods: {
    setActive(index) {
      this.activeIndex = index;
      this.centerActiveMilestone();
    },
    nextMilestone() {
      this.activeIndex = (this.activeIndex + 1) % this.milestones.length;
      this.centerActiveMilestone();
    },
    prevMilestone() {
      this.activeIndex = (this.activeIndex - 1 + this.milestones.length) % this.milestones.length;
      this.centerActiveMilestone();
    },
    centerActiveMilestone() {
      const container = this.$refs.milestonesWrapper;
      const activeElement = container.children[this.activeIndex];
      
      if (container && activeElement) {
        const containerWidth = container.offsetWidth;
        const activeElementLeft = activeElement.offsetLeft;
        const activeElementWidth = activeElement.offsetWidth;
        
        container.scrollTo({
          left: activeElementLeft - (containerWidth / 2) + (activeElementWidth / 2),
          behavior: 'smooth'
        });
      }
    }
  }
};
</script>

<style scoped>
.milestones-container {
  background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
  color: #fff;
  padding: 80px 20px;
  font-family: 'Poppins', sans-serif;
  overflow-x: hidden;
}

.header {
  text-align: center;
  margin-bottom: 60px;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
  padding: 0 20px;
}

.header h1 {
  font-size: 3.5rem;
  margin-bottom: 20px;
  background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  position: relative;
  display: inline-block;
  font-weight: 800;
  letter-spacing: -0.5px;
}

.header h1::after {
  content: '';
  position: absolute;
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%);
  width: 120px;
  height: 5px;
  background: linear-gradient(90deg, #ff6b6b, #4ecdc4);
  border-radius: 3px;
}

.header p {
  font-size: 1.2rem;
  color: #e0e0ff;
  line-height: 1.7;
  margin-top: 40px;
  opacity: 0.9;
}

.timeline {
  position: relative;
  max-width: 1400px;
  margin: 0 auto;
  padding: 100px 0;
}

.timeline-line {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  height: 6px;
  background: linear-gradient(to right, #ff6b6b, #4ecdc4);
  border-radius: 3px;
  box-shadow: 0 0 20px rgba(78, 205, 196, 0.5);
  z-index: 1;
  transform: translateY(-50%);
}

.milestones-wrapper {
  position: relative;
  display: flex;
  justify-content: space-between;
  margin: 0 auto;
  width: 100%;
  padding: 0 50px;
  z-index: 2;
}

.milestone {
  position: relative;
  width: 260px;
  padding: 30px;
  border-radius: 20px;
  background: rgba(26, 32, 54, 0.8);
  backdrop-filter: blur(10px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  transition: all 0.5s ease;
  cursor: pointer;
  z-index: 3;
  opacity: 0.9;
}

.milestone.active {
  transform: scale(1.05);
  z-index: 10;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
  opacity: 1;
}

.milestone:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
  background: rgba(33, 42, 71, 0.9);
}

/* Marker on timeline */
.milestone::before {
  content: '';
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: #16213e;
  border: 4px solid #4ecdc4;
  z-index: 10;
  box-shadow: 0 0 0 0 rgba(78, 205, 196, 0.7);
  animation: pulse 2s infinite;
}

.milestone:nth-child(even)::before {
  top: auto;
  bottom: -50px;
}

@keyframes pulse {
  0% { box-shadow: 0 0 0 0 rgba(78, 205, 196, 0.7); }
  70% { box-shadow: 0 0 0 15px rgba(78, 205, 196, 0); }
  100% { box-shadow: 0 0 0 0 rgba(78, 205, 196, 0); }
}

.milestone-content {
  position: relative;
  z-index: 2;
}

.milestone-icon {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 2.5rem;
  opacity: 0.15;
  z-index: 1;
}

.milestone:nth-child(even) .milestone-icon {
  left: 20px;
  right: auto;
}

.milestone-date {
  font-size: 1.1rem;
  font-weight: 600;
  color: #4ecdc4;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.milestone-date i {
  margin-right: 10px;
  font-size: 1.3rem;
}

.milestone-title {
  font-size: 1.6rem;
  margin-bottom: 15px;
  color: #fff;
  position: relative;
  display: inline-block;
  font-weight: 700;
}

.milestone-title::after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 0;
  width: 60px;
  height: 4px;
  background: linear-gradient(90deg, #ff6b6b, #4ecdc4);
  border-radius: 2px;
}

.milestone-description {
  font-size: 1rem;
  line-height: 1.7;
  color: #e0e0ff;
  margin-bottom: 20px;
  opacity: 0.9;
}

.milestone-stats {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}

.stat-item {
  background: rgba(26, 32, 54, 0.7);
  padding: 12px 15px;
  border-radius: 12px;
  text-align: center;
  min-width: 80px;
  transition: all 0.3s ease;
  flex: 1;
}

.stat-item:hover {
  background: rgba(33, 42, 71, 0.9);
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.stat-value {
  font-size: 1.5rem;
  font-weight: 700;
  color: #ff6b6b;
  margin-bottom: 5px;
  line-height: 1;
}

.stat-label {
  font-size: 0.9rem;
  color: #a0a0d0;
  font-weight: 500;
}

.controls {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 40px;
}

.control-btn {
  background: rgba(26, 32, 54, 0.8);
  border: 2px solid #4ecdc4;
  color: #4ecdc4;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.control-btn:hover {
  background: #4ecdc4;
  color: #16213e;
  transform: translateY(-5px);
}

.journey-continues {
  text-align: center;
  padding: 50px 0 20px;
  color: #e0e0ff;
  font-size: 1.2rem;
  max-width: 700px;
  margin: 0 auto;
  position: relative;
}

.highlight {
  color: #4ecdc4;
  font-weight: 700;
  background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.sparkle {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 15px;
  font-size: 24px;
}

.sparkle i {
  color: #ffd166;
  opacity: 0;
  animation: sparkle 3s infinite;
}

.sparkle i:nth-child(1) { animation-delay: 0.2s; }
.sparkle i:nth-child(2) { animation-delay: 0.6s; }
.sparkle i:nth-child(3) { animation-delay: 1s; }

@keyframes sparkle {
  0%, 100% { 
    opacity: 0; 
    transform: translateY(0) scale(1);
  }
  50% { 
    opacity: 1; 
    transform: translateY(-20px) scale(1.5);
    text-shadow: 0 0 15px rgba(255, 209, 102, 0.8);
  }
}

/* Responsive design */
@media (max-width: 1200px) {
  .milestones-wrapper {
    overflow-x: auto;
    padding: 0 20px;
    justify-content: flex-start;
    gap: 30px;
    scrollbar-width: thin;
    scrollbar-color: #4ecdc4 #1a1a2e;
  }
  
  .milestones-wrapper::-webkit-scrollbar {
    height: 8px;
  }
  
  .milestones-wrapper::-webkit-scrollbar-track {
    background: #1a1a2e;
  }
  
  .milestones-wrapper::-webkit-scrollbar-thumb {
    background: linear-gradient(to right, #ff6b6b, #4ecdc4);
    border-radius: 4px;
  }
  
  .milestone {
    flex: 0 0 260px;
  }
  
  .controls {
    display: none;
  }
}

@media (max-width: 768px) {
  .header h1 {
    font-size: 2.5rem;
  }
  
  .header p {
    font-size: 1rem;
  }
  
  .timeline {
    padding: 80px 0;
  }
  
  .milestone {
    width: 220px;
    padding: 20px;
  }
  
  .milestone-title {
    font-size: 1.4rem;
  }
  
  .milestone-stats {
    gap: 10px;
  }
  
  .stat-item {
    padding: 10px;
    min-width: 70px;
  }
  
  .stat-value {
    font-size: 1.3rem;
  }
}

@media (max-width: 480px) {
  .header h1 {
    font-size: 2rem;
  }
  
  .milestone {
    width: 200px;
  }
  
  .milestone-title {
    font-size: 1.3rem;
  }
  
  .milestone-stats {
    flex-direction: column;
    align-items: center;
  }
}
</style>