<?php
session_start();
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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"
        integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    .bttn:hover {
        background: #dededa !important;

    }

    #dynamicTable>thead>tr> {
        background-color: blue !important;
    }

    #dynamicTable input {
        border: 1px solid #ddddde !important;

    }


    #dynamicTable>tbody>tr>td {
        background-color: white;
    }

    #dynamicTable>tbody>tr {
        padding: 0px;
    }

    #dynamicTable>tbody>tr:nth-child(even)>td {
        background-color: #dedede;
    }

    .card {
        margin-bottom: 20px;
        border: none;
    }

    .box {
        width: 500px;
        padding: 40px;
        position: absolute;
        top: 15%;
        left: 30%;
        background: #f3f3fd;
        text-align: center;
        transition: 0.25s;
        margin-top: 100px;
        border-radius: 10px;
    }

    .box input[type="text"],
    .box input[type="password"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #0099cc;
        padding: 10px 10px;
        width: 250px;
        outline: none;
        color: black;
        border-radius: 24px;
        transition: 0.25s;
    }

    .box h1 {
        color: black;
    }

    .box input[type="text"]:focus,
    .box input[type="password"]:focus {
        width: 300px;
        border-color: #3fb718;
    }

    #adminLoginSubmitBtn {
        border: 0;
        background: none;
        display: block;

        text-align: center;
        border: 2px solid #0099cc;
        padding: 14px 40px;
        outline: none;
        width: 200px;
        color: #0099cc;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }

    #adminLoginSubmitBtn:hover {
        background: #0099cc;
        color: white;
    }

    .forgot {
        text-decoration: underline;
    }
    </style>

    <title>Admin Login</title>
    <?php
if (isset($_SESSION['adminUsername'])) {
    echo "";
} else {
    header('Location: ./admin_login.html');
}
?>
</head>

<body onload="runOperation()">
    <div class=" ">

        <div style="text-align: right; margin: 10px">
            <div style='background:#0b93d7;'>

                <h1 style="text-align:center; color:white; padding:20px 0px;">Admin</h1>
                <input type="button" class="btn bttn " id="adminLoginSubmitBtn" value="Logout" style="
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

            <div class="" style="width: 80%; margin-bottom: 100px">

            </div>
            <form class="box">
                <h3>Create User</h3>




                <input id="createUserName" style='border-radius:30px;' placeholder='User Name'
                    style='background:white; border-radius:0%;' type="text" />

                <input id="createUserEmail" style='border-radius:30px;' placeholder='User Email'
                    style='background:white;  border-radius:0%;' type="text" />


                <input id="createUserPassword" style='border-radius:30px;' placeholder='User Password'
                    style='background:white;  border-radius:0%;' type="text" />
                </td>
                <td>
                    <input class="btn btn-dark" onclick="createUserButton()" type="button" value="Create User" style='border-radius:30px;
              width:250px; padding:12px 0px; background:#0b93d7; border:0px:' />
                    <div class="col-md-12"></div>
            </form>
            <!-- _____________________________________________ -->

            <table class="table " style="margin-bottom: 100px">
                <thead>

                    </td>
                    </tr>
                    </tbody>
            </table>
            <!-- _____________________________________________ -->
            <h3 style="text-align: center; margin-top:40%;">All Users</h3>
            <div class="container">

                <div id="tableRequest"></div>
            </div>

            <h3 style="text-align: center;">Customers Unique Link</h3>
            <div class="container" style="">
                <div id="tableCustomerUniqueLink"></div>
            </div>

            <h3 style="text-align: center;">Email Info</h3>
            <div class="container" style="">
                <div id="tableEmailData"></div>
            </div>
        </div>


        <!-- ________________________________________________________________ -->
        <!-- MODAL FOR EMAIL TEMPLATE -->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="modalForEmailTemplate" data-keyboard="false" data-backdrop="static" tabindex="-1"
            role="dialog" aria-labelledby="modalForEmailTemplateLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width:800px" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background:#0b93d7;color: white">
                        <h5 class="modal-title" id="modalForEmailTemplateLabel">Email Template Of <span
                                id="nameOfCustomer"> Name Of Customer </span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- _________________________________________________________________ -->
                        <!-- CONSTANTS IN EMAIL -->
                        <div id="constantsInEmail">
                            <div style='text-align:center; height:75px;'><img
                                    src='https://quote.360homeconnect.com/images/logo.png'
                                    style='width:auto;height:75px;'>
                            </div>
                        </div>
                        <div>
                            <div>
                                <hr style='height: 8px; background-color: #0099cc' />

                                <div style='width: 77%; margin-left: auto; margin-right: auto'>
                                    <div style='
							background-color: black;
							color: #0099cc;
							font-size: 35px;
							font-weight: bold;
							text-align: center;
							padding: 20px;
							border: 6px solid #0099cc;
						'>
                                        Thank you for your order!
                                    </div>
                                    <p style='text-align: left; font-size: 17px'>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dicta unde
                                        ex, incidunt voluptatem ipsum beatae aut quibusdam repudiandae sit est
                                        tenetur autem. Architecto, est alias non minima fugiat ut!
                                    </p>
                                </div>
                                <div
                                    style='justify-content: center !important; display: flex !important;flex-direction: row !important;flex-wrap: wrap !important;'>
                                    <div style='
							margin: 5px;
							background-color: #0099cc;
							width: 200px;
							height: 200px;
							text-align: center;
						'>
                                        <img src='https://quote.360homeconnect.com/images/tick.png'
                                            style='margin-top: 15px' width='40%' alt='' />
                                        <p style='
								font-size: 22px;
								line-height: 25px;
								margin-top: 15px;
								font-weight: bold;
							'>
                                            Ordered on 17th Feb
                                        </p>
                                    </div>
                                    <div style='
							margin: 5px;
							background-color: #0099cc;
							width: 200px;
							height: 200px;
							text-align: center;
						'>
                                        <img src='https://quote.360homeconnect.com/images/truck.png'
                                            style='margin-top: 15px' width='60%' alt='' />
                                        <p style='
								font-size: 22px;
								line-height: 25px;
								margin-top: 15px;
								font-weight: bold;
							'>
                                            Ready To Ship
                                        </p>
                                    </div>
                                    <div style='
							margin: 5px;
							background-color: #0099cc;
							width: 200px;
							height: 200px;
							text-align: center;
						'>
                                        <img src='https://quote.360homeconnect.com/images/bike.png'
                                            style='margin-top: 15px' width='40%' alt='' />
                                        <p style='
								font-size: 22px;
								line-height: 25px;
								margin-top: 15px;
								font-weight: bold;
							'>
                                            Expected Delivery
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div style='
					background-color: #0099cc;
					padding: 10px;
					width: 88%;
					margin-left: auto;
					margin-right: auto;
					margin-top: 50px;
				'>
                                <div style='
						background-color: black;
						color: white;
						font-size: 45px;
						text-align: center;
						width: 90%;
						padding: 5px;
						margin-left: auto;
						margin-right: auto;
					'>
                                    Client Details
                                </div>
                            </div>
                            <!-- _________________________________________________________________ -->
                            <div id="allEmailTemplateData"></div>
                            <!-- _________________________________________________________________ -->
                            <!-- FOOTER CONSTANT -->
                            <footer style='background-color: black; text-align: center'>
                                <div style='color: white; text-align: center; padding: 10px; line-height: 10px'>
                                    <p style='color: #0099cc; font-size: 30px; padding: 15px; font-weight: bold'>
                                        Contact Us
                                    </p>
                                    <p style='font-weight: bold; margin-bottom: 20px'>Justin Sigman</p>
                                    <p>Managing Partner</p>
                                    <p>360 Home Connect</p>
                                    <p>Cell: (321) 543-9452</p>
                                    <p>Office: (773) 543-9452</p>
                                </div>
                                <div style='display: flex; flex-direction: row'></div>
                                <img src='https://quote.360homeconnect.com/images/logo.png' width='100px' height='60px'
                                    alt='' />
                            </footer>
                            <!-- _________________________________________________________________ -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ________________________________________________________________ -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"
    integrity="sha512-USPCA7jmJHlCNRSFwUFq3lAm9SaOjwG8TaB8riqx3i/dAJqhaYilVnaf2eVUH5zjq89BU6YguUuAno+jpRvUqA=="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
    integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
function logoutAdmin() {
    $.ajax({
        url: './model/admin_logout.php',
        type: 'POST',
        data: {},
        success: function(data) {
            if (data == 'Logout success!') {
                var url = window.location.href;
                url = url.replace('admin.php', 'admin_login.html');
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
    var arrayOfHeader_tableResponse = ["Id", 'Name ', 'Email', 'Password', 'Edit'];
    $.ajax({
        url: './model/get_user_data.php',
        type: 'GET',
        data: {},

        success: function(data) {
            let allUserData = JSON.parse(data);
            functionForAllUserData(
                allUserData.length,
                arrayOfHeader_tableResponse.length,
                'tableRequest',
                arrayOfHeader_tableResponse,
                allUserData
            );
            getAllCustomerData()
            getAllEmailData()

        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
            console.log('Status: ' + textStatus);
            console.log('Error: ' + errorThrown);
            console.log('ERROR');
        },
    });
}


function getAllCustomerData() {
    var arrayOfHeader_tableCustomerDataUniqueUrl = ["Id", 'User ', 'Unique Link', 'Created At'];
    $.ajax({
        url: './model/get_customer_data.php',
        type: 'GET',
        data: {},

        success: function(data) {
            let allUserData = JSON.parse(data);
            functionForCustomerDataUniqueUrl(
                allUserData.length,
                arrayOfHeader_tableCustomerDataUniqueUrl.length,
                'tableCustomerUniqueLink',
                arrayOfHeader_tableCustomerDataUniqueUrl,
                allUserData
            );

        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
            console.log('Status: ' + textStatus);
            console.log('Error: ' + errorThrown);
            console.log('ERROR');
        },
    });
}

function getAllEmailData() {
    var arrayOfHeader_tableCustomerDataUniqueUrl = ["Id", 'User ', 'Email Data', 'Created At'];
    $.ajax({
        url: './model/get_email_data.php',
        type: 'GET',
        data: {},

        success: function(data) {
            let allUserData = JSON.parse(data);
            functionForEmailData(
                allUserData.length,
                arrayOfHeader_tableCustomerDataUniqueUrl.length,
                'tableEmailData',
                arrayOfHeader_tableCustomerDataUniqueUrl,
                allUserData
            );

        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest);
            console.log('Status: ' + textStatus);
            console.log('Error: ' + errorThrown);
            console.log('ERROR');
        },
    });
}



function functionForAllUserData(
    rows,
    columns,
    tableId,
    tableHeadingArray,
    data
) {
    var arrayOfIndexNamesInSequenceForRequest = ['id', 'name', 'email', 'password'];

    var mainDiv = document.getElementById(tableId);
    var table = document.createElement('table');
    table.id = 'dynamicTable';
    table.classList.add('table');
    // table.style.width = "200% !important";
    var tbody = document.createElement('tbody');
    for (var i = 0; i < rows + 1; ++i) {
        if (i == 0) {
            var thead = document.createElement('thead');
            var row = document.createElement('tr');
            for (var j = 0; j < columns; ++j) {
                if (j == 0) {
                    row.appendChild(document.createElement('th'));
                    row.cells[j].appendChild(
                        document.createTextNode(tableHeadingArray[j])
                    );
                } else {
                    row.appendChild(document.createElement('th'));
                    row.cells[j].appendChild(
                        document.createTextNode(tableHeadingArray[j])
                    );
                }
            }
            thead.appendChild(row);
            table.appendChild(thead);
        } else {
            var row = document.createElement('tr');
            for (var j = 0; j < columns; ++j) {
                if (j == columns - 1) {
                    row.appendChild(document.createElement('td'));
                    // row.cells[j].appendChild(document.createTextNode());

                    var btn = document.createElement('input');
                    btn.id = 'updateButton_' + i;
                    btn.style.background = 'green';
                    btn.style.color = 'white';
                    btn.style.margin = '4px';
                    btn.type = 'button';
                    btn.className = 'btn';
                    btn.value = 'Update';
                    btn.setAttribute('onclick', "updateButton('" + i + "')");
                    row.cells[j].appendChild(btn);


                    var btn = document.createElement('input');
                    btn.id = 'deleteButton_' + i;
                    btn.style.background = 'red';
                    btn.style.color = 'white';
                    btn.style.margin = '4px';
                    btn.type = 'button';
                    btn.className = 'btn';
                    btn.value = 'Delete';
                    let emailOfCurrentUserForDeleting = data[i - 1]['email'];
                    btn.setAttribute(
                        'onclick',
                        "deleteButton('" + emailOfCurrentUserForDeleting + "')"
                    );
                    row.cells[j].appendChild(btn);
                } else {
                    row.appendChild(document.createElement('td'));
                    // row.cells[j].appendChild(
                    // 	document.createTextNode(
                    // 		data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]]
                    // 	)
                    // );
                    var input = document.createElement('input');
                    if (j == 0) {
                        input.id = 'idOfUser_' + i;

                    } else if (j == 1) {
                        input.id = 'nameOfUser_' + i;
                    } else if (j == 2) {
                        input.id = 'emailOfUser_' + i;
                    } else {
                        input.id = 'passwordOfUser_' + i;
                    }
                    input.style.padding = '4px';
                    input.style.borderRadius = '4px';
                    input.type = 'text';
                    input.value =
                        data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];
                    // btn.onclick = (function (entry) {
                    // 	return function () {
                    // 		chooseUser(entry);
                    // 	};
                    // })(entry);
                    row.cells[j].appendChild(input);
                }
            }
            tbody.appendChild(row);
            table.appendChild(tbody);
        }
    }
    mainDiv.appendChild(table);
}

function functionForCustomerDataUniqueUrl(
    rows,
    columns,
    tableId,
    tableHeadingArray,
    data
) {
    var arrayOfIndexNamesInSequenceForRequest = ['id', 'user', 'uniqueUrl', 'created_at'];

    var mainDiv = document.getElementById(tableId);
    var table = document.createElement('table');
    table.id = 'uniqueUrlTable';
    table.classList.add('table');
    // table.style.width = "200% !important";
    var tbody = document.createElement('tbody');
    for (var i = 0; i < rows + 1; ++i) {
        if (i == 0) {
            var thead = document.createElement('thead');
            var row = document.createElement('tr');
            row.style.background = '#0b93d7'
            row.style.textAlign = 'left'
            for (var j = 0; j < columns; ++j) {
                if (j == 0) {
                    row.appendChild(document.createElement('th'));
                    row.cells[j].appendChild(
                        document.createTextNode(tableHeadingArray[j])
                    );
                } else {
                    row.appendChild(document.createElement('th'));
                    row.cells[j].appendChild(
                        document.createTextNode(tableHeadingArray[j])
                    );
                }
            }
            thead.appendChild(row);
            table.appendChild(thead);
        } else {
            var row = document.createElement('tr');
            row.style.textAlign = 'left'
            for (var j = 0; j < columns; ++j) {

                row.appendChild(document.createElement('td'));
                // row.cells[j].appendChild(
                // 	document.createTextNode(
                // 		data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]]
                // 	)
                // );
                // var input = document.createElement('p');
                if (j == 0) {
                    var input = document.createElement('p');
                    input.id = 'idOfUser_' + i;
                    input.style.padding = '4px';
                    input.style.borderRadius = '4px';
                    input.innerHTML =
                        data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];


                } else if (j == 1) {
                    var input = document.createElement('p');
                    input.id = 'nameOfUser_' + i;
                    input.style.padding = '4px';
                    input.style.borderRadius = '4px';
                    input.innerHTML =
                        data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];

                } else if (j == 2) {
                    var input = document.createElement('a');
                    input.id = 'urlOfUser_' + i;
                    input.classList.add('uniqueLink');
                    input.style.padding = '4px';
                    input.style.borderRadius = '4px';
                    input.innerHTML =
                        data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];
                    input.href = data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]]
                } else {
                    var input = document.createElement('p');
                    input.id = 'createdAtOfUser_' + i;
                    input.style.padding = '4px';
                    input.style.borderRadius = '4px';
                    input.innerHTML =
                        data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];
                }
                // input.style.padding = '4px';
                // input.style.borderRadius = '4px';
                // input.innerHTML =
                //     data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];

                // input.type = 'text';
                // btn.onclick = (function (entry) {
                // 	return function () {
                // 		chooseUser(entry);
                // 	};
                // })(entry);
                row.cells[j].appendChild(input);
            }
            tbody.appendChild(row);
            table.appendChild(tbody);
        }
    }
    mainDiv.appendChild(table);

    // $('#uniqueUrlTable').DataTable();
    // $('#uniqueUrlTable').DataTable({
    //     "order": [
    //         [0, "desc"]
    //     ]
    // });

    var table = $('#uniqueUrlTable').DataTable({
        "order": [
            [0, "desc"]
        ]
    });


}


function functionForEmailData(
    rows,
    columns,
    tableId,
    tableHeadingArray,
    data
) {
    var arrayOfIndexNamesInSequenceForRequest = ['id', 'user', 'email_data', 'created_at'];

    var mainDiv = document.getElementById(tableId);
    var table = document.createElement('table');
    table.id = 'emailDataTable';
    table.classList.add('table');
    // table.style.width = "200% !important";
    var tbody = document.createElement('tbody');
    for (var i = 0; i < rows + 1; ++i) {
        if (i == 0) {
            var thead = document.createElement('thead');
            var row = document.createElement('tr');
            row.style.background = '#0b93d7'
            row.style.textAlign = 'left'
            for (var j = 0; j < columns; ++j) {
                if (j == 0) {
                    row.appendChild(document.createElement('th'));
                    row.cells[j].appendChild(
                        document.createTextNode(tableHeadingArray[j])
                    );
                } else {
                    row.appendChild(document.createElement('th'));
                    row.cells[j].appendChild(
                        document.createTextNode(tableHeadingArray[j])
                    );
                }
            }
            thead.appendChild(row);
            table.appendChild(thead);
        } else {
            var row = document.createElement('tr');
            row.style.textAlign = 'left'
            for (var j = 0; j < columns; ++j) {

                row.appendChild(document.createElement('td'));
                // row.cells[j].appendChild(
                // 	document.createTextNode(
                // 		data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]]
                // 	)
                // );
                // var input = document.createElement('p');
                if (j == 0) {
                    var input = document.createElement('p');
                    input.id = 'idOfUser_' + i;
                    input.style.padding = '4px';
                    input.style.borderRadius = '4px';
                    input.innerHTML =
                        data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];


                } else if (j == 1) {
                    var input = document.createElement('p');
                    input.id = 'nameOfUser_' + i;
                    input.style.padding = '4px';
                    input.style.borderRadius = '4px';
                    input.innerHTML =
                        data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];

                } else if (j == 2) {
                    var input = document.createElement('input');
                    input.id = 'EmailTemplateButton_' + i;
                    // input.style.background = 'green';
                    // input.style.color = 'white';
                    input.style.margin = '4px';
                    input.type = 'button';
                    input.className = 'btn btn-dark';
                    input.value = 'Email Template';
                    input.setAttribute('onclick', "openModalForEmailTemplate(`" + data[i - 1]['user'] + "`,`" +
                        data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]] + "` )");


                    // var input = document.createElement('p');
                    // input.id = 'urlOfUser_' + i;
                    // input.classList.add('uniqueLink');
                    // input.style.padding = '4px';
                    // input.style.borderRadius = '4px';
                    // input.innerHTML = 'Email Template'
                    // data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];
                    // input.href = data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]]
                } else {
                    var input = document.createElement('p');
                    input.id = 'createdAtOfUser_' + i;
                    input.style.padding = '4px';
                    input.style.borderRadius = '4px';
                    input.innerHTML =
                        data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];
                }
                // input.style.padding = '4px';
                // input.style.borderRadius = '4px';
                // input.innerHTML =
                //     data[i - 1][arrayOfIndexNamesInSequenceForRequest[j]];

                // input.type = 'text';
                // btn.onclick = (function (entry) {
                // 	return function () {
                // 		chooseUser(entry);
                // 	};
                // })(entry);
                row.cells[j].appendChild(input);
            }
            tbody.appendChild(row);
            table.appendChild(tbody);
        }
    }
    mainDiv.appendChild(table);

    // $('#uniqueUrlTable').DataTable();
    // $('#uniqueUrlTable').DataTable({
    //     "order": [
    //         [0, "desc"]
    //     ]
    // });

    var table = $('#emailDataTable').DataTable({
        "order": [
            [0, "desc"]
        ]
    });


}

// Function For Opening Modal For Email Template
function openModalForEmailTemplate(userName, emailData) {
    document.getElementById('nameOfCustomer').innerHTML = userName
    document.getElementById('allEmailTemplateData').innerHTML = emailData
    $('#modalForEmailTemplate').modal('show');

}
</script>
<script>
function deleteButton(email) {
    $.ajax({
        url: './model/delete_user.php',
        type: 'POST',
        data: {
            emailOfUser: email,
        },

        success: function(data) {
            if (data == 'Deleted Successfully') {
                document.getElementById('dynamicTable').remove();
                runOperation();
            } else {
                console.log('Not Deleted');
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

function updateButton(index) {

    $.ajax({
        url: './model/get_user_data.php',
        type: 'GET',
        data: {},
        success: function(data) {
            allUserData = JSON.parse(data);
            let createUserEmail = document.getElementById('emailOfUser_' + index).value;
            let createUserId = document.getElementById('idOfUser_' + index).value;
            var userEmailFound = false;
            for (let index = 0; index < allUserData.length; index++) {
                if (createUserEmail == allUserData[index].email &&
                    createUserId != allUserData[index].id
                ) {
                    userEmailFound = true;
                    break;
                }
            }
            if (userEmailFound == false) {
                updatingUser(index);
            } else {
                document.getElementById('dynamicTable').remove();
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

function updatingUser(index) {
    $.ajax({
        url: './model/update_user.php',
        type: 'POST',
        data: {
            idOfUser: index,
            nameOfUser: document.getElementById('nameOfUser_' + index).value,
            emailOfUser: document.getElementById('emailOfUser_' + index).value,
            passwordOfUser: document.getElementById('passwordOfUser_' + index)
                .value,
        },

        success: function(data) {
            if (data == 'successfully Updated') {
                document.getElementById('dynamicTable').remove();
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

function createUserButton() {
    $.ajax({
        url: './model/get_user_data.php',
        type: 'GET',
        data: {},
        success: function(data) {
            var createUserEmail =
                document.getElementById('createUserEmail').value;
            allUserData = JSON.parse(data);
            var userEmailFound = false;
            for (let index = 0; index < allUserData.length; index++) {
                if (createUserEmail == allUserData[index].email) {
                    userEmailFound = true;
                    break;
                }
            }
            if (userEmailFound == false) {
                creatingUser();
            } else {
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

function creatingUser() {
    $.ajax({
        url: './model/create_user.php',
        type: 'POST',
        data: {
            nameOfUser: document.getElementById('createUserName').value,
            emailOfUser: document.getElementById('createUserEmail').value,
            passwordOfUser: document.getElementById('createUserPassword').value,
        },

        success: function(data) {
            if (data == 'Created successfully') {
                document.getElementById('dynamicTable').remove();
                runOperation();
            } else {
                console.log('Not Created');
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