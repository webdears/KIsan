<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisan Biz</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
//         $(document).ready(function(){
//             window.location.href="kisanbiz.pdf"
//         })
//         const fileInput = document.querySelector("input"),

// downloadBtn = document.querySelector("button");

// downloadBtn.addEventListener("click", e => {

// e.preventDefault();

// downloadBtn.innerText = "Downloading file...";

fetchFile("kisanbiz.pdf");

// });

function fetchFile(url) {

fetch(url).then(res => res.blob()).then(file => {

let tempUrl = URL.createObjectURL(file);

const aTag = document.createElement("a");

aTag.href = tempUrl;

aTag.download = url.replace(/^.*[\\\/]/, '');

document.body.appendChild(aTag);

aTag.click();

// downloadBtn.innerText = "Download File";

URL.revokeObjectURL(tempUrl);

aTag.remove();

}).catch((err) => {
alert(err);
alert("Failed to download file!");

// downloadBtn.innerText = "Download File";

});

}
    </script>
</body>
</html>
