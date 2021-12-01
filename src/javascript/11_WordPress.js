/*global window, document, getSiblings ,setInterval, clearInterval,getElements,getElement,getNextSibling,getPrevSibling,setAttributes,getComputedStyle,pageDirection,console*/
/*jslint es6 */
/*=== Theme Customize ===*/
//================> WordPress Support =================//
document.addEventListener('DOMContentLoaded', function () {
    'use strict';
    //====> Icons Direction Fix <=======//
    var directionIcons = getElements('.ti-arrow-direction-c');
    Array.from(directionIcons).forEach(element => {
        element.classList.add('ti-arrow-'+startDirection+'-c');
    });

    var directionReverseIcons = getElements('.ti-arrow-dirction-reverse-c');
    Array.from(directionReverseIcons).forEach(element => {
        element.classList.add('ti-arrow-'+endDirection+'-c');
    });

    //==== Remove Archives from the Title ====//
    var pageTitle = getElement('.page-head h1');
    if (pageTitle !== null) {
        var oldTitle = pageTitle.textContent,
            newTitle = oldTitle.replace(/Archives|Archive|page|[0-9]|of/gi,'');
        pageTitle.textContent = newTitle;
    }

    if (pageDirection == 'rtl') {
        var breadcrumbElements = getElements('.breadcrumb .breadcrumb_last');
        Array.from(breadcrumbElements).forEach(function (breadcrumbElement) {
            var elemTxt = breadcrumbElement.textContent;
            elemTxt = elemTxt.replace("Page", "");
            breadcrumbElement.textContent = elemTxt;
        });
    }

    /*===== Contact 7 =====*/
    var cf7_br = getElements('.wpcf7-form br');
    Array.from(cf7_br).forEach(function (cf7_br) {
        cf7_br.remove();
    });

    var directionElement = getElement('[dir]');
    if (directionElement) { directionElement.removeAttribute('dir'); }
});