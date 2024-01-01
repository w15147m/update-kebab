import './bootstrap';

import {createApp} from 'vue'


import HomeComponent from './components/website/HomeComponent.vue'


const app = createApp({});

 

app.component('home-component', HomeComponent);

app.mount("#app");