<template>
  <!-- Top Bar Start -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-container">
        <div class="top-bar-left">
          <div class="top-bar-item">
            <i class="fas fa-map-marker-alt"></i>
            <span>Beirut, Lebanon</span>
          </div>
          <div class="top-bar-item">
            <i class="fas fa-envelope"></i>
            <span>info@promo-fix.com</span>
          </div>
   
        </div>

      </div>
    </div>
  </div>
  <!-- Top Bar End -->

  <!-- Header Start -->
  <header class="main-header ">
    <nav class="navbar">
      <div class="container max-w-8xl">
        <!-- Logo -->
        <Link class="navbar-brand" href="/">
          <img src="/assets/images/logo.png" class="logo" alt="Logo">
        </Link>
            <div class="flex justify-end items-center "><Link class="nav-link text-lg d-none d-md-flex" href="/projects" >Our Projects</Link>
              <Link class="nav-link text-lg  d-none d-md-flex" href="/contact" >Contact Us</Link>
        <!-- Burger Button -->
        <button class="menu-toggle" @click="toggleDrawer">
          <div class="menu-icon w-[25px]">
<img src="/assets/images/menu.svg" class="w-[25px]"/>
          </div>
        </button>
        </div>
      </div>
    </nav>

    <!-- Drawer with Centered Menu -->
    <div class="drawer" :class="{ open: drawerOpen }">
      <div class="drawer-inner">
        <button class="close-btn" @click="toggleDrawer">
          <i class="fas fa-times"></i>
        </button>
        
        <!-- Centered Menu -->
        <div class="centered-menu">
          <ul class="nav-menu">
            <li><Link class="nav-link text-xl" href="/" @click="toggleDrawer">Home</Link></li>
            <li><Link class="nav-link text-xl" href="/about" @click="toggleDrawer">About Us</Link></li>
            <li><Link class="nav-link text-xl" href="/projects" @click="toggleDrawer">Our Projects</Link></li>
            <li><Link class="nav-link text-xl" href="/news" @click="toggleDrawer">Press Kit</Link></li>
            <li><Link class="nav-link text-xl" href="/events" @click="toggleDrawer">Events</Link></li>
            <li><Link class="nav-link text-xl" href="/contact" @click="toggleDrawer">Contact Us</Link></li>
          </ul>
          
          <div class="drawer-footer">
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
      </div>
    </div>
    
    <!-- Overlay -->
    <div class="overlay" :class="{ open: drawerOpen }" @click="toggleDrawer"></div>
  </header>
  <!-- Header End -->
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
  window.addEventListener('scroll', () => {
    if (window.scrollY > 10) {
      navbar.classList.add('scrolled')
    } else {
      navbar.classList.remove('scrolled')
    }
  })
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
.max-w-8xl{
  max-width: 90%;
}
.top-bar-item {
  display: flex;
  align-items: center;
  gap: 8px;
}

.top-bar-item i {
  color: red;
}

.top-bar-right {
  display: flex;
  gap: 15px;
}

.social-icon {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  color: white;
}

.social-icon:hover {
  background: red;
  transform: translateY(-2px);
}

/* Navbar Styles */
.main-header {
  position: sticky;
  top: 0;
  z-index: 1000;
}

.navbar {
  background: white;
  padding: 5px 0;
  transition: all 0.3s ease;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar.scrolled {
  padding: 10px 0;
}


.logo {
  height: 60px;
  transition: all 0.3s ease;
}

/* Menu Toggle Button */
.menu-toggle {
  background: transparent;
  border: none;
  cursor: pointer;
  padding: 0;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.menu-icon {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width: 30px;
  height: 21px;
}

.bar {
  height: 3px;
  background: #1a1a1a;
  border-radius: 2px;
  transition: all 0.3s ease;
}

.menu-toggle:hover .bar {
  background: red;
}

/* Drawer Styles */
.drawer {
  position: fixed;
  top: 0;
  right: -100%;
  width: 100%;
  height: 100vh;
  background: white;
  z-index: 1050;
  transition: right 0.4s cubic-bezier(0.23, 1, 0.32, 1);
  box-shadow: -5px 0 25px rgba(0, 0, 0, 0.1);
}

.drawer.open {
  right: 0;
}

.drawer-inner {
  position: relative;
  height: 100%;
  padding: 30px;
}

.close-btn {
  position: absolute;
  top: 20px;
  right: 20px;
  background: transparent;
  border: none;
  font-size: 24px;
  color: #1a1a1a;
  cursor: pointer;
  transition: color 0.3s ease;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.close-btn:hover {
  color: red;
}

/* Centered Menu */
.centered-menu {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100%;
  text-align: center;
}

.nav-menu {
  list-style: none;
  padding: 0;
  margin: 0 0 50px;
  width: 100%;
}

.nav-menu li {
  margin-bottom: 30px;
}

.nav-link {
  color: #1a1a1a;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
  position: relative;
  padding: 10px 15px;
  display: inline-block;
}

.nav-link:hover {
  color: red;
}

.nav-link::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 3px;
  background: linear-gradient(90deg, red, #000);
  transition: width 0.3s ease;
}

.nav-link:hover::after {
  width: 60px;
}

/* Drawer Footer */
.drawer-footer {
  position: absolute;
  bottom: 30px;
  left: 0;
  right: 0;
  padding: 0 30px;
}

.contact-info {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin-bottom: 30px;
}

.contact-link {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  color: #4a5568;
  text-decoration: none;
  font-size: 16px;
  transition: color 0.3s ease;
}

.contact-link:hover {
  color: red;
}

.social-icons {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.social-icons a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #f3f4f6;
  color: #4a5568;
  font-size: 18px;
  transition: all 0.3s ease;
}

.social-icons a:hover {
  background: linear-gradient(135deg, red, #000);
  color: white;
  transform: translateY(-3px);
}

/* Overlay */
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1040;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.overlay.open {
  opacity: 1;
  visibility: visible;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .top-bar-container {
    flex-direction: column;
    gap: 10px;
  }
  
  .top-bar-left, .top-bar-right {
    width: 100%;
    justify-content: center;
  }
  
  .top-bar-item {
    font-size: 12px;
  }
  
  .nav-link {
    font-size: 20px;
  }
  
  .drawer {
    max-width: 100%;
  }
}

@media (max-width: 480px) {
  .logo {
    height: 40px;
  }
  
  .top-bar-left {
    gap: 15px;
  }
  
  .nav-link {
    font-size: 18px;
  }
}
</style>