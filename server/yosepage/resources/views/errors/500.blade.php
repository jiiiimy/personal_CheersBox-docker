@extends('errors.layouts.errorbase')
@section('title', '500 Internal Server Error')
@section('message', 'ごめんなさい！予期せぬエラーが発生しました！')
@section('detail', 'お手数ですが私たちにご連絡をお願いします！')
@section('link')
<div class="container -lpbtn">
	<div class="contents -lpbtn">
		<a class="btn -lpstart" href="https://forms.gle/qj6DoGRQsQMeLAoJ8"><span>運営に連絡する</span></a>
	</div>
</div>
@endsection