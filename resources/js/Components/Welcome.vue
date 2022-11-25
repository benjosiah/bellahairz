<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div class="min-h-screen bg-gray-100 flex">
        <nav class="bg-white shadow w-64 flex flex-col justify-between">
            <div class="">
                <inertia-link href="/"  class="block m-4">
                    <h1 class="text-xl font-semibold">Vendors.so Admin</h1>
                </inertia-link>
                <div class="px-6 py-4 flex flex-col space-y-4">
                    <inertia-link href="/">
                        <h1 class="text-lg ">Dashboard</h1>
                    </inertia-link>
                    <inertia-link :href="route('')">
                        <h1 class="text-lg ">Category</h1>
                    </inertia-link>
                    <inertia-link :href="route('')">
                        <h1 class="text-lg ">Products</h1>
                    </inertia-link>
                </div>
            </div>

            <!-- BOTTOM -->
            <div class="px-6 py-4">
                <div class="mb-10">
                    <form method="POST" @submit.prevent="logout">
                        <button>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="flex-grow">
            <main class="">
                <slot></slot>
            </main>
        </div>
        <!-- Modal Portal -->
        <portal-target name="modal" multiple>
        </portal-target>
    </div>
</template>
