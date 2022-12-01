<template>


    <div class="bg-white overflow-hidden shadow-md rounded-lg px-2 py-6 lg:p-10 max-w-2xl">
         <div class="absolute top-1 right-1 p-2 cursor-pointer" @click="$emit('closeModal')">
                <span>
                    <i class="fa fa-times text-red-500"></i>
                </span>
            </div>
            <div class="w-full">
                <h3 class="font-semibold text-2xl">{{edit? "Edit" : "Add"}} Product</h3>
            </div>
            <form @submit.prevent="submit">
                <div class="p-2 lg:p-8 -mr-6 -mb-8">

                    <div class="w-full" >
                        <div class="">
                            <label class="text-gray-800 font-semibold">Product Name</label>
                        </div>
                        <div class="">
                            <input type="text" class="w-full p-2 border border-gray-400 rounded" v-model="form.name">
                            
                        </div>
                    </div>

                    <div class="w-full" >
                        <div class="">
                            <label class="text-gray-800 font-semibold">Product Description</label>
                        </div>
                        <div class="">
                            <input type="text" class="w-full p-2 border border-gray-400 rounded" v-model="form.description">
                            
                        </div>
                    </div>
                    
                    <div class="w-full" >
                        <div class="">
                            <label class="text-gray-800 font-semibold">Product Category</label>
                        </div>
                        <div class="">
                            <select class="w-full p-2 border border-gray-400 rounded" v-model="form.category_id">
                            <option value="">Select Category</option>
                            <option v-for="(category, index) in categories" :key="index" :value="category.id">{{category.name}}</option>
                        </select>
                            
                        </div>
                    </div>

                    <div class="w-full" >
                        <div class="">
                            <label class="text-gray-800 font-semibold">Product Peice</label>
                        </div>
                        <div class="">
                            <input type="text" class="w-full p-2 border border-gray-400 rounded" v-model="form.price">
                            
                        </div>
                    </div>

                    <div class="w-full" >
                        <div class="">
                            <label class="text-gray-800 font-semibold">Product Stock</label>
                        </div>
                        <div class="">
                            <input type="text" class="w-full p-2 border border-gray-400 rounded" v-model="form.stock">
                            
                        </div>
                    </div>
                
                    <div class="my-8">
                        <div class="mt-3" v-if="!edit">
                            <p class="subtitle text-gray-800">
                                Product image
                            </p>
                            <p>
                                <input type="file" class="w-full p-2 border border-gray-400 rounded" @input="form.image = $event.target.files[0]">
                            </p>


                        </div>

                    </div>
                </div>
                <div class="sm:px-8 py-4 flex justify-end items-center">
                    <button
                        class="w-full sm:w-auto inline-block mt-8 lg:mt-2 bg-green-500 rounded py-2 px-4 lg:px-6 text-white font-bold hover:bg-green-800"
                        type="submit"
                    >Save Product
                    </button>
                </div>
            </form>
    </div>

</template>
<script>
    export default {
        props: {
            errors:{
                type: Object,   
            },
            edit: {
                type: Boolean,
                default: false
            },
            product: {
                type: Object,
                default: function () {
                    return {
                        id: '',
                        name: "",
                        description: "",
                        price: 0,
                        stock: 0,
                        category_id: "",
                        image: null,
                    }
                }
            },
            categories: {
                type: Array,
            }
        },
        data() {
            return {
                form: {
                    id: this.edit?this.product.id:'' ,
                    name: this.edit?this.product.name:'',
                    description: this.edit?this.product.description: "",
                    price: this.edit?this.product.price: 0,
                    stock: this.edit?this.product.stock: 0,
                    category_id: this.edit?this.product.category_id: "",
                    image: this.edit?this.product.image: null
                }
            }
        },
        methods: {
            submit() {
                if(this.edit){
                    this.$inertia.put('/products/'+ this.product.id , this.form, {
                        onSuccess: () => {
                            console.log('saved')
                            this.$emit("closeModal");
                            // this.toast("Resource added succefully")
                        },
                        onError: (error) => {
                            console.log('saved')
                            if(error.error){
                                // this.emptyResource()
                                // this.toast(error.error, 'error')
                            }
            
                        }
                    }) 
                }else{
                    this.$inertia.post('/products', this.form, {
                        onSuccess: () => {
                            console.log('saved')
                            this.$emit("closeModal");
                            // this.emptyResource()
                            // this.toast("Resource added succefully")
                        },
                        onError: (error) => {
                            console.log('saved')
                            if(error.error){
                                // this.emptyResource()
                                // this.toast(error.error, 'error')
                            }
            
                        }
                    }) 
                }

            }    
        
        },

    }
</script>