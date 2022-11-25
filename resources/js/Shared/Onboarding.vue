<template>
    <div class="text-gray-800 px-2 lg:px-0">

        <div class="flex flex-col flex-wrap bg-white rounded-lg shadow-md mt-6">
            <div
                class="bg-gradient-to-b from-brand-green to-dark-green px-4 md:px-8 py-4 text-left lg:py-6 w-full rounded-t-lg">
                <h2 class="text-white lg:text-2xl lg:font-black lg:mb-6"
                    :class="shopValidation.is_ready ? 'line-through': ''">
                    Welcome! Please complete your registration 🤗
                </h2>
                <ul class="text-white hidden lg:flex justify-between flex-wrap">
                    <div class="">
                        <li class="pb-4 flex items-center space-x-2">
                            <div class="text-gray-100 px-2 rounded-full text-lg font-bold">1</div>
                            <div :class="shopValidation.validations.image ? 'line-through': ''">
                                Add store logo or profile photo
                            </div>
                        </li>
                        <li class="pb-4 flex items-center space-x-2">
                            <div class=" text-gray-100 px-2 rounded-full text-lg font-bold">2</div>
                            <div :class="shopValidation.validations.address ? 'line-through': ''">
                                Add store details
                            </div>
                        </li>
                        <li class="pb-4 flex items-center space-x-2">
                            <div class=" text-gray-100 px-2 rounded-full text-lg font-bold">3</div>
                            <div :class="shopValidation.validations.contact ? 'line-through': ''">
                                Add phone number and social accounts
                            </div>
                        </li>
                    </div>
                    <div class="">
                        <li class="pb-4 flex items-center space-x-2">
                            <div class="text-gray-100 px-2 rounded-full text-lg font-bold">4</div>
                            <div class=""
                                 :class="shopValidation.validations.delivery_location ? 'line-through': ''">
                                Add at least one delivery location
                            </div>
                        </li>
                        <li class="pb-4 flex items-center space-x-2">
                            <div class="text-gray-100 px-2 rounded-full text-lg font-bold">5</div>
                            <div :class="shopValidation.validations.payment ? 'line-through': ''">
                                Add payment details
                            </div>
                        </li>
                        <li class="pb-4 flex items-center space-x-2">
                            <div class="text-gray-100 px-2 rounded-full text-lg font-bold ">6</div>
                            <div :class="shopValidation.validations.product ? 'line-through': ''">
                                Add products to store
                            </div>
                        </li>
                    </div>

                </ul>

                <div v-if="shopValidation.is_ready"
                     class="mt-4 text-center">
                    <h2 class="text-white">Your store is ready to go live.</h2>

                    <button @click.prevent="goLive()"
                            class="mt-4 btn px-6 border rounded-md">Go Live
                    </button>
                </div>
            </div>
            <div v-if="step === 1" class="px-4 lg:pl-12 w-full pb-6">
                <div class="">
                    <ShopBrandFormSection :shop="shop"/>
                </div>
                <div class="text-right">
                    <span class="mr-2 text-gray-500">1 of 6</span>
                    <button @click.prevent="next()"
                            class="btn border border-gray-200 text-gray-500 rounded-lg px-6 py-2">Next
                    </button>
                </div>
            </div>

            <div v-if="step === 2" class="px-4 lg:pl-12 w-full pb-6">
                <div class="">
                    <ShopInfoFormSection :shop="shop"/>
                </div>
                <div class="text-right">
                    <span class="mr-2 text-gray-600">2 of 6</span>
                    <button @click.prevent="prev()"
                            class="btn border border-gray-200 text-gray-500  rounded-lg px-6 py-2">
                        Previous
                    </button>
                    <button @click.prevent="next()"
                            class="btn border border-gray-200 text-gray-500  rounded-lg px-6 py-2">Next
                    </button>
                </div>
            </div>

            <div v-if="step === 3" class="px-4 lg:pl-12 w-full pb-6">
                <div class="">
                    <ShopContactFormSection :shop="shop"/>
                </div>
                <div class="text-right">
                    <span class="mr-2 text-gray-600">3 of 6</span>
                    <button @click.prevent="prev()"
                            class="btn border border-gray-200 text-gray-500  rounded-lg px-6 py-2">
                        Previous
                    </button>
                    <button @click.prevent="next()"
                            class="btn border border-gray-200 text-gray-500  rounded-lg px-6 py-2">Next
                    </button>
                </div>
            </div>

            <div v-if="step === 4" class="px-4 lg:pl-12 w-full pb-6">
                <div class="">
                    <ShopDeliveryFormSection :shop="shop"/>
                </div>
                <div class="text-right">
                    <span class="mr-2 text-gray-600">4 of 6</span>
                    <button @click.prevent="prev()"
                            class="btn border border-gray-200 text-gray-500  rounded-lg px-6 py-2">
                        Previous
                    </button>
                    <button @click.prevent="next()"
                            class="btn border border-gray-200 text-gray-500 rounded-lg px-6 py-2">Next
                    </button>
                </div>
            </div>

            <div v-if="step === 5" class="px-4 lg:pl-12 w-full pb-6">
                <div class="">
                    <ShopPaymentFormSection :shop="shop"/>
                </div>
                <div class="text-right">
                    <span class="mr-2 text-gray-600">5 of 6</span>
                    <button @click.prevent="prev()"
                            class="btn border border-gray-200 text-gray-500  rounded-lg px-6 py-2">
                        Previous
                    </button>
                    <button @click.prevent="next()"
                            class="btn border border-gray-200 text-gray-500 rounded-lg px-6 py-2">Next
                    </button>
                </div>
            </div>

            <div v-if="step === 6" class="px-4 lg:pl-12 w-full pt-12 pb-6">
                <div class="flex justify-center items-center lg:my-32">
                    <inertia-link :href="route('products.create')" class="outline-none">
                        <button
                            class="block bg-brand px-3 lg:px-6 py-3 rounded-lg text-white font-bold mr-1 outline-none hover:bg-green-800">
                            Add product to store
                        </button>
                    </inertia-link>
                </div>
                <span class="mr-2 text-gray-600 block text-center mt-4">6 of 6</span>
                <div class="text-center">
                    <button @click.prevent="prev()"
                            class="btn border border-gray-200 text-gray-500  rounded-lg px-6 py-2">
                        Previous
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ShopBrandFormSection from "@/Pages/Shop/ShopBrandFormSection";
import ShopContactFormSection from "@/Pages/Shop/ShopContactFormSection";
import ShopInfoFormSection from "@/Pages/Shop/ShopInfoFormSection";
import ShopPaymentFormSection from "@/Pages/Shop/ShopPaymentFormSection";
import ShopDeliveryFormSection from "@/Pages/Shop/ShopDeliveryFormSection";

export default {
    name: "Onboarding",
    components: {
        ShopBrandFormSection,
        ShopContactFormSection,
        ShopInfoFormSection,
        ShopPaymentFormSection,
        ShopDeliveryFormSection
    },
    props: ['shop', 'shopValidation'],
    data: function () {
        return {
            step: 1,
        }
    },
    methods: {
        prev() {
            this.step--;
        },
        next() {
            this.step++;
        },
        submit() {
            alert('Form Is Submitted.');
        },
        goLive() {
            this.$inertia.post(
                this.route('mystore-status.update'),
                {is_published: true},
                {preserveScroll: true},
            )
        }
    }
}
</script>
