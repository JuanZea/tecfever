<template>
  <div>
    <Menu as="div" class="relative inline-block text-left">
      <div>
        <MenuButton>
          <img class="rounded-full cursor-pointer hover:opacity-90" :src="`https://ui-avatars.com/api/?name=${name}&background=FF0000&color=fff&size=50&bold=true`" alt="avatar">
        </MenuButton>
      </div>

      <transition
        enter-active-class="transition duration-100 ease-out"
        enter-from-class="transform scale-95 opacity-0"
        enter-to-class="transform scale-100 opacity-100"
        leave-active-class="transition duration-75 ease-in"
        leave-from-class="transform scale-100 opacity-100"
        leave-to-class="transform scale-95 opacity-0"
      >
        <MenuItems
          class="absolute right-0 w-44 mt-2 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
        >
          <div class="px-1 py-1">
            <MenuItem v-slot="{ active }">
              <a
                :class="[
                  active ? 'bg-gray-800 text-white' : 'text-gray-900',
                  'group flex rounded-md items-center w-full px-2 py-2 text-sm',
                ]"
                :href="profileRoute"
              >
                <UserCircleIcon
                  :active="active"
                  class="w-5 h-5 mr-2"
                  aria-hidden="true"
                />
                My profile
              </a>
            </MenuItem>
          </div>
        </MenuItems>
      </transition>
    </Menu>
  </div>
</template>

<script>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { UserCircleIcon, LogoutIcon } from '@heroicons/vue/solid'
import LogoutButton from './buttons/LogoutButton.vue'

export default {
  name: 'Dropdown',
    props: {
      name: { type: String, required: true },
      profileRoute: { type: String, required: true },
    },
  components: {
    Menu,
    MenuButton,
    MenuItems,
    MenuItem,
    UserCircleIcon,
    LogoutIcon,
    LogoutButton
  },
}
</script>

/**

<a
                :class="[
                  active ? 'bg-gray-800 text-white' : 'text-gray-900',
                  'group flex rounded-md items-center w-full px-2 py-2 text-sm',
                ]"
                :href="logoutRoute"
              >

              </a>

 */
