import Vue from "vue";
import "./plugins/axios";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import "./registerServiceWorker";

Vue.config.productionTip = false;
Vue.filter('uppercase', function(value) {
  return value.toUpperCase();
})
new Vue({
  router,
  store,
  render: h => h(App)
}).$mount("#app");
