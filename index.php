<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisan Biz</title>
</head>
<body>
   
    <script>

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
     window.location.href="kisanbiz.pdf"
}
                
       

    </script>
</body>
</html>
