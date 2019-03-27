<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class ContestComposer {

	public $endDate;
	public $region;
	public $theme;
	public $contest;
	public $mainPrize;
	public $mainDescr;
	public $secondPrize;
	public $secondDescr;
	public $thirdPrize;
	public $thirdDescr;
	public $monthPrize;
	public $monthDescr;

	/**
	 * Create a new profile composer.
	 *
	 * @param  UserRepository  $users
	 * @return void
	 */
	public function __construct() {
		// Dependencies automatically resolved by service container...
		$this->endDate = config('contest.endDate');
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