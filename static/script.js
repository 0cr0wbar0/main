"use strict";
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
    image.style.top =
        String(Math.random() * document.documentElement.clientHeight) + "px";
}
function selectStatus() {
    let stringArr = [
        "productive",
        "creative",
        "busy",
        "a desire to play Hollow Knight",
        "static/half-life-2-death-sound.mp3"
    ];
    let element = stringArr[Math.floor(Math.random() * stringArr.length)];
    if (element.includes("static")) {
        let audioResult = new Audio(element);
        audioResult.controls = true;
        audioResult.style.margin = "1rem";
        return audioResult;
    }
    else {
        let textResult = document.createElement("h2");
        textResult.innerText = element;
        return textResult;
    }
}
function sanitise(string) {
    // credit for function: https://stackoverflow.com/a/48226843
    const map = {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': "&quot;",
        "'": "&#x27;",
        "/": "&#x2F;",
        "`": "&grave"
    };
    const reg = /[&<>"'/]/gi;
    return string.replace(reg, (match) => map[match]);
}
function submit_feelings() {
    let emotion = document.getElementById("emotion")
        .value;
    if (emotion === "") {
        emotion = "nothing";
    }
    let moodSection = document.querySelector("#mood");
    let newEmotion = document.createElement("h2");
    newEmotion.innerHTML = "<strong>" + sanitise(emotion) + "</strong>";
    document.querySelector(".subheader details").remove();
    moodSection.replaceChildren(newEmotion);
    document
        .querySelector(".subheader")
        .insertAdjacentHTML("beforeend", "<p style='margin: 0'>You know what? Me too.</p>");
}
function funToggle() {
    const moodBox = document.querySelector(".subheader");
    const bear = document.querySelector(".bearcorner");
    const arr = [moodBox, bear];
    for (const element of arr) {
        element.style.display = element.style.display.includes("none")
            ? "unset"
            : "none";
    }
}
funToggle();
document.querySelector("#mood").appendChild(selectStatus());
document.querySelector("#submit").addEventListener("click", submit_feelings);
