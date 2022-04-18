<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
	        'title' => get_the_title(),
            'businessName' => $this->businessName(),
            'contentWidth' => "1200px",
            'narrowWidth' => '800px',
            'wideWidth' => '1392px',
            'desktopBreakpoint' => "1024px",
            'imageAsset' => get_template_directory_uri() . '/public/images/',
            'blogTitle' => $this->blogTitle(),
            'blogTitleElement' => $this->blogTitleElement(),
            'defaultFeaturedImage' => $this->defaultFeaturedImage(),
            'defaultFeaturedImageAlt' => $this->defaultFeaturedImage_alt(),
            'defaultFeaturedImageTitle' => $this->defaultFeaturedImage_title(),
            "pageTitle" => $this->pageTitle(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function businessName()
    {
        return get_field('field_business_information_business_name', 'options');
    }

    public function blogTitle()
    {
        return get_field('field_site_settings_blog_blog_title', 'options');
    }

    public function blogTitleElement()
    {
        if (get_field('field_site_settings_blog_blog_html_element', 'options')) {
            return get_field('field_site_settings_blog_blog_html_element', 'options');
        } else {
            return 'span';
        }
    }


    public function defaultFeaturedImage()
    {
        return get_field('field_site_settings_blog_default_featuredimage', 'options');
    }

    public function defaultFeaturedImage_alt()
    {
        return get_field('field_site_settings_blog_default_featuredimage_alt', 'options');
    }

    public function defaultFeaturedImage_title()
    {
        return get_field('field_site_settings_blog_default_featuredimage_title', 'options');
    }


    /* ===========================  Page Settings (from the active page) ========================== */


    public function pageTitle()
    {
        $pageTitle = get_the_title();


        if (get_field('field_page_settings_pagetitle')) :
            $pageTitle = get_the_title();
        elseif (is_front_page()) :
            $pageTitle = get_the_title();
        elseif (is_home()) : // Blog title
	        if (get_field('field_site_settings_blog_blog_title', 'options')) :
		        $pageTitle = get_field('field_site_settings_blog_blog_title', 'options');
	        else :
		        $pageTitle = "Blog";
	        endif;
        elseif (is_single()) :
	        if (get_field('field_site_settings_blog_blog_title', 'options')) :
		        $pageTitle = get_field('field_site_settings_blog_blog_title', 'options');
	        else :
		        $pageTitle = "Blog";
	        endif;
        elseif (is_category()) :
	        if (get_field('field_site_settings_blog_blog_title', 'options')) :
		        $pageTitle = get_field('field_site_settings_blog_blog_title', 'options');
	        else :
		        $pageTitle = "Blog";
	        endif;
        elseif (is_404()) :
            if (get_field('field_site_settings_not_found_page_notfound_title', 'options')) :
                $pageTitle = get_field('field_site_settings_not_found_page_notfound_title', 'options');
            else :
                $pageTitle = "No body is here bitch!";
            endif;
        endif;

        return $pageTitle;
    }
}
