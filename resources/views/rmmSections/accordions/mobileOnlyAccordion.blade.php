@php
	$id = bin2hex(random_bytes(8));
	$moduleID = 'module_'.$id;
@endphp

@notempty($accordionItems)

<style>
    .{{ $moduleID }} .ac-panel {
        display: none;
    }

    .{{ $moduleID }} .js-enabled .ac-panel {
        display: block;
    }
</style>


<div class="{{ $moduleID }} accordion-container-{{ $moduleID }} accordion-container mobileOnlyAccordion">
	@foreach($accordionItems as $item)


		<div class="rmmAccordion ac bg-grey">
			<h2 class="ac-header">
				<button type="button" class="ac-trigger"><span class="textWrapper">{{$item['title']}}</span><span
							class="toggle"></span></button>
			</h2>
			<div class="ac-panel">
				@wpautokp($item['content'])
			</div>
		</div>


	@endforeach
</div>
@endnotempty {{-- notempty $accordionItems--}}


@hasfields('field_jobs_accordion_accordion')
<div class="{{ $moduleID }} accordion-container-{{ $moduleID }} accordion-container">
	@fields('field_jobs_accordion_accordion')

	<div class="rmmAccordion ac bg-grey">
		<h2 class="ac-header">
			<button type="button" class="ac-trigger"><span class="textWrapper">@sub('title')</span><span
						class="toggle"></span></button>
		</h2>
		<div class="ac-panel">
			@sub('content')
		</div>
	</div>


	@endfields
</div>
@endhasfields


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
            const accordion = new Accordion('.accordion-container');
            accordion.destroy();
             accordion.detachEvents();

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

