/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
import router from "./routes";

Vue.component("header-component", require("./components/header").default);
Vue.component("bares-component", require("./components/bares").default);
Vue.component(
    "restaurantes-component",
    require("./components/restaurantes").default
);
Vue.component("vista-component", require("./components/vista").default);

const app = new Vue({
    el: "#app",
    router
});
