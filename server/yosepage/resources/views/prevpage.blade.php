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
						<p class="-by">{{ $card->sender }}</p>
					</div>
					@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection