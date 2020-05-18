<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\CreateMessageRequest;
use App\Repositories\Page\MessageCardsRepository;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $cardRepo;

    public function __construct(MessageCardsRepository $cardRepo)
    {
        $this->cardRepo = $cardRepo;
    }

    function messageCardForm($page_id)
    {
        $themeName = $this->cardRepo->mCardFormTheme($page_id);
        $param = $page_id;

        return view('createMessage', compact(
            'themeName',
            'param'
        ));
    }
    
    function createMessageCard(CreateMessageRequest  $request, $page_id)
    {
        $this->cardRepo->saveMessageCard($request, $page_id);

        return redirect('page/thanksmessage');
    }

    function deleteMessageCard(Request $request, $page_id)
    {
        $this->cardRepo->softDeleteMessageCard($request, $page_id);
        $param = $page_id;

        return redirect('host/prevpage/'.$param);
    }

    function prevPage($page_id)
    {
        $pageDataArray = $this->cardRepo->getPage($page_id);
        $cardDataObj = $this->cardRepo->getMessageCards($page_id);
        $themeId = $pageDataArray['theme_id'];
        $themeName = $this->cardRepo->getTheme($themeId);

        return view(
            'prevpage',
            compact(
                'pageDataArray',
                'cardDataObj',
                'themeName'
            )
        );
    }

    function showPage($page_id)
    {
        $pageDataArray = $this->cardRepo->getCheerPage($page_id);
        $cardDataObj = $this->cardRepo->getMessageCards($page_id);
        $themeId = $pageDataArray['theme_id'];
        $themeName = $this->cardRepo->getTheme($themeId);

        return view('completepage',
            compact(
				'pageDataArray',
				'cardDataObj',
				'themeName'
			));
    }
}
