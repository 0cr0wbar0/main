// Compiled JS file is in static folder

let count: number = 0;

function sound(): void {
    const oneUp = document.getElementById("oneup") as HTMLAudioElement;
    const squeak = document.getElementById("noise") as HTMLAudioElement;
    if (++count >= 8) {
        oneUp.play();
        count = 0;
    } else {
        squeak.play();
    }
    let image: HTMLImageElement = document.querySelector(".bearcorner") as HTMLImageElement;
    if (image.style.right === "unset") {
        image.style.left = "unset";
        image.style.right = "-4rem";
        image.style.rotate = "-45deg";
    } else {
        image.style.right = "unset";
        image.style.left = "-4rem";
        image.style.rotate = "45deg";
    }
    image.style.top = String(Math.random() * document.documentElement.clientHeight) + "px";
}

function sanitise(string: string): string { // credit for function: https://stackoverflow.com/a/48226843
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
    return string.replace(reg, (match: string): string =>(map[match]));
}

function submit_feelings(): void {
    let emotion: string = (document.getElementById("emotion") as HTMLInputElement).value;
    if (emotion === "") {
        emotion = "nothing";
    }
    document.querySelector("#mood").innerHTML = "<h3><b>" + sanitise(emotion) + "</b></h3>";
    document.querySelector(".subheader details").remove();
    document.querySelector(".subheader").insertAdjacentHTML("beforeend", "<p>You know what? Me too.</p>");
}

document.querySelector("#submit").addEventListener("click", submit_feelings);