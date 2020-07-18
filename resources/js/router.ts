import Vue from 'vue';
import VueRouter from 'vue-router';
import IndexPage from './views/Index.vue';
import NotFound from './views/NotFound.vue'

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'index',
            component: IndexPage,
        },

        {
            path: '*',
            name: 'not-found',
            component: NotFound
        },
    ]
});
