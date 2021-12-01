//===== Hero Slider =====//
const heroPlay = () => {
    var heroSlider = getElements('.hero-slider,.home-slider');
    Array.from(heroSlider).forEach(element => {
        var heroslider = tns({
            container: element,
            items: 1,
            slideBy: 1,
            autoplay: true,
            nav:false,
            controls:true,
            autoplayButton: false,
            autoplayButtonOutput:false,
            autoplayTimeout:6000,
            mouseDrag:true,
        });
        if(element.closest('.tns-outer')) element.closest('.tns-outer').classList.add('hero-slider-outer');
    });
}

//===== Clintes Slider =====//
const clintesPlay = () => {
    var clintes = getElements('.clintes-slider');
    Array.from(clintes).forEach(element => {
        var clintesSlider = tns({
            container: element,
            items: 2,
            slideBy: 1,
            autoplay: true,
            nav:false,
            controls:true,
            autoplayButton: false,
            autoplayButtonOutput:false,
            autoplayTimeout:6000,
            mouseDrag:true,
            responsive: {
                480 : {items:2},
                550 : {items:4},
                980 : {items:4},
                1100 : {items:5},
            }
        });
        if(element.closest('.tns-outer')) element.closest('.tns-outer').classList.add('clintes-slider-outer');
    });
}

//===== Testimonails Slider =====//
const testimonailsPlay = () => {
    var testimonails = getElements('.clintes-op');
    Array.from(testimonails).forEach(element => {
        var testimonailsSlider = tns({
            container: element,
            items: 1,
            slideBy: 1,
            autoplay: true,
            nav:true,
            controls:false,
            autoplayButton: false,
            autoplayButtonOutput:false,
            autoplayTimeout:6000,
            mouseDrag:true,
            responsive: {
                1100 : {items:2},
            }
        });
        if(element.closest('.tns-outer')) element.closest('.tns-outer').classList.add('clintes-op-outer');
    });
}

//===== Testimonails Slider =====//
const clintesOps = () => {
    var clintesOp = getElements('.clintes-op2');
    Array.from(clintesOp).forEach(element => {
        var clintesOpSlider = tns({
            container: element,
            items: 1,
            slideBy: 1,
            autoplay: true,
            nav:true,
            controls:false,
            autoplayButton: false,
            autoplayButtonOutput:false,
            autoplayTimeout:6000,
            mouseDrag:true,
        });
        if(element.closest('.tns-outer')) element.closest('.tns-outer').classList.add('clintes-op2-outer');
    });
}

//===== Blog Slider =====//
const teamPlay = () => {
    var team = getElements('.team-slider');
    Array.from(team).forEach(element => {
        var teamSlider = tns({
            container: element,
            items: 1,
            slideBy: 1,
            autoplay: true,
            nav:false,
            controls:false,
            autoplayButton: false,
            autoplayButtonOutput:false,
            autoplayTimeout:6000,
            mouseDrag:true,
            responsive: {
                557 : {items:2},
                980 : {items:3},
                1100 : {items:4},
            }
        });
        if(element.closest('.tns-outer')) element.closest('.tns-outer').classList.add('team-slider-outer');
    });
}

//===== Blog Slider =====//
const blogPlay = () => {
    var blog = getElements('.blog-slider');
    Array.from(blog).forEach(element => {
        var blogSlider = tns({
            container: element,
            items: 1,
            slideBy: 1,
            autoplay: true,
            nav:false,
            controls:true,
            autoplayButton: false,
            autoplayButtonOutput:false,
            autoplayTimeout:6000,
            mouseDrag:true,
            responsive: {
                557 : {items:2},
                980 : {items:3},
                1100 : {items:4},
            }
        });
        if(element.closest('.tns-outer')) element.closest('.tns-outer').classList.add('blog-slider-outer');
    });
}

//==== Grid Tiny Slider ====//
const fixTnsGrid = () => {
    var gridTns = getElements('.tns-slider.row');
    Array.from(gridTns).forEach(function (gridTns){
        gridTns.closest('.tns-outer').classList.add('grid-tns');
    });
}