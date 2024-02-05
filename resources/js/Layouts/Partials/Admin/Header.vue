<script setup>
import { library } from '@fortawesome/fontawesome-svg-core'
import {faHouse, faNewspaper, faSearch, faUser} from '@fortawesome/free-solid-svg-icons'
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
import { Link } from '@inertiajs/inertia-vue3';

library.add(faSearch, faHouse, faNewspaper, faUser)
</script>

<template>
    <aside class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-black border-r border-gray-700">
        <a href="#" class="flex flex-col items-center">
            <ApplicationLogo/>
            <p class="text-white font-light">0xCyb3r - Dashboard</p>
        </a>

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav class="flex-1 -mx-3 space-y-2">
                <div class="relative mx-3">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <font-awesome-icon icon="search" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 text-gray-400 lg:dark:hover:text-white hover:text-white"/>
                </span>

                    <input type="text" class="w-full py-1.5 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" placeholder="Search" />
                </div>
                <Link :href="route('admin.dashboard')" class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-[#a7a9a7] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <font-awesome-icon icon="house" class="block py-2 pr-4 pl-3 border-b  lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 text-white"/>
                    <span class="mx-2 text-sm text-white font-medium">Dashboard</span>
                </Link>

                <Link :href="route('admin.posts.index')" class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-[#a7a9a7] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <font-awesome-icon icon="newspaper" class="block py-2 pr-4 pl-3 border-b  lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 text-white"/>
                    <span class="mx-2 text-sm text-white font-medium">Articles</span>
                </Link>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-[#a7a9a7] dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <font-awesome-icon icon="user" class="block py-2 pr-4 pl-3 border-b  lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 text-white"/>
                    <span class="mx-2 text-sm text-white font-medium">Utilisateurs</span>
                </a>
            </nav>

            <div class="mt-6">
                <div class="p-3 bg-gray-100 rounded-lg dark:bg-gray-800">
                    <h2 class="text-sm font-medium text-gray-800 dark:text-white">New feature availabel!</h2>

                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus harum officia eligendi velit.</p>

                    <img class="object-cover w-full h-32 mt-2 rounded-lg" src="https://images.unsplash.com/photo-1658953229664-e8d5ebd039ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&h=1374&q=80" alt="">
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a href="#" class="flex items-center gap-x-2">
                        <img class="object-cover rounded-full h-7 w-7" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&h=634&q=80" alt="avatar" />
                        <span class="text-sm font-medium text-white">John Doe</span>
                    </a>

                    <a href="#" class="text-gray-500 transition-colors duration-200 rotate-180 dark:text-gray-400 rtl:rotate-0 hover:text-blue-500 dark:hover:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </aside>
</template>

