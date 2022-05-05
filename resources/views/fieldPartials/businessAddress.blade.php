@hasoptions('field_business_information_witsage_primary_location')
@options('field_business_information_witsage_primary_location')
<address class="business-address primary">
  @hassub('business_link')
  <a href="@sub('business_link')" class="business_address_link" target="_blank">
    @endsub

    <div>
      @hassub('business_address')
      <span class="inline business_address">@sub('business_address'),</span>
      @endsub

      @hassub('business_address_line_2')
      <span class="inline business_address_line_2">@sub('business_address_line_2')</span>
      @endsub
    </div>

    @hassub('business_city')
    <span class="business_city">@sub('business_city'),</span>
    @endsub

    @hassub('business_state')
    <span class="business_state">@sub('business_state')</span>
    @endsub

    @hassub('business_zip_code')
    <span class="business_zip_code">@sub('business_zip_code')</span>
    @endsub


    @hassub('business_link')
  </a>
  @endsub

  @endoptions
</address>
@endhasoptions
