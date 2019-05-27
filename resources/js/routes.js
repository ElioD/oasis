import VueRouter from "vue-router";
import Rutas from "./rutas/home";

window.Vue = require("vue");
Vue.use(VueRouter);

let routes = Rutas;

export default new VueRouter({
    mode: "history",
    routes
});
