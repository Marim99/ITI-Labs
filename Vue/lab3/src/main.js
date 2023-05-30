import { createApp } from "vue";
import App from "./App.vue";
import { createWebHistory, createRouter } from "vue-router";
import allUsers from "./components/AllUsers.vue";
import userDetails from "./components/UserDetails.vue";
import createUser from "./components/CreateUser.vue";
import editUser from "./components/EditUser.vue";
import errorComponent from "./components/Error.vue";
import "bootstrap-icons/font/bootstrap-icons.css";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap/dist/js/bootstrap.min.js";

const routes = [
  {
    path: "/",
    component: allUsers,
    alias: "/users",
  },
  {
    path: "/users/:id/show",
    component: userDetails,
  },
  {
    path: "/users/:id/edit",
    component: editUser,
  },
  {
    path: "/users/create",
    component: createUser,
  },
  {
    path: "/:NotFound(.*)*",
    component: errorComponent,
    meta: { hideNavbar: true },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});
const app = createApp(App);
app.directive("theme", {
  mounted(element, binding) {
    if (binding.value === "dark") {
      element.style.backgroundColor = "#343a40";
      element.style.color = "#eee";
    } else {
      element.style.backgroundColor = "#f8f9fa";
      element.style.color = "#eee";
    }
  },
});

app.use(router).mount("#app");
