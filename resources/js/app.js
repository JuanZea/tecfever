require('./bootstrap');

import { createApp } from 'vue';
import { MailIcon } from '@heroicons/vue/solid';

import CInput from './components/CInput';
import Dropdown from './components/Dropdown';
import LogoutButton from './components/buttons/LogoutButton';

createApp({
    components: {
        'c-input': CInput,
        'logout-button': LogoutButton,
        'mail-icon': MailIcon,
        'dropdown': Dropdown,
    }
}).mount('#app');
