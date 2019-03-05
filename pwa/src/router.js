import Vue from "vue";
import Router from "vue-router";
import Projects from "./views/Projects";
import Project from "./views/Project";
import Home from "./views/Home";

Vue.use(Router);

export default new Router({
  routes: [
    
    {
      path: "/vue",
      component: Projects,
      name: "home"
    },
    { 
      path: "/",
      component: Home,
      name: "homepage"
    }, 
    {
      path: "/vue/projects",
      component: Projects,
      name: "projects"
    },
    {
      path: "/vue/project/:id",
      component: Project,
      name: "project"
    }
  ]
});
