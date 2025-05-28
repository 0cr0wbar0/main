import init, { uwuifier } from "./pkg/uwulib.js";

function uwuify() {
	const textContent = document.querySelector("#text").value;
	const output = uwuifier(textContent);
	document.querySelector("#output").innerText = output;
}	

init().then(() => {
	document.querySelector("button").onclick = uwuify;
});
