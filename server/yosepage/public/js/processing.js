
export class submitForm {

	constructor (){

	}

	deleteSingleForm (btn, form, comment) {
		btn.addEventListener('click', () => {
			if (confirm(comment)) {
				form.submit()
			}
		})
	}

	deleteLoopingForm (btn, form, comment) {
		for (let i = 0; i < btn.length; i++) {
			btn[i].addEventListener('click', () => {
				if (confirm(comment)) {
					form[i].submit()
				}
			});
		}

	}

	submitCreateMessageCard() {
		let btn = document.getElementById('btn-submit');
		let form = document.getElementById('form-submit');
		let comment ='完了したら、直せません！完了しますか??　(もし後から直したい場合は、ホストの人に頼んで今回の内容を削除してもらい、新しく作り直してください！)'
		this.deleteSingleForm(btn, form, comment)
	}

	submitDeleteMessageCard () {
		let btn = document.getElementsByClassName('btn-delete');
		let form = document.getElementsByClassName('form-delete')
		let comment = '削除したら戻せません！削除しますか??'
		this.deleteLoopingForm(btn, form, comment)
	}

	submitPageEditDone () {
		let btn = document.getElementById('btn-done');
		let form = document.getElementById('form-done');
		let comment = '完了したら、ページの編集やCheersカードの作成ができなくなり、完成ページが作成されます！　完了しますか??'
		this.deleteSingleForm(btn, form, comment)
	}


}