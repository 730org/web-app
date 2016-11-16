import vue from 'vue';
import router from 'vue-router';

vue.use(router);

import Home from './components/home.vue';
import Event from './components/event.vue';
import Volunteer from './components/volunteer.vue';

router = new VueRouter({
    history: true,
});

router.map({
    '/': {
        component: Home
    },
    '/event': {
        component: Event
    },
    '/volunteer': {
        component: Volunteer
    }
});

router.start(Vue.extend({

}), '#app');