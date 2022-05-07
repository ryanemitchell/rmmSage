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


<div class="{{ $moduleID }} accordion-container-{{ $moduleID }} accordion-container">
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
    document.addEventListener('DOMContentLoaded', function () {
        window.addEventListener("load", onLoadFunction_{{ $moduleID }});
		{{--window.addEventListener("resize", onLoadFunction_{{ $moduleID }});--}}

        function onLoadFunction_{{ $moduleID }}(e) {
            if (document.getElementsByClassName('accordion-container-{{ $moduleID }}').length > 0) {


                // Check if desktop and initialize - if mobile destroy
                if (window.matchMedia("(min-width: 0px)").matches) {

                    const {{ $moduleID }}_accordion = new Accordion(('.accordion-container-{{ $moduleID }}'), {
                        duration: 600,
                        showMultiple: {{$accordionShowMultiple}},


                    });
					{{ $moduleID }}_accordion.closeAll();
					{{ $moduleID }}_accordion.open({{$accordionOpenFirst}})
					{{ $moduleID }}_accordion.update();
                } else {
                    const {{ $moduleID }}_accordion = new Accordion('.accordion-container--{{ $moduleID }}');
					{{ $moduleID }}_accordion.destroy();
					{{ $moduleID }}_accordion.detachEvents();

                }


            }


        }

    }, false);


</script>


