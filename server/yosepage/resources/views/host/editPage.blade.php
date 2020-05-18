@extends('layouts.app')
@section('content')
<div class="all-container">
	<div class="container -theme" id="addTheme">
		<div class="contents -theme">
			<form class="container -form -new" method="post" action="{{ url('/host/updatepage/'.$pageDataArray['page_id']) }}" enctype='multipart/form-data'>
				@csrf
				@method('post')
				<div class="contents -form">
					@if($errors->has('page-title'))
					<span class="error-message" id="phpPageTitleError">{{ $errors->first('page-title') }}</span>
					@endif
					<span class="error-message" id="jsPageTitleError"></span>
					<input class="input-title" id="formPageTitle" type="text" name="page-title" placeholder="メインメッセージを書こう！" value="{{ old('page-title', $pageDataArray['title']) }}">
					@if($errors->has('page-thumbnail'))
					<span class="error-message">{{ $errors->first('page-thumbnail') }}</span>
					@endif
					<span class="error-message" id="jsPageThumbnailError"></span>
					<div class="area -input-file ">
						<div class="box -input-file">
							<div class="input-file-preview" id="preview-area">
								<label class="input-file-touchicon" id="input-file-touchicon" for="formPageThumbnail">+</label>
							</div>
							<input class="input-file -thumbnail" id="formPageThumbnail" type="file" name="page-thumbnail">
							<label class="input-file-toucharea" id="input-file-toucharea" for="formPageThumbnail">
								<p>
									<span class="-mark">＋</span>
									<span class="-text">変更する画像を選択してね！</span>
								</p>
							</label>
						</div>
					</div>
					<div class="container -message-card ">
						<div class="contents -message-card">
							<div class="card">
								<p class="-text">これはサンプルです。
									寄せ書きのメッセージがこのようなカードで表示されます。テーマを選んで見え方を確認してみてください！</p>
								<p class="-by">運営より！</p>
							</div>
						</div>
					</div>
					<div class="container -select-theme ">
						<div class="contents -select-theme">
							<div class="area -select-theme">
								<p class="-title">ページのテーマを選ぼう！</p>
								<ul class="-list">
									<li class="theme chee">
										<input type="radio" name="theme" class="theme-radio-input" id="theme-radio-chee" value="0" @if(old('theme')==0 || $pageDataArray['theme_id']==0) checked @elseif(!old('theme')) checked @endif>
										<label class="theme-radio-label" for="theme-radio-chee">
											<div class="-color"></div>
											<p class="-name">Chee</p>
										</label>
									</li>
									<li class="theme mono">
										<input type="radio" name="theme" class="theme-radio-input" id="theme-radio-mono" value="1" @if(old('theme')==1 || $pageDataArray['theme_id']==1) checked @endif>
										<label class="theme-radio-label" for="theme-radio-mono">
											<div class="-color"></div>
											<p class="-name">Mono</p>
										</label>
									</li>
									<li class="theme natu">
										<input type="radio" name="theme" class="theme-radio-input" id="theme-radio-natu" value="2" @if(old('theme')==2 || $pageDataArray['theme_id']==2) checked @endif>
										<label class="theme-radio-label" for="theme-radio-natu">
											<div class="-color"></div>
											<p class="-name">Natu</p>
										</label>
									</li>
									<li class="theme city">
										<input type="radio" name="theme" class="theme-radio-input" id="theme-radio-city" value="3" @if(old('theme')==3 || $pageDataArray['theme_id']==3) checked @endif>
										<label class="theme-radio-label" for="theme-radio-city">
											<div class="-color"></div>
											<p class="-name">City</p>
										</label>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<button class="btn -submit" type="submit"><span>保存する！</span></button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection