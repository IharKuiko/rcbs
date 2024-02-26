import './bootstrap';


import Swiper from "swiper";
import { Navigation, Pagination, Autoplay, EffectCoverflow } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.main-menu'),
        menuItem = document.querySelectorAll('.menu-item'),
        hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger-active');
        menu.classList.toggle('main-menu-active');
        if (menu.classList.contains('main-menu-active')) {
            document.body.style.overflow = "hidden";
        } else {
            document.body.style.overflow = "";
        }
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger-active');
            menu.classList.toggle('main-menu-active');
        })
    })

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,

        autoplay: {
            delay: 3000,
        },

        effect: 'coverflow',
            coverflowEffect: {
                rotate: 20,
                stretch: 50,
                slideShadows: true,
            },

        modules: [Navigation, Pagination, Autoplay, EffectCoverflow],

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
})




