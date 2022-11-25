<template>
    <div class="py-4 sm:py-12">
        <div class="max-w-screen-lg  mx-auto px-2 sm:px-6 lg:px-8 text-gray-700 flex flex-col justify-center ">
            <h1 class="mb-4 sm:mb-8 font-bold text-base sm:text-xl lg:text-3xl">
                <inertia-link class="brand-text hover:text-green-800" :href="route('products.index')">
                    categories
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
            form: this.$inertia.form({
                name: "",
            }),
        };
    },
    methods: {
        submit() {
            this.form
                .transform((data) => ({
                    ...data,
                }))
                .post(route("categories.store"));
        },
    }

};
</script>

<style></style>
