<template>
      <GuestLayout>
<Breadcrumbs />
<BlogDetails />
    </GuestLayout>
</template>

<script setup>
  import BlogDetails from '@/Components/BlogDetails.vue';
import Breadcrumbs from '@/Components/Breadcrumbs.vue';
import Events from '@/Components/Events.vue';
import ProjectPage from '@/Components/ProjectPage.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
  import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>