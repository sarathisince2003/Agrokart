function copyData() {
    var inputData = document.getElementById("email").value;

    // Use AJAX to send data to the PHP script
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "tractor.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };
    xhr.send("data=" + inputData);
}