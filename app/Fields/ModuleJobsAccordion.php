<?php

namespace App\Fields;

use App\Fields\Partials\ComponentAccordion;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ModuleJobsAccordion extends Field
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

			->addFields($this->get(ComponentAccordion::class));

		return $moduleJobsAccordion->build();
	}
}
