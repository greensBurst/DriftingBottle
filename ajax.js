var current = new Object();
current.logtip = function () {
    this.username = document.getElementById("uname").value;
    this.password = document.getElementById("psswd").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","log.php?a="+this.username+"&b="+this.password,false);
    xmlhttp.send();
    document.getElementById("error").innerHTML=xmlhttp.responseText;
    if(document.getElementById("error").innerText == "登录成功") {
        window.location.href="plp.html";
    }
}
current.regtip = function () {
    this.username = document.getElementById("uname").value;
    this.password = document.getElementById("psswd").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","reg.php?a="+this.username+"&b="+this.password,false);
    xmlhttp.send();
    document.getElementById("error").innerHTML=xmlhttp.responseText;
    if(document.getElementById("error").innerText == "注册成功") {
        window.location.href="plp.html";
    }
}
current.play = function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","who.php",false);
    xmlhttp.send();
    document.getElementById("who").innerText=xmlhttp.responseText;
}

var bottle = new Object();
bottle.throw = function() {
    var scanf = document.getElementById("leftext").value;
    var whose = document.getElementById("who").innerText;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","throw.php?a="+scanf+"&b="+whose,false);
    xmlhttp.send();
    document.getElementById("leftext").value = "";
    document.getElementById("leftext").value=xmlhttp.responseText;
}
bottle.pick = function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","pick.php",false);
    xmlhttp.send();
    document.getElementById("rightext").value = xmlhttp.responseText;
}