/*global window, document, getSiblings ,setInterval, clearInterval,getElements,getElement,getNextSibling,getPrevSibling,setAttributes,getComputedStyle,pageDirection,console*/
/*jslint es6 */
/*=== Theme Customize ===*/
document.addEventListener('DOMContentLoaded', function () {
    'use strict';
    //====== Wow JS Activate =====//
    new WOW().init();

    //====== Clean Form P =====//
    var formsPara = getElements('.wpcf7-form p');
    Array.from(formsPara).forEach(element => {
        var testContent = element.textContent;
        if(!testContent) element.remove();
    });

    //======= Clean Breadcrumb ======//
    var breadcrumbElement = getElement('.breadcrumb');
    if(breadcrumbElement) {
        var firstSpan = getElement('.breadcrumb > span'),
            secondSpan = getElement('.breadcrumb > span > span');
        if (secondSpan) {
            var htmlContent = secondSpan.innerHTML;
            firstSpan.remove();
            breadcrumbElement.innerHTML = htmlContent;
        }
    }

    //======== Slider =======//
    heroPlay();
    clintesPlay();
    testimonailsPlay();
    clintesOps();
    teamPlay();
    blogPlay();
    fixTnsGrid();

    //====== Anti Admin =======//
    var bodyElement = getElement('body.wp-admin');
    if (!bodyElement) {

        //==== Loading ====//
        var loadingElement = document.querySelector('.loading8');
        setTimeout(timer=>{
            //=======> Loading Complete <========//
            loadingElement.remove();
        }, 2500);

        //=== Rich Content Links ====//
        var richLinks = getElements('.rich-content a');
        Array.from(richLinks).forEach(element => {
            element.setAttribute('target','_blank');
        });
    }
});