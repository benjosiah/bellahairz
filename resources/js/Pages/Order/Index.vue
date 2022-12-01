<template>
    <div class="px-2 lg:px-8 mt-4 sm:mt-12">



        <div class="flex items-center">
            <h2 class="text-gray-800 text-lg lg:text-2xl font-bold mr-auto">Orders</h2>
        </div>

        <div class="bg-white shadow-md sm:rounded-lg py-4 sm:px-8 h-full mt-4">
            <div class="lg:w-full overflow-x-auto">
                <table class="w-full">
                    <tr class="text-left font-bold">
                        <th class="px-6 pt-6 pb-4">Order ID</th>
                        <th class="px-6 pt-6 pb-4">Customer Name</th>
                        <th class="px-6 pt-6 pb-4">Cumstomer Email</th>
                        <th class="px-6 pt-6 pb-4">Number of Products</th>
                        <!-- <th class="px-6 pt-6 pb-4">Amount</th> -->
                        <th class="px-6 pt-6 pb-4">Status</th>
                        <th class="px-6 pt-6 pb-4">Details</th>
                    </tr>
                    <tr v-for="order in orders" :key="order.id"
                        class="hover:bg-green-50 focus-within:bg-green-50">
                        <td class="border-t">
                            {{order.id}}
                        </td>
                        <td class="border-t">
                            <div class="break-words max-w-sm h-16 overflow-y-auto">
                                {{order.first_name}} {{order.last_name}}
                            </div>
                        </td>

                        <td class="border-t ">
                           {{order.email}}
                        </td>
                        <td class="border-t ">
                           {{order.order_item.length}}
                        </td>
                         <!-- <td class="border-t w-px">
                           
                        </td> -->
                         <td class="border-t">
                           {{order.status}}
                        </td>
                         <td class="border-t">
                           details
                        </td>
                    </tr>
                    <tr v-if="orders.length === 0">
                        <td class="border-t px-6 py-4" colspan="4">No products found.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
export default {
    name: 'Orders',
    metaInfo: {title: 'Orders'},
    layout: AppLayout,
    props: {
        orders: {
            type: Array
        },
    },
    data() {
        return {

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
