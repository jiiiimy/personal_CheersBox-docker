import { switchTheme, prevImage, controlModal, copyClipboard } from '/js/styles.js';
import { submitForm } from '/js/processing.js';

let path = location.pathname
let theme = new switchTheme()
let prev = new prevImage()
let modal = new controlModal()
let copy = new copyClipboard()
let submit = new submitForm()

switch (path) {
	case '/':
		theme.addDefault()
		theme.switchOnClick()
		break;
	case '/host/createpage':
		theme.addDefault()
		theme.switchOnClick()
		prev.inputPageThumbnail()
		break;
	case path.startsWith('/host/editpage/') && path:
		theme.addDefault()
		theme.switchOnClick()
		prev.inputPageThumbnail()
		break;
	case path.startsWith('/host/prevpage/') && path:
		modal.slideInToLeft()
		copy.copyPrevPage()
		submit.submitDeleteMessageCard()
		submit.submitPageEditDone()
		break;
	case path.startsWith('/host/editpassword/') && path:
		modal.slideInToLeft()
		copy.copyPrevPage()
		submit.submitDeleteMessageCard()
		submit.submitPageEditDone()
		break;
	case path.startsWith('/page/createmessage/') && path:
		copy.copyMessageCardForm()
		submit.submitCreateMessageCard()
		break;
	default:
		break;
}
