import init, {uwuifier} from "./pkg/uwulib.js";

function uwuify() {
	const textContent = document.querySelector("#text").value;
	document.querySelector("#output").innerText = uwuifier(textContent);
}	

init().then(() => {
	document.querySelector("button").onclick = uwuify;
});
