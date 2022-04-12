{{-- Careers Job Listing Accordion  --}}

@php
	$id = bin2hex(random_bytes(8));
	$moduleID = 'module_'.$id;
@endphp

{{-- Set var for allowing Multiple Accordiona--}}
@hasfield('field_jobs_accordion_showmultiple')
@php $allowMultiple = 'true' @endphp

@else
	@php $allowMultiple = 'false' @endphp

	@endfield

	@hasfield('field_jobs_accordion_openfirst')
	@php $openfirst = '0' @endphp

	@else
		@php $openfirst = '' @endphp

		@endfield








		<style>
            .{{ $moduleID }} .ac-panel {
                display: none;
            }

            .{{ $moduleID }} .js-enabled .ac-panel {
                display: block;
            }
		</style>
		@hasfields('field_jobs_accordion_job_listings')
		<div class="{{ $moduleID }} accordion-container-{{ $moduleID }} accordion-container">
			@fields('field_jobs_accordion_job_listings')

			<div class="ac">
				<h2 class="ac-header">
					<button type="button" class="ac-trigger">@sub('title')</button>
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
                                showMultiple: {{ $allowMultiple }},


                            });
							{{ $moduleID }}_accordion.closeAll();
							{{ $moduleID }}_accordion.open({{$openfirst}})
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

