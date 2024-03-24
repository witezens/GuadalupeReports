<script setup>
import {ref} from "vue";
import moment from "moment";
import ApiError from "../Notifications/api-error.vue";
import { Squares2X2Icon } from "@heroicons/vue/24/outline/index.js";
import { ArrowDownTrayIcon } from "@heroicons/vue/24/solid/index.js";


const isSending = ref(false)
async function awaitForExport() {
    isSending.value = true

    const current_date = moment(new Date())

    try {
        let response = await api.exports.exportAllProducts()

        const href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(response.data);

        const a = document.createElement('a')
        a.style.display= 'none'
        a.href = href
        a.download =  'products_'+current_date.format('D-M-YY-h_m_s')

        document.body.append(a)
        a.click()

        // clean up "a" element & remove ObjectURL
        document.body.removeChild(a);
        URL.revokeObjectURL(href);
        isSending.value = false
    } catch (error) {
        // console.log(error.response.data)
        apiErrors.value = error.response.data.errors
        isApiError.value = true
        resetNotification()
    }
}


/**
 * For control api errors
 */
let isApiError = ref(false)
let apiErrors = ref([])

function resetNotification() {
    setTimeout(() => {
        isApiError.value = false
    }, 7000)
}
</script>

<template>
    <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-teal-50 bg-opacity-50 shadow-xl">
        <div class="flex w-full items-center justify-between space-x-6 p-6">
            <div class="flex-1 ">
                <div class="flex items-center space-x-3">
                    <h3 class="truncate text-xl font-bold text-gray-900">Productos</h3>
                    <span class="inline-flex flex-shrink-0 items-center rounded-full bg-green-50 px-1.5 py-0.5 text-sm font-medium text-green-700 ring-1 ring-inset ring-green-600/20">csv</span>
                </div>
                <div class="mt-1 text-sm text-gray-500">Obtenga un reporte completo de sus productos.</div>
            </div>
            <div class="rounded-md bg-erp-app p-3">
                <Squares2X2Icon class="h-6 w-6 text-white" aria-hidden="true" />
            </div>
        </div>
        <div>
            <div class="-mt-px flex divide-x divide-gray-200">
                <div class="-ml-px flex w-0 flex-1">
                    <button :disabled="isSending" @click="awaitForExport" class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900 hover:text-gray-500">
                        <ArrowDownTrayIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                        Descargar
                    </button>
                </div>
            </div>
        </div>

        <transition enter-active-class="transform ease-out duration-500 transition" enter-from-class="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2" enter-to-class="translate-y-0 opacity-100 sm:translate-x-0" leave-active-class="transition ease-in duration-100" leave-from-class="opacity-100" leave-to-class="opacity-0">
            <div>
                <api-error :errors="apiErrors" :show="isApiError"></api-error>
            </div>
        </transition>
    </li>
</template>

<style scoped>

</style>
