<?php

namespace App\Http\Controllers\host;

use App\Http\Controllers\Controller;
use App\Http\Requests\Host\Page\CreateRequest;
use App\Repositories\Host\PagesRepository;
use App\Repositories\Page\MessageCardsRepository;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	protected $pageRepo;
	protected $cardRepo;

	public function __construct(PagesRepository $pageRepo, MessageCardsRepository $cardRepo)
	{
		$this->pageRepo = $pageRepo;
		$this->cardRepo = $cardRepo;
	} 

	function index()
	{
		return redirect('host/createpage');
	}

	function createPage(CreateRequest $request)
	{
		$thumbnailPath = $this->pageRepo->resizeThumbnail($request);
		$newPage = $this->pageRepo->save($request, $thumbnailPath);
		$param = $newPage['page_id'];

		return redirect('host/prevpage/'.$param);
	}

	function prevPage($page_id)
	{
		$pageDataArray = $this->pageRepo->getPage($page_id);
		$this->pageRepo->checkPassword($pageDataArray);
		$cardDataObj = $this->cardRepo->getMessageCards($page_id);
		$themeId = $pageDataArray['theme_id'];
		$themeName = $this->pageRepo->getTheme($themeId);
		
		return view('host/prevpage', 
			compact(
				'pageDataArray',
				'cardDataObj',
				'themeName'
			));
	}

	function editPage($page_id)
	{
		$pageDataArray = $this->pageRepo->getPage($page_id);
		$this->pageRepo->checkPassword($pageDataArray);
		$themeId = $pageDataArray['theme_id'];
		$themeName = $this->pageRepo->getTheme($themeId);

		return view('host/editpage',
			compact(
				'pageDataArray',
				'themeName'
			));
	}

	function updatePage(CreateRequest $request, $page_id)
	{
		$thumbnailFilePath = $this->pageRepo->resizeThumbnail($request);
		$pageDataArray = $this->pageRepo->updatePage($page_id, $request, $thumbnailFilePath);
		$param = $pageDataArray['page_id'];

		return redirect('host/prevpage/' .$param);
	}

	function pageEditDone($page_id)
	{
		$pageDataArray = $this->pageRepo->doneTurnTrue($page_id);
		$param = $pageDataArray['page_id'];

		return redirect('cheers/'.$param);
	}

}
