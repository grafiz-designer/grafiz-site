/* Global log(), select(), selectAll(), byId() */

import { contact } from './contact.js';

window.addEventListener("DOMContentLoaded", event => {

    console.log("DOM entièrement chargé et analysé");

    contact();

    /***************
    * SCROLL NAVBAR
    ***************/
    let header = select('header.header');

    let navbar = select('.navbar');

    var prevScrollPos = window.pageYOffset;

    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        // log(prevScrollPos + " -> " + currentScrollPos);
        if (prevScrollPos > currentScrollPos) {

            navbar.classList.add('to-the-top');
        } else {
            navbar.classList.remove('to-the-top');
            navbar.style.top = "-52px";
        }
        prevScrollPos = currentScrollPos;

        // Dès que la navbar revient tout en haut elle devient transparente
        if (currentScrollPos < 5) {
            navbar.classList.remove('to-the-top');
            navbar.style.top = "0";
        }
    };

    /********************************************
     * AFFICHE LE MENU BURGER
     ********************************************/

    // let links = selectAll('.navbar-end a.navbar-item');
    // log(links);
    // for(let i = 0; i < links.length; i++){
    //     links[i].addEventListener('click', (event) => {
    //         // event.preventDefault();


    //     });
    // }

    // let headers = selectAll('.accordion-header');


    // headers.forEach(function(header){
    //     log(headers);
    //     header.addEventListener('click', (ev) => {
    //         event = ev.target || ev.srcElement;
    //         header.nextElementSibling.classList.toggle('is-active');

    //     })
    // })


    /***************
     * MENU BURGER
     ***************/

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(selectAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = byId(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    }
});