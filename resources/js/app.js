require('./bootstrap');

import { createApp } from 'vue';
import CInput from './components/CInput';
import LogoutButton from './components/buttons/LogoutButton';
import { HomeIcon } from '@heroicons/vue/outline';

createApp({
    components: {
        'c-input': CInput,
        'logout-button': LogoutButton,
        'home-icon': HomeIcon,
    }
}).mount('#app');
