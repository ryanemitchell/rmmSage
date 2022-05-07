<div class="accordion-container mobileOnlyAccordion">
	<div class="ac bg-grey">
		<h2 class="ac-header">
			<button type="button" class="ac-trigger"><span class="textWrapper">Header Text</span><span class="toggle"></span></button>
		</h2>
		<div class="ac-panel">
			<p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>

	<div class="ac bg-grey">
		<h2 class="ac-header">
			<button type="button" class="ac-trigger"><span class="textWrapper">Header Text</span><span class="toggle"></span></button>

		</h2>
		<div class="ac-panel">
			<p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>

	<div class="ac bg-grey">
		<h2 class="ac-header">
			<button type="button" class="ac-trigger"><span class="textWrapper">Header Text</span><span class="toggle"></span></button>

		</h2>
		<div class="ac-panel">
			<p class="ac-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>
</div>





<script>
 // @todo make single function for mobile only accordions site wide.
    document.addEventListener('DOMContentLoaded', function () {
        // new Accordion('.accordion-container');
	    // Check if desktop and initialize - if mobile destroy
        if (window.matchMedia("(max-width: 900px)").matches) {

            const accordion = new Accordion(('.accordion-container'), {
                duration: 600,
                {{--showMultiple: {{ $allowMultiple }},--}}
            });
		    accordion.closeAll();
		    accordion.update();
        } else {
            // const accordion = new Accordion('.accordion-container');
		   // accordion.destroy();
		   //  accordion.detachEvents();

        }

    }, false);


	window.addEventListener("resize", function () {
        // new Accordion('.accordion-container');
        // Check if desktop and initialize - if mobile destroy
        if (window.matchMedia("(max-width: 900px)").matches) {

            const accordion = new Accordion(('.accordion-container'), {
                duration: 600,
				{{--showMultiple: {{ $allowMultiple }},--}}
            });
            accordion.closeAll();
            accordion.update();
        } else {
            const accordion = new Accordion('.accordion-container');
            accordion.destroy();
             accordion.detachEvents();

        }
    }, false);









</script>
