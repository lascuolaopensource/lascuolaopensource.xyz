$(document).ready(function() {



var $container_profile = $('.company_profile').isotope({
        itemSelector: '.project_profile',
        layoutMode: 'fitRows',
        hiddenStyle: {
            opacity: 0
        },
        visibleStyle: {
            opacity: 1
        },
        percentPosition: true,
        fitRows: {
            columnWidth: '.grid-sizer-profile'
        }
    });

    // layout Isotope after each image loads
    $container_profile.imagesLoaded().progress(function() {
        $container_profile.isotope('layout');
    });

    // bind grids filter button click
    $('#filters').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');

        $container_profile.isotope({
            filter: function() {
                if (filterValue == "*") return true;
                // _this_ is the item element
                var categories = $(this).data('category').split(" ");
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

});