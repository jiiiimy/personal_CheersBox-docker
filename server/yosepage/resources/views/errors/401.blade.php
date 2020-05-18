@extends('errors.layouts.errorbase')
@section('title', '401 Unauthorized')
@section('message', 'ごめんなさい！認証エラーが発生しました！')
@section('detail', 'URLを確認のうえ、お試しください！')
@section('link')
<div class="container -lpbtn">
	<div class="contents -lpbtn">
		<a class="btn -lpstart" href="/"><span>トップページへ</span></a>
	</div>
</div>
@endsection