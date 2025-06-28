<template>
    <GuestLayout>
<Breadcrumbs />
<PageBook />
<Whywechoose />
<QA />
    </GuestLayout>
</template>

<script setup>
  import Breadcrumbs from '@/Components/Breadcrumbs.vue';
import PageBook from '@/Components/PageBook.vue';
import QA from '@/Components/QA.vue';
import Whywechoose from '@/Components/Whywechoose.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
  import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>