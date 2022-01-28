<template>
    <div class="mt-5 flex justify-center">
        <div>
            <table class="overflow-hidden rounded-lg border border-gray-200 shadow">
                <caption>
                    Users table
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
                            Status
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                        >
                            Role
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users" :key="user.id">
                        <td class="py-3 pl-6 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            {{ user.id }}
                        </td>
                        <td class="px-6 py-3 text-left text-xs font-medium text-gray-500">
                            <div class="flex items-center">
                                <img
                                    class="h-10 w-10 rounded-full"
                                    :src="`https://ui-avatars.com/api/?name=${user.name}&background=FF0000&color=fff&size=50&bold=true`"
                                    alt="Avatar"
                                />
                                <div class="ml-4">
                                    <div class="text-sm font-bold uppercase text-gray-900">
                                        {{ user.name }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ user.email }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500">
                            <span class="flex items-center gap-2 rounded-full px-4 py-1 text-sm font-medium">
                                {{ user.disabledAt ? 'Disabled' : 'Enabled' }}
                                <CSwitch
                                    v-if="current !== user.id"
                                    :initialStatus="!user.disabledAt"
                                    @click="toggleStatus(user)"
                                />
                            </span>
                        </td>
                        <td class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                            {{ user.role }}
                        </td>
                        <td class="relative px-6 py-3">
                            <button
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
            <Pagination
                :pages="[
                    {
                        label: 1,
                        link: 'http://tecfever.test/users',
                        current: true,
                    },
                    { label: 2, link: 'http://tecfever.test/users?page=2' },
                ]"
            />
        </div>
    </div>
</template>

<script>
import CSwitch from './CSwitch';
import Pagination from './Pagination';
import { TrashIcon } from '@heroicons/vue/outline';

export default {
    name: 'UsersTable',
    components: { Pagination, CSwitch, TrashIcon },
    props: {
        users: { type: Object, required: true },
        current: { type: Number, required: true },
        pagination: { type: Object, required: true },
    },
    setup(props) {
        console.log(props.pagination);
        const toggleStatus = user => {
            console.log(user);
        };
        return { toggleStatus };
    },
};
</script>
