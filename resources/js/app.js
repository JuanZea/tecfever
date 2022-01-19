require('./bootstrap');

import { createApp } from 'vue';
import CInput from '../components/CInput'

createApp({
    components: {
        'c-input': CInput
    }
}).mount('#app');
