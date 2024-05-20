<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Example</title>
    <script>
        var xmlHttp;

        function createXMLHttpRequest() {
            if (window.ActiveXObject) {
                xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
            } else if (window.XMLHttpRequest) {
                xmlHttp = new XMLHttpRequest();
            }
        }

        function startRequest() {
            createXMLHttpRequest();
            xmlHttp.onreadystatechange = handleStateChange;
            xmlHttp.open("GET", "hello.php", true);
            xmlHttp.send(null);
        }

        function handleStateChange() {
            if (xmlHttp.readyState == 4) {
                if (xmlHttp.status == 200) {
                    finishAjax();
                }
            }
        }

        function finishAjax() {
            var respStr = xmlHttp.responseText;
            document.getElementById("content").innerHTML = respStr;
        }
    </script>
</head>
<body>
    <div id="content"></div>
    <button onclick="startRequest()">Load Content</button>
</body>
</html>
