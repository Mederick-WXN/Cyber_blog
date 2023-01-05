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

        <section class="bg-black">
            <div class="gap-8 items-center text-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <div class="flex flex-col gap-y-6">
                        <h2 class="text-4xl text-white font-bold">Blog</h2>
                        <Link>
                            <font-awesome-icon icon="user-secret" class="text-9xl text-[#1e94d1]"/>
                        </Link>
                </div>
                <div class="flex flex-col gap-y-6">
                        <h2 class="text-4xl text-white font-bold">Wiki</h2>
                        <Link>
                            <font-awesome-icon icon="book-skull" class="text-9xl text-[#1e94d1]"/>
                        </Link>
                </div>
            </div>
    </section>

    <section class="flex flex-col max-w-screen-xl lg:px-1 mx-2">
        <h2 class="text-4xl text-white font-bold">Service Status</h2>
        <p class="text-sm font-thin text-gray-400">Last updated 08:23:57 UTC | Next update in 23 sec. </p>
        <div class="grid grid-cols-2 text-center my-4">
            <div>
                <h2 class="text-4xl text-white font-bold">Blog</h2>
            </div>
            <div>
                <h2 class="text-4xl text-white font-bold">Wiki</h2>
            </div>

        </div>
    </section>
    </GuestLayout>
</template>
