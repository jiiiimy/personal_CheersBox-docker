@extends('layouts.app')
@section('content')
<div class="all-container">
	<div class="container -theme {{ $themeName }}">
		<span class="preview-mark">プレビュー</span>
		<div class="contents -theme">
			<div class="container -message-card">
				<div class="header -message-card">
					<h1 class="-title">{{ $pageDataArray['title'] }}</h1>
					@if(!empty($pageDataArray['thumbnail']))
					<img class="-thumbnail" src="{{ $pageDataArray['thumbnail'] }}" alt="ページのサムネイル画像" onselectstart="return false;" onmousedown="return false;">
					@endif
				</div>
				<div class="contents -message-card">
					@if (count($cardDataObj) != 0)
					@foreach ($cardDataObj as $card)
					<div class="card">
						<p class="-text">{!! nl2br($card->message) !!}</p>
						<button class="-menu btn-delete">
							<svg class="-trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-labelledby="binIconTitle" stroke-linecap="round" stroke-linejoin="round" fill="none">
								<title id="binIconTitle">Bin</title>
								<path d="M19 6L5 6M14 5L10 5M6 10L6 20C6 20.6666667 6.33333333 21 7 21 7.66666667 21 11 21 17 21 17.6666667 21 18 20.6666667 18 20 18 19.3333333 18 16 18 10" />
							</svg>
						</button>
						<form class="form-delete" method="post" action="{{ url('/page/deletemessage/'.$pageDataArray['page_id']) }}">
							@csrf
							@method('post')
							<input type="hidden" name='card_id'  value="{{ $card->id }}">
						</form>
						<p class="-by">{{ $card->sender }}</p>
					</div>
					@endforeach
					@else
					<div class="card">
						<p class="-text">もうCheersBoxを送るためのページが作られました！このページには、みんなから寄せ書きしてもらったCheersカードが集まってきます！メニューを開いて、Cheersカードを作成してみましょう！</p>
						<p class="-by">運営より！</p>
					</div>
					<div class="card">
						<p class="-text">完成するまで、このページのURLは忘れずに保存しておいてくださいね！</p>
						<p class="-by">運営より！</p>
					</div>
					@endif
				</div>
			</div>
		</div>
		@include('layouts.host.menu')
		@include('layouts.copyclipboard')
	</div>
</div>
@endsection