function copiarid()
{
    var copyFrom = document.getElementById("soelrecord");
    copyFrom.select();
    document.execCommand("copy");
    alert("Copied ID: " + copyFrom.value);
}