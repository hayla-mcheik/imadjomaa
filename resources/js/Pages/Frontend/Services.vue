<template>
    <GuestLayout>
<Breadcrumbs />
<Services />
<Testimonials />
<Howitworks />
    </GuestLayout>
</template>

<script setup>
  import Breadcrumbs from '@/Components/Breadcrumbs.vue';
import Howitworks from '@/Components/Howitworks.vue';
  import Services from '@/Components/Services.vue';
import Testimonials from '@/Components/Testimonials.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
  import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>