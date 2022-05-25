<?php

namespace App\Fields\Partials;

use App\Fields\Partials\ComponentAccordion;
use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class JobsAccordion extends Partial
{
	/**
	 * The field group.
	 *
	 * @return array
	 */
	public function fields()
	{
		$jobsAccordion = new FieldsBuilder('jobs_accordion');

		$jobsAccordion


			->addFields($this->get(ComponentAccordion::class));

		return $jobsAccordion;
	}
}
