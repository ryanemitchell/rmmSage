@hasoptions('field_social_media_social_links')

<div class="social-icons">
  <div class="flex gap-2 justify-center social-icons-inner">
  @options('field_social_media_social_links')

  <a href="@sub('site_URL')" target="_blank" class="social-icon-link" title="@sub('site_name')" >
    <div class="social-icon social-icon-@sub('site_name') h-[36px] w-[36px]">
    </div>

  </a>

  @style
  .social-icon-@sub('site_name') {
    background-repeat: no-repeat;
    background-image: url("@sub('default_icon')");
    }

  @hassub('hover_icon')
  .social-icon-@sub('site_name'):hover {
  background-image: url("@sub('hover_icon')");
  }
  @endsub


  @endstyle

  @endoptions
  </div>
</div>


@endhasoptions


