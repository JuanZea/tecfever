<template>
    <Menu as="div" class="relative flex items-center">
        <MenuButton>
            <img
                class="cursor-pointer rounded-full hover:opacity-90"
                :src="`https://ui-avatars.com/api/?name=${name}&background=FF0000&color=fff&size=50&bold=true`"
                alt="avatar"
            />
        </MenuButton>

        <transition
            enter-active-class="transition duration-100 ease-out"
            enter-from-class="transform scale-95 opacity-0"
            enter-to-class="transform scale-100 opacity-100"
            leave-active-class="transition duration-75 ease-in"
            leave-from-class="transform scale-100 opacity-100"
            leave-to-class="transform scale-95 opacity-0"
        >
            <MenuItems
                class="absolute right-0 top-12 mt-2 w-44 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
            >
                <div class="px-1 py-1">
                    <MenuItem v-slot="{ active }">
                        <a
                            :class="[
                                active ? 'bg-gray-800 text-white' : 'text-gray-900',
                                'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                            ]"
                            :href="profileRoute"
                        >
                            <UserCircleIcon :active="active" class="mr-2 h-5 w-5" aria-hidden="true" />
                            My profile
                        </a>
                    </MenuItem>
                    <MenuItem v-if="panelRoute" v-slot="{ active }">
                        <a
                            :class="[
                                active ? 'bg-gray-800 text-white' : 'text-gray-900',
                                'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                            ]"
                            :href="panelRoute"
                        >
                            <PresentationChartLineIcon :active="active" class="mr-2 h-5 w-5" aria-hidden="true" />
                            Panel
                        </a>
                    </MenuItem>
                    <MenuItem v-slot="{ active }">
                        <button
                            type="submit"
                            form="logout-form"
                            :class="[
                                active ? 'bg-gray-800 text-white' : 'text-gray-900',
                                'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                            ]"
                        >
                            <LogoutIcon :active="active" class="mr-2 h-5 w-5" aria-hidden="true" />
                            Logout
                        </button>
                    </MenuItem>
                </div>
            </MenuItems>
        </transition>
    </Menu>
    <form id="logout-form" class="hidden" :action="routes.logout.uri" method="POST">
        <CsrfToken />
    </form>
</template>

<script>
import CsrfToken from './helpers/CsrfToken';

import { routes } from '../use';
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { UserCircleIcon, LogoutIcon } from '@heroicons/vue/solid';
import { PresentationChartLineIcon } from '@heroicons/vue/outline';

export default {
    name: 'Dropdown',
    props: {
        name: { type: String, required: true },
        profileRoute: { type: String, required: true },
        panelRoute: { type: String, required: true },
    },
    components: {
        Menu,
        MenuButton,
        MenuItems,
        MenuItem,
        UserCircleIcon,
        LogoutIcon,
        CsrfToken,
        PresentationChartLineIcon,
    },
    setup() {
        return { routes };
    },
};
</script>
