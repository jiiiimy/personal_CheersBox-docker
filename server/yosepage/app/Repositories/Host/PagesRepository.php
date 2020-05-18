<?php

namespace App\Repositories\Host;

use App\Models\Page;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;

class PagesRepository extends BaseRepository
{
	use Pages\Util;

	public function save($data, $imgPath)
	{
		$string = '1234567890abcdefghijklmnopqrstuvwxyz1234567890abcdefghijklmnopqrstuvwxyz1234567890abcdefghijklmnopqrstuvwxyz1234567890abcdefghijklmnopqrstuvwxyz';
		$hash = substr(str_shuffle($string), 0, '36');

		$newPage            = new Page();
		$newPage->page_id   = $hash;
		$newPage->title     = $data['page-title'];
		$newPage->thumbnail = $imgPath;
		$newPage->theme_id  = $data['theme'];
		$newPage->save();
		
		return $newPage;
	}

	public function existPageTheme($page_id)
	{
		$getPage = Page::where('page_id', $page_id)->firstOrFail();	
		if ($getPage) {
			$theme = $this->getTheme($getPage['theme_id']);
			return $theme;
		}else{
			return redirect('/')->throwResponse();
		}
	}

	public function getPage($page_id)
	{
		$getPage = Page::where('page_id', $page_id)->firstOrFail();
		$pageDataArray = $getPage->toArray();
		if($pageDataArray['done']){
			return redirect('/cheers/' .$page_id)->throwResponse();
		}else{
			return $pageDataArray;
		}
	}

	public function updatePage($page_id, $data, $imgPath)
	{
		$editPage = Page::where('page_id', $page_id)->firstOrFail();

		$editPage->title = $data['page-title'];
		if (isset($imgPath)) {
			$editPage->thumbnail = $imgPath;
		}
		$editPage->theme_id = $data['theme'];
		$editPage->save();

		return $editPage;
	}

	public function updatePassword($page_id, $data)
	{
		$editPass = Page::where('page_id', $page_id)->firstOrFail();

		$editPass->password = Hash::make($data['password']);
		$editPass->save();
		session(['host' => $page_id]);

		return $editPass;
	}

	public function doneTurnTrue($page_id)
	{
		$donePage = Page::where('page_id', $page_id)->firstOrFail();
		$donePage->done = true;
		
		$donePage->save();
	}

	public function getCheerPage($page_id)
	{
		$getPage = Page::where('page_id', $page_id)->firstOrFail();
		$pageDataArray = $getPage->toArray();
		if ($pageDataArray['done']) {
			return $pageDataArray;
		} else {
			return redirect('/page/prevpage/' . $page_id)->throwResponse();
		}
	}
}
