  curvyCorners.addEvent(window, 'load', initCorners);

  function initCorners() {
    var settings = {
      tl: { radius: 6 },
      tr: { radius: 6 },
      bl: { radius: 6 },
      br: { radius: 6 },
      antiAlias: true
    }
    curvyCorners(settings, "#myBox, #search-propertybkr, .popular-coursebkr, #yourcomment-bkr, .contactus-deco, .img-border");
  }