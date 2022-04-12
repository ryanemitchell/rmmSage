{{--Assign variables in App Composer

app/View/Composers/App.php


--}}


@php $pageTitle = rmmGetField('witsage_business_name','chili', 1);

 @endphp

<script>

    var desktopBreakpoint = "{{$desktopBreakpoint}}";
    var businessName = "{{$businessName}}";


</script>


<style id="rmmSageStyling">
	:root {
        --desktopBreakpoint: {{$desktopBreakpoint}};
	}
</style>
