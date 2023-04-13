<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Logo from '/storage/app/public/images/app/app_logo.png'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret,faBookSkull } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
library.add(faUserSecret,faBookSkull)
</script>

<template>
    <Head title="Portail" />
    <GuestLayout>
        <section class="bg-black">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 text="Test" class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-[#1e94d1]">Welcome on 0xCyb3r !</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, eos vero molestiae dolor omnis accusantium cupiditate voluptatum corrupti ea. A adipisci vero ea esse cumque impedit quam corrupti harum quod.</p>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Discovery us
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img :src="Logo" class="w-60" alt="illustration">
                </div>
            </div>
        </section>

        <section class="p-8 sm:p-16 text-gray-100">
            <div class="container p-6 mx-auto space-y-8">
                <a href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 bg-gray-900">
                    <img src="" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 bg-gray-500">
                    <div class="p-6 space-y-2 lg:col-span-5">
                        <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Digital & Network Defence Agency, le partenaire </h3>
                        <a ref="noopener noreferrer" href="#" class="py-2 text-xs tracking-wider uppercase hover:underline text-violet-400">Actu</a>
                        <p class="h-20"> !loren </p>
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
                                <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                                    <span>DATE</span>
                                    <span>Heure</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="space-y-2">
                        <a ref="noopener noreferrer" href="#">
                            <img src="" alt="" class="object-cover w-full h-52 bg-gray-500">
                            <div class="flex flex-col flex-1 p-6">
                                <a ref="noopener noreferrer" href="#" class="text-xs tracking-wider uppercase hover:underline text-violet-400">Web</a>
                                <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Les attaques par force-brute !</h3>
                                <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                                    <span>DATE</span>
                                    <span>Heure</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="space-y-2">
                        <a ref="noopener noreferrer" href="#">
                            <img src="" alt="" class="object-cover w-full h-52 bg-gray-500">
                            <div class="flex flex-col flex-1 p-6">
                                <a ref="noopener noreferrer" href="#" class="text-xs tracking-wider uppercase hover:underline text-violet-400">Ransomware</a>
                                <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Lockbit 4.0, le nouveau ransomware !</h3>
                                <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                                    <span>DATE</span>
                                    <span>Heure</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="space-y-2">
                        <a ref="noopener noreferrer" href="#">
                            <img src="" alt="" class="object-cover w-full h-52 bg-gray-500">
                            <div class="flex flex-col flex-1 p-6">
                                <a ref="noopener noreferrer" href="#" class="text-xs tracking-wider uppercase hover:underline text-violet-400">Actu</a>
                                <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">0xCyb3r, le début de l'aventure !</h3>
                                <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                                    <span>DATE</span>
                                    <span>Heure</span>
                                </div>
                            </div>
                        </a>
                    </article><article class="space-y-2">
                        <a ref="noopener noreferrer" href="#">
                            <img src="" alt="" class="object-cover w-full h-52 bg-gray-500">
                            <div class="flex flex-col flex-1 p-6">
                                <a ref="noopener noreferrer" href="#" class="text-xs tracking-wider uppercase hover:underline text-violet-400">Web</a>
                                <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Vulnérabilités sur Laravel 10</h3>
                                <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                                    <span>DATE</span>
                                    <span>Heure</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="space-y-2">
                        <a ref="noopener noreferrer" href="#">
                            <img src="" alt="" class="object-cover w-full h-52 bg-gray-500">
                            <div class="flex flex-col flex-1 p-6">
                                <a ref="noopener noreferrer" href="#" class="text-xs tracking-wider uppercase hover:underline text-violet-400">Web</a>
                                <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Les attaques par force-brute !</h3>
                                <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                                    <span>DATE</span>
                                    <span>Heure</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="space-y-2">
                        <a ref="noopener noreferrer" href="#">
                            <img src="" alt="" class="object-cover w-full h-52 bg-gray-500">
                            <div class="flex flex-col flex-1 p-6">
                                <a ref="noopener noreferrer" href="#" class="text-xs tracking-wider uppercase hover:underline text-violet-400">Ransomware</a>
                                <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">Lockbit 4.0, le nouveau ransomware !</h3>
                                <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                                    <span>DATE</span>
                                    <span>Heure</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="space-y-2">
                        <a ref="noopener noreferrer" href="#">
                            <img src="" alt="" class="object-cover w-full h-52 bg-gray-500">
                            <div class="flex flex-col flex-1 p-6">
                                <a ref="noopener noreferrer" href="#" class="text-xs tracking-wider uppercase hover:underline text-violet-400">Actu</a>
                                <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">0xCyb3r, le début de l'aventure !</h3>
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
