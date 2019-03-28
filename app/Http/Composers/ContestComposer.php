<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class ContestComposer {

	/**
	 * Create a new profile composer.
	 *
	 * @param  UserRepository  $users
	 * @return void
	 */
	public function __construct() {
		// Dependencies automatically resolved by service container...
		$this->region = config('contest.region');
		$this->theme = config('contest.theme');
		$this->contest = config('contest.contest');
		$this->mainPrize = config('contest.main_prize');
		$this->mainDescr = config('contest.main_description');
		$this->secondPrize = config('contest.second_prize');
		$this->secondDescr = config('contest.second_description');
		$this->thirdPrize = config('contest.third_prize');
		$this->thirdDescr = config('contest.third_description');
		$this->monthPrize = config('contest.month_prize');
		$this->monthDescr = config('contest.month_description');

		/**
		 * Formatted dates
		 */

		setlocale(LC_ALL, 'nl_NL');
		$this->endDate = strftime('%d %B %Y', strtotime(config('contest.endDate')));

		$monthName = ucfirst(strftime('%B', mktime(0, 0, 0, date('m'))));
		$this->currentPrize = $monthName . ': ' . $this->monthPrize;
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */

	public function compose(View $view) {
		$view->with('contestData', $this);
	}
}