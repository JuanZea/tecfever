require('./bootstrap');

import { createApp } from 'vue';
import CInput from './components/CInput';
import LogoutButton from './components/buttons/LogoutButton';

createApp({
    components: {
        'c-input': CInput,
        'logout-button': LogoutButton,
    }
}).mount('#app');
