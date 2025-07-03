<template>

  <!-- Main Layout -->
  <div >
    <!-- Vertical Navbar for Desktop -->
    <nav class="vertical-navbar hidden md:block">
      <div class="vertical-navbar-inner">
        <!-- Logo -->
        <Link class="navbar-brand" href="/">
          <img src="/assets/images/logo.png" class="logo" alt="Logo">
        </Link>
        
        <!-- Vertical Menu -->
        <ul class="vertical-menu">
          <li><Link class="nav-link" href="/">Home</Link></li>
          <li><Link class="nav-link" href="/about">About Us</Link></li>
          <li><Link class="nav-link" href="/projects">Our Projects</Link></li>
          <li><Link class="nav-link" href="/news">Press Kit</Link></li>
          <li><Link class="nav-link" href="/events">Events</Link></li>
          <li><Link class="nav-link" href="/contact">Contact Us</Link></li>
        </ul>
        
        <!-- Contact Info -->
        <div class="vertical-navbar-footer">
          <div class="contact-info">
            <a href="tel:+96170003161" class="contact-link">
              <i class="fas fa-phone"></i> +961 78 913 139
            </a>
            <a href="mailto:info@promo-fix.com" class="contact-link">
              <i class="fas fa-envelope"></i> info@promo-fix.com
            </a>
          </div>
          <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100091064031710" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/dr.mohamad_obeid/" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" target="_blank">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Mobile Header -->
    <header class="main-header md:hidden">
      <nav class="navbar">
        <div class="container max-w-8xl">
          <!-- Logo -->
          <Link class="navbar-brand" href="/">
            <img src="/assets/images/logo.png" class="logo" alt="Logo">
          </Link>
          <div class="flex justify-end items-center">
            <!-- Burger Button -->
            <button class="menu-toggle" @click="toggleDrawer">
              <div class="menu-icon w-[25px]">
                <img src="/assets/images/menu.svg" class="w-[25px]"/>
              </div>
            </button>
          </div>
        </div>
      </nav>

         <!-- Fixed Drawer with Menu -->
      <div class="drawer" :class="{ open: drawerOpen }">
        <div class="drawer-header">
          <div class="drawer-logo">
            <img src="/assets/images/logo.png" alt="Logo">
          </div>
          <button class="close-button" @click="toggleDrawer">
            <i class="fas fa-times"></i>
          </button>
        </div>
        
        <div class="drawer-content">
          <ul class="mobile-menu">
            <li><Link class="mobile-nav-link" href="/" @click="toggleDrawer">Home</Link></li>
            <li><Link class="mobile-nav-link" href="/about" @click="toggleDrawer">About Us</Link></li>
            <li><Link class="mobile-nav-link" href="/projects" @click="toggleDrawer">Our Projects</Link></li>
            <li><Link class="mobile-nav-link" href="/news" @click="toggleDrawer">Press Kit</Link></li>
            <li><Link class="mobile-nav-link" href="/events" @click="toggleDrawer">Events</Link></li>
            <li><Link class="mobile-nav-link" href="/contact" @click="toggleDrawer">Contact Us</Link></li>
          </ul>
          
          <div class="mobile-contact">
            <h3 class="contact-title">Contact Info</h3>
            <a href="tel:+96170003161" class="contact-link">
              <i class="fas fa-phone"></i> +961 78 913 139
            </a>
            <a href="mailto:info@promo-fix.com" class="contact-link">
              <i class="fas fa-envelope"></i> info@promo-fix.com
            </a>
          </div>
          
          <div class="mobile-social">
            <h3 class="social-title">Follow Us</h3>
            <div class="social-icons">
              <a href="https://www.facebook.com/profile.php?id=100091064031710" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com/dr.mohamad_obeid/" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      
      <!-- Overlay -->
      <div class="overlay" :class="{ open: drawerOpen }" @click="toggleDrawer"></div>
    </header>

  </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3'
import { ref, onMounted } from 'vue'

const drawerOpen = ref(false)

const toggleDrawer = () => {
  drawerOpen.value = !drawerOpen.value
  if (drawerOpen.value) {
    document.body.style.overflow = 'hidden';
  } else {
    document.body.style.overflow = '';
  }
}

onMounted(() => {
  const navbar = document.querySelector('.navbar')
  if (navbar) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 10) {
        navbar.classList.add('scrolled')
      } else {
        navbar.classList.remove('scrolled')
      }
    })
  }
})
</script>

<style scoped>
/* Top Bar Styles */
.top-bar {
  background: #000;
  color: white;
  padding: 12px 0;
  font-size: 14px;
}

.top-bar-left {
  display: flex;
  gap: 30px;
  justify-content: center;
}

/* Main Layout */
.main-layout {
  display: flex;
  min-height: 100vh;
}

/* Vertical Navbar Styles */
.vertical-navbar {
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  width: 250px;
  background: white;
  box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
  z-index: 100;
  display: flex;
  flex-direction: column;
  padding: 20px 0;
}

.vertical-navbar-inner {
  display: flex;
  flex-direction: column;
  height: 100%;
  padding: 0 15px;
}

.navbar-brand {
  display: block;
  text-align: center;
}

.logo {
  height: 60px;
  max-width: 80%;
  margin: 0 auto;
}

.vertical-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  flex-grow: 1;
}

.vertical-menu li {
  margin-bottom: 5px;
}

.vertical-menu .nav-link {
  display: block;
  padding: 12px 15px;
  color: #333;
  text-decoration: none;
  font-weight: 500;
  border-radius: 4px;
  transition: all 0.3s ease;
}

.vertical-menu .nav-link:hover {
  background: rgba(200, 0, 0, 0.1);
  color: #c00;
}

.vertical-navbar-footer {
  padding: 20px 0 0;
  border-top: 1px solid #eee;
  margin-top: auto;
}

.contact-info {
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-bottom: 20px;
}

.contact-link {
  display: flex;
  align-items: center;
  gap: 10px;
  color: #555;
  font-size: 14px;
  text-decoration: none;
}

.contact-link:hover {
  color: #c00;
}

.social-icons {
  display: flex;
  gap: 15px;
  justify-content: center;
}

.social-icons a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: #f5f5f5;
  color: #555;
  transition: all 0.3s ease;
}

.social-icons a:hover {
  background: #c00;
  color: white;
}

/* Content Area */
.content-area {
  flex-grow: 1;
  margin-left: 250px; /* Match vertical navbar width */
  padding: 20px;
  min-height: 100vh;
}

/* Mobile Header (only shown on mobile) */
.main-header {
  position: sticky;
  top: 0;
  z-index: 1000;
  width: 100%;
  background: white;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 20px;
  transition: background-color 0.3s, box-shadow 0.3s;
}

.navbar.scrolled {
  background: rgba(255, 255, 255, 0.95);
  box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}

/* Drawer Styles */
.drawer {
  position: fixed;
  top: 0;
  right: -100%;
  width: 85%;
  max-width: 320px;
  height: 100%;
  background: white;
  z-index: 1100;
  transition: right 0.4s cubic-bezier(0.22, 0.61, 0.36, 1);
  box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
  display: flex;
  flex-direction: column;
}

.drawer.open {
  right: 0;
}

.drawer-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  border-bottom: 1px solid #eee;
}

.drawer-logo img {
  height: 40px;
}

.close-button {
  background: none;
  border: none;
  font-size: 1.5rem;
  color: #333;
  cursor: pointer;
  transition: color 0.3s;
}

.close-button:hover {
  color: #c00;
}

.drawer-content {
  flex: 1;
  overflow-y: auto;
  padding: 20px;
}

.mobile-menu {
  list-style: none;
  padding: 0;
  margin: 0 0 30px;
}

.mobile-nav-link {
  display: block;
  padding: 15px 0;
  color: #333;
  text-decoration: none;
  font-size: 1.1rem;
  font-weight: 500;
  border-bottom: 1px solid #f0f0f0;
  transition: all 0.3s;
}

.mobile-nav-link:hover,
.mobile-nav-link:focus {
  color: #c00;
  padding-left: 10px;
}

.mobile-contact,
.mobile-social {
  margin-top: 25px;
}

.contact-title,
.social-title {
  font-size: 1.1rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 15px;
  padding-bottom: 8px;
  border-bottom: 1px solid #eee;
}

.mobile-contact .contact-link {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 10px 0;
  color: #555;
  text-decoration: none;
  font-size: 0.95rem;
}

.mobile-contact .contact-link:hover {
  color: #c00;
}

.mobile-social .social-icons {
  display: flex;
  gap: 15px;
  margin-top: 10px;
}

.mobile-social .social-icons a {
  width: 42px;
  height: 42px;
  background: #f5f5f5;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #555;
  transition: all 0.3s;
}

.mobile-social .social-icons a:hover {
  background: #c00;
  color: white;
  transform: translateY(-3px);
}

/* Overlay Styles */
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1000;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.overlay.open {
  opacity: 1;
  visibility: visible;
}

/* Adjustments for mobile */
@media (max-width: 767px) {
  .vertical-navbar {
    display: none;
  }
  
  .content-area {
    margin-left: 0;
    padding-top: 80px; /* Space for mobile header */
  }
  
  .main-header {
    display: block;
  }
}

@media (min-width: 768px) {
  .main-header {
    display: none;
  }
  
  .drawer,
  .overlay {
    display: none !important;
  }
}

/* Animation for menu toggle */
.menu-toggle {
  background: none;
  border: none;
  cursor: pointer;
  padding: 5px;
  transition: transform 0.3s;
}

.menu-toggle:hover {
  transform: scale(1.1);
}
</style>