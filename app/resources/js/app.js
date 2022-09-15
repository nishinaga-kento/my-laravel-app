require('./bootstrap');

import { createApp } from 'vue'
import TestVue from './components/TestVue.vue';
import '../css/app.css';

const app = createApp({})
app.component('test-vue', TestVue);
app.mount('#app')
