import { createRouter, createWebHistory } from "vue-router";
import Homeview from "../views/Homeview.vue";
import Categoryview from "../views/Categoryview.vue";
import Productview from "../views/Productview.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: Homeview,
    },
    {
      path: "/category/:catId",
      name: "category",
      component: Categoryview,
    },
    {
      path: "/product/:proId",
      name: "product",
      component: Productview,
    },
  ],
});

export default router;
