/* ----------------------------------- *\
 [Route] CONTACT
\* ----------------------------------- */
    Finch.route('/', {
        setup: function(bindings) {
            section = "contact";
            // Add favicon
            window.onload = favicon.load_favicon();
        },
        load: function(bindings) {
            viewSectionContactMethod.viewSectionContact();
            currentSectionMethod.currentSection_contact();
        },
        unload: function(bindings) {
            section = "";
            COR.setHTML(domEl.div_recurren, '');
        }
    });
Finch.listen();
