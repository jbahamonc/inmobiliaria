import Vue from 'vue'
import Router from 'vue-router'
const Home = require('./components/Home');
const Testimonials = require('./components/Testimonials');
const NewTestimonial = require('./components/NewTestimonial');
const Services = require('./components/Services');
const NewService = require('./components/NewService');

const router = new Router({
    routes: [
        {
            path: '*',
            name: 'admin',
            component: Home
        },
        {
            path: '/testimonials',
            name: 'testimonials',
            component: Testimonials
        },
        {
            path: '/testimonials/new',
            name: 'testimonials-new',
            component: NewTestimonial
        },
        {
            path: '/testimonials/edit',
            name: 'testimonials-edit',
            component: NewTestimonial
        },
        {
            path: '/services',
            name: 'services',
            component: Services
        },
        {
            path: '/service/new',
            name: 'service-new',
            component: NewService
        },
        {
            path: '/service/edit',
            name: 'service-edit',
            component: NewService
        }
    ]
});

export default router;
