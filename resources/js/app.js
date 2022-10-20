require('./bootstrap');

import { createApp} from 'vue'
import App from './App.vue';
import router from './router';
import {FontAwesomeIcon} from '@fortawesome/fontawesome-free/js/all'


import "datatables.net-bs4";
import "datatables.net-bs4/css/dataTables.bootstrap4.min.css";
import "jszip";
import "pdfmake";
import "datatables.net-buttons-bs4";
import "datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css";
import "datatables.net-buttons/js/buttons.colVis";
import "datatables.net-buttons/js/buttons.flash";
import "datatables.net-buttons/js/buttons.html5";
import "datatables.net-buttons/js/buttons.print";
import "jquery/dist/jquery.min.js";



createApp(App,FontAwesomeIcon).use(router).mount('#app');
