@hasoptions('field_business_information_witsage_primary_location')
@options('field_business_information_witsage_primary_location')

@hassub('primary_phone')
<a href="tel:@sub('primary_phone')" class="phoneNumber primary_phone">
  @endsub

  @hassub('primary_phone_display')
  <span class="business_address">@sub('primary_phone_display')</span>
  @endsub

  @hassub('primary_phone')
</a>
@endsub

@endoptions
@endhasoptions
