<template>
  <div class="brands-section relative py-20 overflow-hidden bg-gradient-to-br from-gray-900 to-black d-none d-md-flex border-b-8 border-white">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
      <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-red-800 rounded-full mix-blend-multiply filter blur-[100px] opacity-10"></div>
      <div class="absolute bottom-1/3 right-1/4 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-[100px] opacity-10"></div>
    </div>
    
    <div class="container relative z-10 mx-auto px-4 max-w-7xl">
      <div class="section-title mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-white">Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-600">Brands</span></h2>
        <p class="text-gray-400 text-center mt-4 max-w-2xl mx-auto">Discover the innovative brands that shape our digital ecosystem</p>
      </div>
      
      <div class="brand-grid grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
        <!-- Brand Item 1 -->
        <div class="brand-item group relative overflow-hidden rounded-2xl bg-white  backdrop-blur-sm p-6 border border-gray-700/50 transition-all duration-500 hover:border-red-500/30">
          <div class="brand-logo flex items-center justify-center h-32">
            <img src="/assets/images/playhub-logo.png" alt="Playhub" class="max-h-20 object-contain transition-all duration-500 group-hover:scale-110">
          </div>
          <div class="brand-name text-center mt-4 text-white font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">Playhub</div>
        </div>
        
        <!-- Brand Item 2 -->
        <div class="brand-item group relative overflow-hidden rounded-2xl bg-white backdrop-blur-sm p-6 border border-gray-700/50 transition-all duration-500 hover:border-red-500/30">
          <div class="brand-logo flex items-center justify-center h-32">
            <img src="/assets/images/promomedia-logo-black.png" alt="Tunehub" class="max-h-20 object-contain transition-all duration-500 group-hover:scale-110">
          </div>
          <div class="brand-name text-center mt-4 text-white font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">Tunehub</div>
        </div>
        
        <!-- Brand Item 3 -->
        <div class="brand-item group relative overflow-hidden rounded-2xl bg-white backdrop-blur-sm p-6 border border-gray-700/50 transition-all duration-500 hover:border-red-500/30">
          <div class="brand-logo flex items-center justify-center h-32">
            <img src="/assets/images/promomedia-logo-black.png" alt="Techpulse" class="max-h-20 object-contain transition-all duration-500 group-hover:scale-110">
          </div>
          <div class="brand-name text-center mt-4 text-white font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">Techpulse</div>
        </div>
        
        <!-- Brand Item 4 -->
        <div class="brand-item group relative overflow-hidden rounded-2xl bg-white  backdrop-blur-sm p-6 border border-gray-700/50 transition-all duration-500 hover:border-red-500/30">
          <div class="brand-logo flex items-center justify-center h-32">
            <img src="/assets/images/promomedia-logo-black.png" alt="Promomedia" class="max-h-20 object-contain transition-all duration-500 group-hover:scale-110">
          </div>
          <div class="brand-name text-center mt-4 text-white font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">Promomedia</div>
        </div>
        
        <!-- Brand Item 5 -->
        <div class="brand-item group relative overflow-hidden rounded-2xl bg-white  backdrop-blur-sm p-6 border border-gray-700/50 transition-all duration-500 hover:border-red-500/30">
          <div class="brand-logo flex items-center justify-center h-32">
            <img src="/assets/images/promomedia-logo-black.png" alt="Amazon ADS" class="max-h-20 object-contain transition-all duration-500 group-hover:scale-110">
          </div>
          <div class="brand-name text-center mt-4 text-white font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">Amazon ADS</div>
        </div>
        
        <!-- Add more brand items as needed -->
      </div>
      
      <!-- View All Button -->
      <div class="text-center mt-12">
        <button class="view-all-btn px-8 py-3 bg-gradient-to-r from-red-600 to-red-500 rounded-full text-white font-medium hover:opacity-90 transition-all duration-300 group">
          View All Brands
          <i class="fas fa-arrow-right text-xs ml-2 transform group-hover:translate-x-1 transition-transform"></i>
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>
.brands-section {
  position: relative;
}

.brand-item {
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
  transition: all 0.5s ease;
}

.brand-item:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 40px rgba(239, 68, 68, 0.2);
}

.view-all-btn {
  box-shadow: 0 4px 15px rgba(239, 68, 68, 0.4);
  transition: all 0.3s ease;
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.view-all-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 7px 20px rgba(239, 68, 68, 0.5);
}

@media (max-width: 640px) {
  .brand-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
.max-w-7xl {
  max-width: 90%;
}
</style>