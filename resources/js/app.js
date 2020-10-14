import Chartkick from 'vue-chartkick';
import Chart from 'chart.js';
import DatePicker from 'v-calendar/lib/components/date-picker.umd';
import router from "./router";

require('./bootstrap');
window.Vue = require('vue');

Vue.use(Chartkick.use(Chart));
Vue.component('date-picker', DatePicker);

const app = new Vue({
  el: '#app',
  router,
});



