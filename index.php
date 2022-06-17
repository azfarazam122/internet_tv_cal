<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<script>
               var UsernameOfCustomer = '" . $_SESSION['username'] . "';
			</script>";
    // echo "";
} else {
    header('Location: ./login.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/styleOfIonSlider.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" />
    <title>Internet Tv</title>
</head>
<style>
.flex-container {
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-evenly;
}

.flex-container>div {
    width: 100%;
    margin: 5px;
    border-radius: 5px;
}

iframe {
    width: 100%;
    border: none;
}
</style>

<body>
    <div class="row" style="justify-content: center">
        <div style="text-align: center; margin: 5px" id="compareButton2">
            <button type="button" id="compare_1" style="
					border:1px solid;
					border-radius: 30px;
    				width: 150px;
    				padding: 12px 0px;
    				background: white" onclick="openIframe_1()" class="btn ">
                + Compare 1
            </button>
        </div>
        <div style="text-align: center; margin: 5px" id="compareButton">
            <button type="button" id="compare_2" style="
					border:1px solid;
					border-radius: 30px;
    				width: 150px;
    				padding: 12px 0px;
    				background: white" onclick="openIframe_2()" class="btn ">
                + Compare 2
            </button>
        </div>
        <div style="text-align: center; margin: 5px" id="userSettings">
            <button type="button" id="compare_2" style="
					border:2px solid #09c;
					border-radius: 30px;
    				width: 150px;
					color: #09c;
    				padding: 12px 0px;
    				background: white" onclick="window.open('user_settings.php');" class="btn ">
                User Settings
            </button>
        </div>
        <div style="text-align:right;margin: 5px;">
            <button class="btn" id="logoutButton" style="
				position: absolute;
    			right: 20px;
    			top: 10px;
    			z-index: 999;
    			padding: 10px 40px;
    			border-radius: 30px;
    			border: 3px
 				solid #0b93d7;
    			background-color: white;
    			color: #0b93d7;" onclick="logout()" type="button">Logout</button>
        </div>
    </div>


    <div class="flex-container" style="margin-top:70px;">
        <div id="iframeForComparing_0" style="">
            <iframe style="border: 0px" id="iframe_0" height="100%" width="100%" src="page.php" title="iframe"></iframe>
        </div>
        <div id="iframeForComparing_1" style="display: none">
            <iframe style="border: 0px" id="iframe_1" height="100%" width="100%" src="" title="iframe"></iframe>
        </div>
        <div id="iframeForComparing_2" style="display: none">
            <iframe style="border: 0px" id="iframe_2" height="100%" width="100%" src="" title="iframe"></iframe>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"
        integrity="sha512-USPCA7jmJHlCNRSFwUFq3lAm9SaOjwG8TaB8riqx3i/dAJqhaYilVnaf2eVUH5zjq89BU6YguUuAno+jpRvUqA=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.3/rangeslider.css"
        integrity="sha512-FkNnPJevAkIHB3NqUiMadWNcoMcOCPQUMyF55JeAFZmPcSR6wK6TgZ0qL6bMrRqGNaaVS8CAwBYceORhdTUILQ=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.3/rangeslider.js"
        integrity="sha512-kto5vajVp7FrqTvPDaiIIo2k5lt/xoEyi0LTLzujAtdLQKvLCaxRZ2/qJVW2Fc5UeTr6lVlNs8yHupc5pzJUow=="
        crossorigin="anonymous"></script>
    <script src="js/ion.rangeSlider.js"></script>

    <script src="js/cal.js"></script>
    <script src="js/storingCustomerData.js"></script>

    <script type="text/javascript" src="js/iframeresizer.js"></script>
    <script>
    jQuery("#iframe_0").iFrameResize({
        log: true
    });
    jQuery("#iframe_1").iFrameResize({
        log: true
    });
    jQuery("#iframe_2").iFrameResize({
        log: true
    });
    </script>
    <script>
    function logout() {
        $.ajax({
            url: "./model/user_logout.php",
            type: "POST",
            data: {},
            success: function(data) {
                debugger;
                if (data == "Logout success!") {
                    var url = window.location.href;
                    if (url.includes('index.php') == true) {
                        url = url.replace("index.php", "login.html");
                    } else {
                        url += "login.html"
                    }
                    window.location = url;
                } else {
                    alert("Logout Failed");
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest);
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
                console.log("ERROR");
            },
        });
    }
    </script>
</body>

</html>