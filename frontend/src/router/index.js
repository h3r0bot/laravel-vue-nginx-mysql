import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/login",
    name: "login",
    meta: { layout: "empty" },
    component: () => import("../views/LoginView.vue"),
  },
  {
    path: "/register",
    name: "register",
    meta: { layout: "main" },
    component: () => import("../views/RegisterView.vue"),
  },
  {
    path: "/",
    name: "home",
    meta: { layout: "main" },
    component: () => import("../views/HomeView.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
