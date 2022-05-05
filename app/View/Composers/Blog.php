<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Pagi\PagiFacade as Pagi;

class Blog extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'index','home'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'pagi' => $this->pagination(),
//	         'blogTitle' => $this->blogTitle(),
//            'blogTitleElement' => $this->blogTitleElement(),
//            'defaultFeaturedImage' => $this->defaultFeaturedImage(),
//            'defaultFeaturedImageAlt' => $this->defaultFeaturedImage_alt(),
//            'defaultFeaturedImageTitle' => $this->defaultFeaturedImage_title(),
        ];
    }

    public function pagination()
    {
        $pagination = Pagi::build();

        return $pagination->links('components.pagi');
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



}
