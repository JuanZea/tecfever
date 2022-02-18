<template>
    <div class="mt-5 flex justify-center">
        <div>
            <table v-if="products" class="overflow-hidden rounded-lg border border-gray-200 shadow">
                <caption>
                    Products table
                </caption>
                <thead class="bg-gray-100">
                    <tr>
                        <th
                            scope="col"
                            class="py-3 pl-6 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                        >
                            Id
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                        >
                            Name
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                        >
                            Description
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                        >
                            Price
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                        >
                            Stock
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in products" :key="product.id">
                        <td class="py-3 pl-6 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            {{ product.id }}
                        </td>
                        <td class="py-3 pl-6 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            {{ product.name }}
                        </td>
                        <td class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            <p class="w-80 truncate">
                                {{ product.description }}
                            </p>
                        </td>
                        <td class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            {{ product.price }}
                        </td>
                        <td class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            {{ product.stock }}
                        </td>
                        <td class="relative px-6 py-3">
                            <button
                                @click="destroy(product.id)"
                                type="button"
                                class="inline-flex items-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                            >
                                <TrashIcon class="-ml-1 mr-3 h-5 w-5" aria-hidden="true" />
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="flex">
                <div @click="goTo(link.url)" class="p-4 border rounded cursor-pointer hover:bg-black hover:text-white" v-for="link in links" :key="link.label">{{link.label}}</div>
            </div>
            <!-- <Pagination
                :pages="[
                    {
                        label: 1,
                        link: 'http://tecfever.test/users',
                        current: true,
                    },
                    { label: 2, link: 'http://tecfever.test/users?page=2' },
                ]"
            /> -->
        </div>
    </div>
</template>

<script>
import CSwitch from '../CSwitch';
import Pagination from '../Pagination';
import { TrashIcon } from '@heroicons/vue/outline';
import { ref } from '@vue/reactivity';
import axios from 'axios';

export default {
    name: 'UsersTable',
    components: { Pagination, CSwitch, TrashIcon },
    setup() {
        const products = ref();
        const links = ref();

        const getProducts = () => {
            axios.get('http://tecfever.test/api/products').then(response => {
                products.value = response.data.data;
                links.value = response.data.links;
            });
        };

        getProducts();

        const goTo = (url) => {
            if(!url) return;

            axios.get(url).then(response => {
                products.value = response.data.data;
                links.value = response.data.links;
            });
        }

        const destroy = id => {
            axios.delete('http://tecfever.test/api/products/' + id).then(() => {
                getProducts();
            });
        };

        return { products, links, destroy, goTo };
    },
};
</script>
