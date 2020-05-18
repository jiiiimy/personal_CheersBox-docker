@extends('layouts.app')
@section('content')
<div class="all-container">
	<div class="container -theme chee">
		@include('layouts.header')
		<div class="contents -theme">
			<div class="container -message-card">
				<div class="header -message-card">
					<p class="-title">Thank You</p>
					<p class="-title">for your Message !!</p>
				</div>
				<div class="contents -message-card">
					<div class="card">
						<p class="-text">メッセージをもらったあの人も、
							喜ぶこと間違いなし！<br>
							また{{ config('app.name') }}を使って、みんなで誰かにメッセージを送ってね！</p>
						<p class="-by">運営より！</p>
					</div>
				</div>
				<div class="footer -message-card">
					<a href="/"><button class="btn -link"><span>{{ config('app.name') }}を見る</span></button></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection