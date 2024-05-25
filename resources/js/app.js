/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import VueTheMask from 'vue-the-mask'
import { createApp } from 'vue';


const app = createApp({});

import LoginComponent from './components/Login.vue';
import CardComponent from './components/partials/CardComponent.vue';
import DistributorComponent from './components/distributors/DistributorComponent.vue';
import DistributorCreateComponent from './components/distributors/DistributorCreateComponent.vue';
import TableComponent from './components/partials/TableComponent.vue';

app.component('login-component', LoginComponent);
app.component('card-component', CardComponent);
app.component('distributor-component', DistributorComponent);
app.component('distributor-create-component', DistributorCreateComponent);
app.component('table-component', TableComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */
app.use(VueTheMask);
app.mount('#app');
