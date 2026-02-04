let count = 0;
function sound() {
    const oneUp = document.getElementById("oneup");
    const squeak = document.getElementById("noise");
    if (++count >= 8) {
        oneUp.play();
        count = 0;
    }
    else {
        squeak.play();
    }
    let image = document.querySelector(".bearcorner");
    if (image.style.right === "unset") {
        image.style.left = "unset";
        image.style.right = "-4rem";
        image.style.rotate = "-45deg";
    }
    else {
        image.style.right = "unset";
        image.style.left = "-4rem";
        image.style.rotate = "45deg";
    }
    image.style.top = String(Math.random() * document.documentElement.clientHeight) + "px";
}
function sanitise(string) {
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#x27;',
        "/": '&#x2F;',
        "`": '&grave',
    };
    const reg = /[&<>"'/]/ig;
    return string.replace(reg, (match) => (map[match]));
}
function submit_feelings() {
    let emotion = document.getElementById("emotion").value;
    if (emotion === "") {
        emotion = "nothing";
    }
    document.querySelector("#mood").innerHTML = "<h3><b>" + sanitise(emotion) + "</b></h3>";
    document.querySelector(".subheader details").remove();
    document.querySelector(".subheader").insertAdjacentHTML("beforeend", "<p>You know what? Me too.</p>");
}
document.querySelector("#submit").addEventListener("click", submit_feelings);
