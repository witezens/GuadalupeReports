<script setup>
import {HomeIcon} from "@heroicons/vue/20/solid/index.js";
import AllProductsReport from "./ReportCards/all-products-report.vue";


</script>

<template>
    <div>
        <!-- Breadcrumbs -->
        <nav class="flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-4 py-3">
                <li>
                    <div>
                        <router-link :to="{ name: 'guadalupe-reports.index' }" class="text-gray-400 hover:text-gray-500">
                            <HomeIcon class="h-5 w-5 flex-shrink-0" aria-hidden="true" />
                            <span class="sr-only">Inicio</span>
                        </router-link>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                        </svg>
                        <span class="ml-4 text-xl font-semibold text-black-500 hover:text-black-700" aria-current="page">Reportes disponibles</span>
                    </div>
                </li>
            </ol>
        </nav>

        <ul class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <all-products-report></all-products-report>
        </ul>
    </div>
</template>

<style scoped>

</style>
