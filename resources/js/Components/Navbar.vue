<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'
import { onMounted } from 'vue'

const drawerOpen = ref(false)

const toggleDrawer = () => {
  drawerOpen.value = !drawerOpen.value
}

onMounted(() => {
  const navbar = document.querySelector('.navbar-container')
  window.addEventListener('scroll', () => {
    if (window.scrollY > 10) {
      navbar.classList.add('scrolled')
    } else {
      navbar.classList.remove('scrolled')
    }
  })
  
  // Close drawer when clicking on links
  const navLinks = document.querySelectorAll('.mobile-nav-link, .mobile-appointment-btn')
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      drawerOpen.value = false
    })
  })
})
</script>

<template>
      <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-flex">
        <div class="container">
            <div class="top-bar-container">
                <div class="top-bar-left">
                    <div class="top-bar-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Beirut, Lebanon</span>
                    </div>
                    <div class="top-bar-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@clinic.com</span>
                    </div>
                    <div class="top-bar-item d-none d-md-flex">
                        <i class="fas fa-clock"></i>
                        <span>Mon-Fri: 8AM - 6PM</span>
                    </div>
                </div>
         <div class="top-bar-right">
    <a href="https://www.facebook.com/profile.php?id=100091064031710" class="social-icon" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://www.instagram.com/dr.mohamad_obeid/" class="social-icon" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="#" class="social-icon" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-linkedin-in"></i>
    </a>
</div>

            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- Header Start -->
	<header class="main-header navbar-container">
		<div class="header-sticky bg-section">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<!-- Logo Start -->
					<Link class="navbar-brand" href="/">
						<img src="/assets/images/logo.png" class="w-[100%]" alt="Logo">
					</Link> 
					<!-- Logo End -->

					<!-- Burger Menu Button (Mobile Only) -->
					<button class="burger-btn d-lg-none" @click="toggleDrawer">
						<span class="burger-line"></span>
						<span class="burger-line"></span>
						<span class="burger-line"></span>
					</button>

					<!-- Main Menu Start (Desktop Only) -->
					<div class="collapse navbar-collapse main-menu d-none d-lg-flex">
                        <div class="nav-menu-wrapper d-flex justify-center">
                            <ul class="navbar-nav " id="menu">
                                <li class="nav-item"><Link class="nav-link" href="/">Home</Link> </li>                                
                                <li class="nav-item"><Link class="nav-link" href="/about">About Us</Link> </li>
                                <li class="nav-item"><Link class="nav-link" href="/services">Services</Link> </li>
                                <li class="nav-item"><Link class="nav-link" href="/image-gallery">Image Gallery</Link> </li>
                                <li class="nav-item"><Link class="nav-link" href="/video-gallery">Video Gallery</Link> </li>                         
                                <li class="nav-item"><Link class="nav-link" href="/contact">Contact Us</Link> </li>                         
                                <li class="nav-item highlighted-menu"><Link class="nav-link" href="/book-appointment">Make an Appointment</Link> </li>                         
                            </ul>
                        </div>
                        
                        <!-- Header Contact Btn Start -->
          <div class="header-contact-btn">   
    <a href="tel:+96170003161" class="header-contact-now" aria-label="Call +96170003161">
        <img src="/assets/images/call.svg" alt="Call Icon" class="call-icon" />
        <div class="d-block">
  <span class="phone-number">+96170003161</span>
  <br/>
            <span class="hotline-text">Hotline 24/7</span>
        </div>
      
    </a> 

</div>

                        <!-- Header Contact Btn End -->
					</div>
					<!-- Main Menu End -->
				</div>
			</nav>

      <!-- Mobile Drawer/Sidebar -->
      <transition name="drawer">
        <div v-if="drawerOpen" class="mobile-drawer">
          <button class="close-btn" @click="toggleDrawer">
            <span>&times;</span>
          </button>
          
          <div class="mobile-menu-content">
            <ul class="mobile-nav">
              <li><Link class="mobile-nav-link" href="/">Home</Link> </li>
              <li><Link class="mobile-nav-link" href="/about">About Us</Link> </li>
              <li><Link class="mobile-nav-link" href="/services">Services</Link> </li>
              <li><Link class="mobile-nav-link" href="/image-gallery">Image Gallery</Link> </li>
              <li><Link class="mobile-nav-link" href="/video-gallery">Video Gallery</Link> </li>
              <li><Link class="mobile-nav-link" href="/contact">Contact Us</Link> </li>
              <li>
                <a href="tel:+96170003161" class="mobile-contact">
                  <i class="fa-solid fa-phone"></i>+96170003161
                </a> 
              </li>
              <li>
                <Link href="/book-appointment" class="mobile-appointment-btn">
                  Make an Appointment
                </Link> 
              </li>
            </ul>
          </div>
        </div>
      </transition>
      
      <!-- Drawer Overlay -->
      <transition name="overlay">
        <div 
          v-if="drawerOpen" 
          class="drawer-overlay" 
          @click="toggleDrawer"
        ></div>
      </transition>
		</div>
	</header>
	<!-- Header End -->
</template>

<style scoped>
/* Top bar styles */
.top-bar {
    background: #000;
    color: white;
    padding: 12px 0;
    font-size: 14px;
}

.top-bar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 auto;
    padding: 0 20px;
}

.top-bar-left {
    display: flex;
    gap: 30px;
}

.top-bar-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.top-bar-item i {
    color:linear-gradient(to right, var(--back-color), var(--secondary-color));
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
}

.social-icon:hover {
    background: var(--divider-color);
    transform: translateY(-2px);
}

.header-contact-btn{
  visibility: visible;
}
/* Mobile Drawer Styles */
.mobile-drawer {
  position: fixed;
  top: 0;
  right: 0;
  width: 85%;
  max-width: 320px;
  height: 100vh;
  background: white;
  z-index: 1001;
  box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
  overflow-y: auto;
  padding: 20px;
}

.drawer-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: var(--divider-color);
  z-index: 1000;
}

.close-btn {
  position: absolute;
  top: 15px;
  right: 15px;
  font-size: 28px;
  background: none;
  border: none;
  cursor: pointer;
  color: #333;
  z-index: 1002;
}

.mobile-menu-content {
  margin-top: 40px;
}

.mobile-nav {
  list-style: none;
  padding: 0;
}

.mobile-nav li {
  margin-bottom: 15px;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
}

.mobile-nav li:last-child {
  border-bottom: none;
}

.mobile-nav-link {
  color: #000;
  text-decoration: none;
  font-size: 18px;
  display: block;
  transition: color 0.3s;
  font-weight: 600;
}

.mobile-nav-link:hover {
  color: var(--back-color);
}
.nav-link:hover{
  color: var(--back-color);
}
.mobile-contact {
  display: flex;
  align-items: center;
  gap: 10px;
  color: #000;
  text-decoration: none;
  font-size: 16px;
  padding: 10px 0;
}

.mobile-appointment-btn {
  display: block;
  background-color: var(--divider-color);
  color: white;
  text-align: center;
  padding: 12px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: 600;
  margin-top: 20px;
  transition: background-color 0.3s;
}

.mobile-appointment-btn:hover {
  background-color: var(--divider-color);
}


    
/* Burger Button Styles */
.burger-btn {
        display: flex
;
        margin-left: 30px;
        flex-direction: column;
        align-items: end;
        visibility: visible;
        justify-content: center;
        position: relative;
}



.burger-line {
        display: flex
;
        margin-left: 30px;
        flex-direction: column;
        align-items: end;
        visibility: visible;
        justify-content: center;
        position: relative;
            height: 1px;
    width: 25px;
    background-color:#000;
    display: flex;
    transition: transform 0.5s ease-in;
    position: absolute;
    top: 0px;
}
.burger-line::before{
    transition-duration: 0.5s;
    position: absolute;
    width: 35px;
    height: 3px;
    background-color: #000;
    content: "";
    top: -10px;
    right: 0;
}
.burger-line::after{
    transition-duration: 0.5s;
    position: absolute;
    width: 15px;
    height: 3px;
    right: 0;
    background-color: #000;
    content: "";
    top: 10px;
}



/* Drawer Animations */
.drawer-enter-active, .drawer-leave-active {
  transition: transform 0.4s ease;
}

.drawer-enter-from, .drawer-leave-to {
  transform: translateX(100%);
}

.overlay-enter-active, .overlay-leave-active {
  transition: opacity 0.3s ease;
}

.overlay-enter-from, .overlay-leave-to {
  opacity: 0;
}

/* Hide desktop menu on mobile */
@media (max-width: 991.98px) {
  .main-menu {
    display: none !important;
  }
}

/* Show burger button only on mobile */
@media (min-width: 992px) {
  .burger-btn {
    display: none;
  }
}

/* Existing styles remain unchanged below */
.navbar .navbar-nav .nav-link {
  visibility: visible;
}
.text-secondary {
  color: var(--divider-color);
}

.navbar-container {
  position: sticky;
  top: 0;
  z-index: 1020;
  background-color: white;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Custom navbar toggler icon */
.navbar-dark .navbar-toggler-icon {
    background-image: none;
    position: relative;
    width: 24px;
    height: 24px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
    transition: all 0.3s ease;
    filter: brightness(0.5);
    border: none;
}

.navbar-dark .navbar-toggler-icon::before,
.navbar-dark .navbar-toggler-icon::after {
    content: '';
    display: block;
    height: 2px;
    background-color: #000;
    transition: all 0.3s ease;
}

.navbar-dark .navbar-toggler-icon::before {
    width: 24px;
    margin-bottom: 6px;
    transform-origin: left;
}

.navbar-dark .navbar-toggler-icon span {
    display: block;
    width: 20px;
    height: 2px;
    background-color: #000;
    margin-bottom: 6px;
    transition: all 0.3s ease;
    opacity: 1;
}

.navbar-dark .navbar-toggler-icon::after {
    width: 16px;
}
</style>