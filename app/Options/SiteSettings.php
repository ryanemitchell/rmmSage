<?php
//
//namespace App\Options;
//
//use Log1x\AcfComposer\Options as Field;
//use StoutLogic\AcfBuilder\FieldsBuilder;
//
//class SiteSettings extends Field
//{
//    /**
//     * The option page menu name.
//     *
//     * @var string
//     */
//    public $name = 'Site Settings';
//
//    /**
//     * The option page menu slug.
//     *
//     * @var string
//     */
//    public $slug = 'site-settings';
//
//    /**
//     * The option page document title.
//     *
//     * @var string
//     */
//    public $title = 'Site Settings | Options';
//
//    /**
//     * The option page permission capability.
//     *
//     * @var string
//     */
//    public $capability = 'edit_theme_options';
//
//    /**
//     * The option page menu position.
//     *
//     * @var int
//     */
//    public $position = 1;
//
//    /**
//     * The slug of another admin page to be used as a parent.
//     *
//     * @var string
//     */
//    public $parent = null;
//
//    /**
//     * The option page menu icon.
//     *
//     * @var string
//     */
//    public $icon =  "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='18'%3E%3Cpath d='M15.273 5.504C14.23 5.355 13.19 5.355 12 5.355h-1.19c-.744 0-1.339 0-2.083.15L12 0l3.273 5.504z' fill='%2300D3D8'/%3E%3Cpath d='m12 0-1.19 5.355c-.744 0-1.339 0-2.083.15L12 0z' fill='%23004752'/%3E%3Cpath d='M13.785 5.207c-1.636-.15-3.421 0-5.058.148C2.331 5.95.694 8.628 7.388 9.818c0-.149-.148-.297-.148-.446 0-.595.446-1.19 1.041-1.041 0-.447.149-.893.298-1.34a48.056 48.056 0 0 1 6.545 0c.149.447.297.893.297 1.34.596-.15 1.042.297 1.042 1.04 0 .15 0 .298-.149.447 2.826-.446 4.612-1.19 4.612-2.231 0-1.34-4.314-2.232-7.14-2.38z' fill='%2300D3D8'/%3E%3Cpath d='M16.612 9.223c0 .149 0 .298-.15.446-.148.744-.594 1.34-.892 1.34-.595-.447-1.041-1.34-1.636-1.488-1.041-.447-1.934.743-1.934.743s-.893-1.19-1.934-.743c-.149 0-.446.148-.595.446-.297.297-.595.744-1.041 1.041-.298 0-.744-.595-1.042-1.19 0-.149-.148-.297-.148-.446 0-.595.446-1.041.892-1.041h.149c0-.447.149-.893.298-1.34 1.19-.297 2.23-.297 3.421-.297 1.19 0 2.231 0 3.273.149.148.297.148.446.148.744 0 .149.15.446.15.744h.148c.595-.15.893.297.893.892z' fill='%23FFD0B8'/%3E%3Cpath d='M12 10.71c-.298 0-.446-.148-.446-.446v-1.04c0-.298.148-.447.446-.447.298 0 .446.149.446.446v1.041c0 .298-.148.447-.446.447z' fill='%23E2B39F'/%3E%3Cpath d='M14.975 13.388c-.297 2.976-4.016 4.463-4.016 4.612.595-.595.743-1.934-.595-2.826-.893-.447-1.19-1.488-1.34-2.232v-.446h.447c1.19 0 1.934-1.339 2.38-1.934.149-.149.149-.298.149-.298s0 .15.149.298c.297.595 1.19 1.934 2.38 1.934h.446v.892z' fill='%23E6E6E6'/%3E%3Cpath d='M12 6.694c-1.19 0-2.231 0-3.273.149-.148.446-.297.893-.297 1.339H8.28c-.446 0-.893.446-.893 1.041 0 .149 0 .298.15.446-2.678-.297-4.464-1.04-4.464-2.082 0-1.042 2.38-1.934 5.653-2.232C9.77 5.207 10.81 5.207 12 5.207h1.785S11.554 5.355 12 6.694z' fill='%23004752'/%3E%3Cpath d='M14.975 12.942h-.446C12.893 13.091 12 10.86 12 10.86s-.149-.447 0-.596c.298.596 1.339 2.232 2.529 2.232h.446v.446z' fill='%23CCC'/%3E%3Cpath d='M12 10.86s-.893 2.23-2.529 2.23h-.446v-.445h.446c1.19 0 1.636-1.785 2.529-2.232.149 0 0 .447 0 .447z' fill='%23CCC'/%3E%3Cpath d='M15.57 7.587c-1.785-.298-6.694-.595-6.099 2.231-.297.446-.595.893-1.041 1.19-.298 0-.744-.595-1.042-1.19 0-.149-.148-.297-.148-.446 0-.595.446-1.041.892-1.041h.149c0-.447.149-.893.298-1.34 1.19-.297 2.23-.297 3.421-.297 1.19 0 2.231 0 3.273.149.148.297.148.446.297.744z' fill='%23E2B39F'/%3E%3Cpath d='M11.256 8.33H9.77c0-.148.148-.297.297-.446 0 0 .298-.148.446-.148.15 0 .298 0 .447.148.148.15.148.298.297.447zm2.975 0h-1.487c0-.148.149-.297.297-.446.15 0 .298-.148.447-.148.148 0 .297 0 .446.148.149.15.297.298.297.447z' fill='%235B6670'/%3E%3Cpath d='M14.975 12.496h-.446c-1.636 0-2.529-2.232-2.529-2.232s.893-1.19 1.934-.892c.595.297 1.041 1.19 1.636 1.636.298.298.744.595 1.488.595-.149 0-.893.744-2.083.893zM12 10.264s-.893 2.232-2.529 2.232h-.446c-1.19-.149-1.934-.893-1.934-.893.595 0 1.041-.297 1.488-.595.446-.446.892-1.339 1.487-1.636 1.041-.298 1.934.892 1.934.892z' fill='%23E6E6E6'/%3E%3Cpath d='M10.959 18c.595-.595.743-1.934-.595-2.826-.893-.447-1.19-1.488-1.34-2.232v-.149l.15-.148 1.19.148s-.15 1.042.595 1.786c.892.743 1.19 2.23 0 3.421z' fill='%23CCC'/%3E%3C/svg%3E";
//
//    /**
//     * Redirect to the first child page if one exists.
//     *
//     * @var boolean
//     */
//    public $redirect = true;
//
//    /**
//     * The post ID to save and load values from.
//     *
//     * @var string|int
//     */
//    public $post = 'options';
//
//    /**
//     * The option page autoload setting.
//     *
//     * @var bool
//     */
//    public $autoload = true;
//
//    /**
//     * Localized text displayed on the submit button.
//     *
//     * @return string
//     */
//    public function updateButton()
//    {
//        return __('Update', 'acf');
//    }
//
//    /**
//     * Localized text displayed after form submission.
//     *
//     * @return string
//     */
//    public function updatedMessage()
//    {
//        return __('Site Settings Updated', 'acf');
//    }
//
//    /**
//     * The option page field group.
//     *
//     * @return array
//     */
//    public function fields()
//    {
//        $siteSettings = new FieldsBuilder('site_settings');
//
//        $siteSettings;
//
//        return $siteSettings->build();
//    }
//}
