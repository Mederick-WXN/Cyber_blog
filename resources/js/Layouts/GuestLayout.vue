<script setup>
import Header from './Partials/Header.vue';
import Footer from './Partials/Footer.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Header />

    <div class="min-h-screen relative grid grid-cols-1 bg-black text-white p-12">
            <slot />
    </div>
    <Footer />
</template>
