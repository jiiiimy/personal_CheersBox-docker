<?php

namespace App\Http\Controllers\host;

use App\Http\Controllers\Controller;
use App\Http\Requests\Host\Page\EditPasswordRequest;
use App\Http\Requests\Host\Page\ConfirmPasswordRequest;
use App\Repositories\Host\PagesRepository;
use App\Repositories\Page\MessageCardsRepository;
use Illuminate\Http\Request;

class PagesPasswordController extends Controller
{
    protected $pageRepo;

    public function __construct(PagesRepository $pageRepo, MessageCardsRepository $cardRepo)
    {
        $this->pageRepo = $pageRepo;
        $this->cardRepo = $cardRepo;
    } 
    function editPassword($page_id)
    {
        $pageDataArray = $this->pageRepo->getPage($page_id);
        $this->pageRepo->checkPassword($pageDataArray);
        $themeId = $pageDataArray['theme_id'];
        $themeName = $this->pageRepo->getTheme($themeId);

        return view(
            'host/editpassword',
            compact(
                'pageDataArray',
                'themeName'
            )
        );
    }

    function updatePassword(EditPasswordRequest $request, $page_id)
    {
        $this->pageRepo->updatePassword($page_id, $request);
        $param = $page_id;

        return redirect('host/prevpage/'.$param);
    }

    function enterPassword($page_id)
    {
        $themeName = $this->pageRepo->existPageTheme($page_id);
        $pageDataArray = [
            'page_id' => $page_id
        ];

        return view(
            'host/enterpassword',
            compact(
                'pageDataArray',
                'themeName'
            )
        );
    }

    function checkPassword(ConfirmPasswordRequest $request, $page_id)
    {
        $param = $page_id;
        return redirect('host/prevpage/'.$param);
    }
}
