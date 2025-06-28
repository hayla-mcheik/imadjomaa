<template>
    <!-- Page Header Start -->
    <div class="page-header bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">{{ currentPageTitle }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <Link href="/">Home</Link>
                                </li>
                                <li 
                                    v-for="(crumb, index) in breadcrumbs" 
                                    :key="index"
                                    class="breadcrumb-item"
                                    :class="{ 'active': index === breadcrumbs.length - 1 }"
                                    aria-current="page"
                                >
                                    <Link v-if="index !== breadcrumbs.length - 1" :href="crumb.path">{{ crumb.title }}</Link>
                                    <span v-else>{{ crumb.title }}</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';

const page = usePage();

// Get current page title from route or page props
const currentPageTitle = computed(() => {
    return page.props.title || 
           page.props.currentPage?.title || 
           'Our Page';
});

// Dynamic breadcrumbs with proper titles
const breadcrumbs = computed(() => {
    // Use custom breadcrumbs if provided from backend
    if (page.props.breadcrumbs) {
        return page.props.breadcrumbs;
    }
    
    // Fallback to route-based breadcrumbs
    const routeName = page.component.split('/').pop().replace('.vue', '');
    return [
        { 
            path: '/about', 
            title: routeName === 'About' ? 'About Us' : 
                   routeName === 'Services' ? 'Our Services' : 
                   routeName.charAt(0).toUpperCase() + routeName.slice(1) 
        }
    ];
});
</script>