<template>
      <GuestLayout>
<Breadcrumbs />
<ProjectPage />
    </GuestLayout>
</template>

<script setup>
  import Breadcrumbs from '@/Components/Breadcrumbs.vue';
import ProjectPage from '@/Components/ProjectPage.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
  import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>