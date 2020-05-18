@extends('errors.layouts.errorbase')
@section('title', '403 Forbidden')
@section('message', 'ごめんなさい！アクセス権限がありません！')
@section('detail', 'URLを確認のうえ、お試しください！')
@section('link')
<div class="container -lpbtn">
	<div class="contents -lpbtn">
		<a class="btn -lpstart" href="/"><span>トップページへ</span></a>
	</div>
</div>
@endsection