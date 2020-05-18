@extends('layouts.app')
@section('content')
<div class="all-container">
	<div class="container -theme {{ $themeName }}">
		<div class="contents -theme">
			<div class="container -message-card">
				<div class="contents -message-card">
					<div class="card">
						<p class="-text">パスワードの設定は任意です！<br>パスワードを設定すると、パスワードを知らない人は、ページの編集をできなくなります。<br>必要に応じて設定してください！</p>
						<p class="-by">運営より！</p>
					</div>
				</div>
			</div>
			<form class="container -form" method="post" action="{{ url('/host/updatepassword/'.$pageDataArray['page_id']) }}">
				@csrf
				@method('post')
				<div class="contents -form">
					@if($errors->has('password'))
					<span class="error-message">{{ $errors->first('password') }}</span>
					@endif
					<span class="error-message" id="jsPasswordError"></span>
					<input class="input-text" id="formPagePassword" name="password" type="password" placeholder="新しいパスワード(半角英数字6文字以上)">
					@if($errors->has('password_confirmation'))
					<span class="error-message">{{ $errors->first('password_confirmation') }}</span>
					@endif
					<span class="error-message" id="jsConfirmError"></span>
					<input class="input-text" id="formPageConfirm" name="password_confirmation" type="password" placeholder="パスワード確認用">
					<button class="btn -submit" type="submit"><span>パスワードを保存</span></button>
					<a class="link -option" href="{{ url('/host/editpage/'.$pageDataArray['page_id'])}}">戻る</a>
				</div>
			</form>
		</div>
		@include('layouts.host.menu')
	</div>
</div>
@endsection