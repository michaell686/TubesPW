var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 2000);
}

function showPage() {
    document.getElementById("loadingBox").style.display = "none";
    document.getElementById("cover").style.display = "block";
}