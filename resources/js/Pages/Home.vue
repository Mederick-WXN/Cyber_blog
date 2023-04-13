<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret,faBookSkull } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
library.add(faUserSecret,faBookSkull)
</script>

<template>
    <Head title="0xCyb3r" />
    <GuestLayout>
        <section class="bg-black">
            <div class="flex flex-col items-center">
                <ApplicationLogo class="w-64" />
                <h1 class="mb-2 text-5xl font-extrabold text-gray-500 dark:text-neutral-200">0xCyb3r</h1>
                <h2 class="text-xl font-thin text-gray-300">La cybersécurité vue par un cyber-étudiant : analyse, apprentissage et partage</h2>

            </div>
        </section>

        <section class="p-8 sm:p-16 text-gray-100">
            <div class="container p-6 mx-auto space-y-8">
                <a href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 bg-gray-900">
                    <img src="" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 bg-gray-500">
                    <div class="p-6 space-y-2 lg:col-span-5">
                        <div>
                            <a ref="noopener noreferrer" href="#" class="py-2 text-xs tracking-wider uppercase hover:underline text-violet-400">Actu</a>
                            <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">La cybersécurité, par où on commence ? </h3>
                        </div>
                        <p class="pl-2 text-gray-500">Envie de devenir un ethical hacker ? Par où commencer ? Je vous livre tous les secrets pour réussir en cyber. Analyse sur les différents corps de métier au sein de la sphére offensif et defensif. Temoignage d'un ancien étudiant devenu RSSI après son école d'ingénieur.</p>
                        <div class="flex justify-between text-xs text-gray-400">
                            <span>Date</span>
                            <span>Heure</span>
                        </div>
                    </div>
                </a>
                <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4">
                    <article class="space-y-2">
                        <a ref="noopener noreferrer" href="#">
                            <img src="" alt="" class="object-cover w-full h-52 bg-gray-500">
                            <div class="flex flex-col flex-1 p-6">
                                <a ref="noopener noreferrer" href="#" class="text-xs tracking-wider uppercase hover:underline text-violet-400">Web</a>
                                <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Vulnérabilités sur Laravel 10</h3>
                                <p class="py-2 text-gray-500">Depuis la sortie de la nouvelle version de Laravel 10, de nombreuses faille de sécurité sont apparue dans l'écosystème du framework...</p>
                                <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                                    <span>DATE</span>
                                    <span>Heure</span>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>
