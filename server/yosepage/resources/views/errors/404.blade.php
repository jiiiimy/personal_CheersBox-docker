@extends('errors.layouts.errorbase')
@section('title', '404 Not Found')
@section('message', 'ごめんなさい！お探しのページは見つかりませんでした！')
@section('detail', 'URLを確認のうえ、お試しください！')
@section('link')
<div class="container -lpbtn">
	<div class="contents -lpbtn">
		<a class="btn -lpstart" href="https://forms.gle/qj6DoGRQsQMeLAoJ8"><span>運営に連絡する</span></a>
	</div>
</div>
@endsection