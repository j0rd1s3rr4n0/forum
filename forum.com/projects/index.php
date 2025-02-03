<head>
    <style>
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }

    i.terminal {
        background-color: black;
        border-radius: 15px;
        padding: 5px 5px 5px 5px;
        height: 40px;
        width: 40px;
        margin-left: 15px;
        vertical-align: middle;
    }

    * {
        margin: 0;
        padding: 0;
        list-style: none;
        font-family: "Lato", sans-serif;
        line-height: 1;
    }

    body {
        background-color: #F5F6F8;
        overflow: hidden;
    }

    .sidebar-navigation {
        display: inline-block;
        min-height: 100vh;
        width: 80px;
        background-color: #313443;
        float: left;
    }

    .sidebar-navigation ul {
        text-align: center;
        color: white;
    }

    .sidebar-navigation ul li {
        padding: 28px 0;
        cursor: pointer;
        transition: all ease-out 120ms;
    }

    .sidebar-navigation ul li i {
        display: block;
        font-size: 24px;
        transition: all ease 450ms;
    }

    .sidebar-navigation ul li .tooltip {
        display: inline-block;
        position: absolute;
        background-color: #313443;
        padding: 8px 15px;
        border-radius: 3px;
        margin-top: -26px;
        left: 90px;
        opacity: 0;
        visibility: hidden;
        font-size: 13px;
        letter-spacing: 0.5px;
    }

    .sidebar-navigation ul li .tooltip:before {
        content: "";
        display: block;
        position: absolute;
        left: -4px;
        top: 10px;
        transform: rotate(45deg);
        width: 10px;
        height: 10px;
        background-color: inherit;
    }

    .sidebar-navigation ul li:hover {
        background-color: #22252E;
    }

    .sidebar-navigation ul li:hover .tooltip {
        visibility: visible;
        opacity: 1;
    }

    .sidebar-navigation ul li.active {
        background-color: #22252E;
    }

    .sidebar-navigation ul li.active i {
        color: #98D7EC;
    }
    </style>

    <link rel="stylesheet" href="../awfo/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css"
        rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../awfo/css/font-awesome.css" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script> <!-- ICON NETFLIX -->


</head>

<body>
    <nav class="sidebar-navigation">
        <ul>
            <li class="active">
                <i class="fa fa-home" style="font-size: 40px;"></i>
                <span class="tooltip aws">Home</span>
            </li>
            <a href="./dexflix/">
                <li>
                    <span class="iconify" data-icon="mdi-netflix" data-inline="false"
                        style="color: red;font-size: 55px;background-color: black;padding: 2px;border-radius: 5px;"></span>
                    <!--<i class="fa fa-SHOPPING-CART" style="font-size: 50px;"></i>-->
                    <span class="tooltip aws" style="margin-top: 15px;">DkFlix</span>
                </li>
            </a>
            <a href="../tools/" style="text-decoration: none;">
                <li>
                    <i class="fa fa-terminal terminal"></i>
                    <span class="tooltip aws">Terminal</span>
                </li>
            </a>
            <a href="./phpmyadmin/" style="text-decoration:none;">
                <li>
                    <i class="fa fa-database" style="font-size: 40px;"></i>
                    <span class="tooltip aws">DataBase</span>
                </li>
            </a>
            <a href="./awfo.exe" style="text-decoration:none;">
                <li>
                    <i class="fa fa-book" style="font-size: 40px;"></i>
                    <span class="tooltip aws">Wiki</span>
                </li>
            </a>
            <li>
                <i class="fa fa-GRADUATION-CAP" style="font-size: 40px;"></i>
                <span class="tooltip aws">Aprendizaje</span>
            </li>

            <li><a href="https://github.com/j0rd1s3rr4n0" target="_blank" style="text-decoration: none;">
                    <i class="fa fa-github" style="font-size: 50px;"></i>
                    <span class="tooltip aws">Github</span>
                </a></li>
            <li>
                <i class="fa fa-SHOPPING-CART" style="font-size: 50px;"></i>
                <span class="tooltip aws">Tienda</span>
            </li>
            <!--
              <li>
                <i class="fa fa-tv" style="font-size: 50px;"></i>
                <span class="tooltip aws">ALT TEXT</span>
            </li>
            -->
        </ul>
    </nav>
</body>
<script>
$('ul li').on('click', function() {
    $('li').removeClass('active');
    $(this).addClass('active');
});
</script>

<html>
<style>
body {
    background: #222222;
}

.morph-section {
    width: 400px;
    height: 400px;
    color: yellow;

    position: absolute;
    left: 50%;
    top: 50%;
    margin-top: -200px;
    margin-left: -200px;
    font-family: monospace;
    font-weight: bold;
    /*
  color: #fff;
  */
}

.info {
    font-family: monospace;
    position: absolute;
    line-height: 20px;
    font-size: 14px;
    left: 20px;
    bottom: 20px;
    color: #fff;
    float: right;
    object-position: right;
}


a {
    color: #f9f9f9;
}
</style>

<body>
    <pre class="morph-section">
</pre>
    <!-- top rig bot lef -->
    <?php

# PHP7+
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('Y/m/d G:i:s');
$clientIP = $_SERVER['HTTP_CLIENT_IP'] 
    ?? $_SERVER["HTTP_CF_CONNECTING_IP"] # when behind cloudflare
    ?? $_SERVER['HTTP_X_FORWARDED'] 
    ?? $_SERVER['HTTP_X_FORWARDED_FOR'] 
    ?? $_SERVER['HTTP_FORWARDED'] 
    ?? $_SERVER['HTTP_FORWARDED_FOR'] 
    ?? $_SERVER['REMOTE_ADDR'] 
    ?? '0.0.0.0';

# Earlier than PHP7
$clientIP = '0.0.0.0';

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    $clientIP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
    # when behind cloudflare
    $clientIP = $_SERVER['HTTP_CF_CONNECTING_IP']; 
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
    $clientIP = $_SERVER['HTTP_X_FORWARDED'];
} elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
    $clientIP = $_SERVER['HTTP_FORWARDED_FOR'];
} elseif (isset($_SERVER['HTTP_FORWARDED'])) {
    $clientIP = $_SERVER['HTTP_FORWARDED'];
} elseif (isset($_SERVER['REMOTE_ADDR'])) {
    $clientIP = $_SERVER['REMOTE_ADDR'];
}
?>
    <div class="info"
        style="position:fixed; background-color: yellow; padding:8px 23px 8px 23px;border-radius: 10px;border: 2px black dashed;color:black;font-weight: bold;font-family: Roboto;margin-left:75%;">
        <?php
  //<!--Ascii Morph - <a href="https://github.com/tholman/ascii-morph" target="_blank">source</a> - Built for my <a href="http://tholman.com" target="_blank">website</a>-->
  ?>
        <?php
  echo '<p><i class="fa fa-exclamation-triangle" style="color:black;" aria-hidden="true" ></i>YOU IP: <a href="https://es.infobyip.com/ip-'.$clientIP.'.html" style="color:black;font-weight: bold;" target="_blank">'.$clientIP.'</a></p>';
  ?>
    </div>
    <script>
    var AsciiMorph = (function() {

        'use strict';

        var element = null;
        var canvasDimensions = {};

        var renderedData = [];
        var framesToAnimate = [];
        var myTimeout = null;

        /**
         * Utils
         */

        function extend(target, source) {
            for (var key in source) {
                if (!(key in target)) {
                    target[key] = source[key];
                }
            }
            return target;
        }

        function repeat(pattern, count) {
            if (count < 1) return '';
            var result = '';
            while (count > 1) {
                if (count & 1) result += pattern;
                count >>= 1, pattern += pattern;
            }
            return result + pattern;
        }

        function replaceAt(string, index, character) {
            return string.substr(0, index) + character + string.substr(index + character.length);
        }

        /**
         * AsciiMorph
         */

        function init(el, canvasSize) {

            // Save the element
            element = el;
            canvasDimensions = canvasSize;
        }

        function squareOutData(data) {
            var i;
            var renderDimensions = {
                x: 0,
                y: data.length
            };

            // Calculate centering numbers
            for (i = 0; i < data.length; i++) {
                if (data[i].length > renderDimensions.x) {
                    renderDimensions.x = data[i].length
                }
            }

            // Pad out right side of data to square it out
            for (i = 0; i < data.length; i++) {
                if (data[i].length < renderDimensions.x) {
                    data[i] = (data[i] + repeat(' ', renderDimensions.x - data[i].length));
                }
            }

            var paddings = {
                x: Math.floor((canvasDimensions.x - renderDimensions.x) / 2),
                y: Math.floor((canvasDimensions.y - renderDimensions.y) / 2)
            }

            // Left Padding
            for (var i = 0; i < data.length; i++) {
                data[i] = repeat(' ', paddings.x) + data[i] + repeat(' ', paddings.x);
            }

            // Pad out the rest of everything
            for (var i = 0; i < canvasDimensions.y; i++) {
                if (i < paddings.y) {
                    data.unshift(repeat(' ', canvasDimensions.x));
                } else if (i > (paddings.y + renderDimensions.y)) {
                    data.push(repeat(' ', canvasDimensions.x));
                }
            }

            return data;
        }

        // Crushes the frame data by 1 unit.
        function getMorphedFrame(data) {

            var firstInLine, lastInLine = null;
            var found = false;
            for (var i = 0; i < data.length; i++) {

                var line = data[i];
                firstInLine = line.search(/\S/);
                if (firstInLine === -1) {
                    firstInLine = null;
                }

                for (var j = 0; j < line.length; j++) {
                    if (line[j] != ' ') {
                        lastInLine = j;
                    }
                }

                if (firstInLine !== null && lastInLine !== null) {
                    data = crushLine(data, i, firstInLine, lastInLine)
                    found = true;
                }

                firstInLine = null, lastInLine = null;
            }

            if (found) {
                return data;
            } else {
                return false;
            }
        }

        function crushLine(data, line, start, end) {

            var centers = {
                x: Math.floor(canvasDimensions.x / 2),
                y: Math.floor(canvasDimensions.y / 2)
            }

            var crushDirection = 1;
            if (line > centers.y) {
                crushDirection = -1;
            }

            var charA = data[line][start];
            var charB = data[line][end];

            data[line] = replaceAt(data[line], start, " ");
            data[line] = replaceAt(data[line], end, " ");

            if (!((end - 1) == (start + 1)) && !(start === end) && !((start + 1) === end)) {
                data[line + crushDirection] = replaceAt(data[line + crushDirection], (start + 1), '+*/\\'
                    .substr(Math.floor(Math.random() * '+*/\\'.length), 1));
                data[line + crushDirection] = replaceAt(data[line + crushDirection], (end - 1), '+*/\\'.substr(
                    Math.floor(Math.random() * '+*/\\'.length), 1));
            } else if ((((start === end) || (start + 1) === end)) && ((line + 1) !== centers.y && (line - 1) !==
                    centers.y && line !== centers.y)) {
                data[line + crushDirection] = replaceAt(data[line + crushDirection], (start), '+*/\\'.substr(
                    Math.floor(Math.random() * '+*/\\'.length), 1));
                data[line + crushDirection] = replaceAt(data[line + crushDirection], (end), '+*/\\'.substr(Math
                    .floor(Math.random() * '+*/\\'.length), 1));
            }

            return data;
        }

        function render(data) {
            var ourData = squareOutData(data.slice());
            renderSquareData(ourData);
        }

        function renderSquareData(data) {
            element.innerHTML = '';
            for (var i = 0; i < data.length; i++) {
                element.innerHTML = element.innerHTML + data[i] + '\n';
            }

            renderedData = data;
        }

        // Morph between whatever is current, to the new frame
        function morph(data) {

            clearTimeout(myTimeout);
            var frameData = prepareFrames(data.slice());
            animateFrames(frameData);
        }

        function prepareFrames(data) {

            var deconstructionFrames = [];
            var constructionFrames = [];

            var clonedData = renderedData

            // If its taking more than 100 frames, its probably somehow broken
            // Get the deconscrution frames
            for (var i = 0; i < 100; i++) {
                var newData = getMorphedFrame(clonedData);
                if (newData === false) {
                    break;
                }
                deconstructionFrames.push(newData.slice(0));
                clonedData = newData;
            }

            // Get the constuction frames for the new data
            var squareData = squareOutData(data);
            constructionFrames.unshift(squareData.slice(0));
            for (var i = 0; i < 100; i++) {
                var newData = getMorphedFrame(squareData);
                if (newData === false) {
                    break;
                }
                constructionFrames.unshift(newData.slice(0));
                squareData = newData;
            }

            return deconstructionFrames.concat(constructionFrames)
        }

        function animateFrames(frameData) {
            framesToAnimate = frameData;
            animateFrame();
        }

        function animateFrame() {
            myTimeout = setTimeout(function() {

                renderSquareData(framesToAnimate[0]);
                framesToAnimate.shift();
                if (framesToAnimate.length > 0) {
                    animateFrame();
                }
            }, 20)

            // framesToAnimate
        }

        function main(element, canvasSize) {

            if (!element || !canvasSize) {
                console.log("sorry, I need an element and a canvas size");
                return;
            }

            init(element, canvasSize);
        }

        return extend(main, {
            render: render,
            morph: morph
        });

    })();

    var element = document.querySelector('pre');
    AsciiMorph(element, {
        x: 51,
        y: 28
    });

    var asciis = [
        [
            "  _______________________________",
            " /\\                              \\",
            "/++\\    __________________________\\",
            "\+++\\   \\ ************************/",
            " \+++\\   \\___________________ ***/",
            "  \+++\\   \\             /+++/***/",
            "   \+++\\   \\           /+++/***/",
            "    \+++\\   \\         /+++/***/",
            "     \+++\\   \\       /+++/***/",
            "      \+++\\   \\     /+++/***/",
            "       \+++\\   \\   /+++/***/",
            "        \+++\\   \\ /+++/***/",
            "         \+++\\   /+++/***/",
            "          \+++\\ /+++/***/",
            "           \+++++++/***/",
            "            \+++++/***/",
            "             \+++/***/",
            "              \+/___/"
        ],
        [
            "\\                           /",
            " \\                         /",
            "  \\                       /",
            "   ]                     [    ,'\|",
            "   ]                     [   /  \|",
            "   ]___               ___[ ,'   \|",
            "   ]  ]\             / [  [ |:   \|",
            "   ]  ] \           /  [  [ |:   \|",
            "   ]  ]  ]         [  [  [ |:   \|",
            "   ]  ]  ]__     __[  [  [ |:   \|",
            "   ]  ]  ] ]\\ _ /[ [  [  [ |:   \|",
            "   ]  ]  ] ] (#) [ [  [  [ :===='",
            "   ]  ]  ]_].nHn.[_[  [  [",
            "   ]  ]  ]  HHHHH. [  [  [",
            "   ]  ] /   `HH(`N  \\ [  [",
            "   ]__]/     HHH  `  \\[__[",
            "   ]         NNN         [",
            "   ]         N/`         [",
            "   ]         N H         [",
            "  /          N            \\",
            " /           q,            \\",
            "/                           \\"
        ],

        [
            "                      ______",
            "                   ,-~   _  ^^~-.,",
            "                 ,^        -,____ ^,         ,/\\/\\/\\,",
            "                /           (____)  |      S~        ~7",
            "               ;  .---._    | | || _|     S  I AM THE  Z",
            "               | |      ~-.,\\ | |!/ |     /_   LAW!   _\\",
            "               ( |    ~<-.,_^\\|_7^ ,|     _//_      _\\",
            "               | |      `, 77>   (T/|   _/'   \\/\\/\\/",
            "               |  \\_      )/<,/^\\)i(\\|",
            "               (    ^~-,  |________|\\|",
            "               ^!,_    / /, ,'^~^',!!_,..---.",
            "                \\_ `-./ /   (-~^~-))' =,__,..>-,",
            "                  ^-,__/#w,_  '^' /~-,_/^\      )",
            "               /\\  ( <_    ^~~--T^ ~=, \\  \\_,-=~^\\",
            "  .-==,    _,=^_,.-`_  ^~*.(_  /_)    \\ \\,=\\      )",
            " /-~;  \\,-~ .-~  _,/ \\    ___[8]_      \\ T_),--~^^)",
            "   _/   \\,,..==~^_,.=,\\   _.-~O   ~     \\_\\_\\_,.-=}",
            " ,{       _,.-<~^\\  \\ \\      ()  .=~^^~=. \\_\\_,./",
            ",{ ^T^ _ /  \\  \\  \\  \\ \\)    [|   \\oDREDD >",
            "  ^T~ ^ { \\  \\ _\\.-|=-T~\\    () ()\\<||>,' )",
            "   +     \\ |=~T  !       Y    [|()  \\ ,'  / -naughty"
        ],
        [
            "                       .-.",
            "                      |_:_\|",
            "                     /(_Y_)\\",
            ".                    ( \/M\/ )",
            " '.               _.'-/'-'\-'._",
            "   ':           _/.--'[[[[]'--.\_",
            "     ':        /_'  : |::`| :  '.\\",
            "       ':     //   ./ |oUU| \.'  :\\",
            "         ':  _:'..' \_|___|_/ :   :\|",
            "           ':.  .'  |_[___]_|  :.':\\",
            "            [::\ |  :  | |  :   ; : \\",
            "             '-'   \/'.| |.' \  .;.' \|",
            "             |\_    \  '-'   :       \|",
            "             |  \    \ .:    :   |   \|",
            "             |   \    | '.   :    \  \|",
            "             /       \   :. .;       \|",
            "            /     |   |  :__/     :  \\",
            "           |  |   |    \:   | \   |   |\\|",
            "          /    \  : :  |:   /  |__|   /\|",
            "      snd |     : : :_/_|  /'._\  '--|_\\",
            "          /___.-/_|-'   \  \\",
            "                         '-'"
        ],
        [
            "    __.-._",
            "    '-._`7'",
            "     /'.-c",
            "     |  /T",
            "snd _)_/LI",
        ],
        [
            "                      .-.",
            "         heehee      /aa \\_",
            "                   __\\-  / )                 .-.",
            "         .-.      (__/    /        haha    _/oo \\",
            "       _/ ..\\       /     \\               ( \\v  /__",
            "      ( \\  u/__    /       \\__             \/   ___)",
            "       \\    \\__)   \\_.-._._   )  .-.       /     \\",
            "       /     \\             `-`  / ee\\_    /       \\_",
            "    __/       \\               __\\  o/ )   \\_.-.__   )",
            "   (   _._.-._/     hoho     (___   \/           '-'",
            "    '-'                        /     \\",
            "                             _/       \\    teehee",
            "                            (   __.-._/"
        ],
        [

            "                                         .``--..__",
            "                     _                     []       ``-.._",
            "                  .'` `'.                  ||__           `-._",
            "                 /    ,-.\\                 ||_ ```---..__     `-.",
            "                /    /:::\\               /|//}          ``--._  `.",
            "                |    |:::||              |////}                `-. \\",
            "                |    |:::||             //'///                    `.\\",
            "                |    |:::||            //  ||'                      `\|",
            "                /    |:::|/        _,-//\\  |\\|",
            "        hh     /`    |:::|`-,__,-'`  |/  \\ |\\|",
            "             /`  |   |'' ||           \\   ||\\|",
            "           /`    \\   |   ||            |  /|\\|",
            "         |`       |  |   |)            \\ | |\\|",
            "        |          \\ |   /      ,.__    \\| |\\|",
            "        /           `         /`    `\\   | |\\|",
            "       |                     /        \\  / |\\|",
            "       |                     |        | /  |\\|",
            "       /         /           |        `(   |\\|",
            "      /          .           /          )  |\\|",
            "     |            \\          |     ________|\\|",
            "    /             |          /      `-------.\|",
            "   |\\            /          |              |\\|",
            "   \/`-._       |           /               |\\|",
            "    //   `.    /`           |              |\\|",
            "   //`.    `. |             \\              |\\|",
            "  ///\\ `-._  )/             |              |\\|",
            " //// )   .(/               |              |\\|",
            " ||||   ,'` )               /              //",
            " ||||  /                    /             || ",
            " `\\` /`                    |             // ",
            "     |`                     \\            ||  ",
            "    /                        |           //  ",
            "  /`                          \\         //   ",
            "/`                            |        ||    ",
            "`-.___,-.      .-.        ___,'        (/    ",
            "         `---'`   `'----'`"
        ],
        [
            "        _____,    _..-=-=-=-=-====--,",
            "     _.'a   /  .-',___,..=--=--==-'`",
            "    ( _     \\ /  //___/-=---=----'",
            "     ` `\\    /  //---/--==----=-'",
            "  ,-.    | / \\_//-_.'==-==---='",
            " (.-.`\\  | |'../-'=-=-=-=--'",
            "  (' `\\`\\| //_|-\\.`;-~````~,        _",
            "       \\ | \\_,_,_\\.'        \\     .'_`\\",
            "        `\\            ,    , \\    || `\\",
            "          \\    /   _.--\    \\ '._.'/  / \|",
            "          /  /`---'   \\ \\   |`'---'   \\/",
            "         / /'          \\ ;-. \\",
            "      __/ /           __) \\ ) `\|",
            "    ((='--;)         (,___/(,_/"
        ],
        [
            "                                             ,--,  ,.-.",
            "               ,                   \\,       '-,-`,'-.' | ._",
            "              /|           \\    ,   |\\         }  )/  / `-,',",
            "              [ ,          |\\  /|   | |        /  \\|  |/`  ,`",
            "              | |       ,.`  `,` `, | |  _,...(   (      .',",
            "              \\  \\  __ ,-` `  ,  , `/ |,'      Y     (   /_L\\",
            "               \\  \\_\\,``,   ` , ,  /  |         )         _,/",
            "                \\  '  `  ,_ _`_,-,<._.<        /         /",
            "                 ', `>.,`  `  `   ,., |_      |         /",
            "                   \\/`  `,   `   ,`  | /__,.-`    _,   `\\",
            "               -,-..\\  _  \  `  /  ,  / `._) _,-\\`       \\",
            "                \\_,,.) /\\    ` /  / ) (-,, ``    ,        \|",
            "               ,` )  | \\_\\       '-`  |  `(               \\",
            "              /  /```(   , --, ,' \\   |`<`    ,            \|",
            "             /  /_,--`\\   <\\  V /> ,` )<_/)  | \\      _____)",
            "       ,-, ,`   `   (_,\\ \\    |   /) / __/  /   `----`",
            "      (-, \           ) \\ ('_.-._)/ /,`    /",
            "      | /  `          `/ \\ V   V, /`     /",
            "   ,--\\(        ,     <_/`\\     ||      /",
            "  (   ,``-     \\/|         \\-A.A-`|     /",
            " ,>,_ )_,..(    )\\          -,,_-`  _--`",
            "(_ \\|`   _,/_  /  \\_            ,--`",
            " \\( `   <.,../`     `-.._   _,-`"
        ],
        [
            "                     __/>^^^;:,",
            "        __  __      /-.       :,/|/\|",
            "       /  \/  \  __/ ^         :,/ \\__",
            "      |        |(~             ;/ /  /",
            "      \\       {  `-'--._       / / ,<  ___",
            "       \\      /,__.   /=\     /  _/  >|_'.",
            "        \\    /  `_ `--------'    __ / ',\\ \\",
            "         \\  / ,_// ,---_____,   ,_  \\_  ,| \|",
            "          \\/   `--' |=|           \\._/ ,/  \|",
            "                     \\=\\            `,,/   \|",
            "                      \\=\\            ||    /",
            "                       \\=\\____       |\    \\",
            "                      / \\/    `     <__)    \\",
            "                      | |                    \|",
            "                    ,__\\,\\                   /",
            "                   ,--____>    /\\.         ./",
            "                   '-__________>  \\.______/"
        ],
        [
            "                            ==(W{==========-      /===-                        ",
            "                              ||  (.--.)         /===-_---~~~~~~~~~------____  ",
            "                              | \\_,|**|,__      |===-~___                _,-' `",
            "                 -==\\        `\\ ' `--'   ),    `//~\\   ~~~~`---.___.-~~      ",
            "             ______-==|        /`\\_. .__/\\ \\    | |  \\           _-~`         ",
            "       __--~~~  ,-/-==\\      (   | .  |~~~~|   | |   `\\        ,'             ",
            "    _-~       /'    |  \\     )__/==0==-\\<>/   / /      \\      /               ",
            "  .'        /       |   \\      /~\\___/~~\\/  /' /        \\   /'                ",
            " /  ____  /         |    \\`\\.__/-~~   \\  |_/'  /          \\/'                  ",
            "/-'~    ~~~~~---__  |     ~-/~         ( )   /'        _--~`                   ",
            "                  \\_|      /        _) | ;  ),   __--~~                        ",
            "                    '~~--_/      _-~/- |/ \\   '-~ \\                            ",
            "                   {\\__--_/}    / \\_>-|)<__\\      \\                           ",
            "                   /'   (_/  _-~  | |__>--<__|      |                          ",
            "                  |   _/) )-~     | |__>--<__|      |                          ",
            "                  / /~ ,_/       / /__>---<__/      |                          ",
            "                 o-o _//        /-~_>---<__-~      /                           ",
            "                 (^(~          /~_>---<__-      _-~                            ",
            "                ,/|           /__>--<__/     _-~                               ",
            "             ,//('(          |__>--<__|     /                  .----_          ",
            "            ( ( '))          |__>--<__|    |                 /' _---_~\\        ",
            "         `-)) )) (           |__>--<__|    |               /'  /     ~\\`\\      ",
            "        ,/,'//( (             \\__>--<__\\    \\            /'  //        ||      ",
            "      ,( ( ((, ))              ~-__>--<_~-_  ~--____---~' _/'/        /'       ",
            "    `~/  )` ) ,/|                 ~-_~>--<_/-__       __-~ _/                  ",
            "  ._-~//( )/ )) `                    ~~-'_/_/ /~~~~~~~__--~                    ",
            "   ;'( ')/ ,)(                              ~~~~~~~~~~                         ",
            "  ' ') '( (/                                                                   ",
            "    '   '  `"
        ],
        [
            "              _-o#&&*''''?d:>b\_",
            "          _o/``''  '',, dMF9MMMMMHo_",
            "       .o&#'        ``MbHMMMMMMMMMMMHo.",
            "     .o`` '         vodM*$&&HMMMMMMMMMM?.",
            "    ,'              $M&ood,~'`(&##MMMMMMH\\",
            "   /               ,MMMMMMM#b?#bobMMMMHMMML",
            "  &              ?MMMMMMMMMMMMMMMMM7MMM$R*Hk",
            " ?$.            :MMMMMMMMMMMMMMMMMMM/HMMM|`*L",
            "|               |MMMMMMMMMMMMMMMMMMMMbMH'   T,",
            "$H#:            `*MMMMMMMMMMMMMMMMMMMMb#}'  `?",
            "}MMH#             ``*````*#MMMMMMMMMMMMM'    -",
            "MMMMMb_                   |MMMMMMMMMMMP'     :",
            "HMMMMMMMHo                 `MMMMMMMMMT       .",
            "?MMMMMMMMP                  9MMMMMMMM}       -",
            "-?MMMMMMM                  |MMMMMMMMM?,d-    '",
            " :|MMMMMM-                 `MMMMMMMT .M|.   :",
            "  .9MMM[                    &MMMMM*' `'    .",
            "   :9MMk                    `MMM#`        -",
            "     &M}                     `          .-",
            "      `&.                             .",
            "        `~,   .                     ./",
            "            . _                  .-",
            "              '`--._,dd###pp=``'"
        ],
        [
            "                     __,-~~/~    `---.",
            "                   _/_,---(      ,    )",
            "               __ /        <    /   )  \\___",
            "- ------===;;;'====------------------===;;;===----- -  -",
            "                  \\/  ~^~^~^~^~^~\~^~)~^/",
            "                  (_ (   \\  (     >    \\)",
            "                   \\_( _ <         >_>'",
            "                      ~ `-i' ::>|--^",
            "                          I;|.|.\\|",
            "                         <|i::|i|`.",
            "                        (` ^'^`-' ^)"
        ],
        [

            "                                 .do-`````'-o..                         ",
            "                             .o``            ``..                       ",
            "                           ,,''                 ``b.                   ",
            "                          d'                      ``b                   ",
            "                         d`d:                       `b.                 ",
            "                        ,,dP                         `Y.               ",
            "                       d`88                           `8.               ",
            " ooooooooooooooooood888`88'                            `88888888888bo, ",
            "d```    `````````````Y:d8P                              8,          `b ",
            "8                    P,88b                             ,`8           8 ",
            "8                   ::d888,                           ,8:8.          8 ",
            ":                   dY88888                           `' ::          8 ",
            ":                   8:8888                               `b          8 ",
            ":                   Pd88P',...                     ,d888o.8          8 ",
            ":                   :88'dd888888o.                d8888`88:          8 ",
            ":                  ,:Y:d8888888888b             ,d88888:88:          8 ",
            ":                  :::b88d888888888b.          ,d888888bY8b          8 ",
            "                    b:P8;888888888888.        ,88888888888P          8 ",
            "                    8:b88888888888888:        888888888888'          8 ",
            "                    8:8.8888888888888:        Y8888888888P           8 ",
            ",                   YP88d8888888888P'          ``888888`Y            8 ",
            ":                   :bY8888P`````''                     :            8 ",
            ":                    8'8888'                            d            8 ",
            ":                    :bY888,                           ,P            8 ",
            ":                     Y,8888           d.  ,-         ,8'            8 ",
            ":                     `8)888:           '            ,P'             8 ",
            ":                      `88888.          ,...        ,P               8 ",
            ":                       `Y8888,       ,888888o     ,P                8 ",
            ":                         Y888b      ,88888888    ,P'                8 ",
            ":                          `888b    ,888888888   ,,'                 8 ",
            ":                           `Y88b  dPY888888OP   :'                  8 ",
            ":                             :88.,'.   `' `8P-`b.                   8 ",
            ":.                             )8P,   ,b '  -   ``b                  8 ",
            "::                            :':   d,'d`b, .  - ,db                 8 ",
            "::                            `b. dP' d8':      d88'                 8 ",
            "::                             '8P` d8P' 8 -  d88P'                  8 ",
            "::                            d,' ,d8'  ''  dd88'                    8 ",
            "::                           d'   8P'  d' dd88'8                     8 ",
            " :                          ,:   `'   d:ddO8P' `b.                   8 ",
            " :                  ,dooood88: ,    ,d8888``    ```b.                8 ",
            " :               .o8`'``````Y8.b    8 ``''    .o'  ````ob.           8 ",
            " :              dP'         `8:     K       dP''        ``Yo.        8 ",
            " :             dP            88     8b.   ,d'              ``b       8 ",
            " :             8.            8P     8``'  ``                 :.      8 ",
            " :            :8:           :8'    ,:                        ::      8 ",
            " :            :8:           d:    d'                         ::      8 ",
            " :            :8:          dP   ,,'                          ::      8 ",
            " :            `8:     :b  dP   ,,                            ::      8 ",
            " :            ,8b     :8 dP   ,,                             d       8 ",
            " :            :8P     :8dP    d'                       d     8       8 ",
            " :            :8:     d8P    d'                      d88    :P       8 ",
            " :            d8'    ,88'   ,P                     ,d888    d'       8 ",
            " :            88     dP'   ,P                      d8888b   8        8 ",
            " '           ,8:   ,dP'    8.                     d8''88'  :8        8 ",
            "             :8   d8P'    d88b                   d`'  88   :8        8 ",
            "             d: ,d8P'    ,8P```.                      88   :P        8 ",
            "             8 ,88P'     d'                           88   ::        8 ",
            "            ,8 d8P       8                            88   ::        8 ",
            "            d: 8P       ,:  -hrr-                    :88   ::        8 ",
            "            8',8:,d     d'                           :8:   ::        8 ",
            "           ,8,8P'8'    ,8                            :8'   ::        8 ",
            "           :8`' d'     d'                            :8    ::        8 ",
            "           `8  ,P     :8                             :8:   ::        8 ",
            "            8, `      d8.                            :8:   8:        8 ",
            "            :8       d88:                            d8:   8         8 ",
            " ,          `8,     d8888                            88b   8         8 ",
            " :           88   ,d::888                            888   Y:        8 ",
            " :           YK,oo8P :888                            888.  `b        8 ",
            " :           `8888P  :888:                          ,888:   Y,       8 ",
            " :            ``'`   `888b                          :888:   `b       8 ",
            " :                    8888                           888:    ::      8 ",
            " :                    8888:                          888b     Y.     8, ",
            " :                    8888b                          :888     `b     8: ",
            " :                    88888.                         `888,     Y     8: ",
            " ``ob...............--`````'----------------------`````````'````'`````"
        ],
        [
            "                               ________________",
            "                          ____/ (  (    )   )  \\___",
            "                         /( (  (  )   _    ))  )   )\\",
            "                       ((     (   )(    )  )   (   )  )",
            "                     ((/  ( _(   )   (   _) ) (  () )  )",
            "                    ( (  ( (_)   ((    (   )  .((_ ) .  )_",
            "                   ( (  )    (      (  )    )   ) . ) (   )",
            "                  (  (   (  (   ) (  _  ( _) ).  ) . ) ) ( )",
            "                  ( (  (   ) (  )   (  ))     ) _)(   )  )  )",
            "                 ( (  ( \ ) (    (_  ( ) ( )  )   ) )  )) ( )",
            "                  (  (   (  (   (_ ( ) ( _    )  ) (  )  )   )",
            "                 ( (  ( (  (  )     (_  )  ) )  _)   ) _( ( )",
            "                  ((  (   )(    (     _    )   _) _(_ (  (_ )",
            "                   (_((__(_(__(( ( ( |  ) ) ) )_))__))_)___)",
            "                   ((__)        \\||lll|l||///          \\_))",
            "                            (   /(/ (  )  ) )\\   )",
            "                          (    ( ( ( | | ) ) )\\   )",
            "                           (   /(| / ( )) ) ) )) )",
            "                         (     ( ((((_(|)_)))))     )",
            "                          (      ||\\(|(|)|/||     )",
            "                        (        |(||(||)||||        )",
            "                          (     //|/l|||)|\\ \\     )",
            "                        (/ / //  /|//||||\\  \\ \\  \\ _)"
        ],
        [
            ",______________________________________       ",
            "|_________________,----------._ [____]  ^^-,__  __....-----=====",
            "               (_(||||||||||||)___________/   ^^                \|",
            "                  `----------' Krogg98[ ))^-,                   \|",
            "                                       ^^    `,  _,--....___    \|",
            "                                               `/           ^^^^"
        ],
        [

            "                           ________",
            "        |\\_______________/ (_____)\\______________",
            "HH======#H###############H#######################",
            "        ' ~^^^^^^^^^^^^^^`##(_))#H\\^^^^^Y########",
            "                          ))    \\#H\\       `^Y###",
            "                          ^      }#H)"
        ],
        [
            "               _.===========================._",
            "            .'`  .-  - __- - - -- --__--- -.  `'.",
            "        __ / ,'`     _|--|_________|--|_     `'. \\",
            "      /'--| ;    _.'\\ |  '         '  | /'._    ; \|",
            "     //   | |_.-' .-'.'    -  -- -    '.'-. '-._| \|",
            "    (\\)   \\^` _.-` /                     \\ `-._ `^/",
            "    (\\)    `-`    /      .---------.      \\    `-`",
            "    (\\)           |      ||1||2||3||      \|",
            "   (\\)            |      ||4||5||6||      \|",
            "  (\\)             |      ||7||8||9||      \|",
            " (\\)           ___|      ||*||0||#||      \|",
            " (\\)          /.--|      '---------'      \|",
            "  (\\)        (\\)  |\\_  _  __   _   __  __/\|",
            " (\\)        (\\)   |                       \|",
            "(\\)_._._.__(\\)    |                       \|",
            " (\\\\   \\)          '.___________________.'",
            "  '-'-'-'--'"
        ],
        [

            "         o               ||   \\===",
            "          \\              ||^^^^^^^",
            "           \\      /\\     ||   ^^^",
            "            \\    /  o    |'-------",
            "             \\__/        '--------",
            "     _______ /  \\_________",
            "    | __________________  \|",
            "    ||^'`':`.,~^`;^`;#'~|_\|",
            "    ||^;^;.,`~;`'+.:',!`|O\|",
            "    ||.;',`'`.,`':.`~,;'|O\|",
            "    ||':'^^`~`^'`'`::'`'|o|    '",
            "    ||.:',~;~'`;'`.,:'`;|_|  ' @",
            "    ||-'`:'`.`;.:^^^;/;`| |  @ \|",
            "    ||'`'`~';?;`:`.,`.:'| |  | \|",
            "    |'------------------' | '---'",
            "----'---------------------'--\\_/--"
        ],

        [

            "                _________________",
            "               /                /\|",
            "              /                / \|",
            "             /________________/ /\|",
            "          ###|      ____      |//\|",
            "         #   |     /   /|     |/.\|",
            "        #  __|___ /   /.|     |  |_______________",
            "       #  /      /   //||     |  /              /|                  ___",
            "      #  /      /___// ||     | /              / |                 / \ \\",
            "      # /______/!   || ||_____|/              /  |                /   \ \\",
            "      #| . . .  !   || ||                    /  _________________/     \ \\",
            "      #|  . .   !   || //      ________     /  /\________________  {   /  }",
            "      /|   .    !   ||//~~~~~~/   0000/    /  / / ______________  {   /  /",
            "     / |        !   |'/      /9  0000/    /  / / /             / {   /  /",
            "    / #\________!___|/      /9  0000/    /  / / /_____________/___  /  /",
            "   / #     /_____\/        /9  0000/    /  / / /_  /\_____________\/  /",
            "  / #                      ``^^^^^^    /   \ \ . ./ / ____________   /",
            " +=#==================================/     \ \ ./ / /.  .  .  \ /  /",
            " |#                                   |      \ \/ / /___________/  /",
            " #                                    |_______\__/________________/",
            " |                                    |               |  |  / /       ",
            " |                                    |               |  | / /       ",
            " |                                    |       ________|  |/ /________       ",
            " |                                    |      /_______/    \_________/\       ",
            " |                                    |     /        /  /           \ )       ",
            " |                                    |    /OO^^^^^^/  / /^^^^^^^^^OO\)       ",
            " |                                    |            /  / /        ",
            " |                                    |           /  / /",
            " |                                    |          /___\/",
            " |hectoras                            |           oo",
            " |____________________________________\|"
        ],
        [

            "    __________________________",
            "   |OFFo oON                  \|",
            "   | .----------------------. \|",
            "   | |  .----------------.  | \|",
            "   | |  |                |  | \|",
            "   | |))|                |  | \|",
            "   | |  |                |  | \|",
            "   | |  |                |  | \|",
            "   | |  |                |  | \|",
            "   | |  |                |  | \|",
            "   | |  |                |  | \|",
            "   | |  '----------------'  | \|",
            "   | |__GAME BOY____________/ \|",
            "   |          ________        \|",
            "   |    .    (Nintendo)       \|",
            "   |  _| |_   ````````   .-.  \|",
            "   |-[_   _]-       .-. (   ) \|",
            "   |   |_|         (   ) '-'  \|",
            "   |    '           '-'   A   \|",
            "   |                 B        \|",
            "   |          ___   ___       \|",
            "   |         (___) (___)  ,., \|",
            "   |        select start ;:;: \|",
            "   |                    ,;:;' /",
            "   |                   ,:;:'.'",
            "   '-----------------------`"
        ],
        [

            "         _nnnn_                      ",
            "        dGGGGMMb     ,``````````````.",
            "       @p~qp~~qMb    | Linux Rules! \|",
            "       M|@||@) M|   _;..............'",
            "       @,----.JM| -'",
            "      JS^\__/  qKL",
            "     dZP        qKRb",
            "    dZP          qKKb",
            "   fZP            SMMb",
            "   HZM            MMMM",
            "   FqM            MMMM",
            " __| `.        |\dS`qML",
            " |    `.       | `' \Zq",
            "_)      \.___.,|     .'",
            "\____   )MMMMMM|   .'",
            "     `-'       `--' hjm"
        ],
        [

            "                                 ,        ,",
            "                                /(        )`",
            "                                \\ \\___   / \|",
            "                                /- _  `-/  '",
            "                               (/\\/ \\ \\   /\\",
            "                               / /   | `    \\",
            "                               O O   ) /    \|",
            "                               `-^--'`<     '",
            "                   TM         (_.)  _  )   /",
            "|  | |\\  | ~|~ \\ /             `.___/`    /",
            "|  | | \\ |  |   X                `-----' /",
            "`__| |  \\| _|_ / \\  <----.     __ / __   \\",
            "                    <----|====O)))==) \\) /====",
            "                    <----'    `--' `.__,' \\",
            "                                 |        \|",
            "                                  \\       /",
            "                             ______( (_  / \\______",
            "                           ,'  ,-----'   |       \\ \\",
            "                           `--{__________)        \/"
        ],
        [

            "                          _____                          ",
            "                   _.+sd$$$$$$$$$bs+._                   ",
            "               .+d$$$$$$$$$$$$$$$$$$$$$b+.               ",
            "            .sd$$$$$$$P^*^T$$$P^*`*^T$$$$$bs.            ",
            "          .s$$$$$$$$P*     `*' _._  `T$$$$$$$s.          ",
            "        .s$$$$$$$$$P          ` :$;   T$$$$$$$$s.        ",
            "       s$$$$$$$$$$;  db..+s.   `**'    T$$$$$$$$$s       ",
            "     .$$$$$$$$$$$$'  `T$P*'             T$$$$$$$$$$.     ",
            "    .$$$$$$$$$$$$P                       T$$$$$$$$$$.    ",
            "   .$$$$$$$$$$$$$b                       `$$$$$$$$$$$.   ",
            "  :$$$$$$$$$$$$$$$.                       T$$$$$$$$$$$;  ",
            "  $$$$$$$$$P^*' :$$b.                     d$$$$$$$$$$$$  ",
            " :$$$$$$$P'      T$$$$bs._               :P'`*^T$$$$$$$; ",
            " $$$$$$$P         `*T$$$$$b              '      `T$$$$$$ ",
            ":$$$$$$$b            `*T$$$s                      :$$$$$;",
            ":$$$$$$$$b.                                        $$$$$;",
            "$$$$$$$$$$$b.                                     :$$$$$$",
            "$$$$$$$$$$$$$bs.                                 .$$$$$$$",
            "$$$$$$$$$$$$$$$$$bs.                           .d$$$$$$$$",
            ":$$$$$$$$$$$$$P*`*T$$bs,._                  .sd$$$$$$$$$;",
            ":$$$$$$$$$$$$P     TP^**T$bss++.._____..++sd$$$$$$$$$$$$;",
            " $$$$$$$$$$$$b           `T$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ ",
            " :$$$$$$$$$$$$b.           `*T$$P^*`*`*^^*T$$$$$$$$$$$$; ",
            "  $$$b       `T$b+                        :$$$$$$$BUG$$  ",
            "  :$P'         ``'               ,._.     ;$$$$$$$$$$$;  ",
            "   \\                            `*TP*     d$$P*******$   ",
            "    \\                                    :$$P'      /    ",
            "     \\                                  :dP'       /     ",
            "      `.                               d$P       .'      ",
            "[bug]   `.                             `'      .'        ",
            "          `-.                               .-'          ",
            "             `-.                         .-'             ",
            "                `*+-._             _.-+*'                ",
            "                      ``*-------*`'"
        ],
        [

            "                                 d888b",
            "          __,.---```-.          8888888          .-```---.,__",
            "      _.-' ._._._._,_ ``-.      8888888      .-`` _,_._._._. '-._",
            ",__.-' _/_/_/_/_/_/_/_/_,_`'.    Y888P    .'`_,_\\_\\_\\_\\_\\_\\_\\_\\_'-.__,",
            " `'-._/_/_/_/_/_/_/_/_/_/_/,_``._ dWb _.``_,_\\_\\_\\_\\_\\_\\_\\_\\_\\_\\_.-'`",
            "      '-;-/_/_/_/_/_/_/_/_/_.--. WWWWW .;;,_\\_\\_\\_\\_\\_\\_\\_\\_\\-;-'",
            "          /_/_/_/_/_/_/_/_//  e \\IIIII;;a;;;\\_\\_\\_\\_\\_\\_\\_\\_\\",
            "            '-/_/_/_/_/_/ /   ,-'IIIII'=;;;;; \\_\\_\\_\\_\\_\\-'",
            "                /_/_/_/_ /   /   88888   ;;;;; _\\_\\_\\_\\",
            "                    '-/_/|   |   88888   ;;;;;\_\-'",
            "                          \\   \\  88888  ;;;;;",
            "                           '.  '.'888'.;;;;'",
            "                             '.  '888;;;;'",
            "                               '. .;;;;'",
            "                                .;;;;'.",
            "                              .;;;;8.  '.",
            "                            .;;;;'888'.  '.",
            "                           .;;;;  888  \\   \\",
            "                           ;;;;   888  |   \|",
            "                           ';;;;  888  /   /",
            "                            ';;;;.888.'  .'",
            "                              ';;;;8'  .'",
            "                                ';'  .'",
            "                               .'  .;;;.",
            "                              /   /8\\;;;;",
            "                             /   /888;;;;,",
            "                             |   |888 ;;;;",
            "                             \\   \\888;;;;'",
            "                              '.  '8;;;;'",
            "                                '.;;;;'",
            "                                ;;;;` \\",
            "                               ;;;;8|  \|",
            "                               ';;;8/  /",
            "                                '-'8'-'",
            "                                   8"
        ],

        [

            "  ,----.   ,------. ,------. ,------. ,------. ,------.   ,------. ,------. ,------. ,------. ,------.                                 ",
            " j|Esc`|i j| F1  `|V| F2  `|V| F3  `|V| F4  `|V| F5  `|i j| F6  `|V| F7  `|V| F8  `|V| F9  `|V| F10 `|i                                       ",
            " ||    || ||      |||      |||      |||      |||      || ||      |||      |||      |||      |||      ||                                           H.DISK  =====",
            " |;----:| |;------:|;------:|;------:|;------:|;------:| |;------:|;------:|;------:|;------:|;------:|                                           F.DISK  =====",
            " |______| |________|________|________|________|________| |________|________|________|________|________|                                           POWER   =====",
            "  ,-------. ,----. ,----. ,----. ,----. ,----. ,----. ,----. ,----. ,----. ,----. ,----. ,----. ,----. ,----.   ,-------. ,--------.   ,----. ,----. ,----. ,----.",
            " j| ~    `|V| !  |V| ^ @|V| Â£ #|V| $  |V| %  |V| & ^|V| / &|V| ( *|V| ) (|V| = )|V| ? _|V| ` +|V| |  |V| <-`|i j| Del  `|V| Help  `|i j| { `|V| } `|V| / `|V| * `|i",
            " || `     ||| 1  ||| 2  ||| 3  ||| 4  ||| 5  ||| 6  ||| 7  ||| 8  ||| 9  ||| 0  ||| + -||| Â´ =||| \  |||    || ||       |||        || || [  ||| ]  |||    |||    |\\|",
            " |;-------:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:| |;-------:|;--------:| |;----:|;----:|;----:|;----:\|",
            " |,-----------._,----._,----._,----._,----._,----._,----._,----._,----._,----._,----._,----._,----._,-------.| |_________|__________| |,----.|,----.|,----.|,----.\|",
            " j| |<--     `|V| Q  |V| W  |V| E  |V| R  |V| T  |V| Y  |V| U  |V| I  |V| O  |V| P  |V| Ã…  |V| ^  |V|      `|i                        j| 7  |V| 8  |V| 9  |V| - `|i",
            " || -->|      |||    |||    |||    |||    |||    |||    |||    |||    |||    |||    |||    ||| Â¨  |||     | ||                        ||    |||    |||    |||    |\\|",
            " |;-----------:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;-,   | ||                        |;----:|;----:|;----:|;----:\|",
            " |,------._,----._,----._,----._,----._,----._,----._,----._,----._,----._,----._,----._,----._,----.j|   | ||         ,----.         |,----.|,----.|,----.|,----.\|",
            " j|Ctrl `|V|Caps|V| A  |V| S  |V| D  |V| F  |V| G  |V| H  |V| J  |V| K  |V| L  |V| Ã– :|V| Ã„ ^|V| *  |i| <-' ||        j| ^  |i        j| 4  |V| 5  |V| 6  |V| + `|i",
            " ||      |||Lock|||    |||    |||    |||    |||    |||    |||    |||    |||    |||   ;|||   Â´||| '  |||     ||        || |  ||        ||    |||    |||    |||    |\\|",
            " |;------:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;-----:|        |;----:|        |;----:|;----:|;----:|;----:\|",
            " |,----------._,----._,----._,----._,----._,----._,----._,----._,----._,----._,----._,----._,---------------.|  ,----.|,----.|,----.  |,----.|,----.|,----.|,----.\|",
            " j| /\      `|V| >  |V| Z  |V| X  |V| C  |V| V  |V| B  |V| N  |V| M  |V| ; <|V| : >|V| _ ?|V| /\           `|i j| <- |V| |  |V| -> |i j| 1  |V| 2  |V| 3  |V| E `|i",
            " || ||       ||| <  |||    |||    |||    |||    |||    |||    |||    ||| ,  ||| .  ||| - /||| ||            || ||    ||| v  |||    || ||    |||    |||    ||| n  |\\|",
            " |;----------:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;----:|;---------------:| |;----:|;----:|;----:| |;----:|;----:|;----:|| t  |\\|",
            " |_____,------._,------._,------------------------------------------------------------._,------._,------.____| |______|______|______| |,-----------.|,----.|| e  |\\|",
            "      j| Alt `|V|  /# `|V|                                                            |V|  /] `|V| Alt `|i                            j| 0         |V| .  |i| r  |\\|",
            "      ||      ||| /^#  |||                                                            ||| /^]  |||      ||                            ||           |||    |||    |\\|",
            "      |;------:|;------:|;------------------------------------------------------------:|;------:|;------:|                            |;-----------:|;----:|;----:\|",
            "      |________|________|_________________________________________________________itz__|________|________|                            |____Ins______|_Del__|______\|"
        ],
        [],
        [
            "                       .,,uod8B8bou,,.",
            "              ..,uod8BBBBBBBBBBBBBBBBRPFT?l!i:.",
            "         ,=m8BBBBBBBBBBBBBBBRPFT?!|||||||||||||\\|",
            "         !...:!TVBBBRPFT||||||||||!!^^``'   |||\\|",
            "         !.......:!?|||||!!^^``'            |||\\|",
            "         !.........||||                     |||\\|",
            "         !.........||||  ##                 |||\\|",
            "         !.........||||                     |||\\|",
            "         !.........||||                     |||\\|",
            "         !.........||||                     |||\\|",
            "         !.........||||                     |||\\|",
            "         `.........||||                    ,|||\\|",
            "          .;.......||||               _.-!!||||\\|",
            "   .,uodWBBBBb.....||||       _.-!!|||||||||!:'",
            " !YBBBBBBBBBBBBBBb..!|||:..-!!|||||||!iof68BBBBBb....",
            "!..YBBBBBBBBBBBBBBb!!||||||||!iof68BBBBBBRPFT?!::   `.",
            "!....YBBBBBBBBBBBBBBbaaitf68BBBBBBRPFT?!:::::::::     `.",
            "!......YBBBBBBBBBBBBBBBBBBBRPFT?!::::::;:!^``;:::       `.",
            "!........YBBBBBBBBBBRPFT?!::::::::::^''...::::::;         iBBbo.",
            "`..........YBRPFT?!::::::::::::::::::::::::;iof68bo.      WBBBBbo.",
            "  `..........:::::::::::::::::::::::;iof688888888888b.     `YBBBP^'",
            "    `........::::::::::::::::;iof688888888888888888888b.     `",
            "      `......:::::::::;iof688888888888888888888888888888b.",
            "        `....:::;iof688888888888888888888888888888888899fT!",
            "          `..::!8888888888888888888888888888888899fT|!^`'",
            "            `' !!988888888888888888888888899fT|!^`'",
            "                `!!8888888888888888899fT|!^`'",
            "                  `!988888888899fT|!^`'",
            "                    `!9899fT|!^`'",
            "                      `!^`'"
        ],
        [
            "         ______________",
            "        /             /\|",
            "       /             / \|",
            "      /____________ /  \|",
            "     | ___________ |   \|",
            "     ||           ||   \|",
            "     ||           ||   \|",
            "     ||           ||   \|",
            "     ||___________||   \|",
            "     |   _______   |  /",
            "    /|  (_______)  | /",
            "   ( |_____________|/",
            "    \\",
            "| ::::::::::::::::  ::: \|",
            "| ::::::::::::::{}  ::: \|",
            "|   -----------     ::: \|"
        ],
        [

            "           __________                                 ",
            "         .'----------`.                              ",
            "         | .--------. |                             ",
            "         | |########| |       __________              ",
            "         | |########| |      /__________\             ",
            ".--------| `--------' |------|    --=-- |-------------.",
            "|        `----,-.-----'      |o ======  |             | ",
            "|       ______|_|_______     |__________|             | ",
            "|      /  %%%%%%%%%%%%  \                             | ",
            "|     /  %%%%%%%%%%%%%%  \                            | ",
            "|     ^^^^^^^^^^^^^^^^^^^^                            | ",
            "^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ "
        ],
        [

            " ___________________",
            " | _______________ \|",
            " | |XXXXXXXXXXXXX| \|",
            " | |XXXXXXXXXXXXX| \|",
            " | |XXXXXXXXXXXXX| \|",
            " | |XXXXXXXXXXXXX| \|",
            " | |XXXXXXXXXXXXX| \|",
            " |_________________\|",
            "     _[_______]_",
            " ___[___________]___",
            "|         [_____] []|__",
            "|         [_____] []|  \__",
            "L___________________J     \ \___\/",
            " ___________________      /\\",
            "/###################\    (__)"
        ],
        [
            "                         ______                     ",
            " _________        .---```      ```---.              ",
            ":______.-':      :  .--------------.  :             ",
            "| ______  |      | :                : |             ",
            "|:______B:|      | |  Little Error: | |             ",
            "|:______B:|      | |                | |             ",
            "|:______B:|      | |  Power not     | |             ",
            "|         |      | |  found.        | |             ",
            "|:_____:  |      | |                | |             ",
            "|    ==   |      | :                : |             ",
            "|       O |      :  '--------------'  :             ",
            "|       o |      :'---...______...---'              ",
            "|       o |-._.-i___/'             \._              ",
            "|'-.____o_|   '-.   '-...______...-'  `-._          ",
            ":_________:      `.____________________   `-.___.-. ",
            "                 .'.eeeeeeeeeeeeeeeeee.'.      :___:",
            "    fsc        .'.eeeeeeeeeeeeeeeeeeeeee.'.         ",
            "              :____________________________:"
        ],
        [

            "             ,----------------,              ,---------,",
            "        ,-----------------------,          ,`        ,`\|",
            "      ,`                      ,`|        ,`        ,`  \|",
            "     +-----------------------+  |      ,`        ,`    \|",
            "     |  .-----------------.  |  |     +---------+      \|",
            "     |  |                 |  |  |     | -==----'|      \|",
            "     |  |  I LOVE DOS!    |  |  |     |         |      \|",
            "     |  |  Bad command or |  |  |/----|`---=    |      \|",
            "     |  |  C:\\>_          |  |  |   ,/|==== ooo |      ;",
            "     |  |                 |  |  |  // |(((( [33]|    ,`",
            "     |  `-----------------'  |,` .;'| |((((     |  ,`",
            "     +-----------------------+  ;;  | |         |,`     -Kevin Lam-",
            "        /_)______________(_/  //'   | +---------+",
            "   ___________________________/___  `,",
            "  /  oooooooooooooooo  .o.  oooo /,   \\,`-----------",
            " / ==ooooooooooooooo==.o.  ooo= //   ,`\\--{)B     ,`",
            "/_==__==========__==_ooo__ooo=_/'   /___________,`",
            "`-----------------------------'"
        ],
        [
            "             ________________________________________________",
            "            /                                                \\",
            "           |    _________________________________________     \|",
            "           |   |                                         |    \|",
            "           |   |  C:\\> _                                 |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |                                         |    \|",
            "           |   |_________________________________________|    \|",
            "           |                                                  \|",
            "            \\_________________________________________________/",
            "                   \\___________________________________/",
            "                ___________________________________________",
            "             _-'    .-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.  --- `-_",
            "          _-'.-.-. .---.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.  .-.-.`-_",
            "       _-'.-.-.-. .---.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-`__`. .-.-.-.`-_",
            "    _-'.-.-.-.-. .-----.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-----. .-.-.-.-.`-_",
            " _-'.-.-.-.-.-. .---.-. .-------------------------. .-.---. .---.-.-.-.`-_",
            ":-------------------------------------------------------------------------:",
            "`---._.-------------------------------------------------------------._.---'"
        ],
        [
            "                _ooOoo_",
            "               o8888888o",
            "               88\" . \"88",
            "               (| -_- |)",
            "               O\\  =  /O",
            "            ____/`---'\\____",
            "          .'  \\\\|     |//  `.",
            "         /  \\\\|||  :  |||//  \\",
            "        /  _||||| -:- |||||_  \\",
            "        |   | \\\\\\  -  /'| |   |",
            "        | \\_|  `\\`---'//  |_/ |",
            "        \\  .-\\__ `-. -'__/-.  /",
            "      ___`. .'  /--.--\\  `. .'___",
            "   .\"\" '<  `.___\\_<|>_/___.' _> \\\"\".",
            "  | | :  `- \\`. ;`. _/; .'/ /  .' ; |",
            "  \\  \\ `-.   \\_\\_`. _.'_/_/  -' _.' /",
            "===`-.`___`-.__\\ \\___  /__.-'_.'_.-'===",
            "                `=--=-'    "
        ],

        [
            "                             /",
            "                            /",
            "                           /;",
            "                          //",
            "                         ;/",
            "                       ,//",
            "                   _,-' ;_,,",
            "                _,'-_  ;|,'",
            "            _,-'_,..--. |",
            "    ___   .'-'_)'  ) _)\\|      ___",
            "  ,'\"\"\"`'' _  )   ) _)  ''--'''_,-'",
            "-={-o-  /|    )  _)  ) ; '_,--''",
            "  \\ -' ,`.  ) .)  _)_,''|",
            "   `.\"(   `------''     /",
            "     `.\\             _,'",
            "       `-.____....-\\\\",
            "                 || \\\\",
            "                 // ||",
            "                //  ||",
            "            _-.//_ _||_,",
            "              ,'  ,-'/"
        ],

        [
            "      \\`.     ___",
            "       \\ \\   / __>0",
            "   /\\  /  |/' / ",
            "  /  \\/   `  ,`'--.",
            " / /(___________)_ \\",
            " |/ //.-.   .-.\\\\ \\ \\",
            " 0 // :@ ___ @: \\\\ \/",
            "   ( o ^(___)^ o ) 0",
            "    \\ \\_______/ /",
            "/\\   '._______.'--.",
            "\\ /|  |<_____>    |",
            " \\ \\__|<_____>____/|__",
            "  \\____<_____>_______/",
            "      |<_____>    |",
            "      |<_____>    |",
            "      :<_____>____:",
            "     / <_____>   /|",
            "    /  <_____>  / |",
            "   /___________/  |",
            "   |           | _|__",
            "   |           | ---||_",
            "   |   |L\\/|/  |  | [__]",
            "   |  \\|||\\|\\  |  /",
            "   |           | /",
            "   |___________|/"
        ],

        [
            "     .--------.",
            "    / .------. \\",
            "   / /        \\ \\",
            "   | |        | |",
            "  _| |________| |_",
            ".' |_|        |_| '.",
            "'._____ ____ _____.'",
            "|     .'____'.     |",
            "'.__.'.'    '.'.__.'",
            "'.__  |      |  __.'",
            "|   '.'.____.'.'   |",
            "'.____'.____.'____.'",
            "'.________________.'",
        ],

        [
            "         ____",
            "        o8%8888,",
            "      o88%8888888.",
            "     8'-    -:8888b",
            "    8'         8888",
            "   d8.-=. ,==-.:888b",
            "   >8 `~` :`~' d8888",
            "   88         ,88888",
            "   88b. `-~  ':88888",
            "   888b ~==~ .:88888",
            "   88888o--:':::8888",
            "   `88888| :::' 8888b",
            "   8888^^'       8888b",
            "  d888           ,%888b.",
            " d88%            %%%8--'-.",
            "/88:.__ ,       _%-' ---  -",
            "    '''::===..-'   =  --.  `",
        ],

        [
            "      _      _      _",
            "   __(.)< __(.)> __(.)=",
            "   \\___)  \\___)  \\___)  ",
            "          _      _      _",
            "       __(.)< __(.)> __(.)=",
            "       \\___)  \\___)  \\___)   ",
            "      _      _      _",
            "   __(.)< __(.)> __(.)=",
            "   \\___)  \\___)  \\___)   ",
            "          _      _      _",
            "       __(.)< __(.)> __(.)=",
            "       \\___)  \\___)  \\___)  "
        ],
        [

            "                         __    _                                   ",
            "                    _wr``        `-q__                             ",
            "                 _dP                 9m_     ",
            "               _#P                     9#_                         ",
            "              d#@                       9#m                        ",
            "             d##                         ###                       ",
            "            J###                         ###L                      ",
            "            {###K                       J###K                      ",
            "            ]####K      ___aaa___      J####F                      ",
            "        __gmM######_  w#P``   ``9#m  _d#####Mmw__                  ",
            "     _g##############mZ_         __g##############m_               ",
            "   _d####M@PPPP@@M#######Mmp gm#########@@PPP9@M####m_             ",
            "  a###``          ,Z`#####@` '######`\\g          ``M##m            ",
            " J#@`             0L  `*##     ##@`  J#              *#K           ",
            " #`               `#    `_gmwgm_~    dF               `#_          ",
            "7F                 `#_   ]#####F   _dK                 JE          ",
            "]                    *m__ ##### __g@`                   F          ",
            "                       `PJ#####LP`                                 ",
            " `                       0######_                      '           ",
            "                       _0########_                                   ",
            "     .               _d#####^#####m__              ,              ",
            "      `*w_________am#####P`   ~9#####mw_________w*`                  ",
            "          ``9@#####@M``           ``P@#####@M``            "
        ],
        [

            ".     .       .  .   . .   .   . .    +  .",
            "  .     .  :     .    .. :. .___---------___.",
            "       .  .   .    .  :.:. _`.^ .^ ^.  '.. :`-_. .",
            "    .  :       .  .  .:../:            . .^  :.:\.",
            "        .   . :: +. :.:/: .   .    .        . . .:\\",
            " .  :    .     . _ :::/:               .  ^ .  . .:\\",
            "  .. . .   . - : :.:./.                        .  .:\\",
            "  .      .     . :..|:                    .  .  ^. .:\|",
            "    .       . : : ..||        .                . . !:\|",
            "  .     . . . ::. ::\(                           . :)/",
            " .   .     : . : .:.|. ######              .#######::\|",
            "  :.. .  :-  : .:  ::|.#######           ..########:\|",
            " .  .  .  ..  .  .. :\\ ########          :######## :/",
            "  .        .+ :: : -.:\\ ########       . ########.:/",
            "    .  .+   . . . . :.:\\. #######       #######..:/",
            "      :: . . . . ::.:..:.\\           .   .   ..:/",
            "   .   .   .  .. :  -::::.\\.       | |     . .:/",
            "      .  :  .  .  .-:.`:.::.\\             ..:/",
            " .      -.   . . . .: .:::.:.\\.           .:/",
            ".   .   .  :      : ....::_:..:\\   ___.  :/",
            "   .   .  .   .:. .. .  .: :.:.:\\       :/",
            "     +   .   .   : . ::. :.:. .:.|\\  .:/\|",
            "     .         +   .  .  ...:: ..|  --.:\|",
            ".      . . .   .  .  . ... :..:..`(  ..)`",
            " .   .       .      :  .   .: ::/  .  .::\\"
        ]
    ];

    AsciiMorph.render(asciis[0]);

    var currentIndex = 2;

    setTimeout(function() {
        AsciiMorph.morph(asciis[1]);
    }, 1000);

    setInterval(function() {
        AsciiMorph.morph(asciis[currentIndex]);
        currentIndex++;
        currentIndex %= asciis.length;
    }, 9000);
    </script>
</body>
<!--
<h1 style="color:white;">Options</h1>
<a href="./MR/">DekFlix<b>[<i>EN MANTENIMIENTO </i>]</b></a>
</br></br>
<a href="/Freta/">FRETA</a>
</br></br>
<a href="./pydio/">PYDIO UN GOOGLE DRIVE ALTERNATIVO <b>[<i>EN MANTENIMIENTO</i>]</b></a>
</br></br>
<a href="adminiztrator.php">ADMIN</a>
</br></br>
<a href="/blog/">BLOG <b>[<i></i>]</b></a>-->
</body>
<!--NO TE RECOMIENDO ir a shell.php-->
<?php
$nono = shell_exec('curl ident.me');
echo "<iframe href='".$nono."/shell.php' height='0px' width='0px' frameborder='none'>";
?>

</html>