require('./bootstrap');

import { createApp } from 'vue';
import { MailIcon } from '@heroicons/vue/solid';

import VueSetup from './VueSetup';
import CInput from './components/CInput';
import Dropdown from './components/Dropdown';

createApp({
    components: {
        'vue-setup': VueSetup,
        'c-input': CInput,
        'mail-icon': MailIcon,
        'dropdown': Dropdown,
    }
}).mount('#app');
