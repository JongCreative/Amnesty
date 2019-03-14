<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class ContestComposer
{

    public $endDate;
    public $region;
    public $prize;
    public $theme;
    public $contest;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->endDate = config('contest.endDate');
        $this->region = config('contest.region');
        $this->prize = config('contest.prize');
        $this->theme = config('contest.theme');
        $this->contest = config('contest.contest');
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('contestData', $this);
    }
}