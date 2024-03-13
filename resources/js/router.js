import { createRouter, createWebHistory } from "vue-router";

import Home from "./pages/Home.vue";
import Contact from "./pages/Contact.vue";
import Projets from "./pages/Projets.vue";
import Date from "./pages/Data.vue";
import Bio from "./pages/Bio.vue";

const meta = {
    enterClass: "animate__animated animate__fadeIn",
    leaveClass: "animate__animated animate__fadeOut",
    //enterClass: 'animate__animated animate__bounceInLeft',
    //leaveClass: 'animate__animated animate__bounceOutRight'
};

const router = createRouter({
    history: createWebHistory(),
    linkExactActiveClass: "active",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
            meta,
        },
        {
            path: "/projets",
            name: "projets",
            component: Projets,
            meta,
        },
        {
            path: "/bio",
            name: "bio",
            component: Bio,
            meta,
        },
        {
            path: "/contact",
            name: "contact",
            component: Contact,
            meta,
        },
        {
            path: "/date",
            name: "date",
            component: Date,
            meta,
        },
    ],
});

export { router };
