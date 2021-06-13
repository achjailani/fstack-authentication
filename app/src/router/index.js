import { createRouter, createWebHashHistory } from "vue-router";
import Home from "../views/Home.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/about",
    name: "About",
    component: () => import("../views/About.vue"),
  },
  {
    path: "/login",
    name: "Login",
    component: () => import("../views/Auth/Login.vue"),
  },
  {
    path: "/register",
    name: "Register",
    component: () => import("../views/Auth/Register.vue"),
  },
  {
    path: "/users",
    name: "List",
    component: () => import("../views/User/List.vue"),
  },
  {
    path: "/me",
    name: "Profile",
    component: () => import("../views/User/Show.vue"),
  },
  {
    path: "/users/edit",
    name: "Edit",
    component: () => import("../views/User/Edit.vue"),
  },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
