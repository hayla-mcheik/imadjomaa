<template>
  <!-- Our Projects Section Start -->
  <div class="projects-section py-20 overflow-hidden bg-gradient-to-br from-gray-900 to-black">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
      <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-indigo-800 rounded-full mix-blend-multiply filter blur-[100px] opacity-20"></div>
      <div class="absolute bottom-1/3 right-1/4 w-72 h-72 bg-rose-600 rounded-full mix-blend-multiply filter blur-[100px] opacity-20"></div>
    </div>
    
    <div class="container relative z-10 mx-auto px-4 max-w-7xl">
      <div class="section-header flex flex-col md:flex-row justify-between items-center mb-16">
      <div class="section-title mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-white">Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600">Projects</span></h2>
        <p class="text-gray-400 text-center mt-4 max-w-2xl mx-auto">Discover the premier events where innovation meets opportunity</p>
      </div>

        <div class="section-btn">
          <a href="#" class="view-all-btn px-6 py-3 bg-gradient-to-r from-red-500 to-red-500 rounded-full text-white font-medium hover:opacity-90 transition-all duration-300 flex items-center gap-2 group">
            View All Projects
            <i class="fas fa-arrow-right text-xs transform group-hover:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>

      <div class="projects-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <!-- Project Item 1 -->
        <div class="project-item group bg-gray-800/50 backdrop-blur-sm rounded-2xl overflow-hidden transition-all duration-500 hover:scale-[1.02] hover:shadow-xl hover:shadow-red-500/20">
          <div class="project-image relative overflow-hidden">
            <div class="aspect-w-16 aspect-h-10">
              <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" 
                   alt="Modern web design" 
                   class="w-full h-64 object-cover transition-all duration-700 group-hover:scale-110">
            </div>
          </div>
          
          <div class="project-content p-6">
            <div class="flex justify-between items-start mb-4">
              <div class="project-category">
                <span class="inline-block px-3 py-1 bg-gradient-to-r from-red-500 to-rose-500 text-white text-xs font-semibold rounded-full">
                  Web Design
                </span>
              </div>
            </div>
            
            <h3 class="project-title text-xl font-bold text-white mb-3">Innovative E-commerce Platform</h3>
            <p class="text-gray-400 text-sm mb-4">A modern shopping experience with seamless checkout and personalized recommendations.</p>
            
          </div>
        </div>
        
     <!-- Project Item 1 -->
        <div class="project-item group bg-gray-800/50 backdrop-blur-sm rounded-2xl overflow-hidden transition-all duration-500 hover:scale-[1.02] hover:shadow-xl hover:shadow-red-500/20">
          <div class="project-image relative overflow-hidden">
            <div class="aspect-w-16 aspect-h-10">
              <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" 
                   alt="Modern web design" 
                   class="w-full h-64 object-cover transition-all duration-700 group-hover:scale-110">
            </div>
          </div>
          
          <div class="project-content p-6">
            <div class="flex justify-between items-start mb-4">
              <div class="project-category">
                <span class="inline-block px-3 py-1 bg-gradient-to-r from-red-500 to-rose-500 text-white text-xs font-semibold rounded-full">
                  Web Design
                </span>
              </div>
            </div>
            
            <h3 class="project-title text-xl font-bold text-white mb-3">Innovative E-commerce Platform</h3>
            <p class="text-gray-400 text-sm mb-4">A modern shopping experience with seamless checkout and personalized recommendations.</p>
            
          </div>
        </div>
        
             <!-- Project Item 1 -->
        <div class="project-item group bg-gray-800/50 backdrop-blur-sm rounded-2xl overflow-hidden transition-all duration-500 hover:scale-[1.02] hover:shadow-xl hover:shadow-red-500/20">
          <div class="project-image relative overflow-hidden">
            <div class="aspect-w-16 aspect-h-10">
              <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" 
                   alt="Modern web design" 
                   class="w-full h-64 object-cover transition-all duration-700 group-hover:scale-110">
            </div>
          </div>
          
          <div class="project-content p-6">
            <div class="flex justify-between items-start mb-4">
              <div class="project-category">
                <span class="inline-block px-3 py-1 bg-gradient-to-r from-red-500 to-rose-500 text-white text-xs font-semibold rounded-full">
                  Web Design
                </span>
              </div>
            </div>
            
            <h3 class="project-title text-xl font-bold text-white mb-3">Innovative E-commerce Platform</h3>
            <p class="text-gray-400 text-sm mb-4">A modern shopping experience with seamless checkout and personalized recommendations.</p>
            
          </div>
        </div>
        
      </div>
      
      <!-- Stats Section -->
      <div class="stats-section grid grid-cols-2 md:grid-cols-4 gap-6 mt-20">
        <div class="stat-item bg-gray-800/50 backdrop-blur-sm p-6 rounded-2xl text-center border border-gray-700/50">
          <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-rose-500 mb-2">250+</div>
          <div class="text-gray-400 text-sm">Projects Completed</div>
        </div>
        <div class="stat-item bg-gray-800/50 backdrop-blur-sm p-6 rounded-2xl text-center border border-gray-700/50">
          <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500 mb-2">98%</div>
          <div class="text-gray-400 text-sm">Client Satisfaction</div>
        </div>
        <div class="stat-item bg-gray-800/50 backdrop-blur-sm p-6 rounded-2xl text-center border border-gray-700/50">
          <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 mb-2">15+</div>
          <div class="text-gray-400 text-sm">Industry Awards</div>
        </div>
        <div class="stat-item bg-gray-800/50 backdrop-blur-sm p-6 rounded-2xl text-center border border-gray-700/50">
          <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-teal-500 mb-2">50M+</div>
          <div class="text-gray-400 text-sm">Users Reached</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Our Projects Section End -->
</template>

<script>
export default {
  name: 'ProjectPortfolio',
  mounted() {
    // Initialize animations when component is mounted
    this.animateElements();
  },
  methods: {
    animateElements() {
      // Simple stagger animation for project items
      const projectItems = document.querySelectorAll('.project-item');
      projectItems.forEach((item, index) => {
        item.style.opacity = 0;
        item.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
          item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
          item.style.opacity = 1;
          item.style.transform = 'translateY(0)';
        }, 200 * index);
      });
    }
  }
}
</script>

<style scoped>
.projects-section {
  position: relative;
  overflow: hidden;
}

.project-item {
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  border: 1px solid rgba(255, 255, 255, 0.05);
  transition: all 0.5s ease;
}

.project-item:hover {
  border-color: rgba(236, 72, 153, 0.3);
  transform: translateY(-5px);
}

.project-title {
  position: relative;
  display: inline-block;
  transition: all 0.3s ease;
}



.project-link {
  position: relative;
  display: inline-flex;
  align-items: center;
}



.project-link:hover::after {
  width: 100%;
}

.view-all-btn {
  box-shadow: 0 4px 15px rgba(236, 72, 153, 0.4);
  transition: all 0.3s ease;
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.view-all-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 7px 20px rgba(236, 72, 153, 0.5);
}

/* Animation for section title */
.section-title h2 {
  position: relative;
  display: inline-block;
}



.tech-tag {
  transition: all 0.3s ease;
}

.project-item:hover .tech-tag {
  background: rgba(255, 255, 255, 0.1);
  color: white;
}

/* Stats section hover effects */
.stat-item {
  transition: all 0.3s ease;
}

.stat-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .section-header {
    flex-direction: column;
    text-align: center;
  }
  
  .section-title h2::after {
    left: 50%;
    transform: translateX(-50%);
  }
  
  .stats-section {
    grid-template-columns: 1fr;
  }
}
.max-w-7xl {
  max-width: 90%;
}
</style>