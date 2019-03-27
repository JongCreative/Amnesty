<?php

namespace App\Http\Controllers;

use App\Contest;
use Illuminate\Http\Request;

class AdminsController extends Controller {
	public function index() {
		return view('admin.dashboard');
	}

	public function contestEdit() {
		return view('admin.editContest');
	}

	public function contestUpdate(Request $request) {
		\Config::write(['contest.endDate' => request('endDate')]);
		\Config::write(['contest.region' => request('region')]);
		\Config::write(['contest.theme' => request('theme')]);

		\Config::write(['contest.main_prize' => request('mainPrize')]);
		\Config::write(['contest.main_description' => request('mainDescr')]);
		\Config::write(['contest.second_prize' => request('secondPrize')]);
		\Config::write(['contest.second_description' => request('secondDescr')]);
		\Config::write(['contest.third_prize' => request('thirdPrize')]);
		\Config::write(['contest.third_description' => request('thirdDescr')]);
		\Config::write(['contest.month_prize' => request('monthPrize')]);
		\Config::write(['contest.month_description' => request('monthDescr')]);

		$id = \Config::get('contest.contest');

		$contest = contest::find($id);

		$contest->theme = request('theme');
		$contest->region = request('region');

		$contest->save();

		return redirect('/admin');
	}

	public function contestCreate() {
		return view('admin.CreateContest');
	}

	public function contestStore(Request $request) {
		$id = time();

		\Config::write(['contest.contest' => $id]);
		\Config::write(['contest.endDate' => request('endDate')]);
		\Config::write(['contest.region' => request('region')]);
		\Config::write(['contest.theme' => request('theme')]);

		$contest = new Contest;

		$contest->id = $id;
		$contest->theme = request('theme');
		$contest->region = request('region');

		$contest->save();

		return redirect('/admin');
	}

}
