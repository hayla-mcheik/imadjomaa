<template>
    <GuestLayout>
<Breadcrumbs />
<Contact />
    </GuestLayout>
</template>


<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Breadcrumbs from '@/Components/Breadcrumbs.vue';
import Contact from '@/Components/Contact.vue';

const form = reactive({
    name: '',
    email: '',
    project: '',
    message: '',
    processing: false,
    success: false,
    error: false
});

const submitForm = () => {
    form.processing = true;
    form.success = false;
    form.error = false;
    
    router.post('/send-contact-form', form, {
        preserveScroll: true,
        onSuccess: () => {
            form.success = true;
            form.name = '';
            form.email = '';
            form.project = '';
            form.message = '';
        },
        onError: () => {
            form.error = true;
        },
        onFinish: () => {
            form.processing = false;
        }
    });
};
</script>

<style scoped>

</style>