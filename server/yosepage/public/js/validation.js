
export class validation
{

	require(input, error) {

		if (this.input.value.length == 0) {
			this.error.style.display = 'inline';
			this.error.textContent = 'この項目は必ず入力してね！';
		} else {
			this.error.style.display = 'none';
		}
	}

	maxLength(input, error, maxLength) {

		if (input.value.length > length) {
			error.style.display = 'inline';
			error.textContent = length + '文字以内で入力してください。';
		} else {
			error.style.display = 'none';
		}

	}

	requireMaxLength(input, error, maxLength) {

		if (this.input.value.length == 0) {
			this.error.style.display = 'inline';
			this.error.textContent = 'この項目は必ず入力してね！';
		} else if (this.input.value.length > this.maxLength) {
			this.error.style.display = 'inline';
			this.error.textContent = '文字が多いかも！' + this.maxLength + '文字以内で入力してね！';
		} else {
			this.error.style.display = 'none';
		}

	}

	requireMinLength(input, error, minLength) {

		if (this.input.value.length == 0) {
			this.error.style.display = 'inline';
			this.error.textContent = 'この項目は必ず入力してね！';
		} else if (this.input.value.length < this.minLength) {
			this.error.style.display = 'inline';
			this.error.textContent = '文字が少ないかも！' + this.minLength + '文字以上で入力してね！';
		} else {
			this.error.style.display = 'none';
		}

	}

	confirmMatch(inputOrigin, inputConfrim, error) {

		if (this.inputOrigin.value != this.inputConfirm.value) {
			this.error.style.display = 'inline';
			this.error.textContent = '入力したものが一致していないよ！確認してね！';
		} else {
			this.error.style.display = 'none';
		}

	}

	fileType(input, error, types) {

		if (typeof this.input.files[0].type !== 'undefined') {
			let typeMatch = false
			for (let i = 0; i < this.types.length; i++) {
				if (this.input.files[0].type == this.types[i]) {
					typeMatch = true
				}
			}
			if (!typeMatch) {
				this.error.style.display = 'inline';
				this.error.textContent = '画像は.jpgか.jpeg.か.pngでお願い！';
			} else {
				this.error.style.display = 'none';
			}
		}

	}

}