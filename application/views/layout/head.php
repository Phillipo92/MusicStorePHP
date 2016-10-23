<head>
    <meta charset="utf-8">
    <title>Music</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script type="text/javascript" src="http://ip-geo.appspot.com/geo_data.js"></script>

    <style>
        
        body{
            padding-top:50px;
            padding-bottom: 50px;
        }

    </style>
    <script>

        
        
        function supplier_list_refresh() {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("content").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "<?php echo base_url() ?>client/supplier_list_refresh", true);
            xmlhttp.send();
        }
        
        function componenttype_list_refresh() {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("content").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "<?php echo base_url() ?>client/componenttype_list_refresh", true);
            xmlhttp.send();
        }
        
        function component_list_refresh() {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("content").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "<?php echo base_url() ?>client/component_list_refresh", true);
            xmlhttp.send();
        }
        
        function user_list_refresh() {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("content").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "<?php echo base_url() ?>client/user_list_refresh", true);
            xmlhttp.send();
        }

    </script>

    <link rel="stylesheet" href="http://localhost/iteh/bootstrap/darkly.css">
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>