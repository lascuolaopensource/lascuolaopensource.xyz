var isPhoneDevice = "ontouchstart" in document.documentElement; 

$(document).ready(function() {

   // if (!isPhoneDevice){
        $('#fullpage').fullpage({
            scrollOverflow: true,
            anchors: ["firstpage","secondpage","thirdpage", "fourthpage", "fifthpage"],
            touchSensitivity: 0.1
            });
   // }
    
 	$('a.button_headline').click(function (e) {
                  var filterValue = $(this).attr('data-filter');
                // use filterFn if matches value
                $container.isotope({
                    filter: function() {
                        if (filterValue == "*") return true;
                        // _this_ is the item element
                        var categories = $(this).attr('data-category').split(" ");
                        return categories.indexOf(filterValue) != -1;
                    }
             });

            $('.button-group').find('.is-checked').removeClass('is-checked');
            $('#filters button').filter('[data-filter="' + filterValue + '"]').addClass('is-checked');
           /*
            if (isPhoneDevice) {
                var top = $("#thirdpage").offset().top; //anchor top offset from doc top
                $(window).scrollTop(top);
            }
            */
              });

    // ----- GRIDS -----

    // init Isotope
    // for projects and teching
    var $container = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
        hiddenStyle: {
            opacity: 0
        },
        visibleStyle: {
            opacity: 1
        },
        percentPosition: true,
        fitRows: {
            columnWidth: '.grid-sizer'
        }
    });

    // layout Isotope after each image loads
    $container.imagesLoaded().progress(function() {
        $container.isotope('layout');
    });

    // init Isotope
    // for publications
    var $container_pub = $('.publications').isotope({
        itemSelector: '.publication',
        layoutMode: 'fitRows',
        hiddenStyle: {
            opacity: 0
        },
        visibleStyle: {
            opacity: 1
        }
    });

    // layout Isotope after each image loads
    $container_pub.imagesLoaded().progress(function() {
        $container_pub.isotope('layout');
    });

    // bind grids filter button click
    $('#filters').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        $container.isotope({
            filter: function() {
                if (filterValue == "*") return true;
                // _this_ is the item element
                var categories = $(this).attr('data-category').split(" ");
                return categories.indexOf(filterValue) != -1;
            }
        });

        $container_pub.isotope({
            filter: function() {
                if (filterValue == "*") return true;
                // _this_ is the item element
                var categories = $(this).attr('data-category').split(" ");
                return categories.indexOf(filterValue) != -1;
            }
        });
    });

    // change is-checked class on filter buttons
    $('.button-group').each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });



    // ----- PUBLICATIONS -----

    var side_width = 10;

    $('.details').each(function() {
        $(this).css("left", (70 + side_width) + "px");
        $(this).css("right", (-30) + "px");
    });

    $('.publication').each(function() {
        var w = $(this).width();
        var h = $(this).height();
        $(this).css("cursor", "pointer");
        var svg = d3.select(this).insert("svg", ":first-child")
            .attr("width", w)
            .attr("height", h)
            .style("position", "absolute")
            .style("left", "0px")
            .style("top", "0px");
        var t;
        var type = $(this).data("type");
        if (type == "conference") {
            var t = textures.lines().thicker();
        } else if (type == "journal") {
            var t = textures.circles().thicker();
        } else {
            var t = textures.paths()
                        .d("hexagons")
                        .size(6)
                        .strokeWidth(2);
        }
        svg.call(t);
        svg.append("path")
            .attr("class", "box")
            .attr("d", "M 0 0 L 0 " + h + " L " + w + " " + h + " L " + w + " 0 Z")
            .style("fill", t.url());
        svg.append("path")
            .attr("class", "side")
            .attr("d", "M 0 " + 30 + " L 0 " + (h - 30) + " L " + 0 + " " + h + " L " + 0 + " 0 Z")
            .style("fill", "black");
    });

    $(".publication").click(function() {
        $(this).css("cursor", "default");
        var w = $(this).width();
        var h = $(this).height();
        var svg = d3.select(this).select(".box");
        svg.transition()
            .attr("d", "M " + side_width + " 0 L "+ side_width + " " + h + " L " + (20 + side_width) + " " + (h - 30) + " L " + (20 + side_width) + " " + 30 + " Z")
            .duration(500);
        var side = d3.select(this).select(".side");
        side.transition()
            .duration(500)
            .attr("d", "M 0 0 L 0 " + h + " L " + side_width + " " + h + " L " + side_width + " 0 Z");
        var label = d3.select(this).select(".label");
        label.transition()
            .duration(200)
            .style("opacity", 0);
        var details = d3.select(this).select(".details");
        details.transition()
            .style("visibility", "visible")
            .delay(200)
            .duration(300)
            .style("left", (30 + side_width) + "px")
            .style("right", 10 + "px")
            .style("opacity", 1);
        var close = d3.select(this).select(".close");
        close.transition()
            .style("visibility", "visible")
            .delay(200)
            .duration(300)
            .style("opacity", 1);
    });

    $(".close").click(function(e) {
        e.stopPropagation();
        var parent = this.parentNode;
        var publication = $(parent);
        publication.css("cursor", "pointer");
        var w = publication.width();
        var h = publication.height();
        var svg = d3.select(parent).select(".box");
        svg.transition()
            .attr("d", "M 0 0 L 0 " + h + " L " + w + " " + h + " L " + w + " 0 Z")
            .duration(500);
        var side = d3.select(parent).select(".side");
        side.transition()
            .duration(500)
            .attr("d", "M 0 " + side_width + " L 0 " + (h - side_width) + " L " + 0 + " " + h + " L " + 0 + " 0 Z");
        var label = d3.select(parent).select(".label");
        label.transition()
            .delay(300)
            .duration(200)
            .style("opacity", 1);
        var details = d3.select(parent).select(".details");
        details.transition()
            .duration(300)
            .style("left", (70 + side_width) + "px")
            .style("right", (-30) + "px")
            .style("opacity", 0)
            .each("end", function () {
                details.style("visibility", "hidden");
            });
        var close = d3.select(this);
        close.transition()
            .duration(250)
            .style("opacity", 0)
            .each("end", function () {
                close.style("visibility", "hidden");
            });
    });



    // ----- RESPONSIVE MENU -----

    // When menu button is clicked
    $(".btn-responsive-menu").click(function() {
        $(".menu").slideToggle(100);
    });


    // ----- Code Highlight -----

    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
      });
});