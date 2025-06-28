<template>
    <GuestLayout>
        <Breadcrumbs />
        <GalleryImages />
    </GuestLayout>
</template>

<script setup>
  import Breadcrumbs from '@/Components/Breadcrumbs.vue';
  import GalleryImages from '@/Components/GalleryImages.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
  import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>