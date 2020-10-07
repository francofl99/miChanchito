import Vue from 'vue';
import Router from 'vue-router';
import Home from "../views/Home";
import PageNotFound from "../views/PageNotFound";

Vue.use(Router);

export default new Router({
  modo: "history",

  routes: [
    {
      path: '/',
      alias: '/home',
      name: 'home',
      component: Home
    },
    {
      path: '/*',
      name: '404 Page Not Found',
      component: PageNotFound
    }
  ]
});
