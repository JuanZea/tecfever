require('./bootstrap');

import { createApp } from 'vue';
import { MailIcon } from '@heroicons/vue/solid';

import VueSetup from './VueSetup';
import CInput from './components/CInput';
import Dropdown from './components/Dropdown';
import UsersTable from './components/UsersTable';

createApp({
    components: {
        'vue-setup': VueSetup,
        'c-input': CInput,
        'dropdown': Dropdown,
        'mail-icon': MailIcon,
        'users-table': UsersTable,
    }
}).mount('#app');
