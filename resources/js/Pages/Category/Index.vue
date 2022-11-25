<template>
    <div class="px-2 lg:px-8 mt-4 sm:mt-12">
        <div class="flex items-center">
            <h2 class="text-gray-800 text-lg lg:text-2xl font-bold mr-auto">Categories</h2>
            <div class="hidden lg:flex flex-wrap-reverse">
                <a :href="route('categories.create')">
                    <button class="btn-primary mr-2">Add new category
                    </button>
                </a>
            </div>
        </div>
        <div class="lg:hidden mt-2">
            <inertia-link :href="route('categories.create')">
                <button class="btn-primary py-2 px-4 mr-2">Add new category
                </button>
            </inertia-link>
        </div>

        <div class="bg-white shadow-md sm:rounded-lg py-4 sm:px-8 h-full mt-4">
            <div class="lg:w-full overflow-x-auto">
                <table class="w-full">
                    <tr class="text-left font-bold">
                        <th class="px-6 pt-6 pb-4">ID</th>
                        <th class="px-6 pt-6 pb-4">Name</th>
                    </tr>
                    <tr v-for="category in categories" :key="category.id"
                        class="hover:bg-green-50 focus-within:bg-green-50">
                        <td class="border-t">
                                {{ category.id }}
                            
                        </td>
                        <td class="border-t">
                           
                                {{ category.name }}
                        </td>
                    </tr>
                    <tr v-if="categories.length === 0">
                        <td class="border-t px-6 py-4" colspan="4">No Category found.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
export default {
    name: 'Category',
    metaInfo: {title: 'Category'},
    layout: AppLayout,
    components: {},
    props: {
        categories: Array,
    },
    data() {
        return {}
    },
    methods: {},
}
</script>

<style>
:root {
    --brand-blue-gradient: linear-gradient(270deg, #1A73E9 0%, #6C92F4 100%);
    --brand-green-gradient: linear-gradient(90deg, #1DDE7D 1.92%, #72DFC5 100%);
}

body {
    font-family: 'Nunito', sans-serif;
}

</style>
