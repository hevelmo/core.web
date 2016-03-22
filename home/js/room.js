/* ----------------------------------- *\
 [Route] HOME
\* ----------------------------------- */
$(document).ready(function() {
    // Add favicon
    window.onload = favicon.load_favicon();
    viewSectionHomeMethod.viewSectionHome();
    currentSectionMethod.currentSection_home();
    sticky_wrapper_methods.sticky_wrapper();
});