@extends('layouts.app')
@section('content')
<div class="all-container">
	<div class="container -theme" id="addTheme">
		<div class="header -theme">
		</div>
		<div class="contents -theme">
			<div class="container -lp">
				<div class="header -lp">
					<h1 class="-appname">{{config('app.name')}}</h1>
					<p class="-text">寄せ書きをもっと、簡単に。</p>
					<p class="-text">離れていても、一瞬で。</p>
					<div class="container -lpbtn">
						<div class="contents -lpbtn">
							<p class="-title">無料だよ！</p>
							<a class="btn -lpstart" href="{{ url('host/createpage') }}"><span>さっそく使ってみる！</span></a>
						</div>
					</div>
					<div class="container -sharebysns">
						<div class="contents -sharebysns">
							<p class="-title">CheersBoxについて話す！</p>
							<div class="area -sharebysns">
								<a class="btn -sharebysns twitter" href="https://twitter.com/share?url={{url('/')}}&hashtags=CheersBox,寄せ書き" rel="nofollow" target="_blank"><span>Twitter</span></a>
								<a class="btn -sharebysns facebook" href="https://www.facebook.com/dialog/share?app_id=2471674503145611&display=popup&href={{url('/')}}" rel=" nofollow" target="_blank"><span>Facebook</span></a>
								<a class="btn -sharebysns line" href="https://social-plugins.line.me/lineit/share?url={{url('/')}}" rel=" nofollow" target="_blank"><span>LINE</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="contents -lp">
					<div class="container -howtouse">
						<div class="contents -howtouse">
							<h2 class="-headline">{{config('app.name')}}の使い方</h2>
							<div class="area -howtouse">
								<span class="-bullet">Step 1</span>
								<h3 class="-item">寄せ書きが集まる、ページを作ろう！</h3>
								<p class="-detail">最短10秒でできちゃいます！<br>
									好きなデザインも選べるよ！</p>
								<img class="img-full" src="{{ asset('img/pageprev.gif') }}">
								<div class="container -select-theme ">
									<div class="contents -select-theme">
										<div class="area -select-theme">
											<p class="-title">試しにデザインを選んでみてね！</p>
											<ul class="-list">
												<li class="theme chee">
													<input type="radio" name="theme" class="theme-radio-input" id="theme-radio-chee" value="0" checked>
													<label class="theme-radio-label" for="theme-radio-chee">
														<div class="-color"></div>
														<p class="-name">Chee</p>
													</label>
												</li>
												<li class="theme mono">
													<input type="radio" name="theme" class="theme-radio-input" id="theme-radio-mono" value="1">
													<label class="theme-radio-label" for="theme-radio-mono">
														<div class="-color"></div>
														<p class="-name">Mono</p>
													</label>
												</li>
												<li class="theme natu">
													<input type="radio" name="theme" class="theme-radio-input" id="theme-radio-natu" value="2">
													<label class="theme-radio-label" for="theme-radio-natu">
														<div class="-color"></div>
														<p class="-name">Natu</p>
													</label>
												</li>
												<li class="theme city">
													<input type="radio" name="theme" class="theme-radio-input" id="theme-radio-city" value="3">
													<label class="theme-radio-label" for="theme-radio-city">
														<div class="-color"></div>
														<p class="-name">City</p>
													</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="area -howtouse">
								<span class="-bullet">Step 2</span>
								<h3 class="-item">寄せ書きを依頼しよう！</h3>
								<p class="-detail">フォームのリンクをSNSで送るだけ！</p>
							</div>
							<div class="area -howtouse">
								<span class="-bullet">Step 3</span>
								<h3 class="-item">寄せ書きが集まったか確認しよう！</h3>
								<p class="-detail">プレビューで今のページを確認できます。<br>
									メインメッセージや写真、テーマの変更はいつでもできます！</p>
							</div>
							<div class="area -howtouse">
								<span class="-bullet">Step 4</span>
								<h3 class="-item">完成したページを贈ろう！</h3>
								<p class="-detail">完成ページのリンクをSNSで送るだけ！</p>
							</div>
							<div class="container -lpbtn">
								<div class="contents -lpbtn">
									<p class="-title">無料だよ！</p>
									<a class="btn -lpstart" href="{{ url('host/createpage') }}"><span>さっそく使ってみる！</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="container -lppoint">
						<div class="contents -lppoint">
							<h2 class="-headline">{{config('app.name')}}って何がいいの？</h2>
							<div class="area -lppoint">
								<span class="-bullet">Point 1</span>
								<h3 class="-item">めんどうな登録やログインがない！</h3>
								<p class="-detail">新しいサービスを使うたびに登録やログインさせられて、もううんざり！なるべく余計なものは省きました！</p>
							</div>
							<div class="area -lppoint">
								<span class="-bullet">Point 2</span>
								<h3 class="-item">オンラインだから、<br>
									離れていても大丈夫！</h3>
								<p class="-detail">寄せ書きを集めるのも、贈るのも、会えないとちょっと大変。{{config('app.name')}}なら、ただリンクを送るだけ！</p>
							</div>
							<div class="area -lppoint">
								<span class="-bullet">Point 3</span>
								<h3 class="-item">寄せ書きは200文字以内だから手軽！</h3>
								<p class="-detail">寄せ書きの文字数って周りに合わせないといけない気がする…そんな人も、みんな200文字以下だから大丈夫！</p>
							</div>
							<div class="container -lpbtn">
								<div class="contents -lpbtn">
									<p class="-title">無料だよ！</p>
									<a class="btn -lpstart" href="{{ url('host/createpage') }}"><span>さっそく使ってみる！</span></a>
								</div>
							</div>
							<div class="container -sharebysns">
								<div class="contents -sharebysns">
									<p class="-title">CheersBoxについて話す！</p>
									<div class="area -sharebysns">
										<a class="btn -sharebysns twitter" href="https://twitter.com/share?url={{url('/')}}&hashtags=CheersBox,寄せ書き" rel="nofollow" target="_blank"><span>Twitter</span></a>
										<a class="btn -sharebysns facebook" href="https://www.facebook.com/dialog/share?app_id=2471674503145611&display=popup&href={{url('/')}}" rel=" nofollow" target="_blank"><span>Facebook</span></a>
										<a class="btn -sharebysns line" href="https://social-plugins.line.me/lineit/share?url={{url('/')}}" rel=" nofollow" target="_blank"><span>LINE</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container -howtouse">
					<div class="contents -howtouse">
						<h2 class="-headline">つくった人(仲良くしてね！)</h2>
						<div class="area -howtouse">
							<span class="-bullet">Website ></span>
							<a class="-detail" target="_blank" rel="noopener" href="https://jima.netlify.app">jima.netlify.app</a>
						</div>
						<div class="area -howtouse">
							<span class="-bullet">twitter ></span>
							<a class="-detail" target="_blank" rel="noopener" href="https://twitter.com/jiiiimy00">twitter.com/jiiiimy00</a>
						</div>
						<div class="area -howtouse">
							<span class="-bullet">お問い合わせ ></span>
							<a class="-detail" target="_blank" rel="noopener" href="https://forms.gle/qj6DoGRQsQMeLAoJ8">お問い合わせフォーム</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer -theme">
			<p class="-appname">©2020 {{ config('app.name') }}</p>
		</footer>
	</div>
</div>
@endsection