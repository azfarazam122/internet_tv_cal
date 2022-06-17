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
    <title>User Settings Page</title>
    <style>
    .inputB:hover {
        background: #0b93d7 !important;
        color: white !important;
        ;
    }

    .bttn:hover {
        background: #dededa !important;

    }

    @import "compass/css3";

    $button: rgba(148, 186, 101, 0.7);

    body {
        background: #384047;
        font-family: sans-serif;
        font-size: 10px
    }

    form {
        background: #fff;
        padding: 4em 4em 2em;
        max-width: 400px;
        margin: 50px auto 0;
        box-shadow: 0 0 1em #222;
        border-radius: 2px;

        h2 {
            margin: 0 0 50px 0;
            padding: 10px;
            text-align: center;
            font-size: 30px;
            color: darken(#e5e5e5, 50%);
            border-bottom: solid 1px #e5e5e5;
        }

        p {
            margin: 0 0 3em 0;
            position: relative;
        }

        input {
            display: block;
            box-sizing: border-box;
            width: 100%;
            outline: none;
            margin: 0;
        }

        input[type="text"],
        input[type="password"] {
            background: #fff;
            border: 1px solid #dbdbdb;
            font-size: 1.6em;
            padding: .8em .5em;
            border-radius: 2px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            background: #fff
        }

        span {
            display: block;
            background: #F9A5A5;
            padding: 2px 5px;
            color: #666;
        }

        input[type="submit"] {
            background: button;
            box-shadow: 0 3px 0 0 darken($button, 10%);
            border-radius: 2px;
            border: none;
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 2em;
            line-height: 1.6em;
            margin: 2em 0 0;
            outline: none;
            padding: .8em 0;
            text-shadow: 0 1px #68B25B;
        }

        input[type="submit"]:hover {
            background: rgba(148, 175, 101, 1);
            text-shadow: 0 1px 3px darken($button, 30%);
        }

        input[type="submit"]:hover {}

    }
    </style>

</head>

<body onload="runOperation()">
    <div style="text-align: right; margin: 10px">

    </div>
    <div class="container-fluid" style="width: 100%; margin-bottom: 100px">
        <div style='background:#0b93d7;'>

            <h1 style="text-align:center; color:white; padding:20px 0px;">User Settings Page</h1>
            <div style="text-align: center; margin: 5px" id="homePage">
                <button type="button" id="compare_2" style="
                    border:2px solid #09c;
                    border-radius: 30px;
                    width: 150px;
                    color: #09c;
                    padding: 12px 0px;
                    background: white" onclick="window.location='index.php';" class="btn">
                    Home Page
                </button>
            </div>

            <input type="button" class="btn bttn" id="adminLoginSubmitBtn" value="Logout" style="
                  position:absolute;
                  right:20px;
                  top:30px;
                  z-index:999;
                  padding: 10px 40px;
                  border-radius: 30px;
                  border: 3px solid #0b93d7;
                  background-color:white ;
                  color:#0b93d7;
                  " onclick="logoutAdmin()" />
        </div>
    </div>

    <!-- _____________________________________________ -->
    <h3 style="text-align: center">Change your settings here..</h3>


    <table class="table container" id='dTable' style="background-color:#dedede; margin-bottom: 40px;width:70%;">
        <thead style="text-align:center; background-color:#0b93d7; padding:20px 0px; color:white;">
            <tr>
                <th scope="col">User Fields</th>
                <th scope="col">Values</th>

                <th scope="col">User Fields</th>
                <th scope="col">Values</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            <tr style="display:none;">
                <td>
                    Id
                </td>
                <td>
                    <input id="idOfUserSetting" value="" type="text" />
                </td>

            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input id="emailOfUserSetting" style='padding:10px 10px; border:none;' value="" type="text" />
                </td>

                <td>
                    Password
                </td>
                <td>
                    <input style='padding:10px 10px; border:none;' id="passwordOfUserSetting" value="" type="text" />
                </td>
            </tr>
            <tr style=" display:none;">
                <td>
                    Name
                </td>
                <td>
                    <input style='padding:10px 10px; border:none;' id="nameOfUserSetting" value="" type="text" />
                </td>

                <td>
                    Created At
                </td>
                <td>
                    <input style='padding:10px 10px; border:none; display:none;' id="createdAtOfUserSetting" value=""
                        type="text" />
                </td>
            </tr>
            <tr style=" display:none;">
                <td>
                    Updated At
                </td>
                <td>
                    <input style='padding:10px 10px; border:none; display:none;' id="updatedAtOfUserSetting" value=""
                        type="text" />
                </td>

                <td>
                    Mailer
                </td>
                <td>
                    <input style='padding:10px 10px; border:none;  display:none;' id="mailerOfUserSetting" value=""
                        type="text" />
                </td>
            </tr>
            <tr style=" display:none;">
                <td>
                    Mail Host
                </td>
                <td>
                    <input style='padding:10px 10px; border:none;  display:none;' id="mailHostOfUserSetting" value=""
                        type="text" />
                </td>

                <td>
                    Mail Port
                </td>
                <td>
                    <input style='padding:10px 10px; border:none;' id="mailPortOfUserSetting" value="" type="text" />
                </td>
            </tr>
            <tr>
                <td>
                    Mail Username
                </td>
                <td>
                    <input style='padding:10px 10px; border:none; ' id="mailUsernameOfUserSetting" value=""
                        type="text" />
                </td>

                <td>
                    Mail Password
                </td>
                <td>
                    <input style='padding:10px 10px; border:none;' id="mailPasswordOfUserSetting" value=""
                        type="text" />
                </td>
            </tr>
            <tr style=" display:none;">
                <td>
                    Mail Encryption
                </td>
                <td>
                    <input style='padding:10px 10px; border:none;  display:none;' id="mailEncryptionOfUserSetting"
                        value="" type="text" />
                </td>

                <td>
                    Mail From Address
                </td>
                <td>
                    <input style='padding:10px 10px; border:none;  display:none;' id="mailFromAddressOfUserSetting"
                        value="" type="text" />
                </td>
            </tr>
            <tr style=" display:none;">
                <td>
                    Mail Form Name
                </td>
                <td>
                    <input style='padding:10px 10px; border:none;  display:none;' id="mailFromNameOfUserSetting"
                        value="" type="text" />
                </td>
            </tr>
        </tbody>
    </table>
    <div style="margin-bottom:40px; text-align:center">
        <input type="button" value="Update" onclick="updateButton()" style="
                  padding: 10px 40px;
                  border-radius: 30px;
                  border: 3px solid #0b93d7;
                  background-color:none !important;
                  color:#0b93d7;
                " class='btn inputB'>
    </div>
    <!-- _____________________________________________ -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"
    integrity="sha512-USPCA7jmJHlCNRSFwUFq3lAm9SaOjwG8TaB8riqx3i/dAJqhaYilVnaf2eVUH5zjq89BU6YguUuAno+jpRvUqA=="
    crossorigin="anonymous"></script>
<script>
function logoutAdmin() {
    $.ajax({
        url: './model/user_settings_logout.php',
        type: 'POST',
        data: {},
        success: function(data) {
            if (data == 'Logout success!') {
                var url = window.location.href;
                url = url.replace('user_settings.php', 'login.html');
                window.location = url;
            } else {
                alert('Logout Failed');
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
            console.log('Status: ' + textStatus);
            console.log('Error: ' + errorThrown);
            console.log('ERROR');
        },
    });
}
</script>
<script>
function runOperation() {
    $.ajax({
        url: './model/get_specific_user.php',
        type: 'POST',
        data: {
            emailOfUser: UsernameOfCustomer,
        },
        success: function(data) {
            userData = JSON.parse(data);
            document.getElementById('idOfUserSetting').value = userData[0].id;
            document.getElementById('emailOfUserSetting').value = userData[0].email;
            document.getElementById('passwordOfUserSetting').value = userData[0].password;
            document.getElementById('nameOfUserSetting').value = userData[0].name;
            document.getElementById('createdAtOfUserSetting').value = userData[0].created_at;
            document.getElementById('updatedAtOfUserSetting').value = userData[0].updated_at;
            document.getElementById('mailerOfUserSetting').value = userData[0].mailer;
            document.getElementById('mailHostOfUserSetting').value = userData[0].mail_host;
            document.getElementById('mailPortOfUserSetting').value = userData[0].mail_port;
            document.getElementById('mailUsernameOfUserSetting').value = userData[0].mail_username;
            document.getElementById('mailPasswordOfUserSetting').value = userData[0].mail_password;
            document.getElementById('mailEncryptionOfUserSetting').value = userData[0].mail_encryption;
            document.getElementById('mailFromAddressOfUserSetting').value = userData[0].mail_from_address;
            document.getElementById('mailFromNameOfUserSetting').value = userData[0].mail_from_name;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
            console.log('Status: ' + textStatus);
            console.log('Error: ' + errorThrown);
            console.log('ERROR');
        },
    });
}


function updateButton() {

    $.ajax({
        url: './model/get_user_data.php',
        type: 'GET',
        data: {},
        success: function(data) {
            allUserData = JSON.parse(data);
            let userSettingsId = document.getElementById('idOfUserSetting').value;
            let userSettingsEmail = document.getElementById('emailOfUserSetting').value;
            var userEmailFound = false;
            for (let index = 0; index < allUserData.length; index++) {
                if (userSettingsEmail == allUserData[index].email &&
                    userSettingsId != allUserData[index].id
                ) {
                    userEmailFound = true;
                    break;
                }
            }
            if (userEmailFound == false) {
                updatingUserSettings();
            } else {
                runOperation();
                alert('Plz use different Email');
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
            console.log('Status: ' + textStatus);
            console.log('Error: ' + errorThrown);
            console.log('ERROR');
        },
    });



}

function updatingUserSettings() {
    $.ajax({
        url: './model/update_user_settings.php',
        type: 'POST',
        data: {
            idOfUser: document.getElementById('idOfUserSetting').value,
            emailOfUser: document.getElementById('emailOfUserSetting').value,
            passwordOfUser: document.getElementById('passwordOfUserSetting').value,
            nameOfUser: document.getElementById('nameOfUserSetting').value,
            createdAtOfUser: document.getElementById('createdAtOfUserSetting').value,
            updatedAtOfUser: document.getElementById('updatedAtOfUserSetting').value,
            mailerOfUser: document.getElementById('mailerOfUserSetting').value,
            mailHostOfUser: document.getElementById('mailHostOfUserSetting').value,
            mailPortOfUser: document.getElementById('mailPortOfUserSetting').value,
            mailUsernameOfUser: document.getElementById('mailUsernameOfUserSetting').value,
            mailPasswordOfUser: document.getElementById('mailPasswordOfUserSetting').value,
            mailEncryptionOfUser: document.getElementById('mailEncryptionOfUserSetting').value,
            mailFromAddressOfUser: document.getElementById('mailFromAddressOfUserSetting').value,
            mailFromNameOfUser: document.getElementById('mailFromNameOfUserSetting').value,
        },

        success: function(data) {
            if (data == 'successfully Updated') {
                runOperation();
            } else {
                console.log('Not Updated');
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
            console.log('Status: ' + textStatus);
            console.log('Error: ' + errorThrown);
            console.log('ERROR');
        },
    });

}
</script>

</html>