import Vue from 'vue'
import VueRouter from 'vue-router'
import CourseList from './components/CourseList'

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {
            path: '/t/courses',
            component: CourseList,
            name: 'courses'
        },
    ],
    mode: 'history'
});
