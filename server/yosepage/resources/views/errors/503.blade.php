@extends('errors.layouts.errorbase')
@section('title', '503 Service Unavailable')
@section('message', 'ごめんなさい！一時的にアクセスできません！')
@section('detail', 'サービスが一時的に過負荷やメンテナンスで使えません。時間をおいてお試しください！')
@section('link')
<div class="container -lpbtn">
	<div class="contents -lpbtn">
		<a class="btn -lpstart" href="https://forms.gle/qj6DoGRQsQMeLAoJ8"><span>運営に連絡する</span></a>
	</div>
</div>
@endsection