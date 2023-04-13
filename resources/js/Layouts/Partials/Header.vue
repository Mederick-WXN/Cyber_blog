<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import {library} from "@fortawesome/fontawesome-svg-core";
import {faLightbulb, faRss, faSearch} from "@fortawesome/free-solid-svg-icons";
library.add(faSearch,faRss, faLightbulb)

</script>
<template>
    <header>
        <nav class="bg-black border-gray-200 px-4 lg:px-6 py-2.5 border-t-[#1e94d1] border-t-2">
            <div class="py-4 flex flex-wrap items-center justify-between mx-auto max-w-screen-xl">
                <div class="px-6">
                    <Link :href="route('Home')">
                        <div class="flex flex-row items-center">
                            <span class="self-center text-xl font-semibold whitespace-nowrap text-white">OxCyb3r</span>
                        </div>
                    </Link>
                </div>
                <div>
                        <ul class="flex flex-col items-center mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <Link href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 text-gray-400 lg:dark:hover:text-white hover:text-white">Blog</Link>
                            </li>
                            <li>
                                <font-awesome-icon icon="search" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 text-gray-400 lg:dark:hover:text-white hover:text-white"/>
                            </li>
                            <li>
                                <font-awesome-icon icon="rss" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 text-gray-400 lg:dark:hover:text-white hover:text-white" />
                            </li>
                            <li>
                                <font-awesome-icon icon="lightbulb" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 text-gray-400 lg:dark:hover:text-white hover:text-white" />
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
    </header>
</template>
