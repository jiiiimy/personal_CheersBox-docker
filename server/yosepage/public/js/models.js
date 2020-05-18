import { pageModel } from '/js/host/page_model.js';

let path = location.pathname
let page = new pageModel()

switch (path) {
	case '/host/createpage':
		page.createPageValidate()
		break;
	case path.startsWith('/host/editpage/') && path:
		page.createPageValidate()
		break;
	case path.startsWith('/host/editpassword/') && path:
		page.updatePasswordValidate()
		break;
	case path.startsWith('/page/createmessage/') && path:
		page.createMessageCardValidate()
		page.prevMessageCard()
		break;
	default:
		break;
}

