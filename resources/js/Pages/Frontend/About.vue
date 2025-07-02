<template>
    <GuestLayout>
<Breadcrumbs />
<About />
<Whatwedo />
<Whywechoose />
    </GuestLayout>
</template>

<script setup>
  import Breadcrumbs from '@/Components/Breadcrumbs.vue';
  import About from '@/Components/About.vue';
  import OurApproch from '@/Components/OurApproch.vue';
  import OurJourney from '@/Components/OurJourney.vue';
  import Team from '@/Components/Team.vue';
  import Appointment from '@/Components/Appointment.vue';
  import QA from '@/Components/QA.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
  import { Link } from '@inertiajs/vue3';
import Whatwedo from '@/Components/Whatwedo.vue';
import Whywechoose from '@/Components/Whywechoose.vue';
</script>

<style scoped>

</style>