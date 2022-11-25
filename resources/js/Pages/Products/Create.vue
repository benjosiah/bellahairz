<template>
    <div class="py-4 sm:py-12">
        <div class="max-w-screen-lg  mx-auto px-2 sm:px-6 lg:px-8 text-gray-700 flex flex-col justify-center ">
            <h1 class="mb-4 sm:mb-8 font-bold text-base sm:text-xl lg:text-3xl">
                <inertia-link class="brand-text hover:text-green-800" :href="route('products.index')">
                    Products
                </inertia-link>
                <span class="brand-text font-medium">/</span> Create
            </h1>

            <div class="bg-white overflow-hidden shadow-md rounded-lg px-2 py-6 lg:p-10 max-w-2xl">
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
                                <option v-for="category in categories" :value="category.id">{{category.name}}</option>
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
                            <div class="mt-3">
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
                            class="w-full sm:w-auto inline-block mt-8 lg:mt-2 bg-brand rounded py-2 px-4 lg:px-6 text-white font-bold hover:bg-green-800"
                            type="submit"
                        >Save Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import LoadingButton from "@/Shared/LoadingButton.vue";
import SelectInput from "@/Shared/SelectInput.vue";
import TextInput from "@/Shared/TextInput.vue";
import TextareaInput from "@/Shared/TextareaInput.vue";
import FileInput from "@/Shared/FileInput.vue";
// import FileUploaderComponent from "@/Shared/FileUploaderComponent.vue";

const PAYMENT_PERCENT = 0.05;

const MINUTES_KEY = "mins";
const HOURS_KEY = "hrs";
const DAYS_KEY = "days";

const UNIT_MULTIPLIER = {
    [MINUTES_KEY]: 1,
    [HOURS_KEY]: 60,
    [DAYS_KEY]: 1440,
};

export default {
    name: "CreateProduct",
    metaInfo: {title: "Add Product"},
    layout: AppLayout,
    components: {
        LoadingButton,
        SelectInput,
        TextInput,
        TextareaInput,
        FileInput,
        // FileUploaderComponent,
    },
    props: {
        categories: Object,
    },
    remember: "form",
    data() {
        return {
            lead_time: {
                amount: null,
                unit: DAYS_KEY,
            },
            form: this.$inertia.form({
                name: "",
                description: "",
                price: 0,
                stock: 0,
                category_id: "",
                image: null
            }),
        };
    },
    methods: {
        submit() {
            this.form
                .transform((data) => ({
                    ...data,
                }))
                .post(route("products.store"));
        },
        collectFileIds(response) {
            this.form.mediaIds.push(response.id);
        },
        fromMinutes(timeInMin, unit) {
            if (timeInMin == null) return null;
            return timeInMin / UNIT_MULTIPLIER[unit];
        },
        toMinutes(time, unit) {
            if (time == null || time === "") return null;
            return time * UNIT_MULTIPLIER[unit];
        },
    },
    computed: {
        leadTimeInMinutes() {
            return this.toMinutes(this.lead_time.amount, this.lead_time.unit);
        },
        paymentCharge() {
            return (Number(this.form.price) * PAYMENT_PERCENT)?.toFixed(2);
        },
        amountReceived() {
            return (Number(this.form.price) * (1 - PAYMENT_PERCENT))?.toFixed(
                2
            );
        },
    },
};
</script>

<style></style>
