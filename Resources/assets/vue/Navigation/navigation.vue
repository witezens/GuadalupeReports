<script setup>
import { ref } from 'vue'
import { Dialog, DialogPanel, TransitionChild, TransitionRoot, Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { Bars3Icon, HomeIcon, XMarkIcon, CurrencyDollarIcon, UserPlusIcon, ClipboardDocumentListIcon, PresentationChartLineIcon } from '@heroicons/vue/24/outline'

const sidebarOpen = ref(false)
</script>

<template>
    <div class="flex h-full">
        <TransitionRoot as="template" :show="sidebarOpen">
            <Dialog as="div" class="relative z-40 lg:hidden" @close="sidebarOpen = false">
                <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
                    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" />
                </TransitionChild>

                <div class="fixed inset-0 z-40 flex">
                    <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="-translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="-translate-x-full">
                        <DialogPanel class="relative flex w-full max-w-xs flex-1 flex-col bg-white focus:outline-none">
                            <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-300" leave-from="opacity-100" leave-to="opacity-0">
                                <div class="absolute top-0 right-0 -mr-12 pt-2">
                                    <button type="button" class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="sidebarOpen = false">
                                        <span class="sr-only">Close sidebar</span>
                                        <XMarkIcon class="h-6 w-6 text-white" aria-hidden="true" />
                                    </button>
                                </div>
                            </TransitionChild>
                            <div class="h-0 flex-1 overflow-y-auto pt-5 pb-4">
                                <div class="flex items-center flex-shrink-0 px-4">
                                    <svg height="45" viewBox="0 0 64 64" width="45" xmlns="http://www.w3.org/2000/svg"><g id="Layer_41" data-name="Layer 41"><circle cx="32" cy="32" fill="#bddbff" r="29"/><path d="m33.853 3.065a29.338 29.338 0 0 1 .147 2.935 29 29 0 0 1 -29 29c-.623 0-1.239-.026-1.853-.065a29 29 0 1 0 30.706-31.87z" fill="#9bc9ff"/><circle cx="32" cy="32" fill="#9bc9ff" r="25"/><path d="m32 57a25 25 0 0 0 1.973-49.915 28.988 28.988 0 0 1 -26.8 27.826 25 25 0 0 0 24.827 22.089z" fill="#57a4ff"/><path d="m46 40.083v-16.166l-14-8.083-14 8.083v16.166l14 8.083zm-24-13.856 10-5.774 10 5.774v11.546l-10 5.774-10-5.774z" fill="#005ece"/></g></svg>
                                    <span class="ml-2 text-xl font-bold" v-text="$root.applicationName"></span>
                                </div>
                                <nav aria-label="Sidebar" class="mt-5">
                                    <div class="space-y-1 px-2">



                                    </div>
                                </nav>
                            </div>
                            <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                                <a href="#" class="group block flex-shrink-0">
                                    <div class="flex items-center">
                                        <div>
                                            <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">Whitney Francis</p>
                                            <p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">View profile</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                    <div class="w-14 flex-shrink-0" aria-hidden="true">
                        <!-- Force sidebar to shrink to fit close icon -->
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>


        <!-- Static sidebar for desktop -->
        <div class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex w-60 flex-col">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex min-h-0 flex-1 flex-col border-r border-gray-200 bg-gray-100">
                    <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <svg height="45" viewBox="0 0 64 64" width="45" xmlns="http://www.w3.org/2000/svg"><g id="Layer_41" data-name="Layer 41"><circle cx="32" cy="32" fill="#bddbff" r="29"/><path d="m33.853 3.065a29.338 29.338 0 0 1 .147 2.935 29 29 0 0 1 -29 29c-.623 0-1.239-.026-1.853-.065a29 29 0 1 0 30.706-31.87z" fill="#9bc9ff"/><circle cx="32" cy="32" fill="#9bc9ff" r="25"/><path d="m32 57a25 25 0 0 0 1.973-49.915 28.988 28.988 0 0 1 -26.8 27.826 25 25 0 0 0 24.827 22.089z" fill="#57a4ff"/><path d="m46 40.083v-16.166l-14-8.083-14 8.083v16.166l14 8.083zm-24-13.856 10-5.774 10 5.774v11.546l-10 5.774-10-5.774z" fill="#005ece"/></g></svg>
                            <span class="ml-2 text-xl font-bold" v-text="$root.applicationName"></span>
                        </div>
                        <nav class="mt-5 flex-1" aria-label="Sidebar">
                            <div class="space-y-1 px-2">





                            </div>
                        </nav>
                    </div>
                    <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                        <a href="#" class="group block w-full flex-shrink-0">
                            <div class="flex items-center">
                                <div>
                                    <UserPlusIcon class="h-6 w-6 text-gray-900"></UserPlusIcon>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">¡Bienvenido!</p>
                                    <a href="/dashboard" class="text-xs font-medium text-gray-500 group-hover:text-gray-700">Salir del módulo</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
            <div class="lg:hidden">
                <div class="flex items-center justify-between border-b border-gray-200 bg-gray-50 px-4 py-1.5">
                    <div class="flex items-center flex-shrink-0">
                        <svg height="45" viewBox="0 0 64 64" width="45" xmlns="http://www.w3.org/2000/svg"><g id="Layer_41" data-name="Layer 41"><circle cx="32" cy="32" fill="#bddbff" r="29"/><path d="m33.853 3.065a29.338 29.338 0 0 1 .147 2.935 29 29 0 0 1 -29 29c-.623 0-1.239-.026-1.853-.065a29 29 0 1 0 30.706-31.87z" fill="#9bc9ff"/><circle cx="32" cy="32" fill="#9bc9ff" r="25"/><path d="m32 57a25 25 0 0 0 1.973-49.915 28.988 28.988 0 0 1 -26.8 27.826 25 25 0 0 0 24.827 22.089z" fill="#57a4ff"/><path d="m46 40.083v-16.166l-14-8.083-14 8.083v16.166l14 8.083zm-24-13.856 10-5.774 10 5.774v11.546l-10 5.774-10-5.774z" fill="#005ece"/></g></svg>
                    </div>
                    <div>
                        <button type="button" class="-mr-3 inline-flex h-12 w-12 items-center justify-center rounded-md text-gray-500 hover:text-gray-900" @click="sidebarOpen = true">
                            <span class="sr-only">Open sidebar</span>
                            <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="relative z-0 flex flex-1 overflow-hidden">
                <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none">
                    <!-- Start main area-->
                    <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
                        <router-view></router-view>
                    </div>
                    <!-- End main area -->
                </main>

            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
