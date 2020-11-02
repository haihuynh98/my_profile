import About from './templates/About.vue'
import Contact from './templates/Contact.vue'
import Knowledge from './templates/Knowledge.vue'
import Portfolio from './templates/Portfolio.vue'
import Work_Experience from './templates/Work_Experience.vue'

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
