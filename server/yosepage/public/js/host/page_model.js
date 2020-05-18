import { validation } from '/js/validation.js';

export class pageModel
{
	constructor(v, inputTitle, inputThumbnail, errorTitle, errorThumbnail,inputMessage, inputSender, errorMessage, errorSender, prevMessage, prevSender) {
		this.v = new validation()

		this.inputTitle = document.getElementById('formPageTitle');
		this.inputThumbnail = document.getElementById('formPageThumbnail');
		this.errorTitle = document.getElementById('jsPageTitleError');
		this.errorThumbnail = document.getElementById('jsPageThumbnailError');


		this.inputMessage = document.getElementById('formMessage');
		this.inputSender = document.getElementById('formSender');
		this.errorMessage = document.getElementById('jsMessageError');
		this.errorSender = document.getElementById('jsSenderError');

		this.prevMessage = document.getElementById('prevMessage');
		this.prevSender = document.getElementById('prevSender');

		this.inputPassword = document.getElementById('formPagePassword');
		this.inputConfirm = document.getElementById('formPageConfirm');
		this.errorPassword = document.getElementById('jsPasswordError');
		this.errorConfirm = document.getElementById('jsConfirmError');

	}

	realTimePreview(input, output) {
		input.addEventListener('input', () => {
			;
			output.innerText = input.value
		});
	}

	styleDisplayNone(e){
		e.style.display = 'none';
	}

	inputRequireMaxLength(e, error, maxLength) {
		e.addEventListener('input', { input: e, error: error, maxLength: maxLength, handleEvent: this.v.requireMaxLength });
	}

	inputRequireMinLength(e, error, minLength) {
		e.addEventListener('input', { input: e, error: error, minLength: minLength, handleEvent: this.v.requireMinLength});
	}

	inputConfirmMatch(origin, confirm, error) {
		confirm.addEventListener('input', { inputOrigin: origin, inputConfirm: confirm, error: error, handleEvent: this.v.confirmMatch});
	}

	createPageValidate() {
		this.styleDisplayNone(this.errorTitle)
		this.styleDisplayNone(this.errorThumbnail)
		this.inputRequireMaxLength(this.inputTitle, this.errorTitle, 20)
		this.inputThumbnail.addEventListener('input', { input: this.inputThumbnail, error: this.errorThumbnail, types: ['image/png', 'image/jpeg', 'image/jpg'], handleEvent: this.v.fileType })
	}

	createMessageCardValidate (){
		this.styleDisplayNone(this.errorMessage)
		this.styleDisplayNone(this.errorSender)
		this.inputRequireMaxLength(this.inputMessage, this.errorMessage, 200)
		this.inputRequireMaxLength(this.inputSender, this.errorSender, 10)
	}

	updatePasswordValidate(){
		this.styleDisplayNone(this.errorPassword)
		this.styleDisplayNone(this.errorConfirm)
		this.inputRequireMinLength(this.inputPassword, this.errorPassword, 6);
		this.inputConfirmMatch(this.inputPassword, this.inputConfirm, this.errorConfirm);
	}

	prevMessageCard (){
		this.realTimePreview(this.inputMessage, this.prevMessage);
		this.realTimePreview(this.inputSender, this.prevSender);

	}

}