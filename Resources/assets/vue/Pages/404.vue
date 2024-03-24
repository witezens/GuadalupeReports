<template>
    <div class="flex min-h-full flex-col bg-white pt-16 pb-12">
        <main class="mx-auto flex w-full max-w-7xl flex-grow flex-col justify-center px-4 sm:px-6 lg:px-8">
            <div class="flex flex-shrink-0 justify-center">
                <a href="/" class="inline-flex">
                    <svg height="45" viewBox="0 0 64 64" width="45" xmlns="http://www.w3.org/2000/svg"><g id="Layer_41" data-name="Layer 41"><circle cx="32" cy="32" fill="#bddbff" r="29"/><path d="m33.853 3.065a29.338 29.338 0 0 1 .147 2.935 29 29 0 0 1 -29 29c-.623 0-1.239-.026-1.853-.065a29 29 0 1 0 30.706-31.87z" fill="#9bc9ff"/><circle cx="32" cy="32" fill="#9bc9ff" r="25"/><path d="m32 57a25 25 0 0 0 1.973-49.915 28.988 28.988 0 0 1 -26.8 27.826 25 25 0 0 0 24.827 22.089z" fill="#57a4ff"/><path d="m46 40.083v-16.166l-14-8.083-14 8.083v16.166l14 8.083zm-24-13.856 10-5.774 10 5.774v11.546l-10 5.774-10-5.774z" fill="#005ece"/></g></svg>
                </a>
            </div>
            <div class="py-16">
                <div class="text-center">
                    <p class="text-base font-semibold text-blue-600">404</p>
                    <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found.</h1>
                    <p class="mt-2 text-base text-gray-500">Sorry, we couldn’t find the page you’re looking for.</p>
                    <div class="mt-6">
                        <router-link :to="{ name: 'guadalupe-reports.index' }" class="text-base font-medium text-blue-600 hover:text-blue-500">
                            Go back home
                            <span aria-hidden="true"> &rarr;</span>
                        </router-link>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mx-auto w-full max-w-7xl flex-shrink-0 px-4 sm:px-6 lg:px-8">
            <nav class="flex justify-center space-x-4">
                <a href="tel:35900995" class="text-sm font-medium text-gray-500 hover:text-gray-600">Contact Support</a>
                <span class="inline-block border-l border-gray-300" aria-hidden="true" />
                <a href="mailto:appserviciosgt@outlook.com" class="text-sm font-medium text-gray-500 hover:text-gray-600">Email Support</a>
            </nav>
        </footer>
    </div>
</template>

<script>
export default {
    name: "404"
}
</script>
