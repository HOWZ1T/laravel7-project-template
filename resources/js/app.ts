import "./bootstrap";
import Vue from "vue";
import ExampleComponent from './components/ExampleComponent.vue';
import Index from './views/Index.vue';
import NotFound from './views/NotFound.vue';
import router from './router';
import store from './store';

const app = new Vue({
    router,
    store,
    el: '#app',
});
