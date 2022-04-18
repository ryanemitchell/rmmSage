@notempty($offers)
<div class="offers grid grid-flow-col gap-4 justify-center"> <!-- Start of .offers -->


@foreach($offers as $offer)

        <div class="offer p-4">
            <div class="inner__wrapper flex flex-col items-center p-8 bg-gray-400"><!-- Start of .inner__wrapper -->
                <div class="header flex flex-col items-center"><!-- Start of .header -->
                    <h2>{{$offer->title}}</h2>
                    <div class="subtitle">{{$offer->subTitle}}</div>
                </div><!-- End of .header -->
                <div class="content flex flex-col items-center"><!-- Start of .content -->
                    <span> @wpautokp($offer->cta)</span>
                    {{$offer->id}}
                    @notempty($offer->image)
                    <img src="{{$offer->image}}" alt="photo" class="image" loading="auto" height="400px" width="400px">
                    @endnotempty

                </div><!-- End of .content -->
                <div class="footer flex flex-col items-center"><!-- Start of .footer -->
                    @notempty($offer->disclaimer)
                    <div class="disclaimer">
                        {{$offer->disclaimer}}
                    </div>
                    @endnotempty

                    @notempty($offer->expirationText )
                    <div class="expirationText">
                        {{$offer->expirationText}} :   {{$offer->expirationDisplay}} :  {{$offer->expiration}}
                    </div>
                    @endnotempty
                </div><!-- End of .footer -->
            </div><!-- End of .inner__wrapper -->
        </div><!-- End of .offer -->

@endforeach
</div> <!-- End of .offers -->


@else
    There are no selected offers
@endnotempty






