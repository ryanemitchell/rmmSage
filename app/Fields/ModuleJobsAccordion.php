<?php

namespace App\Fields;

use App\Fields\Partials\componentAccordion;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class moduleJobsAccordion extends Field
{
	/**
	 * The field group.
	 *
	 * @return array
	 */
	public function fields()
	{
		$moduleJobsAccordion = new FieldsBuilder('jobs_accordion');

		$moduleJobsAccordion
			->setLocation('page_template', '==', 'page-careers.blade.php');

		$moduleJobsAccordion

			->addFields($this->get(componentAccordion::class));

		return $moduleJobsAccordion->build();
	}
}
