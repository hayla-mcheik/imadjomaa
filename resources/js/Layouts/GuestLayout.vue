<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'
</script>

<template>
    <div >
<Navbar />

        <div class="pl-md-250px">
            <slot />
        </div>
        <Footer />
    </div>
</template>

<style scope>

</style>