function aashRefreshCaptcha() {
    const img = document.getElementById("aash_captcha_img");
    img.src = "image.php?t=" + new Date().getTime();
}

function aashPlayAudio() {
    fetch("audio.php")
        .then(res => res.blob())
        .then(blob => {
            const audioUrl = URL.createObjectURL(blob);
            const audio = new Audio(audioUrl);
            audio.play();
        })
        .catch(err => console.error("Audio fetch error:", err));
}