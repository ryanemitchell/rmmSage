



@foreach ($selectedOffers as $offer)

	@set($itemID, $offer->offer_ID)


	@set($itemTitle, $offer->offer_title)


	@set($itemSubTitle, $offer->offer_subtitle)

	@if (!empty($offer->offer_image))

		@set($itemImage, $offer->offer_image)
	@elseif (!empty($offersImage))

		@set($itemImage, $offersImage)
	@endif



	@if (!empty($offer->offer_cta))

		@set($itemCTA, $offer->offer_cta)
	@elseif (!empty($offersCta))

		@set($itemCTA, $offersCta)
	@endif

	@if (!empty($offer->offer_disclaimer))

		@set($itemDisclaimer, $offer->offer_disclaimer)
	@elseif (!empty($offersDisclaimer))

		@set($itemDisclaimer, $offersDisclaimer)
	@endif

	@if (!empty($offer->offer_expiration_text))

		@set($itemExpirationText, $offer->offer_expiration_text)
	@elseif (!empty($offersExpirationText))

		@set($itemExpirationText, $offersExpirationText)
	@endif




	@if (!empty($offer->offer_expiration))
		@if (($offer->offer_expiration)=='fromOptions')

			@set($itemExpiration, $offersExpiration)
		@else

			@set($itemExpiration, $offer->offer_expiration)
			@endif
	@elseif (!empty($offersExpiration))

		@set($itemExpiration, $offersExpiration)
	@endif

	@php
	$now = new DateTime('now');

@endphp

	@switch($itemExpiration)

		@case("noExpiration")
			$twoMonths = $now->add(new DateInterval('P1M'));)
		@break

		@case("twoWeeks")
		@php
			$expirationDisplay =  (date('F j,Y', strtotime('+2 week')));
		@endphp
		@break

		@case("endOfTheMonth")
		@php
			$expirationDisplay =  (date('F j,Y', strtotime('last day of +0 month')));

		@endphp
		@break

		@case("endOfNextMonth")
		@php
			$expirationDisplay = (date('F j,Y', strtotime('last day of +1 month')));

		@endphp
		@break
		@case("threeMonths")
		@php
			$expirationDisplay = (date('F j,Y', strtotime('last day of +3 month')));

		@endphp
		@break
		@case("sixMonths")
		@php
			$expirationDisplay = (date('F j,Y', strtotime('last day of +6 month')));

		@endphp
		@break

		@default

		@set($expirationDisplay, "")

	@endswitch



	<div class="grid w-1/2 bg-green-400 offer">

		<img src="{{ $itemImage }}" alt="offerImage" class="image" loading="lazy" height="400px" width="400px">

		<div class="title">
			{{ $itemTitle }}
		</div>

		<div class="subtitle">
			{{ $itemSubTitle }}
		</div>


		<div class="cta">
			{{ $itemCTA }}
		</div>


		@isnotnull($expirationDisplay)
		<div class="expiration">
			{{$itemExpirationText}} {{ $expirationDisplay }}
		</div>
		@endisnotnull



		<div class="disclaimer">
			{{ $itemDisclaimer }}
		</div>







	</div>




 <code class="debugging">
	 <div>ItemID:  {{ $itemID }}</div>
	 <div>ItemTitle:  {{ $itemTitle }}</div>
	 <div>ItemSubTitle:  {{ $itemSubTitle }}</div>
	 <div>ItemImage:  {{ $itemImage }}</div>
	 <div>ItemCTA:  {{ $itemCTA }}</div>
	 <div>ItemDisclaimer:  {{ $itemDisclaimer }}</div>
	 <div>ItemExpiration:  {{ $itemExpiration }}</div>
 </code>




@endforeach
<hr>


@php
	$now = new DateTime('now');
/*Two Months Out */
$twoMonths = $now->add(new DateInterval('P1M'));

/*Three Months Out */
$threeMonths = $now->add(new DateInterval('P3M'));

/*Six Months Out */
$sixMonths = $now->add(new DateInterval('P6M'));
 echo date_default_timezone_get();
echo ('<br>');
echo $now->format('F j,Y');
echo ('<br>');
echo ('<br>');
echo $twoMonths->format('F j,Y');
/*
echo $threeMonths->format('F j,Y');
echo $sixMonths->format('F j,Y');
*/

function calcEndOfTheMonth($date) {
 $endOfTheMonth = $date->setDate($date->format("Y"),$date->format("m"),$date->format("t"));
 return $endOfTheMonth->format('F j,Y');
}





echo ('<br>');
echo $now->format('F j,Y');
echo ('<br>');
echo calcEndOfTheMonth($now);

/*
$oDate = new DateTime();

// now your date object has been updated with last day of month
$oDate->setDate($oDate->format("Y"),$oDate->format("m"),$oDate->format("t"));

// or to just echo you can skip the above line using this
echo $oDate->format("F j,Y");
*/
@endphp


{{--@foreach ($offers as $offer)--}}
{{--	<p>Offer ID {{ $offer->ID }}</p>--}}
{{--	<p>Disclaimer {{ $offer->offer_disclaimer }}</p>--}}
{{--@endforeach--}}



