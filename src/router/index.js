import { createRouter, createWebHistory } from "vue-router";
import Homeview from "../views/Homeview.vue";
import Categoryview from "../views/Categoryview.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: Homeview,
    },
    {
      path: "/category",
      name: "category",
      component: Categoryview,
    },
  ],
});

export default router;
