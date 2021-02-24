const btnSend = document.getElementsByTagId('btn');
const chat = document.getElementsByTagId('chat');

btnSend.addEventListener("click", (e) => {
	e.preventDefault();
	if(chat.value == "") {

	}else {
		getMessage(chat.value);
		chat.value = "";
	}
});