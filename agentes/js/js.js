function playVideo(videoId) {
    var videoPlayer = document.getElementById("videoPlayer");
    if (videoPlayer) {
        videoPlayer.src = `videos/${videoId}.mp4`;
        videoPlayer.loop = true;
        videoPlayer.play();
    }
}

window.addEventListener("load", () => {
document.querySelector("body > div.container > button:nth-child(2) > img").click();

let is_started = false;

window.addEventListener("mousemove", () => {
if (is_started) { return; }
is_started = !is_started;
console.log("click");

document.querySelector("body > div.container > button:nth-child(2) > img").click();
});

// Iniciar el video automáticamente
document.querySelector("body > div.container > button:nth-child(2) > img").click();
});
