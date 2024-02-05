<script setup>
import Header from "@/Layouts/Partials/Admin/Header.vue";

</script>

<template>
    <div class="flex flex-row min-h-screen">
        <Header/>
        <main class="flex flex-col flex-grow p-6 bg-black">
            <slot/>
        </main>
   </div>
</template>
