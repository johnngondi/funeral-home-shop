function isBlank(value) {
	if (value == '') {
		return true;
	} else {
		return false;
	}
}

function hasNumber(value) {
	return /\d/.test(value);
}

function isEmail(value) {
	var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	return emailReg.test(value);
}
