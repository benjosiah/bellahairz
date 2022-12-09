<template>
     <div class="py-4 sm:py-12">
        <add-product v-if="addModal" class="fixed lg:w-1/3 md:1/2 w-full top-0 left-0 right-0 m-auto border-t fadeIn"
            @closeModal="closeAddModal"
            :product="product"
            :categories="categories"
            :edit="true"
            :errors="errors"          
        />
        <div class="max-w-screen-lg mx-auto  px-2  sm:px-6  lg:px-8  flex flex-col justify-center text-gray-700">
            <div
                v-if="$page.flash && $page.flash.message"
                class="bg-green-400 sm:p-4 max-w-2xl rounded text-white mb-4">
                {{ $page.flash.message }}
            </div>

            <h1 class="font-bold text-base sm:text-xl lg:text-3xl">
                <inertia-link
                    class="text-deep-green hover:text-green-800"
                    :href="route('products.index')">
                    Products
                </inertia-link>
                <span class="brand-text font-medium">/</span>
                {{ product.name }}
            </h1>
            <div
                class="mt-4 sm:mt-8 bg-white overflow-hidden shadow-md rounded-lg px-2 sm:px-8 py-6 max-w-2xl text-left text-gray-700"
            >
                
                    <div class="flex justify-end">
                        <button class="focus:outline-none" @click.prevent="showAddModal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </button>
                    </div>


                    <div class="">
                        <h2 class="mb-2">Product images</h2>
                        <div class="mt-2 flex flex-wrap justify-center bg-blue-50 rounded-lg">
                            <div class="">
                                <img :src="product.image" alt="Product image"
                                     class="w-32 h-32 sm:w-40 sm:h-40 object-cover  rounded mt-2 mr-2"/>
                            </div>
                           
                            <div v-if="product.image == null && isEditMode === false"
                                 class="uppercase text-center text-xs py-6">
                                No images
                            </div>
                        </div>

                        <div>
                        <div class="mt-3">
                            <p class="subtitle text-gray-800">
                               Update Product image
                            </p>
                            <p>
                                <input type="file" class="w-full p-2 border border-gray-400 rounded" @input="image = $event.target.files[0]">
                                <button
                                    @click="updateImage()"
                                    class="w-full sm:w-auto inline-block mt-8 lg:mt-2 bg-blue-500 rounded py-2 px-4 lg:px-6 text-white font-bold hover:bg-blue-800"
                                    type="submit"
                                >Save Product
                                </button>
                            </p>


                        </div>
                    </div>
                        
                    </div>

                    <div class="mt-12 p-6 pb-12 sm:pb-6  w-full bg-gray-50 sm:rounded-lg text-lg sm:text-base" >

                        <h2 class="text-sm sm:text-lg mb-8 text-gray-600">
                            PRODUCT DETAILS
                        </h2>
                        <div class="mb-1 flex justify-between">
                            <span class="font-bold mr-4">Name:</span>
                            <span>{{ product.name }} </span>
                        </div>
                        <div class="mb-1 flex justify-between">
                            <span class="font-bold mr-4 mt-2">Description:</span>
                            <span>{{ product.description }} </span>
                        </div>
                        <div class="mb-1 flex justify-between">
                            <span class="font-bold mr-4 mt-2">Stock:</span>
                            <span>{{ product.stock }} </span>
                        </div>
                        <div class="mb-1 flex justify-between">
                            <span class="font-bold mr-4 mt-2">Price:</span>
                            <span>NGN {{ product.price }}</span>
                        </div>
                        <div class="mb-1 flex justify-between">
                            <span class="font-bold mr-4 mt-2">Added date:</span>
                            <span>{{ product.created_at }}</span>
                        </div>


                    </div>
                    

            </div>
        </div>
    </div>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import AddProduct from '../components/addProduct.vue';

export default {
    name: "ProductDetails",
    metaInfo: {title: "Product details"},
    layout: AppLayout,
      components: {AddProduct },
 props: {
        product: {
            type: Object
        },
        categories:{
            type: Array
        }
    },
    remember: "form",
    data() {
        return {
            isEditMode: false,
            image: null,
            addModal: false,
            form: this.$inertia.form({
                image: null
            })
        };
    },
    methods: {
        showAddModal(){
            this.addModal = true
        },
        closeAddModal(){
            this.addModal = false
        },
        updateImage(){
            this.$inertia.post(`/products/imgae/${this.product.id}/update`, {
                'image': this.image
            }, {
                onSuccess: () => {
                  
                },

                onError: (error) => {
                  
                }
            })
        },

        cancelEdit() {
            this.form.reset();
            this.isEditMode = !this.isEditMode;
        },
        markAsOutOfStock() {
            this.$inertia.put(
                this.route("products.quantity.update", this.product.id),
                {quantity: 0}
            );
        }
    },
    computed: {

    }
};
</script>