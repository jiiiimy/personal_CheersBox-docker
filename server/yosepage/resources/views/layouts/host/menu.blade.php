<div class="btn -menu" id="openMenu">
	<span class="hamburger-line-one"></span>
	<span class="hamburger-line-two"></span>
	<span></span>
</div>
<div class="modal -hostmenu" id="menu">
	<div class="container -hostmenu">
		<div class="-close" id="closeMenu"></div>
		<div class="contents -hostmenu">
			<div class="menu-area">
				<ul class="menu">
					<li class="-card"><a class="-btn" target="_blank" rel="noopener" href="{{ url('/page/createmessage/'.$pageDataArray['page_id']) }}">Cheersカードを書く</a></li>
					<li class="-card"><button class="-btn" id="copyPrevPage" value="{{ url('/page/prevpage/'.$pageDataArray['page_id']) }}">友達をプレビューに招待</button></li>
					<li class="-card"><a class="-btn" href="{{ url('/host/editpage/'.$pageDataArray['page_id']) }}">ページを編集する</a></li>
					<li class="-card"><a class="-btn" href="{{ url('/host/editpassword/'.$pageDataArray['page_id']) }}">パスワードを設定する</a></li>
					<li class="-card"><button class="-btn" id="btn-done">完成！<span>(編集ができなくなります)</span></button></li>
					<li class="-card -position-bottom"><a class="-btn" target="_blank" rel="noopener" href="https://forms.gle/qj6DoGRQsQMeLAoJ8">運営に連絡する</a></li>
				</ul>
				<form id="form-done" method="post" action="{{ url('/host/pageeditdone/'.$pageDataArray['page_id'])}}">
					@csrf
					@method('post')
				</form>
			</div>
		</div>
	</div>
</div>