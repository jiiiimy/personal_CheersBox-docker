@extends('layouts.app')
@section('content')
<div class="all-container">
	<div class="container -theme {{ $themeName }}">
	@include('layouts.header')
		<div class="contents -theme">
			<div class="container -message-card">
				<div class="contents -message-card">
					<div class="card">
						<p class="-text">このページを見るには、パスワードが必要です！</p>
						<p class="-by">運営より！</p>
					</div>
				</div>
			</div>
			<form class="container -form" method="post" action="{{ url('/host/checkpassword/'.$pageDataArray['page_id']) }}">
				@csrf
				@method('post')
				<div class="contents -form">
					@if($errors->has('password'))
					<span class="error-message">{{ $errors->first('password') }}</span>
					@endif
					<input class="input-text" id="formPagePassword" name="password" type="password" placeholder="パスワード">
					<button class="btn -submit" type="submit"><span>入力完了！</span></button>
				</div>
			</form>
		</div>
	</div>
	@include('layouts.host.menu')
</div>
@endsection