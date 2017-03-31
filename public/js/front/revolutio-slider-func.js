var tpj = jQuery;

tpj(document).ready(function() {
    if (tpj.fn.cssOriginal != undefined) {
        tpj.fn.css = tpj.fn.cssOriginal;
    }

    tpj('.fullwidthbanner').revolution({
        delay: 9000,
        startwidth: 960,
        startheight: 312,
        onHoverStop: "on",
        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 3,
        hideThumbs: 0,
        navigationType: "none",
        navigationArrows: "solo",
        navigationStyle: "square",
        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 30,
        navigationVOffset: -40,
        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 0,
        soloArrowLeftVOffset: 0,
        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 0,
        soloArrowRightVOffset: 0,
        touchenabled: "on",
        stopAtSlide: -1,
        stopAfterLoops: -1,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        hideSliderAtLimit: 0,
        fullWidth: "on",
        shadow: 0
    });
});
