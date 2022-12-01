<template>
    <div class="px-2 lg:px-8 mt-4 sm:mt-12">
        <add-product v-if="addModal" class="fixed lg:w-1/3 md:1/2 w-full top-0 left-0 right-0 m-auto border-t fadeIn"
            @closeModal="closeModal"
            :product="product"
            :categories="categories"
            :edit="edit"
            :errors="errors"          
        />


        <div class="flex items-center">
            <h2 class="text-gray-800 text-lg lg:text-2xl font-bold mr-auto">Products</h2>
            <div class="hidden lg:flex flex-wrap-reverse">
                <button  @click="showAddModal">
                    <button  @click="showAddModal" class="btn-primary mr-2">Add new product
                    </button>
                </button>
            </div>
        </div>
        <div class="lg:hidden mt-2">
            <inertia-link :href="route('products.create')">
                <button class="btn-primary py-2 px-4 mr-2">Add new product
                </button>
            </inertia-link>
        </div>

        <div class="bg-white shadow-md sm:rounded-lg py-4 sm:px-8 h-full mt-4">
            <div class="lg:w-full overflow-x-auto">
                <table class="w-full">
                    <tr class="text-left font-bold">
                        <th class="px-6 pt-6 pb-4">Name</th>
                        <th class="px-6 pt-6 pb-4">Description</th>
                        <th class="px-6 pt-6 pb-4">Price</th>
                        <th class="px-6 pt-6 pb-4">Stock</th>
                    </tr>
                    <tr v-for="product in products" :key="product.id"
                        class="hover:bg-green-50 focus-within:bg-green-50">
                        <td class="border-t">
                            <inertia-link class="px-6 py-4 flex items-center" tabindex="-1"
                                          :href="route('products.show', product.id)">
                                {{ product.name }}
                            </inertia-link>
                        </td>
                        <td class="border-t">
                            <div class="break-words max-w-sm h-16 overflow-y-auto">
                                <inertia-link class="px-6 py-4 flex items-center" tabindex="-1"
                                              :href="route('products.show', product.id)">
                                    {{ product.description }}
                                </inertia-link>
                            </div>
                        </td>

                        <td class="border-t ">
                            <inertia-link class="px-6 py-4 flex items-center" tabindex="-1"
                                          :href="route('products.show', product.id)">
                                {{ product.price }}
                            </inertia-link>
                        </td>
                        <td class="border-t w-px">
                            <inertia-link class="px-4 flex items-center"
                                          :href="route('products.show', product.id)"
                                          tabindex="-1">
                                {{ product.stock }}
                            </inertia-link>
                        </td>
                        <td class="border-t">
                            <button @click="showedit(product)" class="w-9 p-2 bg-blue-500 text-white rounded mx-1 hover:bg-blue-600">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button @click="deletemodal(product)" class="w-9 p-2 bg-red-500 text-white rounded hover:bg-red-600">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr v-if="products.length === 0">
                        <td class="border-t px-6 py-4" colspan="4">No products found.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import AddProduct from '../components/addProduct.vue';
export default {
    name: 'Products',
    metaInfo: {title: 'Products'},
    layout: AppLayout,
    components: {AddProduct},
    props: {
        products: {
            type: Array
        },
        categories:{
            type: Array
        }
    },
    data() {
        return {
            product: null,
            addModal: false,
            edit:false,
            openDelete: false,
            // categoryToDelete: null,
            message: {
                open: false,
                type: '',
                text: ''
            },
        }
    },
    methods: {
        showAddModal(){
            this.addModal = true
        },
        closeAddModal(){
            this.addModal = false
        },
        showedit(product){
            console.log('edit')
            this.edit = true
            this.product = product
            this.showAddModal()        
        },
        closeModal(){
            this.edit = false
            this.product = null
            this.closeAddModal()
        }
    },
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
