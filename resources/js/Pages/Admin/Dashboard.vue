<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="flex flex-col gap-y-12">

            <div class="flex flex-row justify-between">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-semibold text-white">Dashboard</h1>
                    <p class="text-sm text-gray-400">Bienvenue "Utilisateur" sur votre tableau de bord</p>
                </div>
            </div>

            <div class="flex flex-row gap-4 justify-between divide-x divide-gray-500">
                <div class="text-white w-full">
                    <h2 class="text-2xl font-semibold">20,000</h2>
                    <div class="flex justify-between">
                        <p class="text-sm text-gray-400">Nombre de lecture</p>
                        <span class="text-sm text-green-600 bg-green-400 rounded px-2 py-0.5">+22</span>
                    </div>
                </div>

                <div class="text-white w-full pl-4">
                    <h2 class="text-2xl font-semibold">55,003</h2>
                    <div class="flex justify-between">
                        <p class="text-sm text-gray-400">Nombre de vue</p>
                        <span class="text-sm text-red-600 bg-red-400 rounded px-2 py-0.5">-300</span>
                    </div>
                </div>

                <div class="text-white w-full pl-4">
                    <h2 class="text-2xl font-semibold">4</h2>
                    <div class="flex justify-between">
                        <p class="text-sm text-gray-400">Articles</p>
                        <span class="text-sm text-red-600 bg-red-400 rounded px-2 py-0.5">-3</span>
                    </div>
                </div>

                <div class="text-white w-full pl-4">
                    <h2 class="text-2xl font-semibold">89</h2>
                    <div class="flex justify-between">
                        <p class="text-sm text-gray-400">Commentaires</p>
                        <span class="text-sm text-green-600 bg-green-400 rounded px-2 py-0.5">+34</span>
                    </div>
                </div>


            </div>
        </div>
    </AuthenticatedLayout>
</template>
