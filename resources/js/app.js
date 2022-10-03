require('./bootstrap');

import { createApp} from 'vue'
import App from './App.vue';
import router from './router';
import {FontAwesomeIcon} from '@fortawesome/fontawesome-free/js/all'

createApp(App,FontAwesomeIcon).use(router).mount('#app');
