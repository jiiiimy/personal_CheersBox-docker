@extends('errors.layouts.errorbase')
@section('title', '400 Bad Request')
@section('message', 'ごめんなさい！予期せぬエラーが発生しました！')
@section('detail', 'URLを確認のうえ、お試しください！')
@section('link')
<div class="container -lpbtn">
	<div class="contents -lpbtn">
		<a class="btn -lpstart" href="/"><span>トップページへ</span></a>
	</div>
</div>
@endsection