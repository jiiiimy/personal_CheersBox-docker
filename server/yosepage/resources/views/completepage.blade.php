@extends('layouts.app')
@section('content')
<div class="all-container">
	<div class="container -theme {{ $themeName }}">
		<div class="contents -theme">
			<div class="container -message-card">
				<div class="header -message-card">
					<h1 class="-title">{{ $pageDataArray['title'] }}</h1>
					@if(!empty($pageDataArray['thumbnail']))
					<img class="-thumbnail" src="{{ $pageDataArray['thumbnail'] }}" alt="ページのサムネイル画像" onselectstart="return false;" onmousedown="return false;">
					@endif
				</div>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				<div class="contents -message-card">
					@if (count($cardDataObj) != 0)
					@foreach ($cardDataObj as $card)
					<div class="card">
						<p class="-text">{!! nl2br($card->message) !!}</p>
						<p class="-by">{{ $card->sender }}</p>
					</div>
					@endforeach
					@endif
				</div>
			</div>
			<div class="container -sharebysns">
				<div class="contents -sharebysns">
					<p class="-title">もらったことをシェアしよう！</p>
					<div class="area -sharebysns">
						<a class="btn -sharebysns twitter" href="https://twitter.com/share?url={{url('/cheers/'.$pageDataArray['page_id'])}}&hashtags=CheersBox,寄せ書き&text=みんなからCheersBoxをもらったよ！ありがとう！" rel="nofollow" target="_blank"><span>Twitter</span></a>
						<a class="btn -sharebysns facebook" href="https://www.facebook.com/dialog/share?app_id=2471674503145611&display=popup&href={{url('/cheers/'.$pageDataArray['page_id'])}}" rel=" nofollow" target="_blank"><span>Facebook</span></a>
						<a class="btn -sharebysns line" href="https://social-plugins.line.me/lineit/share?url={{url('/cheers/'.$pageDataArray['page_id'])}}" rel=" nofollow" target="_blank"><span>LINE</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection