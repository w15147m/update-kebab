import './bootstrap';

import {createApp} from 'vue'

import App from './App.vue'
import MenuComponent from './components/admin/menu/MenuComponent.vue'
import AddShop from './components/admin/shops/AddShop.vue'

const app = createApp({});

 
app.component('app-test', App);
app.component('menu-component', MenuComponent);
app.component('add-shop', AddShop);
app.mount("#app");