/*
 *
 *  jQuery ResponsiveTables by Gary Hepting - https://github.com/ghepting/responsiveTables
 *  
 *  Open source under the MIT License. 
 *
 *  Copyright © 2013 Gary Hepting. All rights reserved.
 *
*/


(function() {
  (function($) {
    var elems;

    elems = [];
    $.fn.responsiveTable = function(options) {
      var settings;

      settings = {
        compressor: options.compressor || 10,
        minSize: options.minSize || Number.NEGATIVE_INFINITY,
        maxSize: options.maxSize || Number.POSITIVE_INFINITY,
        padding: 2,
        height: "auto",
        adjust_parents: true
      };
      return this.each(function() {
        var columns, elem, fontSize, rows;

        elem = $(this);
        elem.attr('data-compression', settings.compressor);
        elem.attr('data-min', settings.minSize);
        elem.attr('data-max', settings.maxSize);
        elem.attr('data-padding', settings.padding);
        columns = $("tr", elem).first().children("th, td").length;
        rows = $("tr", elem).length;
        if (settings.height !== "auto") {
          $this.css("height", settings.height);
          if (settings.adjust_parents) {
            $this.parents().each(function() {
              return $(this).css("height", "100%");
            });
          }
        }
        $("tr th, tr td", elem).each(function() {
          var width;

          if ($(this).attr('data-width') !== '') {
            width = parseInt($(this).attr('data-width'));
          } else {
            width = Math.floor(100 / columns);
          }
          return $(this).css("width", width + "%");
        });
        $("tr th, tr td", elem).css("height", Math.floor(100 / rows) + "%");
        fontSize = Math.floor(Math.max(Math.min(elem.width() / settings.compressor, parseFloat(settings.maxSize)), parseFloat(settings.minSize)));
        $("tr th, tr td", elem).css("font-size", fontSize + "px");
        return elems.push(elem);
      });
    };
    return $(window).on("resize", function() {
      return $(elems).each(function() {
        var elem, fontSize;

        elem = $(this);
        fontSize = Math.floor(Math.max(Math.min(elem.width() / (elem.attr('data-compression')), parseFloat(elem.attr('data-max'))), parseFloat(elem.attr('data-min'))));
        return $("tr th, tr td", elem).css("font-size", fontSize + "px");
      });
    });
  })(jQuery);

}).call(this);
