<?php

namespace App\Repositories\Host\Pages;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * PagesRepositoryで使う関数
 */
trait Util
{
	public function getTheme($id)
	{
		$themes = [
			0 => 'chee',
			1 => 'mono',
			2 => 'natu',
			3 => 'city'
		];

		return $themes[$id];
	}

	public function checkPassword($data)
	{
		if (empty($data['password'])) {
			return;
		} else {
			$host = session()->get('host');
			if ($host != $data['page_id']) {
				return redirect('/host/checkpassword/'.$data['page_id'])->throwResponse();
			} else {
				return;
			}

		}
	}

	public function resizeThumbnail($data)
	{
		if (isset($data['page-thumbnail'])) {
			$file = $data['page-thumbnail'];
			$extension = $file->getClientOriginalExtension();
			$filename = hash("md5", $file->getClientOriginalName());
			$resize_img = Image::make($file)->widen(600)->encode($extension);
			$fileSave = Storage::disk('s3')->put('page/thumbnail/'.$filename, (string)$resize_img,'public');

			if ($fileSave) {
				$filePath = Storage::disk('s3')->url('page/thumbnail/'.$filename);
				return $filePath;
			}

		}else{
			return;
		}
	}

}
