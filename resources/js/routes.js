import About from './pages/About.vue'
import Contact from './pages/Contact.vue'
import Knowledge from './pages/Knowledge.vue'
import Portfolio from './pages/Portfolio.vue'
import Work_Experience from './pages/Work_Experience.vue'

export const routes = [
    {
        name: 'home',
        path: '/',
        component: About,
    },
    {
        name: 'contact',
        path: '/contact',
        component: Contact,
    },
    {
        name: 'knowledge',
        path: '/knowledge',
        component: Knowledge,
    },
    {
        name: 'portfolio',
        path: '/portfolio',
        component: Portfolio,
    },
    {
        name: 'work-experience',
        path: '/work-experience',
        component: Work_Experience,
    },

]
