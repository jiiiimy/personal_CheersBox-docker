@extends('layouts.app')
@section('content')
<div class="all-container">
	<div class="container -theme {{ $themeName }}">
		@include('layouts.header')
		<div class="contents -theme">
			<form class="container -form" id="form-submit" method="post" action="{{ url('page/createmessage/'.$param) }}">
				@csrf
				@method('post')
				<div class="header -form">
					<button class="btn -submit -topleft" id="copyMessageCardForm" type="button" value="{{ url('page/createmessage/'.$param) }}"><span>友達を招待</span></button>
					<button class="btn -submit -topright" id="btn-submit" type="submit"><span>これでOK！</span></button>
				</div>
				<div class="contents -form">
					@if($errors->has('message'))
					<span class="error-message" id="phpMessageError">{{ $errors->first('message') }}</span>
					@endif
					<span class="error-message" id="jsMessageError"></span>
					<textarea class="textarea -message" id="formMessage" name="message" placeholder="メッセージを入力しよう！200文字まで入力できます。"></textarea>
					@if($errors->has('sender'))
					<span class="error-message" id="phpSenderError">{{ $errors->first('sender') }}</span>
					@endif
					<span class="error-message" id="jsSenderError"></span>
					<input class="input-text" id="formSender" type="text" name="sender" placeholder="名前も入力してね">
				</div>
			</form>
			<div class="container -user-prev">
				<div class="header -user-prev">
					<div class="area -user-prev">
						<p class="-title">こんなカードができあがります！</p>
					</div>
					<div class="contents -user-prev">
						<div class="card">
							<p class="-text" id="prevMessage">これは実際のメッセージカードです。上のフォームに入力すると、プレビューを見ることができます！</p>
							<p class="-by" id="prevSender">運営より！</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.copyclipboard')
	</div>
</div>
@endsection