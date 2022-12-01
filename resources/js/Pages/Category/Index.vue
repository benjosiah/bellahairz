<template>
    <div class="px-2 lg:px-8 mt-4 sm:mt-12">


        <add-category v-if="addModal" class="fixed lg:w-1/3 md:1/2 w-full top-0 left-0 right-0 m-auto border-t fadeIn"
            @closeModal="closeModal"
            @save="save"
            @edit="edit"  
            :category="category"
            :edit="edit"
            :errors="errors"          
        />


        <div class="flex items-center">
            <h2 class="text-gray-800 text-lg lg:text-2xl font-bold mr-auto">Categories</h2>
            <div class="hidden lg:flex flex-wrap-reverse">
                <button @click="showAddModal">
                    <button  @click="showAddModal" class="btn-primary mr-2">Add new category
                    </button>
                </button>
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
                         <th class="px-6 pt-6 pb-4">Edit</th>
                    </tr>
                    <tr v-for="category in categories" :key="category.id"
                        class="">
                        <td class="border-t">
                            {{ category.id }}
                            
                        </td>
                        <td class="border-t">
                           
                            {{ category.name }}
                        </td>
                        <td class="border-t w-10">
                            <button @click="showedit(category)" class="w-9 p-2 bg-blue-500 text-white rounded mx-1 mb-1 hover:bg-blue-600">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button @click="deletemodal(resource)" class="w-9 p-2 bg-red-500 text-white rounded hover:bg-red-600">
                                <i class="fas fa-trash"></i>
                            </button>
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
import AddCategory from '../components/addCategory.vue';
export default {
    name: 'Category',
    metaInfo: {title: 'Category'},
    layout: AppLayout,
    components: {AddCategory},
    props: {
        categories: Array,
    },
    data() {
        return {
            category: null,
            addModal: false,
            edit:false,
            openDelete: false,
            categoryToDelete: null,
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
        showedit(category){
            console.log('edit')
            this.edit = true
            this.category = category
            this.showAddModal()        
        },
        closeModal(){
            this.edit = false
            this.category = null
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
