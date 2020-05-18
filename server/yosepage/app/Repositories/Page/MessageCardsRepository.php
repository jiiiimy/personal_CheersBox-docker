<?php

namespace App\Repositories\Page;

use App\Models\Message;
use App\Repositories\Host\PagesRepository;
use Illuminate\Database\Eloquent\SoftDeletes;

class MessageCardsRepository extends PagesRepository
{
	use SoftDeletes;

	public function mCardFormTheme($page_id)
	{
		$pageData = $this->getPage($page_id);
		$pageTheme = $this->getTheme($pageData['theme_id']);

		return $pageTheme;
	}

	public function saveMessageCard($data, $page_id)
	{
		$newMessageCard = new Message();
		$newMessageCard->page_id = $page_id;
		$newMessageCard->message = $data->message;
		$newMessageCard->sender = $data->sender;
		$newMessageCard->save();
	}

	public function getMessageCards($page_id)
	{
		$messageCards =  Message::where('page_id', $page_id)->orderBy('created_at', 'desc')->get();

		return $messageCards;
	}

	public function softDeleteMessageCard($data, $page_id)
	{
		$messageCard = Message::where('id', $data->card_id)->firstOrFail();

		if ($messageCard->page_id == $page_id) {
			$messageCard->delete();
		}
	}
}
