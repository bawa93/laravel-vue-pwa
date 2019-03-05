import Projects from './components/Projects'
import Project from './components/Project'
import Home from './components/Home'

export const routes = [
    {
        path: '/vue', component: Projects, name: 'home'
    },
    {
        path: '/vue/home', component: Home, name: 'homepage'
    },
    {
        path: '/vue/projects', component: Projects, name: 'projects'
    },
    {
        path: '/vue/project/:id', component: Project, name: 'project'
    },
];