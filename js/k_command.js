// ???
if (window.addEventListener) {
    var keys = [],
        kCommand = "38,38,40,40,37,39,37,39,66,65";

    window.addEventListener("keydown", function(e){
        keys.push(e.keyCode);

        if (keys.toString().indexOf(kCommand) >= 0) {
          document.getElementById("kCom").innerHTML = "<embed src='" + "/audio/kCommand.mp3" + "' hidden=true autostart=true loop=false ></embed>";
          keys = [];
        };
    }, true);
};
