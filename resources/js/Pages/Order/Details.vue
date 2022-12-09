<template>
    <div class="container mx-auto lg:px-8 text-gray-700">
        <div class="flex flex-wrap mt-6 lg:mt-12 items-center px-2">
            <h1 class="pl-2 sm:pl-0 text-xl sm:text-2xl lg:text-3xl mb-6">
                <inertia-link
                    class="brand-text hover:text-green-700 text-lg lg:text-2xl font-bold" :href="route('order.index')">
                    Orders
                </inertia-link>
                <span class="brand-text font-medium text-xl">/</span>
                <span class="text-xl font-semibold">#{{ order.id }}</span>
            </h1>
        </div>

        <div class="flex justify-between py-2 max-w-3xl">
            <div class="">
                <!--                    <div class="inline-block px-3 py-1 rounded-full bg-gray-200 text-sm">{{ order.status }}</div>-->
            </div>
            <div class="">
                <button
                    v-if="order.status !== 'completed'"
                    @click="markAsCompleted"
                    class="inline-block bg-blue-500 rounded-md py-2 px-6 lg:px-6 text-white font-bold shadow hover:bg-blue-800"
                >
                    Mark as completed
                </button>
            </div>
        </div>

        <div class="mx-auto pb-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg sm:p-10  max-w-3xl">
                <div class="">
                    <div class="w-full">
                        <div class="w-full bg-gray-50 sm:rounded-lg">
                            <div class="p-6">
                                <div class="flex justify-between">
                                    <h2 class="text-sm  sm:text-lg  mb-6 text-gray-600 uppercase">
                                        Order details
                                    </h2>

                                    <span class="text-sm font-semibold sm:text-lg  mb-6 text-gray-100 rounded-md p-1" :class="(order.status=='pending')?' bg-yellow-600':' bg-green-600'">
                                        {{order.status}}
                                    </span>
                                </div>

                                <table class="w-full">
                                    <tr class="font-bold  text-gray-700 text-sm sm:text-base uppercase">
                                        <td class="pb-2">Product</td>
                                        <td class="pb-2 text-right">
                                            Quantity
                                        </td>
                                        <td class="pb-2 text-right">
                                            Price
                                        </td>
                                    </tr>
                                    <tr v-for="order_item in order.order_item">
                                        <td class="pb-2 text-sm sm:text-base">
                                            {{ order_item.product.name }}
                                        </td>
                                        <td
                                            class="text-right text-sm  sm:text-base">
                                            {{ order_item.qty }} x
                                        </td>
                                        <td class="text-right text-sm sm:text-base">
                                            NGN
                                            {{ order_item.price }}
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>

                            <div class="bg-gray-800 sm:rounded-lg sm:rounded-t-none px-6 text-white py-4">
                                <div class="flex  justify-between text-sm sm:text-base">
                                    <span>Total amount:</span>
                                    <span class="font-bold"> NGN 
                                            {{ order.total }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mt-12 p-6 pb-12 sm:pb-6  w-full bg-gray-200 sm:rounded-lg text-sm sm:text-base">
                        <h2 class="text-sm sm:text-lg mb-8 text-gray-600">
                            CUSTOMER DETAILS
                        </h2>
                        <div class="mb-1 flex justify-between">
                            <span class="font-bold mr-4">Name:</span>
                            <span>{{ order.first_name }} {{order.last_name}} </span>
                        </div>
                        <div class="mb-1 flex justify-between">
                            <span class="font-bold mr-4 mt-2">Phone:</span>
                            <span>{{ order.phone }} </span>
                        </div>
                        <div class="mb-1 flex justify-between">
                            <span class="font-bold mr-4 mt-2">Email:</span>
                            <span>{{ order.email }} </span>
                        </div>
                        <div class="mb-1 flex justify-between">
                            <span class="font-bold mr-4 mt-2">Address:</span>
                            <span>{{ order.address }}</span>
                        </div>
                        <div class="mb-1 flex justify-between" v-if="order.notes">
                            <span class="font-bold mr-4 mt-2">Customer notes:</span>
                            <span>{{ order.notes }}</span>
                        </div>
                    </div>
                    <div class="mt-12 p-6 pb-12 sm:pb-6 w-full bg-gray-50 sm:rounded-lg text-sm  sm:text-base ">
                      


                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import AppLayout from "@/Layouts/AppLayout.vue";
export default {
    name: "OrderDetails",
    layout: AppLayout,
    metaInfo: {title: "Order details"},
    components:[AppLayout],
    props: {
        order: Object,
    },
    data() {
        return {};
    },
    methods: {
        markAsCompleted() {
            if (confirm("Are you sure you want to complete this order?")) {
                this.$inertia.post(
                    this.route("mark.completed", this.order.id),
                    {status: "completed"}
                );
            }
        }
    }
};
</script>

<style scoped></style>
