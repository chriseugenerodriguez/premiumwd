jQuery(document).ready(function(){
jQuery('ul.tabs').each(function(){
    // For each set of tabs, we want to keep track of
    // which tab is active and it's associated content
    var jQueryactive, jQuerycontent, jQuerylinks = jQuery(this).find('a');

    // If the location.hash matches one of the links, use that as the active tab.
    // If no match is found, use the first link as the initial active tab.
    jQueryactive = jQuery(jQuerylinks.filter('[href="'+location.hash+'"]')[0] || jQuerylinks[0]);
    jQueryactive.addClass('active');
    jQuerycontent = jQuery(jQueryactive.attr('href'));

    // Hide the remaining content
    jQuerylinks.not(jQueryactive).each(function () {
        jQuery(jQuery(this).attr('href')).hide();
    });

    // Bind the click event handler
    jQuery(this).on('click', 'a', function(e){
        // Make the old tab inactive.
        jQueryactive.removeClass('active');
        jQuerycontent.hide();

        // Update the variables with the new link and content
        jQueryactive = jQuery(this);
        jQuerycontent = jQuery(jQuery(this).attr('href'));

        // Make the tab active.
        jQueryactive.addClass('active');
        jQuerycontent.show();

        // Prevent the anchor's default click action
        e.preventDefault();
    });

});

jQuery(function() {
    jQuery( "#accordion" ).accordion();
    /* Toggle functions -> */
    //Hide (Collapse) the toggle containers on load
    jQuery(".toggle-content").hide();

    //Switch the "Open" and "Close" state per click
    jQuery(".toggle-title").toggle(function(){
        jQuery(this).addClass("active");
        jQuery(this).next(".toggle-content").slideDown();
        }, function () {
        jQuery(this).next(".toggle-content").slideUp();
        jQuery(this).removeClass("active");
        //jQuery(".toggle-content").hide();
    });
    //Slide up and down on click
    //jQuery(".toggle-title").click(function(){
        
    //});
    
});

jQuery(function() {
// Toggle
jQuery('.cv-toggle').removeClass('cv-toggle-open');
jQuery('.cv-toggle .cv-toggle-title').click(function() {
jQuery(this).parent('.cv-toggle').toggleClass('cv-toggle-open');
});
// Tabs
/*jQuery('.cv-tabs-nav').delegate('span:not(.cv-tabs-current)', 'click', function() {
jQuery(this).addClass('cv-tabs-current').siblings().removeClass('cv-tabs-current')
.parents('.cv-tabs').find('.cv-tabs-pane').hide().eq(jQuery(this).index()).show();
});
jQuery('.cv-tabs-pane').hide();
jQuery('.cv-tabs-nav span:first-child').addClass('cv-tabs-current');
jQuery('.cv-tabs-panes .cv-tabs-pane:first-child').show();*/
}); 

jQuery('.cv-tabs-nav').each(function(){
    // For each set of tabs, we want to keep track of
    // which tab is active and it's associated content
    var jQueryactive, jQuerycontent, jQuerylinks = jQuery(this).find('a');

    // If the location.hash matches one of the links, use that as the active tab.
    // If no match is found, use the first link as the initial active tab.
    jQueryactive = jQuery(jQuerylinks.filter('[href="'+location.hash+'"]')[0] || jQuerylinks[0]);
    jQueryactive.addClass('cv-tabs-current');
    jQuerycontent = jQuery(jQueryactive.attr('href'));

    // Hide the remaining content
    jQuerylinks.not(jQueryactive).each(function () {
        jQuery(jQuery(this).attr('href')).hide();
    });

    // Bind the click event handler
    jQuery(this).on('click', 'a', function(e){
        // Make the old tab inactive.
        jQueryactive.removeClass('cv-tabs-current');
        jQuerycontent.hide();

        // Update the variables with the new link and content
        jQueryactive = jQuery(this);
        jQuerycontent = jQuery(jQuery(this).attr('href'));

        // Make the tab active.
        jQueryactive.addClass('cv-tabs-current');
        jQuerycontent.show();

        // Prevent the anchor's default click action
        e.preventDefault();
    });
  });
});