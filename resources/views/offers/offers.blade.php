@notempty($offers)
<div class="grid grid-flow-col gap-4 justify-center offers"> <!-- Start of .offers -->


@foreach($offers as $offer)

        @include('offers.single-offer')

@endforeach
</div> <!-- End of .offers -->


@else
    There are no selected offers
@endnotempty






