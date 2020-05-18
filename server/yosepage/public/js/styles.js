
export class switchTheme
{
	constructor(theme, themeRadio, containerTheme, currentClass) {
		this.theme = [
			'chee',
			'mono',
			'natu',
			'city'
		];
		this.themeRadio = document.getElementsByClassName('theme-radio-input');
		this.containerTheme = document.getElementById('addTheme');
		this.currentClass = '';
	}

	add(i) {
		this.containerTheme.classList.add(this.theme[i]);
	}

	remove() {
		this.currentClass = this.containerTheme.classList
		this.containerTheme.classList.remove(this.currentClass[2]);
	}

	addDefault() {
		for (let i = 0; i < this.themeRadio.length; i++) {
			if (this.themeRadio[i].checked) {
				this.add(i);
			}
		}
	}

	switchOnClick() {
		for (let i = 0; i < this.themeRadio.length; i++) {
			this.themeRadio[i].addEventListener('click', () => {
				this.remove()
				this.add(i)
			});
		}
	}

};

export class prevImage
{
	constructor(touchArea, touchIcon, inputPageThumbnail){
		this.touchArea = document.getElementById('input-file-toucharea')
		this.touchIcon = document.getElementById('input-file-touchicon')
		this.inputThumbnail = document.getElementById('formPageThumbnail')
	}

	styleDisplayNone(e) {
		e.style.display = 'none';
	}
	styleDisplayInline(e) {
		e.style.display = 'inline';
	}
	inputPageThumbnail() {
		this.styleDisplayNone(this.touchIcon)
		this.inputThumbnail.addEventListener('change', { input: this.inputThumbnail, area: this.touchArea, icon: this.touchIcon,  handleEvent: this.imgPreview });
	}

	imgPreview(input, area, icon) {
		let file = input.target.files[0]
		let reader = new FileReader()
		let previewArea = document.getElementById("preview-area")
		let previewImage = document.getElementById("previewImage")
		let img = document.createElement("img")
		let filetypes = ['image/jpg', 'image/jpeg', 'image/png']
		let typeMatch = false

		if (file != null) {
			for (let i = 0; i < filetypes.length; i++) {
				if (file.type == filetypes[i]) {
					typeMatch = true
				}
			}
		}

		if (previewImage == null && typeMatch) {
			this.area.classList.add('displayNone')
			this.icon.classList.remove('displayNone')
			this.icon.style.display = 'inline'
		} else if (previewImage != null && typeMatch) {
			previewArea.removeChild(previewImage);
			this.area.classList.add('displayNone')
			this.icon.classList.remove('displayNone')
			this.icon.style.display = 'inline'
		} else if (previewImage != null && file == null) {
			previewArea.removeChild(previewImage);
			this.area.classList.remove('displayNone')
			this.icon.classList.add('displayNone')
		}

		reader.onload = function () {
			img.setAttribute("src", reader.result)
			img.setAttribute("id", "previewImage")
			previewArea.appendChild(img)
		};

		reader.readAsDataURL(file);
	}

}


export class controlModal
{
	constructor(openSITLBtn, closeSITLBtn, modalSITLElm, openSITTBtn, closeSITTBtn, modalSITTBtn,) {
		this.openSITLBtn = [
			'openMenu'
		]
		
		this.closeSITLBtn = [
			'closeMenu'
		]

		this.modalSITLElm = [
			'menu'
		]
		this.openSITTBtn = [
			'openSetting'
		]
		
		this.closeSITTBtn = [
			'closeSetting'
		]

		this.modalSITTElm = [
			'setting'
		]
	}

	open(btn, elm, style) {
		for (let i = 0; i < btn.length; i++) {
			let button = document.getElementById(btn[i])
			let e =  document.getElementById(elm)
			button.addEventListener('click', () => (
				e.classList.add(style)
			));
		}
	}

	close(btn, elm, style) {
		for (let i = 0; i < btn.length; i++) {
			let b = document.getElementById(btn[i])
			let e = document.getElementById(elm[i])
			b.addEventListener('click', () => {
				e.classList.remove(style);
			});
		}
	}
	openC(btn, elm, style) {
		for (let i = 0; i < btn.length; i++) {
			let button = document.getElementsByClassName(btn[i])
			let e = document.getElementById(elm)
			for (let index = 0; index < button.length; index++) {
				button[i].addEventListener('click', () => (
					e.classList.add(style)
				));
			}
		}
	}

	slideInToLeft() {
		this.open(this.openSITLBtn, this.modalSITLElm, 'slideInToLeft')
		this.close(this.closeSITLBtn, this.modalSITLElm, 'slideInToLeft')
	}
	slideInToTop() {
		this.openC(this.openSITTBtn, this.modalSITTElm, 'slideInToTop')
		this.close(this.closeSITTBtn, this.modalSITTElm, 'slideInToTop')
	}

}

export class copyClipboard
{
	constructor(copyMCF,copyPrev, notification)
	{
		this.copyMCF = document.getElementById('copyMessageCardForm')
		this.copyPrev = document.getElementById('copyPrevPage')
		this.notification = document.getElementById('notification')
	}
	
	addClass(e, className) {
		e.classList.add(className)
	}

	removeClass(e, className) {
		e.classList.remove(className)
	}

	copy(e, modal, className, delay) {
		e.addEventListener('click', () => {
			navigator.clipboard.writeText(e.value)
			this.addClass(modal, className)
			setTimeout(this.removeClass, delay, modal, className)
		});
	}

	copyMessageCardForm() {
		this.copy(this.copyMCF, this.notification, 'slideUpDown', 3000)
	}

	copyPrevPage() {
		this.copy(this.copyPrev, this.notification, 'slideUpDown', 3000)
	}
}