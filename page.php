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
    <script src="js/iframeResizer.contentWindow.min.js"></script>
    <title>Internet Tv</title>
    <?php
if (isset($_SESSION['username'])) {
    echo "<script>
      			var UsernameOfCustomer = '" . $_SESSION['username'] . "';
      				  </script>";
} else {
    header('Location: ./login.html');
}
?>
</head>
<style>

</style>

<body onload='setLabelsByDefaultsFromData()'>

    <!-- <div style='text-align:center; background: #0099CC;' >
	<img src="images/logo.png" style="width:17%;" alt="" srcset="">
</div> -->
    <div>
        <div id="mainApplication" style="background: #f3f3fd" class="container">
            <div class="tab-nav">
                <div class="tab-menu selected no-of-total-tabs" id="tab_1" onclick="displayTabs(this)">
                    AT&T
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_2" onclick="displayTabs(this)">
                    Comcast
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_3" onclick="displayTabs(this)">
                    Spectrum
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_4" onclick="displayTabs(this)">
                    Metronet
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_5" onclick="displayTabs(this)">
                    Frontier
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_6" onclick="displayTabs(this)">
                    DirecTV
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_7" onclick="displayTabs(this)">
                    I3 BroadBand
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_8" onclick="displayTabs(this)">
                    Wow
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_9" onclick="displayTabs(this)">
                    Mediacom
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_10" onclick="displayTabs(this)">
                    Hughes Net
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_11" onclick="displayTabs(this)">
                    Century Link
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_12" onclick="displayTabs(this)">
                    RCN
                </div>
                <div class="tab-menu no-of-total-tabs" id="tab_13" onclick="displayTabs(this)">
                    AT&T_DTV Stream
                </div>
                <!-- ------------ -->
            </div>

            <div class="my-3">
                <!-- ____________________________________________________________________________ -->
                <!-- AT & T -->
                <div id="tabDetails_1" style="display: none">
                    <h1 class="section-heading-main">AT&T</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">AT&T TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u>
                                        <a href="https://www.att.com/channels/att-tv/"> Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineUp-At-t" type="checkbox"
                                                onchange="runOperation_Tab1()" name="channelLineup_checkboxes"
                                                id="entertainment" value="169.99" />
                                            <label class="form-check-label" style="font-weight: bold"
                                                for="entertainment">
                                                Entertainment ($169.99)
                                            </label>
                                            <div>
                                                <p onclick="displayEntertainmentFeatures()" class="see-benefits">
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span>See Features And Benefits
                                                </p>
                                                <div id="Entertainment_at_t" style="display: none">
                                                    <p class="m-0">65+ channels</p>
                                                    <p class="m-0">40,000+ on-demand titles</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineUp-At-t" type="checkbox"
                                                name="channelLineup_checkboxes" onchange="runOperation_Tab1()"
                                                id="choice" checked value="84.99" />
                                            <label class="form-check-label" for="choice" style="font-weight: bold">
                                                Choice ($84.99)
                                            </label>
                                            <div>
                                                <p onclick="displayChoiceFeatures()" class="see-benefits">
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span>See Features And Benefits
                                                </p>
                                                <div id="Choice_at_t" style="display: none">
                                                    <p class="m-0">90+ channels</p>
                                                    <p class="m-0">45,000+ on-demand titles</p>
                                                    <ul class="pl-0">
                                                        <li>HBO Max included for 1 year.</li>
                                                        <li>Enjoy Regional Sports Networks without fees.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineUp-At-t" type="checkbox"
                                                name="channelLineup_checkboxes" onchange="runOperation_Tab1()"
                                                id="ultimate" value="94.99" />
                                            <label class="form-check-label" for="ultimate" style="font-weight: bold">
                                                Ultimate ($94.99)
                                            </label>
                                            <div>
                                                <p onclick="displayUltimateFeatures()" class="see-benefits">
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span>See Features And Benefits
                                                </p>
                                                <div id="Ultimate_at_t" style="display: none">
                                                    <p class="m-0">130+ channels</p>
                                                    <p class="m-0">55,000+ on-demand</p>
                                                    <ul class="pl-0">
                                                        <li>HBO Max included for 1 year.</li>
                                                        <li>Enjoy Regional Sports Networks without fees.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineUp-At-t" type="checkbox"
                                                name="channelLineup_checkboxes" onchange="runOperation_Tab1()"
                                                id="Premier" value="139.99" />
                                            <label class="form-check-label" for="Premier" style="font-weight: bold">
                                                Premier ($139.99)
                                            </label>
                                            <div>
                                                <p onclick="displayPremierFeatures()" class="see-benefits">
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </span>See Features And Benefits
                                                </p>
                                                <div id="Premier_at_t" style="display: none">
                                                    <span>All channels included</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TV's</p>
                                        <input type="text" id="tv" />
                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Equipment Options</p>
                                            <div style="text-align: left">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="equipmentOptions_checkboxes"
                                                        onchange="runOperation_Tab1()" id="freeDVR" value="Free"
                                                        checked />
                                                    <label class="form-check-label" for="freeDVR">
                                                        20 Hour DVR (Free)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="equipmentOptions_checkboxes"
                                                        onchange="runOperation_Tab1()" id="unlimitedDVR" value="$10" />
                                                    <label class="form-check-label" for="unlimitedDVR">
                                                        Unlimited DVR ($10)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Premium Options</p>
                                            <div class="checkbox-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="premiumChannels_checkboxes" onchange="runOperation_Tab1()"
                                                        id="HBO" value="$14.99" />
                                                    <label class="form-check-label" for="HBO"> HBO Max </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="premiumChannels_checkboxes" onchange="runOperation_Tab1()"
                                                        id="cinemax" value="$11" />
                                                    <label class="form-check-label" for="cinemax"> Cinemax </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="premiumChannels_checkboxes" onchange="runOperation_Tab1()"
                                                        id="showtime" checked value="$11" />
                                                    <label class="form-check-label" for="showtime"> Showtime </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="premiumChannels_checkboxes" onchange="runOperation_Tab1()"
                                                        id="starz" value="$11" />
                                                    <label class="form-check-label" for="starz"> Starz </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="premiumChannels_checkboxes" onchange="runOperation_Tab1()"
                                                        id="epix" value="$6" />
                                                    <label class="form-check-label" for="epix"> Epix </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="premiumChannels_checkboxes" onchange="runOperation_Tab1()"
                                                        id="moviesExtra" value="$5" />
                                                    <label class="form-check-label" for="moviesExtra">
                                                        Movies Extra Pack
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="premiumChannels_checkboxes" onchange="runOperation_Tab1()"
                                                        id="NBA" value="$40" />
                                                    <label class="form-check-label" for="NBA">
                                                        NBA League Pass
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">AT&T Internet Options</h3>
                            <div class="p-1">
                                <div class="text-center">
                                    <label class="label-heading">Modem Rental</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="modernRental"
                                            onchange="runOperation_Tab1()" id="yesModernRental" checked value="yes" />
                                        <label class="form-check-label" for="yesModernRental">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="modernRental"
                                            onchange="runOperation_Tab1()" id="noModernRental" value="no" />
                                        <label class="form-check-label" for="noModernRental">No</label>
                                    </div>
                                </div>
                                <div>
                                    <p class="label-heading">Fiber Territory</p>
                                    <input type="text" id="fiber" />
                                </div>
                                <div>
                                    <p class="label-heading">Non-Fiber Territory</p>
                                    <input type="text" id="nonFiber" />
                                </div>
                            </div>
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="At_t_TopSellingPointsSection">
                                        <tbody id="At_t_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="At_t_RequiredNewServiceInfoSection">
                                        <tbody id="At_t_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="At_t_RequiredDisconnectionInformationSection">
                                        <tbody id="At_t_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="At_t_AdditionalServiceInformationSection">
                                        <tbody id="At_t_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 class="main-heading">Summary</h3>
                                <div>
                                    <table class="table" id="At_t_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="At_t_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="At_t_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="At_t_UpdateSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="At_t_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="At_t_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="At_t_TelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="channelLineup_Text"></th>
                                                <td id="channelLineup_Price"></td>
                                            </tr>
                                            <tr id="tvbox_1_Text_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="tvbox_1_Text">1st TV Box
                                                </th>
                                                <td id="tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="tvbox_2_Text">2nd TV Box
                                                </th>
                                                <td id="tvbox_2_Price"></td>
                                            </tr>
                                            <tr id="tvbox_3_Text_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="tvbox_3_Text">3rd TV Box
                                                </th>
                                                <td id="tvbox_3_Price"></td>
                                            </tr>
                                            <tr id="tvbox_4_Text_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="tvbox_4_Text">4th TV Box
                                                </th>
                                                <td id="tvbox_4_Price"></td>
                                            </tr>
                                            <tr id="tvbox_5_Text_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="tvbox_5_Text">5th TV Box
                                                </th>
                                                <td id="tvbox_5_Price"></td>
                                            </tr>
                                            <tr id="tvbox_6_Text_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="tvbox_6_Text">6th TV Box
                                                </th>
                                                <td id="tvbox_6_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="equipment_Text"></th>
                                                <td id="equipment_Price"></td>
                                            </tr>
                                            <!-- ----------- -->
                                            <tr id="premium_1_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="premium_1_Text">HBO Max
                                                </th>
                                                <td id="premium_1_Price"></td>
                                            </tr>
                                            <tr id="premium_2_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="premium_2_Text">Cinemax
                                                </th>
                                                <td id="premium_2_Price"></td>
                                            </tr>
                                            <tr id="premium_3_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="premium_3_Text">Showtime
                                                </th>
                                                <td id="premium_3_Price"></td>
                                            </tr>
                                            <tr id="premium_4_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="premium_4_Text">Starz</th>
                                                <td id="premium_4_Price"></td>
                                            </tr>
                                            <tr id="premium_5_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="premium_5_Text">Epix</th>
                                                <td id="premium_5_Price"></td>
                                            </tr>
                                            <tr id="premium_6_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="premium_6_Text">Movies
                                                    Extra Pack</th>
                                                <td id="premium_6_Price"></td>
                                            </tr>
                                            <tr id="premium_7_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="premium_7_Text">NBA League
                                                    Pass</th>
                                                <td id="premium_7_Price"></td>
                                            </tr>
                                            <!-- ----------- -->

                                            <tr>
                                                <th style='text-align:left;' style="font-weight: bold" scope="row">TOTAL
                                                </th>
                                                <td id="totalTelevision_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Internet Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr id="fiber_1_Text_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="fiber_Text"></th>
                                                <td id="fiber_Price"></td>
                                            </tr>
                                            <tr id="nonFiber_1_Text_At_t" style="display: none">
                                                <th style='text-align:left;' scope="row" id="nonFiber_Text"></th>
                                                <td id="nonFiber_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="modernRental_Text"></th>
                                                <td id="modernRental_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="totalInternet_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="discount_Text">Bundle
                                                    Discount</th>
                                                <td id="discount_Price">0</td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="installation_Text">
                                                    INSTALLATION FEE</th>
                                                <td id="installation_Price">Free</td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="activationFee_Text">
                                                    ACTIVATION FEE</th>
                                                <td id="activationFee_Price">Free</td>
                                            </tr>
                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="totalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- COMCAST -->
                <div id="tabDetails_2" style="display: none">
                    <h1 class="section-heading-main">COMCAST</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">COMCAST TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u><a href="https://www.xfinity.com/learn/channel-lineup">
                                            Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="comcast_channelLineup_checkboxes" onchange="runOperation_Tab2()"
                                                id="basic" value="$30" />
                                            <label class="form-check-label font-weight-bold" for="basic">
                                                Basic ($30)
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="comcast_channelLineup_checkboxes" onchange="runOperation_Tab2()"
                                                id="extra" checked value="$70" />
                                            <label class="form-check-label font-weight-bold" for="extra">Extra ($70)
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="comcast_channelLineup_checkboxes" onchange="runOperation_Tab2()"
                                                id="preferred" value="$80" />
                                            <label class="form-check-label font-weight-bold" for="preferred">
                                                Preferred ($80)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TV's</p>
                                        <input type="text" id="comcast_tv" />
                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Equipment Options</p>
                                            <div style="text-align: left">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="comcast_EquipmentOptions_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comcast_freeDVR" value="Free"
                                                        checked />
                                                    <label class="form-check-label" for="comcast_freeDVR">20 Hour DVR
                                                        ($0)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="comcast_EquipmentOptions_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comcast_150HourDVR"
                                                        value="$10" />
                                                    <label class="form-check-label" for="comcast_150HourDVR">150 Hour
                                                        DVR ($10)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="comcast_EquipmentOptions_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comcast_300HourDVR"
                                                        value="$20" />
                                                    <label class="form-check-label" for="comcast_300HourDVR">300 Hour
                                                        DVR ($20)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Premium Options</p>
                                            <div class="checkbox-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comcast_HBO"
                                                        value="$14.99" />
                                                    <label class="form-check-label" for="comcast_HBO">
                                                        HBO Max
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_cinemax"
                                                        value="$11" />
                                                    <label class="form-check-label" for="comast_cinemax">
                                                        Cinemax
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_Showtime" checked
                                                        value="$11" />
                                                    <label class="form-check-label" for="comast_Showtime">
                                                        Showtime
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_Starz" value="$11" />
                                                    <label class="form-check-label" for="comast_Starz"> Starz </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_SportsPackage"
                                                        value="$6" />
                                                    <label class="form-check-label" for="comast_SportsPackage">
                                                        Sports Package
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_TMC" value="$40" />
                                                    <label class="form-check-label" for="comast_TMC"> TMC </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_LatinoPackage"
                                                        value="$40" />
                                                    <label class="form-check-label" for="comast_LatinoPackage"> Latino
                                                        Package</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()"
                                                        id="comast_MoreSportsAndEntertainment" value="$40" />
                                                    <label class="form-check-label"
                                                        for="comast_MoreSportsAndEntertainment"> More Sports &
                                                        Entertainment</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_Desports"
                                                        value="$40" />
                                                    <label class="form-check-label" for="comast_Desports">
                                                        Desports</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_Epix" value="$40" />
                                                    <label class="form-check-label" for="comast_Epix"> Epix</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_TheMovieChannel"
                                                        value="$40" />
                                                    <label class="form-check-label" for="comast_TheMovieChannel"> The
                                                        Movie Channel</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="comcast_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab2()" id="comast_Hitz" value="$40" />
                                                    <label class="form-check-label" for="comast_Hitz"> Hitz </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">Comcast Internet Options</h3>
                            <div style="text-align: center">
                                <label class="label-heading">Modem Rental</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="comcast_modernRental"
                                            onchange="runOperation_Tab2()" id="modemAndRouter_ModernRental" checked
                                            value="Modem & Router" />
                                        <label class="form-check-label" for="modemAndRouter_ModernRental">Modem &
                                            Router</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="comcast_modernRental"
                                            onchange="runOperation_Tab2()" id="XFL_ModernRental" checked
                                            value="Whole Home Modem & Router" />
                                        <label class="form-check-label" for="XFL_ModernRental">Whole Home Modem &
                                            Router</label>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <input type="text" id="comcast_Internet" />
                                </div>
                                <!-- -------------- -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="comcast_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab2()" id="comcast_selfInstallations"
                                                    value="$0" checked />
                                                <label class="form-check-label" for="comcast_selfInstallations">
                                                    Self Installation ($0)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="comcast_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab2()" id="comcast_techInstallations"
                                                    value="$100" />
                                                <label class="form-check-label" for="comcast_techInstallations">
                                                    Tech Installation ($100)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Autopay</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="comcast_Autoplay_checkboxes" id="comcast_AutoplayYes"
                                                    value="yes" onchange="runOperation_Tab2()" checked />
                                                <label class="form-check-label" for="comcast_AutoplayYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="comcast_Autoplay_checkboxes" id="comcast_AutoplayNo"
                                                    onchange="runOperation_Tab2()" value="no" />
                                                <label class="form-check-label" for="comcast_AutoplayNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Add Phone</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="comcast_AddPhone_checkboxes" id="comcast_AddPhoneYes"
                                                    value="yes" onchange="runOperation_Tab2()" checked />
                                                <label class="form-check-label" for="comcast_AddPhoneYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="comcast_AddPhone_checkboxes" id="comcast_AddPhoneNo"
                                                    onchange="runOperation_Tab2()" value="no" />
                                                <label class="form-check-label" for="comcast_AddPhoneNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="comcast_TopSellingPointsSection">
                                        <tbody id="comcast_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="comcast_RequiredNewServiceInfoSection">
                                        <tbody id="comcast_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="comcast_RequiredDisconnectionInformationSection">
                                        <tbody id="comcast_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="comcast_AdditionalServiceInformationSection">
                                        <tbody id="comcast_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="comcast_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="comcast_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="comcast_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="comcast_UpdateSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="comcast_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="comcast_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="comcastTelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' class="h5" scope=" row"
                                                    id="comcast_ChannelLineup_Text">1</th>
                                                <hr>
                                                <td style="display:none;" id="comcast_ChannelLineup_Price">Mark</td>
                                            </tr>
                                            <tr id="tvbox_1_Text_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_tvbox_1_Text">1st
                                                    TV Box</th>
                                                <td id="comcast_tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_tvbox_2_Text">2nd
                                                    TV Box</th>
                                                <td id="comcast_tvbox_2_Price"></td>
                                            </tr>
                                            <tr id="tvbox_3_Text_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_tvbox_3_Text">3rd
                                                    TV Box</th>
                                                <td id="comcast_tvbox_3_Price"></td>
                                            </tr>
                                            <tr id="tvbox_4_Text_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_tvbox_4_Text">4th
                                                    TV Box</th>
                                                <td id="comcast_tvbox_4_Price"></td>
                                            </tr>
                                            <tr id="tvbox_5_Text_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_tvbox_5_Text">5th
                                                    TV Box</th>
                                                <td id="comcast_tvbox_5_Price"></td>
                                            </tr>
                                            <tr id="tvbox_6_Text_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_tvbox_6_Text">6th
                                                    TV Box</th>
                                                <td id="comcast_tvbox_6_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="comcast_equipment_Text">3
                                                </th>
                                                <td id="comcast_equipment_Price">Larry</td>
                                            </tr>

                                            <tr id="premiumText_1_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_1_premium_Text">HBO
                                                    Max</th>
                                                <td id="comcast_1_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_2_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_2_premium_Text">
                                                    Cinemax</th>
                                                <td id="comcast_2_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_3_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_3_premium_Text">
                                                    Showtime</th>
                                                <td id="comcast_3_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_4_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_4_premium_Text">
                                                    Starz</th>
                                                <td id="comcast_4_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_5_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_5_premium_Text">
                                                    Sports Package</th>
                                                <td id="comcast_5_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_6_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_6_premium_Text">TMC
                                                </th>
                                                <td id="comcast_6_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_7_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_7_premium_Text">
                                                    Latino Package
                                                </th>
                                                <td id="comcast_7_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_8_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_8_premium_Text">
                                                    More Sports & Entertainment
                                                </th>
                                                <td id="comcast_8_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_9_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_9_premium_Text">
                                                    Desports
                                                </th>
                                                <td id="comcast_9_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_10_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_10_premium_Text">
                                                    Epix
                                                </th>
                                                <td id="comcast_10_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_11_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_11_premium_Text">
                                                    The Movie Channel
                                                </th>
                                                <td id="comcast_11_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_12_Comcast" style="display: none">
                                                <th style='text-align:left;' scope="row" id="comcast_12_premium_Text">
                                                    Hitz
                                                </th>
                                                <td id="comcast_12_premium_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style='text-align:left;' style="font-weight: bold" scope="row">TOTAL
                                                </th>
                                                <td id="comcast_TotalTelevision_Price">Larry</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px;text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <!-- <tr>
                                                <th style='text-align:left;' scope="row" id="comcast_fiber_Text">1</th>
                                                <td id="comcast_fiber_Price">Mark</td>
                                            </tr> -->
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="comcast_modernRental_Text">
                                                    2</th>
                                                <td id="comcast_modernRental_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="comcast_TotalInternet_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="comcast_discount_Text">
                                                    Bundle Price</th>
                                                <td id="comcast_bundle_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="comcast_installation_Text">
                                                    Autopay Discount
                                                </th>
                                                <td id="comcast_AutoPay_Discount"></td>
                                            </tr>
                                            <tr id="addPhone_Comcast">
                                                <th style='text-align:left;' scope="row" id="comcast_addPhone_Text">
                                                    Phone</th>
                                                <td id="comcast_addPhone_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="comcast_activationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="comcast_activationFee_Price">$100</td>
                                            </tr>

                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="comcast_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- SPECTRUM -->
                <div id="tabDetails_3" style="display: none">
                    <h1 class="section-heading-main">SPECTRUM</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">SPECTRUM TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u><a href="https://www.spectrum.com/cable-tv/channel-lineup                  ">
                                            Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="spectrum_channelLineup_checkboxes" onchange="runOperation_Tab3()"
                                                id="tv_select" value="$44.99" />
                                            <label class="form-check-label font-weight-bold" for="tv_select">
                                                TV Select ($44.99)
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="spectrum_channelLineup_checkboxes" onchange="runOperation_Tab3()"
                                                id="tv_silver" checked value="$74.99" />
                                            <label class="form-check-label font-weight-bold" for="tv_silver">TV Silver
                                                ($74.99)
                                            </label>
                                            <p style="font-size: 11px">
                                                (Includes HBO Max,Showtime,NFL Network)
                                            </p>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="spectrum_channelLineup_checkboxes" onchange="runOperation_Tab3()"
                                                id="tv_gold" value="$94.99" />
                                            <label class="form-check-label font-weight-bold" for="tv_gold">
                                                TV Gold ($94.99)
                                            </label>
                                            <p style="font-size: 11px">(Includes SILVER + Starz,Encore,TMC)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TV's</p>
                                        <input type="text" id="spectrum_tv" />
                                        <!-- -------------- -->
                                        <p class="label-heading">DVR's</p>
                                        <input type="text" id="spectrum_dvr" />
                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Premium Options</p>
                                            <div class="checkbox-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_HBO" value="$15" />
                                                    <label class="form-check-label" for="spectrum_HBO"> HBO </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_Showtime"
                                                        value="$15" />
                                                    <label class="form-check-label" for="spectrum_Showtime">
                                                        Showtime
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_Cinemax" checked
                                                        value="$9.99" />
                                                    <label class="form-check-label" for="spectrum_Cinemax">
                                                        Cinemax
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_TMC"
                                                        value="$9.99" />
                                                    <label class="form-check-label" for="spectrum_TMC"> TMC </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_Starz"
                                                        value="$9.99" />
                                                    <label class="form-check-label" for="spectrum_Starz">
                                                        Starz
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_Epix"
                                                        value="$5.99" />
                                                    <label class="form-check-label" for="spectrum_Epix"> Epix </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_StarzEncore"
                                                        value="$5.99" />
                                                    <label class="form-check-label" for="spectrum_StarzEncore">
                                                        Starz Encore
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_SportsPack"
                                                        value="$5" />
                                                    <label class="form-check-label" for="spectrum_SportsPack">
                                                        Sports Pack
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_FoxSoccerPlus"
                                                        value="$10" />
                                                    <label class="form-check-label" for="spectrum_FoxSoccerPlus">
                                                        Fox Soccer Plus
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="spectrum_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab3()" id="spectrum_MLB_Extra"
                                                        value="$129.99" />
                                                    <label class="form-check-label" for="spectrum_MLB_Extra">
                                                        MLB Extra
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">Spectrum Internet Options</h3>
                            <div style="text-align: center">
                                <label class="label-heading">Modem Rental</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spectrum_modernRental"
                                            onchange="runOperation_Tab3()" id="spectrum_CustomerOwned" checked
                                            value="Customer Owned" />
                                        <label class="form-check-label" for="spectrum_CustomerOwned">Customer
                                            Owned</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spectrum_modernRental"
                                            onchange="runOperation_Tab3()" id="spectrum_ModemOnly" checked
                                            value="Modem Only" />
                                        <label class="form-check-label" for="spectrum_ModemOnly">Modem Only</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="spectrum_modernRental"
                                            onchange="runOperation_Tab3()" id="spectrum_WifiPlusModem"
                                            value="Wifi + Modem" />
                                        <label class="form-check-label" for="spectrum_WifiPlusModem">Wifi + Modem
                                            ($5)</label>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <input type="text" id="spectrum_Internet" />
                                </div>
                                <!-- -------------- -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="spectrum_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab3()" id="spectrum_SelfInstall"
                                                    value="$9.99" checked />
                                                <label class="form-check-label" for="spectrum_SelfInstall">
                                                    Self Installation ($9.99)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="spectrum_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab3()" id="spectrum_TechInstall"
                                                    value="$49.99" />
                                                <label class="form-check-label" for="spectrum_TechInstall">
                                                    Tech Installation ($49.99)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="spectrum_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab3()" id="spectrum_InStorePickUp"
                                                    value="$9.99" />
                                                <label class="form-check-label" for="spectrum_InStorePickUp">
                                                    In Store Pick Up ($9.99)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Add Phone</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="spectrum_AddPhone"
                                                    id="spectrum_AddPhoneYes" value="yes" onchange="runOperation_Tab3()"
                                                    checked />
                                                <label class="form-check-label" for="spectrum_AddPhoneYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="spectrum_AddPhone"
                                                    id="spectrum_AddPhoneNo" onchange="runOperation_Tab3()"
                                                    value="no" />
                                                <label class="form-check-label" for="spectrum_AddPhoneNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="spectrum_TopSellingPointsSection">
                                        <tbody id="spectrum_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="spectrum_RequiredNewServiceInfoSection">
                                        <tbody id="spectrum_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="spectrum_RequiredDisconnectionInformationSection">
                                        <tbody id="spectrum_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="spectrum_AdditionalServiceInformationSection">
                                        <tbody id="spectrum_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="spectrum_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="spectrum_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="spectrum_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="spectrum_UpdateSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="spectrum_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="spectrum_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="spectrumTelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="spectrum_ChannelLineup_Text">1</th>
                                                <td id="spectrum_ChannelLineup_Price">Mark</td>
                                            </tr>
                                            <tr id="tvbox_1_Text_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_tvbox_1_Text">1st
                                                    TV Box</th>
                                                <td id="spectrum_tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_tvbox_2_Text">2nd
                                                    TV Box</th>
                                                <td id="spectrum_tvbox_2_Price"></td>
                                            </tr>
                                            <tr id="tvbox_3_Text_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_tvbox_3_Text">3rd
                                                    TV Box</th>
                                                <td id="spectrum_tvbox_3_Price"></td>
                                            </tr>
                                            <tr id="tvbox_4_Text_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_tvbox_4_Text">4th
                                                    TV Box</th>
                                                <td id="spectrum_tvbox_4_Price"></td>
                                            </tr>
                                            <!-- <tr>
                        <th scope="row" id="comcast_equipment_Text"></th>
                        <td id="comcast_equipment_Price"></td>
                      </tr> -->
                                            <tr id="dvrbox_1_Text_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_dvrbox_1_Text">1st
                                                    DVR Box</th>
                                                <td id="spectrum_dvrbox_1_Price"></td>
                                            </tr>
                                            <tr id="dvrbox_2_Text_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_dvrbox_2_Text">2nd
                                                    DVR Box</th>
                                                <td id="spectrum_dvrbox_2_Price"></td>
                                            </tr>
                                            <tr id="dvrbox_3_Text_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_dvrbox_3_Text">3rd
                                                    DVR Box</th>
                                                <td id="spectrum_dvrbox_3_Price"></td>
                                            </tr>
                                            <tr id="dvrbox_4_Text_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_dvrbox_4_Text">4th
                                                    DVR Box</th>
                                                <td id="spectrum_dvrbox_4_Price"></td>
                                            </tr>

                                            <tr id="premiumText_1_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_1_premium_Text">
                                                    HBO</th>
                                                <td id="spectrum_1_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_2_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_2_premium_Text">
                                                    Showtime</th>
                                                <td id="spectrum_2_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_3_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_3_premium_Text">
                                                    Cinemax</th>
                                                <td id="spectrum_3_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_4_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_4_premium_Text">
                                                    TMC</th>
                                                <td id="spectrum_4_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_5_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_5_premium_Text">
                                                    Starz</th>
                                                <td id="spectrum_5_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_6_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_6_premium_Text">
                                                    Epix</th>
                                                <td id="spectrum_6_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_7_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_7_premium_Text">
                                                    Starz Encore</th>
                                                <td id="spectrum_7_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_8_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_8_premium_Text">
                                                    Sports Pack</th>
                                                <td id="spectrum_8_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_9_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_9_premium_Text">
                                                    Fox Soccer Plus</th>
                                                <td id="spectrum_9_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_10_Spectrum" style="display: none">
                                                <th style='text-align:left;' scope="row" id="spectrum_10_premium_Text">
                                                    MLB Extra</th>
                                                <td id="spectrum_10_premium_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style='text-align:left;' style="font-weight: bold" scope="row">TOTAL
                                                </th>
                                                <td id="spectrum_TotalTelevision_Price">Larry</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px;text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="spectrum_fiber_Text"></th>
                                                <td id="spectrum_fiber_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="spectrum_modernRental_Text"></th>
                                                <td id="spectrum_modernRental_Price"></td>
                                            </tr>
                                            <tr id="addPhone_Spectrum">
                                                <th style='text-align:left;' scope="row" id="spectrum_addPhone_Text">
                                                    Phone</th>
                                                <td id="spectrum_addPhone_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="spectrum_TotalInternet_Price">Larry</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="spectrum_bundlediscount_Text">
                                                    Bundle Discount
                                                </th>
                                                <td id="spectrum_bundlediscount_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="spectrum_installationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="spectrum_installationFee_Price"></td>
                                            </tr>
                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="spectrum_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- METRONET -->
                <div id="tabDetails_4" style="display: none">
                    <h1 class="section-heading-main">METRONET</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">METRONET TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u><a href="https://www.metronetinc.com/channel-lineup/">
                                            Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="metronet_channelLineup_checkboxes" onchange="runOperation_Tab4()"
                                                id="basicTV" value="$18.49" />
                                            <label class="form-check-label font-weight-bold" for="basicTV">
                                                Basic TV ($18.49)
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="metronet_channelLineup_checkboxes" onchange="runOperation_Tab4()"
                                                id="standardTV" checked value="$90.41" />
                                            <label class="form-check-label font-weight-bold" for="standardTV">Standard
                                                TV ($90.41)
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="metronet_channelLineup_checkboxes" onchange="runOperation_Tab4()"
                                                id="preferredTV" value="$102.12" />
                                            <label class="form-check-label font-weight-bold" for="preferredTV">
                                                Preferred TV ($102.12)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TV's</p>
                                        <input type="text" id="metronet_tv" />
                                        <!-- -------------- -->
                                        <p class="label-heading">DVR's</p>
                                        <input type="text" id="metronet_dvr" />
                                        <!-- -------------- -->

                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Premium Options</p>
                                            <div class="checkbox-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="metronet_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab4()" id="metronet_HBO"
                                                        value="$15.00" />
                                                    <label class="form-check-label" for="metronet_HBO">
                                                        HBO Max
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="metronet_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab4()" id="metronet_Showtime"
                                                        value="$8.50" />
                                                    <label class="form-check-label" for="metronet_Showtime">
                                                        Showtime
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="metronet_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab4()" id="metronet_Cinemax"
                                                        value="$8.47" checked />
                                                    <label class="form-check-label" for="metronet_Cinemax">
                                                        Cinemax
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="metronet_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab4()" id="metronet_Starz"
                                                        value="$7.18" />
                                                    <label class="form-check-label" for="metronet_Starz">
                                                        Starz
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="metronet_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab4()" id="metronet_SportsPackage"
                                                        value="$4.52" />
                                                    <label class="form-check-label" for="metronet_SportsPackage">
                                                        Sports Package
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">Metronet Internet Options</h3>
                            <div style="text-align: center">
                                <label class="label-heading">Modem Rental</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="metronet_modernRental"
                                            onchange="runOperation_Tab4()" id="metronet_WholeHome" checked
                                            value="Whole Home Wifi" />
                                        <label class="form-check-label" for="metronet_WholeHome">Whole Home Wi-Fi
                                            ($9.95)
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="metronet_modernRental"
                                            onchange="runOperation_Tab4()" id="metronet_TechnologyService"
                                            value="Technology Service Fee" />
                                        <label class="form-check-label" for="metronet_TechnologyService">Technology
                                            Service Fee ($9.95)</label>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <input type="text" id="metronet_Internet" />
                                </div>
                                <!-- -------------- -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="metronet_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab4()" id="metronet_SelfInstall"
                                                    value="$9.99" checked />
                                                <label class="form-check-label" for="metronet_SelfInstall">
                                                    Self Installation ($0)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="metronet_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab4()" id="metronet_TechInstall"
                                                    value="$25" />
                                                <label class="form-check-label" for="metronet_TechInstall">
                                                    Tech Installation ($25)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Add Phone</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="metronet_AddPhone"
                                                    id="metronet_AddPhoneYes" value="yes" onchange="runOperation_Tab4()"
                                                    checked />
                                                <label class="form-check-label" for="metronet_AddPhoneYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="metronet_AddPhone"
                                                    id="metronet_AddPhoneNo" onchange="runOperation_Tab4()"
                                                    value="no" />
                                                <label class="form-check-label" for="metronet_AddPhoneNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="metronet_TopSellingPointsSection">
                                        <tbody id="metronet_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="metronet_RequiredNewServiceInfoSection">
                                        <tbody id="metronet_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="metronet_RequiredDisconnectionInformationSection">
                                        <tbody id="metronet_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="metronet_AdditionalServiceInformationSection">
                                        <tbody id="metronet_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="metronet_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="metronet_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="metronet_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="metronet_UpdateSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="metronet_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="metronet_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="metronetTelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="metronet_ChannelLineup_Text"></th>
                                                <td id="metronet_ChannelLineup_Price"></td>
                                            </tr>
                                            <tr id="tvbox_1_Text_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row" id="metronet_tvbox_1_Text">1st
                                                    TV Box</th>
                                                <td id="metronet_tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row" id="metronet_tvbox_2_Text">2nd
                                                    TV Box</th>
                                                <td id="metronet_tvbox_2_Price"></td>
                                            </tr>

                                            <!-- <tr>
                        <th scope="row" id="comcast_equipment_Text"></th>
                        <td id="comcast_equipment_Price"></td>
                      </tr> -->
                                            <tr id="dvrbox_1_Text_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row" id="metronet_dvrbox_1_Text">1st
                                                    DVR Box</th>
                                                <td id="metronet_dvrbox_1_Price"></td>
                                            </tr>

                                            <tr id="premiumText_1_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row" id="metronet_1_premium_Text">
                                                    HBO Max</th>
                                                <td id="metronet_1_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_2_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row" id="metronet_2_premium_Text">
                                                    Showtime</th>
                                                <td id="metronet_2_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_3_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row" id="metronet_3_premium_Text">
                                                    Cinemax</th>
                                                <td id="metronet_3_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_4_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row" id="metronet_4_premium_Text">
                                                    Starz</th>
                                                <td id="metronet_4_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_5_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row" id="metronet_5_premium_Text">
                                                    Sports Package</th>
                                                <td id="metronet_5_premium_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style="font-weight: bold; text-align:left;" scope="row">TOTAL</th>
                                                <td id="metronet_TotalTelevision_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px; text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="metronet_fiber_Text">1</th>
                                                <td id="metronet_fiber_Price">Mark</td>
                                            </tr>
                                            <tr id="modemRental_1_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="metronet_modernRental_1_Text">2</th>
                                                <td id="metronet_modernRental_1_Price">Jacob</td>
                                            </tr>
                                            <tr id="modemRental_2_Metronet" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="metronet_modernRental_2_Text">2</th>
                                                <td id="metronet_modernRental_2_Price">Jacob</td>
                                            </tr>
                                            <tr id="addPhone_Metronet">
                                                <th style='text-align:left;' scope="row" id="metronet_addPhone_Text">
                                                    Phone</th>
                                                <td id="metronet_addPhone_Price"></td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="metronet_TotalInternet_Price">Larry</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="metronet_installationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="metronet_installationFee_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">Bundle Discount</th>
                                                <td id="metronet_discount_Price"></td>
                                            </tr>
                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="metronet_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- FRONTIER -->
                <div id="tabDetails_5" style="display: none">
                    <h1 class="section-heading-main">FRONTIER</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">Frontier Internet Options</h3>
                            <div style="text-align: center">
                                <label class="label-heading">Modem Rental</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="frontier_modernRental"
                                            onchange="runOperation_Tab5()" id="frontier_Yes" checked value="Yes" />
                                        <label class="form-check-label" for="frontier_Yes">Yes </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="frontier_modernRental"
                                            onchange="runOperation_Tab5()" id="frontier_No" value="No" />
                                        <label class="form-check-label" for="frontier_No">No </label>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <input type="text" id="frontier_Internet" />
                                </div>
                                <!-- -------------- -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="frontier_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab5()" id="frontier_SelfInstall" value="$0"
                                                    checked />
                                                <label class="form-check-label" for="frontier_SelfInstall">
                                                    Self Installation ($0)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="frontier_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab5()" id="frontier_TechInstall"
                                                    value="$85" />
                                                <label class="form-check-label" for="frontier_TechInstall">
                                                    Tech Installation ($85 )
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>

                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="frontier_TopSellingPointsSection">
                                        <tbody id="frontier_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="frontier_RequiredNewServiceInfoSection">
                                        <tbody id="frontier_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="frontier_RequiredDisconnectionInformationSection">
                                        <tbody id="frontier_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="frontier_AdditionalServiceInformationSection">
                                        <tbody id="frontier_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="frontier_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="frontier_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="frontier_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="frontier_UpdateSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="frontier_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="frontier_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px; text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="frontier_fiber_Text"></th>
                                                <td id="frontier_fiber_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="frontier_modernRental_Text"></th>
                                                <td id="frontier_modernRental_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="frontier_TotalInternet_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="frontier_installationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="frontier_installationFee_Price"></td>
                                            </tr>
                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="frontier_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- DIRECTV -->
                <div id="tabDetails_6" style="display: none">
                    <h1 class="section-heading-main">DirecTV</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">DirecTV TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u><a href="https://www.att.com/channels/directv/">
                                            Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="directv_channelLineup_checkboxes" onchange="runOperation_Tab6()"
                                                id="directv_PreferredChoice" value="$59.99" />
                                            <label class="form-check-label font-weight-bold"
                                                for="directv_PreferredChoice">
                                                Preferred Choice ($59.99)
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="directv_channelLineup_checkboxes" onchange="runOperation_Tab6()"
                                                id="directv_Entertainment" checked value="$64.99" />
                                            <label class="form-check-label font-weight-bold"
                                                for="directv_Entertainment">Entertainment ($64.99)
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="directv_channelLineup_checkboxes" onchange="runOperation_Tab6()"
                                                id="directv_Choice" value="$69.99" />
                                            <label class="form-check-label font-weight-bold" for="directv_Choice">
                                                Choice ($69.99)
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="directv_channelLineup_checkboxes" onchange="runOperation_Tab6()"
                                                id="directv_Ultimate" value="$84.99" />
                                            <label class="form-check-label font-weight-bold" for="directv_Ultimate">
                                                Ultimate ($84.99)
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="directv_channelLineup_checkboxes" onchange="runOperation_Tab6()"
                                                id="directv_Premier" value="$134.99" />
                                            <label class="form-check-label font-weight-bold" for="directv_Premier">
                                                Premier ($134.99)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TV's</p>
                                        <input type="text" id="directv_tv" />
                                        <!-- -------------- -->

                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Premium Options</p>
                                            <div class="checkbox-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="directv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab6()" id="directv_HBO" />
                                                    <label class="form-check-label" for="directv_HBO">
                                                        HBO Max
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="directv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab6()" id="directv_Cinemax" />
                                                    <label class="form-check-label" for="directv_Cinemax">
                                                        Cinemax
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="directv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab6()" id="directv_Starz" checked />
                                                    <label class="form-check-label" for="directv_Starz">
                                                        Starz
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="directv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab6()" id="directv_Showtime" />
                                                    <label class="form-check-label" for="directv_Showtime">
                                                        Showtime
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="directv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab6()" id="directv_SportsPack" />
                                                    <label class="form-check-label" for="directv_SportsPack">
                                                        Sports Pack
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="directv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab6()" id="directv_MLB_Extra" />
                                                    <label class="form-check-label" for="directv_MLB_Extra">
                                                        MLB Extra Innings
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="directv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab6()" id="directv_FoxSoccerPlus" />
                                                    <label class="form-check-label" for="directv_FoxSoccerPlus">
                                                        Fox Soccer Plus
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="directv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab6()" id="directv_MLS_DirectKick" />
                                                    <label class="form-check-label" for="directv_MLS_DirectKick">
                                                        MLS Direct Kick
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="directv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab6()" id="directv_NFL_SundayTicket" />
                                                    <label class="form-check-label" for="directv_NFL_SundayTicket">
                                                        NFL Sunday Ticket
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Auto Pay</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="directv_AutoPay"
                                                    id="directv_AutoPayYes" value="yes" onchange="runOperation_Tab6()"
                                                    checked />
                                                <label class="form-check-label" for="directv_AutoPayYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="directv_AutoPay"
                                                    id="directv_AutoPayNo" onchange="runOperation_Tab6()" value="no" />
                                                <label class="form-check-label" for="directv_AutoPayNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="directv_TopSellingPointsSection">
                                        <tbody id="directv_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="directv_RequiredNewServiceInfoSection">
                                        <tbody id="directv_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="directv_RequiredDisconnectionInformationSection">
                                        <tbody id="directv_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="directv_AdditionalServiceInformationSection">
                                        <tbody id="directv_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->


                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="directv_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="directv_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="directv_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="directv_UpdateSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="directv_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="directv_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="directvTelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="directv_ChannelLineup_Text"></th>
                                                <td id="directv_ChannelLineup_Price"></td>
                                            </tr>
                                            <tr id="tvbox_1_Text_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_tvbox_1_Text">1st
                                                    TV Box</th>
                                                <td id="directv_tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_tvbox_2_Text">2nd
                                                    TV Box</th>
                                                <td id="directv_tvbox_2_Price"></td>
                                            </tr>
                                            <tr id="tvbox_3_Text_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_tvbox_3_Text">3rd
                                                    TV Box</th>
                                                <td id="directv_tvbox_3_Price"></td>
                                            </tr>
                                            <tr id="tvbox_4_Text_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_tvbox_4_Text">4th
                                                    TV Box</th>
                                                <td id="directv_tvbox_4_Price"></td>
                                            </tr>
                                            <tr id="tvbox_5_Text_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_tvbox_5_Text">5th
                                                    TV Box</th>
                                                <td id="directv_tvbox_5_Price"></td>
                                            </tr>
                                            <tr id="tvbox_6_Text_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_tvbox_6_Text">6th
                                                    TV Box</th>
                                                <td id="directv_tvbox_6_Price"></td>
                                            </tr>
                                            <tr id="tvbox_7_Text_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_tvbox_7_Text">7th
                                                    TV Box</th>
                                                <td id="directv_tvbox_7_Price"></td>
                                            </tr>
                                            <tr id="tvbox_8_Text_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_tvbox_8_Text">8th
                                                    TV Box</th>
                                                <td id="directv_tvbox_8_Price"></td>
                                            </tr>

                                            <tr id="premiumText_1_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_1_premium_Text">HBO
                                                    Max</th>
                                                <td id="directv_1_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_2_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_2_premium_Text">
                                                    Cinemax</th>
                                                <td id="directv_2_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_3_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_3_premium_Text">
                                                    Starz</th>
                                                <td id="directv_3_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_4_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_4_premium_Text">
                                                    Showtime</th>
                                                <td id="directv_4_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_5_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_5_premium_Text">
                                                    Sports Pack</th>
                                                <td id="directv_5_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_6_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_6_premium_Text">MLB
                                                    Extra Innings</th>
                                                <td id="directv_6_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_7_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_7_premium_Text">Fox
                                                    Soccer Plus</th>
                                                <td id="directv_7_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_8_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_8_premium_Text">MLS
                                                    Direct Kick</th>
                                                <td id="directv_8_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_9_Directv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="directv_9_premium_Text">NFL
                                                    Sunday Ticket</th>
                                                <td id="directv_9_premium_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style='text-align:left;' style="font-weight: bold" scope="row">TOTAL
                                                </th>
                                                <td id="directv_TotalTelevision_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="directv_installationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="directv_installationFee_Price">Free</td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="directv_Autopay_Text">Auto
                                                    Pay</th>
                                                <td id="directv_Autopay_Price"></td>
                                            </tr>
                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="directv_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- I3 BROADBAND -->
                <div id="tabDetails_7" style="display: none">
                    <h1 class="section-heading-main">I3 BROADBAND</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">I3 BROADBAND TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u><a href="https://i3broadband.com/channel-lineup/Channel-LineUp-Peoria.pdf">
                                            Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="i3_Broadband_channelLineup_checkboxes"
                                                onchange="runOperation_Tab7()" id="i3_Broadband_mustView_TV"
                                                value="Must View TV" />
                                            <label class="form-check-label font-weight-bold"
                                                for="i3_Broadband_mustView_TV">
                                                Must View TV
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="i3_Broadband_channelLineup_checkboxes"
                                                onchange="runOperation_Tab7()" id="i3_Broadband_maxView_TV" checked
                                                value="Max View TV" />
                                            <label class="form-check-label font-weight-bold"
                                                for="i3_Broadband_maxView_TV">Max View TV
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="i3_Broadband_channelLineup_checkboxes"
                                                onchange="runOperation_Tab7()" id="i3_Broadband_megaView_TV"
                                                value="Mega View TV" />
                                            <label class="form-check-label font-weight-bold"
                                                for="i3_Broadband_megaView_TV">
                                                Mega View TV
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TV's</p>
                                        <input type="text" id="i3_Broadband_tv" />
                                        <!-- -------------- -->
                                        <p class="label-heading">Whole Home DVR's</p>
                                        <input type="text" id="i3_Broadband_dvr" />
                                        <!-- -------------- -->

                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Premium Options</p>
                                            <div class="checkbox-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="i3_Broadband_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab7()" id="i3_Broadband_HBO" />
                                                    <label class="form-check-label" for="i3_Broadband_HBO">
                                                        HBO Max
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="i3_Broadband_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab7()" id="i3_Broadband_Showtime" />
                                                    <label class="form-check-label" for="i3_Broadband_Showtime">
                                                        Showtime
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="i3_Broadband_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab7()" id="i3_Broadband_Cinemax"
                                                        checked />
                                                    <label class="form-check-label" for="i3_Broadband_Cinemax">
                                                        Cinemax
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="i3_Broadband_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab7()" id="i3_Broadband_Starz" />
                                                    <label class="form-check-label" for="i3_Broadband_Starz">
                                                        Starz
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="i3_Broadband_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab7()" id="i3_Broadband_MoviesPlus>" />
                                                    <label class="form-check-label" for="i3_Broadband_MoviesPlus>">
                                                        Movies Plus
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="i3_Broadband_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab7()" id="i3_Broadband_SportsPlus" />
                                                    <label class="form-check-label" for="i3_Broadband_SportsPlus">
                                                        Sports Plus
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">
                                I3 Broadband Internet Options
                            </h3>
                            <div>
                                <p class="label-heading">Wifi Pods</p>
                                <input type="text" id="i3_Broadband_Wifi_Pods" />
                            </div>
                            <div>
                                <p class="label-heading">Internet</p>
                                <input type="text" id="i3_Broadband_Internet" />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="i3_Broadband_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab7()" id="i3_Broadband_TechInstall"
                                                    value="Free" checked />
                                                <label class="form-check-label" for="i3_Broadband_TechInstall">
                                                    Tech Installation (Free)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Add Phone Fiber</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="i3_Broadband_AddPhone" id="i3_Broadband_AddPhoneYes"
                                                    value="yes" onchange="runOperation_Tab7()" checked />
                                                <label class="form-check-label" for="i3_Broadband_AddPhoneYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="i3_Broadband_AddPhone" id="i3_Broadband_AddPhoneNo"
                                                    onchange="runOperation_Tab7()" value="no" />
                                                <label class="form-check-label" for="i3_Broadband_AddPhoneNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="i3_Broadband_TopSellingPointsSection">
                                        <tbody id="i3_Broadband_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="i3_Broadband_RequiredNewServiceInfoSection">
                                        <tbody id="i3_Broadband_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="i3_Broadband_RequiredDisconnectionInformationSection">
                                        <tbody id="i3_Broadband_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="i3_Broadband_AdditionalServiceInformationSection">
                                        <tbody id="i3_Broadband_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="i3_Broadband_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="i3_Broadband_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="i3_Broadband_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="i3_Broadband_UpdateSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="i3_Broadband_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="i3_Broadband_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="i3_BroadbandTelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_ChannelLineup_Text"></th>
                                                <td id="i3_Broadband_ChannelLineup_Price"></td>
                                            </tr>
                                            <tr id="tvbox_1_Text_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row" id="i3_Broadband_tvbox_1_Text">
                                                    1st TV Box</th>
                                                <td id="i3_Broadband_tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row" id="i3_Broadband_tvbox_2_Text">
                                                    2nd TV Box</th>
                                                <td id="i3_Broadband_tvbox_2_Price"></td>
                                            </tr>
                                            <tr id="tvbox_3_Text_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row" id="i3_Broadband_tvbox_3_Text">
                                                    3rd TV Box</th>
                                                <td id="i3_Broadband_tvbox_3_Price"></td>
                                            </tr>
                                            <tr id="tvbox_4_Text_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row" id="i3_Broadband_tvbox_4_Text">
                                                    4th TV Box</th>
                                                <td id="i3_Broadband_tvbox_4_Price"></td>
                                            </tr>
                                            <tr id="tvbox_5_Text_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row" id="i3_Broadband_tvbox_5_Text">
                                                    5th TV Box</th>
                                                <td id="i3_Broadband_tvbox_5_Price"></td>
                                            </tr>

                                            <tr id="dvrbox_1_Text_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_dvrbox_1_Text">Whole Home DVR</th>
                                                <td id="i3_Broadband_dvrbox_1_Price"></td>
                                            </tr>

                                            <tr id="premiumText_1_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_1_premium_Text">HBO Max</th>
                                                <td id="i3_Broadband_1_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_2_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_2_premium_Text">Showtime</th>
                                                <td id="i3_Broadband_2_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_3_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_3_premium_Text">Cinemax</th>
                                                <td id="i3_Broadband_3_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_4_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_4_premium_Text">Starz</th>
                                                <td id="i3_Broadband_4_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_5_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_5_premium_Text">Movies Plus</th>
                                                <td id="i3_Broadband_5_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_6_i3_Broadband" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_6_premium_Text">Sports Plus</th>
                                                <td id="i3_Broadband_6_premium_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style="font-weight: bold; text-align:left;" scope="row">TOTAL</th>
                                                <td id="i3_Broadband_TotalTelevision_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px; text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="i3_Broadband_fiber_Text">
                                                </th>
                                                <td id="i3_Broadband_fiber_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_wifiPods_Text"></th>
                                                <td id="i3_Broadband_wifiPods_Price"></td>
                                            </tr>

                                            <tr id="addPhone_i3_Broadband">
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_addPhone_Text">Phone</th>
                                                <td id="i3_Broadband_addPhone_Price"></td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="i3_Broadband_TotalInternet_Price">Larry</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="i3_Broadband_installationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="i3_Broadband_installationFee_Price">Free</td>
                                            </tr>

                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="i3_Broadband_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- WOW -->
                <div id="tabDetails_8" style="display: none">
                    <h1 class="section-heading-main">WOW</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">Wow TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u><a href="https://www.wowway.com/support/tv/channel-lineups/illinois/chicagoland">
                                            Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="wow_channelLineup_checkboxes" onchange="runOperation_Tab8()"
                                                id="wow_smallCable" value="Small Cable" />
                                            <label class="form-check-label font-weight-bold" for="wow_smallCable">
                                                Small Cable
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="wow_channelLineup_checkboxes" onchange="runOperation_Tab8()"
                                                id="wow_mediumCable" value="Medium Cable" checked />
                                            <label class="form-check-label font-weight-bold"
                                                for="wow_mediumCable">Medium Cable
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="wow_channelLineup_checkboxes" onchange="runOperation_Tab8()"
                                                id="wow_largeCable" value="Large Cable" />
                                            <label class="form-check-label font-weight-bold" for="wow_largeCable">
                                                Large Cable
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TV's</p>
                                        <input type="text" id="wow_tv" />

                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">Wow Internet Options</h3>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Wifi Modem Rental</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wow_ModemRental"
                                                    id="wow_ModemRentalYes" value="yes" onchange="runOperation_Tab8()"
                                                    checked />
                                                <label class="form-check-label" for="wow_ModemRentalYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wow_ModemRental"
                                                    id="wow_ModemRentalNo" onchange="runOperation_Tab8()" value="no" />
                                                <label class="form-check-label" for="wow_ModemRentalNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Whole Home Wifi</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wow_WholeHomeWifi"
                                                    id="wow_WholeHomeWifi_Yes" value="yes"
                                                    onchange="runOperation_Tab8()" checked />
                                                <label class="form-check-label" for="wow_WholeHomeWifi_Yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wow_WholeHomeWifi"
                                                    id="wow_WholeHomeWifi_No" onchange="runOperation_Tab8()"
                                                    value="no" />
                                                <label class="form-check-label" for="wow_WholeHomeWifi_No">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="label-heading">Internet</p>
                                <input type="text" id="wow_Internet" />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Add Phone Fiber</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wow_AddPhone"
                                                    id="wow_AddPhoneYes" value="yes" onchange="runOperation_Tab8()"
                                                    checked />
                                                <label class="form-check-label" for="wow_AddPhoneYes"> Yes </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wow_AddPhone"
                                                    id="wow_AddPhoneNo" onchange="runOperation_Tab8()" value="no" />
                                                <label class="form-check-label" for="wow_AddPhoneNo"> No </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="wow_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab8()" id="wow_SelfInstall"
                                                    value="Self Installation" />
                                                <label class="form-check-label" for="wow_SelfInstall">
                                                    Self Installation
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="wow_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab8()" id="wow_TechInstall" checked
                                                    value="Tech Installation" />
                                                <label class="form-check-label" for="wow_TechInstall">
                                                    Tech Installation
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="wow_TopSellingPointsSection">
                                        <tbody id="wow_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="wow_RequiredNewServiceInfoSection">
                                        <tbody id="wow_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="wow_RequiredDisconnectionInformationSection">
                                        <tbody id="wow_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="wow_AdditionalServiceInformationSection">
                                        <tbody id="wow_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="wow_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="wow_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="wow_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="wow_UpdateSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="wow_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="wow_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="wow_TelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="wow_ChannelLineup_Text">
                                                </th>
                                                <td id="wow_ChannelLineup_Price"></td>
                                            </tr>
                                            <tr id="tvbox_1_Text_wow" style="display: none">
                                                <th style='text-align:left;' scope="row" id="wow_tvbox_1_Text">1st TV
                                                    Box</th>
                                                <td id="wow_tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_wow" style="display: none">
                                                <th style='text-align:left;' scope="row" id="wow_tvbox_2_Text">2nd TV
                                                    Box</th>
                                                <td id="wow_tvbox_2_Price"></td>
                                            </tr>
                                            <tr id="tvbox_3_Text_wow" style="display: none">
                                                <th style='text-align:left;' scope="row" id="wow_tvbox_3_Text">3rd TV
                                                    Box</th>
                                                <td id="wow_tvbox_3_Price"></td>
                                            </tr>
                                            <tr id="tvbox_4_Text_wow" style="display: none">
                                                <th style='text-align:left;' scope="row" id="wow_tvbox_4_Text">4th TV
                                                    Box</th>
                                                <td id="wow_tvbox_4_Price"></td>
                                            </tr>
                                            <tr id="tvbox_5_Text_wow" style="display: none">
                                                <th style='text-align:left;' scope="row" id="wow_tvbox_5_Text">5th TV
                                                    Box</th>
                                                <td id="wow_tvbox_5_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style="font-weight: bold;text-align:left;" scope="row">TOTAL</th>
                                                <td id="wow_TotalTelevision_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px;text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr id="wifiModemRental_wow">
                                                <th style='text-align:left;' scope="row" id="wow_wifimodemRental_Text">
                                                    Wifi Modem Rental
                                                </th>
                                                <td id="wow_wifimodemRental_Price"></td>
                                            </tr>
                                            <tr id="wholeHomeWifi_wow">
                                                <th style='text-align:left;' scope="row" id="wow_wholeHomeWifi_Text">
                                                    Whole Home Wifi</th>
                                                <td id="wow_wholeHomeWifi_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="wow_fiber_Text"></th>
                                                <td id="wow_fiber_Price"></td>
                                            </tr>

                                            <tr id="addPhone_wow">
                                                <th style='text-align:left;' scope="row" id="wow_addPhone_Text">Add
                                                    Phone?</th>
                                                <td id="wow_addPhone_Price"></td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="wow_TotalInternet_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="wow_installationFee_Text">
                                                    INSTALLATION FEE</th>
                                                <td id="wow_installationFee_Price"></td>
                                            </tr>

                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="wow_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- MEDIACOM -->
                <div id="tabDetails_9" style="display: none">
                    <h1 class="section-heading-main">MEDIACOM</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">Mediacom TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u><a href="https://mediacomtoday-lineup.com/"> Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="mediacom_channelLineup_checkboxes" onchange="runOperation_Tab9()"
                                                id="mediacom_local_TV" value="Local TV" />
                                            <label class="form-check-label font-weight-bold" for="mediacom_local_TV">
                                                Local TV
                                            </label>
                                            <p style="font-size: 11px">50+ Channels</p>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="mediacom_channelLineup_checkboxes" onchange="runOperation_Tab9()"
                                                id="mediacom_essential_TV" checked value="Essential TV" />
                                            <label class="form-check-label font-weight-bold"
                                                for="mediacom_essential_TV">Essential TV
                                            </label>
                                            <p style="font-size: 11px">125+ Channels</p>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="mediacom_channelLineup_checkboxes" onchange="runOperation_Tab9()"
                                                id="mediacom_variety_TV" value="Variety TV" />
                                            <label class="form-check-label font-weight-bold" for="mediacom_variety_TV">
                                                Variety TV
                                            </label>
                                            <p style="font-size: 11px">170+ Channels</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TiVo Smart Box</p>
                                        <input type="text" id="mediacom_tv" />

                                        <!-- -------------- -->
                                        <div>
                                            <span style="font-size: 14px; font-weight: bold">
                                                <u>TiVo Single Room DVR Service</u></span>
                                            <div style="text-align: left">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="mediacom_SingleRoomDVR" id="mediacom_SingleRoomDVR_Yes"
                                                        value="yes" onchange="runOperation_Tab9()" checked />
                                                    <label class="form-check-label" for="mediacom_SingleRoomDVR_Yes">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="mediacom_SingleRoomDVR" id="mediacom_SingleRoomDVR_No"
                                                        onchange="runOperation_Tab9()" value="no" />
                                                    <label class="form-check-label" for="mediacom_SingleRoomDVR_No">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                        <div>
                                            <span style="font-size: 14px; font-weight: bold">
                                                <u>TiVo Multi Room DVR Service</u></span>
                                            <div style="text-align: left">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="mediacom_MultiRoomDVR" id="mediacom_MultiRoomDVR_Yes"
                                                        value="yes" onchange="runOperation_Tab9()" checked />
                                                    <label class="form-check-label" for="mediacom_MultiRoomDVR_Yes">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="mediacom_MultiRoomDVR" id="mediacom_MultiRoomDVR_No"
                                                        onchange="runOperation_Tab9()" value="no" />
                                                    <label class="form-check-label" for="mediacom_MultiRoomDVR_No">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Premium Options</p>
                                            <div class="checkbox-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="mediacom_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab9()" id="mediacom_HBO" />
                                                    <label class="form-check-label" for="mediacom_HBO">
                                                        HBO Max
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="mediacom_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab9()" id="mediacom_Cinemax" />
                                                    <label class="form-check-label" for="mediacom_Cinemax">
                                                        Cinemax
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="mediacom_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab9()" id="mediacom_Showtime" checked />
                                                    <label class="form-check-label" for="mediacom_Showtime">
                                                        Showtime
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="mediacom_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab9()" id="mediacom_Starz" />
                                                    <label class="form-check-label" for="mediacom_Starz">
                                                        Starz
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">Mediacom Internet Options</h3>
                            <div>
                                <span style="font-size: 14px; font-weight: bold">
                                    <u>Modem Rental</u></span>
                                <div style="text-align: left">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mediacom_ModemRental"
                                            id="mediacom_CustomerOwned" value="Customer Owned"
                                            onchange="runOperation_Tab9()" checked />
                                        <label class="form-check-label" for="mediacom_CustomerOwned">
                                            Customer Owned
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mediacom_ModemRental"
                                            id="mediacom_WifiRental" onchange="runOperation_Tab9()"
                                            value="Wifi Rental" />
                                        <label class="form-check-label" for="mediacom_WifiRental">
                                            Wifi Rental
                                            <span style="font-size: 11px">(Includes 2 Eero Devices covering 4,000sq
                                                ft)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="label-heading">Additional Eero Extenders</p>
                                <input type="text" id="mediacom_Additional_Eero" />
                            </div>
                            <div>
                                <p class="label-heading">Internet</p>
                                <input type="text" id="mediacom_Internet" />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="mediacom_InstallationOptions_checkboxes" checked
                                                    onchange="runOperation_Tab9()" id="mediacom_TechInstall"
                                                    value="Free" />
                                                <label class="form-check-label" for="mediacom_TechInstall">
                                                    Tech Installation (Free)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Add Phone?</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="mediacom_AddPhone"
                                                    id="mediacom_AddPhoneYes" value="yes" onchange="runOperation_Tab9()"
                                                    checked />
                                                <label class="form-check-label" for="mediacom_AddPhoneYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="mediacom_AddPhone"
                                                    id="mediacom_AddPhoneNo" onchange="runOperation_Tab9()"
                                                    value="no" />
                                                <label class="form-check-label" for="mediacom_AddPhoneNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="mediacom_TopSellingPointsSection">
                                        <tbody id="mediacom_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="mediacom_RequiredNewServiceInfoSection">
                                        <tbody id="mediacom_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="mediacom_RequiredDisconnectionInformationSection">
                                        <tbody id="mediacom_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="mediacom_AdditionalServiceInformationSection">
                                        <tbody id="mediacom_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->


                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="mediacom_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="mediacom_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="mediacom_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="mediacom_UpdateSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="mediacom_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="mediacom_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="mediacomTelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="mediacom_ChannelLineup_Text"></th>
                                                <td id="mediacom_ChannelLineup_Price"></td>
                                            </tr>
                                            <tr id="tvbox_1_Text_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row" id="mediacom_tvbox_1_Text">
                                                    TiVo Smart Box TV #1
                                                </th>
                                                <td id="mediacom_tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row" id="mediacom_tvbox_2_Text">
                                                    TiVo Smart Box TV #2
                                                </th>
                                                <td id="mediacom_tvbox_2_Price"></td>
                                            </tr>
                                            <tr id="tvbox_3_Text_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row" id="mediacom_tvbox_3_Text">
                                                    TiVo Smart Box TV #3
                                                </th>
                                                <td id="mediacom_tvbox_3_Price"></td>
                                            </tr>
                                            <tr id="tvbox_4_Text_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row" id="mediacom_tvbox_4_Text">
                                                    TiVo Smart Box TV #4
                                                </th>
                                                <td id="mediacom_tvbox_4_Price"></td>
                                            </tr>
                                            <tr id="tvbox_5_Text_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row" id="mediacom_tvbox_5_Text">
                                                    TiVo Smart Box TV #5
                                                </th>
                                                <td id="mediacom_tvbox_5_Price"></td>
                                            </tr>

                                            <tr id="SingleRoomDVR_1_Text_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="mediacom_SingleRoomDVR_1_Text">
                                                    TiVo Single Room DVR Service
                                                </th>
                                                <td id="mediacom_SingleRoomDVR_1_Price"></td>
                                            </tr>

                                            <tr id="MultiRoomDVR_1_Text_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row"
                                                    id="mediacom_MultiRoomDVR_1_Text">
                                                    TiVo Multi Room DVR Service
                                                </th>
                                                <td id="mediacom_MultiRoomDVR_1_Price"></td>
                                            </tr>

                                            <tr id="premiumText_1_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row" id="mediacom_1_premium_Text">
                                                    HBO Max</th>
                                                <td id="mediacom_1_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_2_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row" id="mediacom_2_premium_Text">
                                                    Cinemax</th>
                                                <td id="mediacom_2_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_3_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row" id="mediacom_3_premium_Text">
                                                    Showtime</th>
                                                <td id="mediacom_3_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_4_mediacom" style="display: none">
                                                <th style='text-align:left;' scope="row" id="mediacom_4_premium_Text">
                                                    Starz</th>
                                                <td id="mediacom_4_premium_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style="font-weight: bold;text-align:left;" scope="row">TOTAL</th>
                                                <td id="mediacom_TotalTelevision_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px;text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="mediacom_fiber_Text"></th>
                                                <td id="mediacom_fiber_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="mediacom_modemRental_Text">
                                                    Modem Rental</th>
                                                <td id="mediacom_modemRental_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="mediacom_EeroExtenders_Text"></th>
                                                <td id="mediacom_EeroExtenders_Price"></td>
                                            </tr>

                                            <tr id="addPhone_mediacom">
                                                <th style='text-align:left;' scope="row" id="mediacom_addPhone_Text">
                                                    Phone</th>
                                                <td id="mediacom_addPhone_Price"></td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="mediacom_TotalInternet_Price">Larry</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="mediacom_installationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="mediacom_installationFee_Price">Free</td>
                                            </tr>

                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="mediacom_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- HUGHES NET -->
                <div id="tabDetails_10" style="display: none">
                    <h1 class="section-heading-main">HUGHES NET</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">
                                Hughes Net Satelite Internet Options
                            </h3>
                            <p>All packages are 25mbps down and 3mbps up</p>
                            <div>
                                <span style="font-size: 14px; font-weight: bold">
                                    <u>Modem Rental</u></span>
                                <div style="text-align: left">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hughes_ModemRental"
                                            id="hughes_modemRental_Yes" onchange="runOperation_Tab10()" value="yes"
                                            checked />
                                        <label class="form-check-label" for="hughes_modemRental_Yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hughes_ModemRental"
                                            id="hughes_modemRental_No" value="no" onchange="runOperation_Tab10()" />
                                        <label class="form-check-label" for="hughes_modemRental_No">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- ------------ -->
                            <div>
                                <span style="font-size: 14px; font-weight: bold">
                                    <u>Purchase Modem</u></span>
                                <div style="text-align: left">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hughes_PurchaseModem"
                                            id="hughes_purchaseModem_Yes" onchange="runOperation_Tab10()" value="yes"
                                            checked />
                                        <label class="form-check-label" for="hughes_purchaseModem_Yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hughes_PurchaseModem"
                                            id="hughes_purchaseModem_No" onchange="runOperation_Tab10()" value="no" />
                                        <label class="form-check-label" for="hughes_purchaseModem_No">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ------------ -->
                            <div>
                                <p class="label-heading">Internet</p>
                                <input type="text" id="hughes_Internet" />
                            </div>
                            <!-- ------------ -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="hughes_InstallationOptions_checkboxes" checked
                                                    onchange="runOperation_Tab10()" id="hughes_TechInstall"
                                                    value="Free" />
                                                <label class="form-check-label" for="hughes_TechInstall">
                                                    Tech Installation
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>


                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="hughes_TopSellingPointsSection">
                                        <tbody id="hughes_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="hughes_RequiredNewServiceInfoSection">
                                        <tbody id="hughes_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="hughes_RequiredDisconnectionInformationSection">
                                        <tbody id="hughes_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="hughes_AdditionalServiceInformationSection">
                                        <tbody id="hughes_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->


                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>

                                <div>
                                    <table class="table" id="hughes_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="hughes_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px;text-align:left" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="hughes_fiber_Text"></th>
                                                <td id="hughes_fiber_Price"></td>
                                            </tr>
                                            <tr id="hughes_ModemRental" style="display: none">
                                                <th style='text-align:left;' scope="row" id="hughes_modemRental_Text">
                                                    Modem Rental</th>
                                                <td id="hughes_modemRental_Price"></td>
                                            </tr>
                                            <tr id="hughes_ModemPurchase" style="display: none">
                                                <th style='text-align:left;' scope="row" id="hughes_purchaseModem_Text">
                                                    Purcahse Modem</th>
                                                <td id="hughes_purchaseModem_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="hughes_TotalInternet_Price">Larry</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="hughes_installationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="hughes_installationFee_Price">Free</td>
                                            </tr>

                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="hughes_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- CENTURY LINK -->
                <div id="tabDetails_11" style="display: none">
                    <h1 class="section-heading-main">CENTURY LINK</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">
                                Century Link Internet Options
                            </h3>
                            <p>All packages are 25mbps down and 3mbps up</p>
                            <div>
                                <span style="font-size: 14px; font-weight: bold">
                                    <u>Modem Rental</u></span>
                                <div style="text-align: left">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="century_ModemRental"
                                            id="century_modemRental_Yes" onchange="runOperation_Tab11()" value="yes"
                                            checked />
                                        <label class="form-check-label" for="century_modemRental_Yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="century_ModemRental"
                                            id="century_modemRental_No" onchange="runOperation_Tab11()" value="no" />
                                        <label class="form-check-label" for="century_modemRental_No">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ------------ -->
                            <div>
                                <p class="label-heading">Internet</p>
                                <input type="text" id="century_Internet" />
                            </div>
                            <!-- ------------ -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="century_InstallationOptions_checkboxes" checked
                                                    onchange="runOperation_Tab11()" id="century_TechInstall"
                                                    value="Tech Installation" />
                                                <label class="form-check-label" for="century_TechInstall">
                                                    Tech Installation
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>



                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="century_TopSellingPointsSection">
                                        <tbody id="century_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="century_RequiredNewServiceInfoSection">
                                        <tbody id="century_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="century_RequiredDisconnectionInformationSection">
                                        <tbody id="century_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="century_AdditionalServiceInformationSection">
                                        <tbody id="century_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->


                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>

                                <div>
                                    <table class="table" id="century_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="century_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px;text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="century_fiber_Text"></th>
                                                <td id="century_fiber_Price"></td>
                                            </tr>
                                            <tr id="century_ModemRental" style="display: none">
                                                <th style='text-align:left;' scope="row" id="century_modemRental_Text">
                                                    Modem Rental</th>
                                                <td id="century_modemRental_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="century_TotalInternet_Price">Larry</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="century_installationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="century_installationFee_Price">Free</td>
                                            </tr>

                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="century_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- RCN -->
                <div id="tabDetails_12" style="display: none">
                    <h1 class="section-heading-main">RCN</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">RCN TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u><a href="https://www.rcn.com/chicago/tv/channel-lineups/">
                                            Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="rcn_channelLineup_checkboxes" onchange="runOperation_Tab12()"
                                                id="rcn_Basic_TV" value="Basic TV" />
                                            <label class="form-check-label font-weight-bold" for="rcn_Basic_TV">
                                                Basic TV
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-comcast" type="checkbox"
                                                name="rcn_channelLineup_checkboxes" onchange="runOperation_Tab12()"
                                                id="rcn_Signature_TV" checked value="Signature TV" />
                                            <label class="form-check-label font-weight-bold"
                                                for="rcn_Signature_TV">Signature TV
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TV's</p>
                                        <input type="text" id="rcn_tv" />

                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Premium Options</p>
                                            <div class="checkbox-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="rcn_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab12()" id="rcn_HBO" />
                                                    <label class="form-check-label" for="rcn_HBO"> HBO Max </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="rcn_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab12()" id="rcn_Cinemax" />
                                                    <label class="form-check-label" for="rcn_Cinemax">
                                                        Cinemax
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="rcn_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab12()" id="rcn_Showtime" checked />
                                                    <label class="form-check-label" for="rcn_Showtime">
                                                        Showtime/TMC
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="rcn_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab12()" id="rcn_Starz" />
                                                    <label class="form-check-label" for="rcn_Starz"> Starz </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="rcn_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab12()" id="rcn_PremierTotalPack" />
                                                    <label class="form-check-label" for="rcn_PremierTotalPack">
                                                        Premier Total Pack
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="rcn_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab12()" id="rcn_PremierFamilyAndKids" />
                                                    <label class="form-check-label" for="rcn_PremierFamilyAndKids">
                                                        Premier Family and Kids
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="rcn_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab12()" id="rcn_Entertainment" />
                                                    <label class="form-check-label" for="rcn_Entertainment">
                                                        Premier Entertainment
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="rcn_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab12()"
                                                        id="rcn_PremierNewsAndInformation" />
                                                    <label class="form-check-label" for="rcn_PremierNewsAndInformation">
                                                        Premier News annd Information
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="rcn_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab12()" id="rcn_PremierSports" />
                                                    <label class="form-check-label" for="rcn_PremierSports">
                                                        Premier Sports
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">RCN Internet Options</h3>
                            <div>
                                <span style="font-size: 14px; font-weight: bold">
                                    <u>Internet Equipment:</u></span>
                                <div style="text-align: left">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rcn_internetOptions"
                                            id="rcn_CustomerOwned" onchange="runOperation_Tab12()"
                                            value="Customer Owned Modem" />
                                        <label class="form-check-label" for="rcn_CustomerOwned">
                                            Customer Owned Modem(Free)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rcn_internetOptions"
                                            id="rcn_StandardWifiPlusModem" onchange="runOperation_Tab12()"
                                            value="Standard WiFi + Modem" />
                                        <label class="form-check-label" for="rcn_StandardWifiPlusModem">
                                            Standard WiFi + Modem
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rcn_internetOptions"
                                            id="rcn_WholeHomeWifiPlusModem" onchange="runOperation_Tab12()"
                                            value="Enhanced Whole Home WiFi + Modem" />
                                        <label class="form-check-label" for="rcn_WholeHomeWifiPlusModem">
                                            Enhanced Whole Home WiFi + Modem
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rcn_internetOptions"
                                            id="rcn_ProGamingWifiPlusModem" onchange="runOperation_Tab12()"
                                            value="Pro Gaming WiFi + Modem" checked />
                                        <label class="form-check-label" for="rcn_ProGamingWifiPlusModem">
                                            Pro Gaming WiFi + Modem
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <p class="label-heading">Internet</p>
                                <input type="text" id="rcn_Internet" />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <span style="font-size: 14px; font-weight: bold">
                                            <u>Add Phone?</u></span>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rcn_AddPhone"
                                                    id="rcn_AddPhoneYes" value="yes" onchange="runOperation_Tab12()"
                                                    checked />
                                                <label class="form-check-label" for="rcn_AddPhoneYes"> Yes </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rcn_AddPhone"
                                                    id="rcn_AddPhoneNo" onchange="runOperation_Tab12()" value="no" />
                                                <label class="form-check-label" for="rcn_AddPhoneNo"> No </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="rcn_InstallationOptions_checkboxes" checked
                                                    onchange="runOperation_Tab12()" id="rcn_SelfInstall"
                                                    value="Self Installation" />
                                                <label class="form-check-label" for="rcn_SelfInstall">
                                                    Self Installation
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="rcn_InstallationOptions_checkboxes" checked
                                                    onchange="runOperation_Tab12()" id="rcn_TechInstall"
                                                    value="Tech Installation" />
                                                <label class="form-check-label" for="rcn_TechInstall">
                                                    Tech Installation
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="rcn_TopSellingPointsSection">
                                        <tbody id="rcn_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="rcn_RequiredNewServiceInfoSection">
                                        <tbody id="rcn_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="rcn_RequiredDisconnectionInformationSection">
                                        <tbody id="rcn_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="rcn_AdditionalServiceInformationSection">
                                        <tbody id="rcn_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

                            <!-- -------------- -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="rcn_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="rcn_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="rcn_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="rcn_UpdateSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="rcn_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="rcn_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="rcn_TelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="rcn_ChannelLineup_Text">
                                                </th>
                                                <td id="rcn_ChannelLineup_Price"></td>
                                            </tr>
                                            <tr id="tvbox_1_Text_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_tvbox_1_Text">1st TV
                                                    Box</th>
                                                <td id="rcn_tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_tvbox_2_Text">2nd TV
                                                    Box</th>
                                                <td id="rcn_tvbox_2_Price"></td>
                                            </tr>
                                            <tr id="tvbox_3_Text_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_tvbox_3_Text">3rd TV
                                                    Box</th>
                                                <td id="rcn_tvbox_3_Price"></td>
                                            </tr>
                                            <tr id="tvbox_4_Text_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_tvbox_4_Text">4th TV
                                                    Box</th>
                                                <td id="rcn_tvbox_4_Price"></td>
                                            </tr>

                                            <tr id="premiumText_1_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_1_premium_Text">HBO Max
                                                </th>
                                                <td id="rcn_1_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_2_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_2_premium_Text">Cinemax
                                                </th>
                                                <td id="rcn_2_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_3_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_3_premium_Text">
                                                    Showtime</th>
                                                <td id="rcn_3_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_4_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_4_premium_Text">Starz
                                                </th>
                                                <td id="rcn_4_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_5_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_5_premium_Text">Premier
                                                    Total Pack</th>
                                                <td id="rcn_5_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_6_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_6_premium_Text">
                                                    Premier Family and Kids
                                                </th>
                                                <td id="rcn_6_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_7_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_7_premium_Text">Premier
                                                    Entertainment</th>
                                                <td id="rcn_7_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_8_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_8_premium_Text">
                                                    Premier News and Information
                                                </th>
                                                <td id="rcn_8_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_9_rcn" style="display: none">
                                                <th style='text-align:left;' scope="row" id="rcn_9_premium_Text">Premier
                                                    Sports</th>
                                                <td id="rcn_9_premium_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style="font-weight: bold;text-align:left" scope="row">TOTAL</th>
                                                <td id="rcn_TotalTelevision_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px;text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="rcn_fiber_Text"></th>
                                                <td id="rcn_fiber_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="rcn_modemRental_Text">Wi-Fi
                                                    Modem Rental</th>
                                                <td id="rcn_modemRental_Price"></td>
                                            </tr>

                                            <tr id="addPhone_rcn">
                                                <th style='text-align:left;' scope="row" id="rcn_addPhone_Text">Phone
                                                </th>
                                                <td id="rcn_addPhone_Price"></td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="rcn_TotalInternet_Price">Larry</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="rcn_installationFee_Text">
                                                    INSTALLATION FEE</th>
                                                <td id="rcn_installationFee_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style='text-align:left;' scope="row" id="rcn_activationFee_Text">
                                                    Activation FEE</th>
                                                <td id="rcn_activationFee_Price"></td>
                                            </tr>

                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="rcn_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ____________________________________________________________________________ -->
                <!-- COMCAST -->
                <div id="tabDetails_13">
                    <h1 class="section-heading-main"> AT&T_DTV Stream</h1>
                    <div class="row register-form">
                        <!-- ____________________________ -->
                        <div class="col-md-7">
                            <h3 class="section-heading text-center">AT&T_DTV TV Options</h3>
                            <div class="py-3">
                                <p style="color: #3fb718; font-size: 16px; font-weight: bold">
                                    <u><a href="https://www.xfinity.com/learn/channel-lineup">
                                            Channel Lineup</a></u>
                                </p>
                                <div class="row" style="text-align: left">
                                    <div class="col-md-6" style="margin-top: 10px">
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-at_t_dtv" type="checkbox"
                                                name="at_t_dtv_channelLineup_checkboxes" onchange="runOperation_Tab13()"
                                                id="at_t_dtv_Entertainment" value="$30" />
                                            <label class="form-check-label font-weight-bold"
                                                for="at_t_dtv_Entertainment">
                                                DTV Stream - Entertainment
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-at_t_dtv" type="checkbox"
                                                name="at_t_dtv_channelLineup_checkboxes" onchange="runOperation_Tab13()"
                                                id="at_t_dtv_Choice" checked value="$70" />
                                            <label class="form-check-label font-weight-bold" for="at_t_dtv_Choice">
                                                DTV Stream - Choice
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-at_t_dtv" type="checkbox"
                                                name="at_t_dtv_channelLineup_checkboxes" onchange="runOperation_Tab13()"
                                                id="at_t_dtv_Ultimate" value="$80" />
                                            <label class="form-check-label font-weight-bold" for="at_t_dtv_Ultimate">
                                                DTV Stream - Ultimate
                                            </label>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input channelLineup-at_t_dtv" type="checkbox"
                                                name="at_t_dtv_channelLineup_checkboxes" onchange="runOperation_Tab13()"
                                                id="at_t_dtv_Premier" value="$80" />
                                            <label class="form-check-label font-weight-bold" for="at_t_dtv_Premier">
                                                DTV Stream - Premier (HBOMax included)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="label-heading">TV's</p>
                                        <input type="text" id="at_t_dtv_tv" />
                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Equipment Options</p>
                                            <div style="text-align: left">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="at_t_dtv_EquipmentOptions_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_20HourDVR"
                                                        value="$10" />
                                                    <label class="form-check-label" for="at_t_dtv_20HourDVR">20 Hour
                                                        DVR (Free)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="at_t_dtv_EquipmentOptions_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_UnlimitedHourDVR"
                                                        value="$20" />
                                                    <label class="form-check-label"
                                                        for="at_t_dtv_UnlimitedHourDVR">Unlimited
                                                        DVR ($10)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                        <div>
                                            <p class="label-heading">Premium Options</p>
                                            <div class="checkbox-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_Desportes"
                                                        value="$5" />
                                                    <label class="form-check-label" for="at_t_dtv_Desportes">
                                                        Desportes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_EnEspanol"
                                                        value="$15" />
                                                    <label class="form-check-label" for="at_t_dtv_EnEspanol">
                                                        En Espanol
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_Brazilian" checked
                                                        value="$30" />
                                                    <label class="form-check-label" for="at_t_dtv_Brazilian">
                                                        Brazilian
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_Vietnamese"
                                                        value="$20" />
                                                    <label class="form-check-label" for="at_t_dtv_Vietnamese">
                                                        Vietnamese
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_LatinoKorean"
                                                        value="$30" />
                                                    <label class="form-check-label" for="at_t_dtv_LatinoKorean"> Latino
                                                        Korean
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_HBOMax"
                                                        value="$14.99" />
                                                    <label class="form-check-label" for="at_t_dtv_HBOMax">
                                                        HBOMax
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_Cinemax"
                                                        value="$11" />
                                                    <label class="form-check-label" for="at_t_dtv_Cinemax">
                                                        Cinemax
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_Epix" value="$6" />
                                                    <label class="form-check-label" for="at_t_dtv_Epix"> Epix</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_Showtime"
                                                        value="$11" />
                                                    <label class="form-check-label" for="at_t_dtv_Showtime">
                                                        Showtime
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_Starz"
                                                        value="$11" />
                                                    <label class="form-check-label" for="at_t_dtv_Starz">
                                                        Starz
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="at_t_dtv_PremiumChannels_checkboxes"
                                                        onchange="runOperation_Tab13()" id="at_t_dtv_MoviesExtraPack"
                                                        value="$5" />
                                                    <label class="form-check-label" for="at_t_dtv_MoviesExtraPack">
                                                        Movies Extra pack
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------- -->
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <!-- -------------- -->
                            <h3 class="section-heading text-center">Comcast Internet Options</h3>
                            <div style="text-align: center">
                                <label class="label-heading">Modem Rental</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="at_t_dtv_modernRental"
                                            onchange="runOperation_Tab13()" id="modemAndRouter_ModemRental" checked
                                            value="Modem & Router" />
                                        <label class="form-check-label" for="modemAndRouter_ModemRental">Modem &
                                            Router</label>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <input type="text" id="at_t_dtv_Internet" />
                                </div>
                                <!-- -------------- -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p class="label-heading">Installation Options</p>
                                        <div style="text-align: left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="at_t_dtv__InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab13()" id="at_t_dtv__Fiber" value="$0"
                                                    checked />
                                                <label class="form-check-label" for="at_t_dtv__Fiber">
                                                    Fiber($0)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="at_t_dtv_InstallationOptions_checkboxes"
                                                    onchange="runOperation_Tab13()" id="at_t_dtv_NonFiber"
                                                    value="$99" />
                                                <label class="form-check-label" for="at_t_dtv_NonFiber">
                                                    Non-fiber Internet ($99)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                            <h3 style="margin-top: 80px;" class="section-heading text-center">Top Selling Points</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="at_t_dtv_TopSellingPointsSection">
                                        <tbody id="at_t_dtv_TopSellingPointsSectionBody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required New Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="at_t_dtv_RequiredNewServiceInfoSection">
                                        <tbody id="at_t_dtv_RequiredNewServiceInfoSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Required Disconnection
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="at_t_dtv_RequiredDisconnectionInformationSection">
                                        <tbody id="at_t_dtv_RequiredDisconnectionInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <h3 style="margin-top: 20px;" class="section-heading text-center">Additional Service
                                Information</h3>
                            <div class="p-1">
                                <div>
                                    <table class="table" id="at_t_dtv_AdditionalServiceInformationSection">
                                        <tbody id="at_t_dtv_AdditionalServiceInformationSectionBody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- -------------- -->
                            <!-- ________________________________________________ -->
                            <!-- ________________________________________________ -->
                            <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
                            <!-- -------------- -->
                        </div>
                        <!-- ____________________________ -->
                        <div class="col-md-5">
                            <div class="summary-section">
                                <h3 style="text-align: center">Summary</h3>
                                <div>
                                    <table class="table" id="at_t_dtv_PromotionSection">
                                        <thead>
                                            <th style='text-align:left;'>Promotions</th>
                                        </thead>
                                        <tbody id="at_t_dtv_PromotionSectionBody"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="table" id="at_t_dtv_UpdateSection">
                                        <thead>
                                            <th style='text-align:left;'>Service Add-On’s</th>
                                        </thead>
                                        <tbody id="at_t_dtv_UpdateSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="at_t_dtv_InstallationOptionsSection">
                                        <thead>
                                            <th style='text-align:left;'>Installation Options</th>
                                        </thead>
                                        <tbody id="at_t_dtv_InstallationOptionsSectionBody"></tbody>
                                    </table>
                                </div>

                                <div>
                                    <table class="table" id="at_t_dtvTelevisionSummary">
                                        <thead>
                                            <th style='text-align:left;' colspan="2">Television Summary</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="at_t_dtv_ChannelLineup_Text"></th>
                                                <td style="display:none;" id="at_t_dtv_ChannelLineup_Price"></td>
                                            </tr>
                                            <tr id="tvbox_1_Text_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_tvbox_1_Text">1st
                                                    TV Box</th>
                                                <td id="at_t_dtv_tvbox_1_Price"></td>
                                            </tr>
                                            <tr id="tvbox_2_Text_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_tvbox_2_Text">2nd
                                                    TV Box</th>
                                                <td id="at_t_dtv_tvbox_2_Price"></td>
                                            </tr>
                                            <tr id="tvbox_3_Text_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_tvbox_3_Text">3rd
                                                    TV Box</th>
                                                <td id="at_t_dtv_tvbox_3_Price"></td>
                                            </tr>
                                            <tr id="tvbox_4_Text_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_tvbox_4_Text">4th
                                                    TV Box</th>
                                                <td id="at_t_dtv_tvbox_4_Price"></td>
                                            </tr>
                                            <tr id="tvbox_5_Text_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_tvbox_5_Text">5th
                                                    TV Box</th>
                                                <td id="at_t_dtv_tvbox_5_Price"></td>
                                            </tr>
                                            <tr id="tvbox_6_Text_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_tvbox_6_Text">6th
                                                    TV Box</th>
                                                <td id="at_t_dtv_tvbox_6_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_equipment_Text">
                                                </th>
                                                <td id="at_t_dtv_equipment_Price"></td>
                                            </tr>

                                            <tr id="premiumText_1_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_1_premium_Text">
                                                    Desportes
                                                </th>
                                                <td id="at_t_dtv_1_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_2_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_2_premium_Text">
                                                    En Espanol</th>
                                                <td id="at_t_dtv_2_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_3_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_3_premium_Text">
                                                    Brazilian</th>
                                                <td id="at_t_dtv_3_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_4_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_4_premium_Text">
                                                    Vietnamese</th>
                                                <td id="at_t_dtv_4_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_5_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_5_premium_Text">
                                                    Latino Korean</th>
                                                <td id="at_t_dtv_5_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_6_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_6_premium_Text">
                                                    HBOMax
                                                </th>
                                                <td id="at_t_dtv_6_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_7_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_7_premium_Text">
                                                    Cinemax
                                                </th>
                                                <td id="at_t_dtv_7_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_8_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_8_premium_Text">
                                                    Epix
                                                </th>
                                                <td id="at_t_dtv_8_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_9_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_9_premium_Text">
                                                    Showtime
                                                </th>
                                                <td id="at_t_dtv_9_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_10_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_10_premium_Text">
                                                    Starz
                                                </th>
                                                <td id="at_t_dtv_10_premium_Price"></td>
                                            </tr>
                                            <tr id="premiumText_11_At_t_dtv" style="display: none">
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_11_premium_Text">
                                                    Movies Extra pack
                                                </th>
                                                <td id="at_t_dtv_11_premium_Price"></td>
                                            </tr>

                                            <tr>
                                                <th style='text-align:left;' style="font-weight: bold" scope="row">TOTAL
                                                </th>
                                                <td id="at_t_dtv_TotalTelevision_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th style="font-size: 14px;text-align:left;" colspan="2">Internet Summary
                                            </th>
                                        </thead>
                                        <tbody>
                                            <!-- <tr>
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_fiber_Text">1</th>
                                                <td id="at_t_dtv_fiber_Price">Mark</td>
                                            </tr> -->
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="at_t_dtv_modernRental_Text">
                                                <td id="at_t_dtv_modernRental_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row">TOTAL</th>
                                                <td id="at_t_dtv_TotalInternet_Price"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style='text-align:left;' scope="row" id="at_t_dtv_discount_Text">
                                                    Bundle Price</th>
                                                <td id="at_t_dtv_bundle_Price"></td>
                                            </tr>
                                            <tr>
                                                <th style='text-align:left;' scope="row"
                                                    id="at_t_dtv_activationFee_Text">
                                                    INSTALLATION FEE
                                                </th>
                                                <td id="at_t_dtv_activationFee_Price"></td>
                                            </tr>

                                            <tr style="padding-top: 20px">
                                                <th style='text-align:left;' scope="row">GRAND TOTAL:</th>
                                                <td id="at_t_dtv_TotalOfAll_Price"></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- ------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ____________________________________________________________________________ -->
            </div>
            <div class="text-center" style="margin: 40px">
                <button type="button" name="" id="" style="color: white; background: #3fb718; margin-bottom: 40px"
                    class="btn btn-lg" onclick="SavesAllDataForCustomer()">
                    Save And Generate Unique Link
                </button>
            </div>

            <div class="text-center">
                <input type="text" class="form-group" id="staticEmail" placeholder="Enter Your Email" style="
							text-align:center;
								color: black;
								background: white;
								border: 1px solid;
								border-radius: 5px;
								width:34%;
								height: 40px;
							" value="" />
                <br>
                <button type="button" name="" id="" style="color: white; background: #3fb718; margin-bottom: 40px"
                    class="btn btn-lg" onclick="getSpecificUserData()">
                    Send Email
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="color: black; font-size: 28px" id="exampleModalLabel">
                                Successful
                            </h5>
                        </div>
                        <div style="font-size: 18px; color: black" class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" onclick="closeModal()" class="btn btn-secondary" data-dismiss="modal">
                                Skip
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ____________________________________________________________________________ -->
        </div>
        <!-- <div id="iframeForComparing_1" style="display: none; border: 2px solid">
				<iframe
					style="border: 0px"
					id="iframe_1"
					height="100%"
					width="100%"
					src=""
					title="iframe"
				></iframe>
			</div>
			<div id="iframeForComparing_2" style="display: none; border: 2px solid">
				<iframe
					style="border: 0px"
					id="iframe_2"
					height="100%"
					width="100%"
					src=""
					title="iframe"
				></iframe>
			</div> -->

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" style="top:70%;" id="myExampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Successful</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Email Send Successfully
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" style="top:70%;" id="myExampleModal2" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Successful</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Email Send Successfully ! <br>
                        But Without Unique Url
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
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
    <script src="js/data_At_t.js"></script>
    <script src="js/data_Comcast.js"></script>
    <script src="js/data_spectrum.js"></script>
    <script src="js/data_Metronet.js"></script>
    <script src="js/data_Frontier.js"></script>
    <script src="js/data_DirecTV.js"></script>
    <script src="js/data_I3_Broadband.js"></script>
    <script src="js/data_WOW.js"></script>
    <script src="js/data_Mediacom.js"></script>
    <script src="js/data_HughesNet.js"></script>
    <script src="js/data_CenturyLink.js"></script>
    <script src="js/data_RCN.js"></script>
    <script src="js/data_At_t_dtv.js"></script>

    <script src="js/cal.js"></script>
    <script src="js/storingCustomerData.js"></script>
    <script>
    function getSpecificUserData() {
        $.ajax({
            url: "./model/get_specific_user.php",
            type: "POST",
            data: {
                emailOfUser: UsernameOfCustomer,
            },
            success: function(data) {
                debugger;
                let userData = JSON.parse(data);
                sendEmail(userData);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest);
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
                console.log("ERROR");
            },
        });
    }

    var summaryMessage = "";
    var inputsMessage = "";

    function sendEmail(userData) {
        // ___________________________________________________
        // ___________________________________________________
        // AT & T Input Fields
        if (document.getElementById("tabDetails_1").style.display == "") {
            if (
                jQuery("input[name=comcast_channelLineup_checkboxes]:checked").val() !=
                undefined
            ) {
                var at_t_channelLineup_SelectedValue = document.getElementById(
                    jQuery("input[name=channelLineup_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var at_t_tvSlider_SelectedValue = slider1.val();

                // var at_t_equipmentOptions_SelectedValue = jQuery(
                // 	"input[name=equipmentOptions_checkboxes]:checked"
                // ).val();
                var at_t_equipmentOptions_SelectedValue = document.getElementById(
                    jQuery("input[name=equipmentOptions_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var at_t_premiumOptions_SelectedValue = [];
                var at_t_arrayForPremiumOptions = [
                    "HBO MAX = $14.99",
                    "Cinemax = $11",
                    "Show Time = $11",
                    "Starz = $11",
                    "Epix = $6",
                    "Movies Extra Pack = $5",
                    "NBA League Pass = $40",
                ];
                for (
                    let index = 0; index < document.getElementsByName("premiumChannels_checkboxes").length; index++
                ) {
                    if (
                        document.getElementsByName("premiumChannels_checkboxes")[index]
                        .checked == true
                    ) {
                        at_t_premiumOptions_SelectedValue.push(
                            at_t_arrayForPremiumOptions[index]
                        );
                    }
                }
            }
            var at_t_modemRental_SelectedValue = jQuery(
                "input[name=modernRental]:checked"
            ).val();

            var at_t_fiberTerritory_SelectedValue = slider2.val();

            var at_t_nonFiberTerritory_SelectedValue = slider3.val();

            inputsMessage = "<h1 style='text-align:center;'>AT & T</h1>";
            inputsMessage += "<h3 style='text-align:left;'>AT&T TV Options</h3>";
            inputsMessage +=
                "Channel Lineup = " + at_t_channelLineup_SelectedValue;
            inputsMessage += "<br> TV's = " + at_t_tvSlider_SelectedValue;
            inputsMessage +=
                "<br>Equipment Options = " + at_t_equipmentOptions_SelectedValue;
            for (
                let index = 0; index < at_t_premiumOptions_SelectedValue.length; index++
            ) {
                if (index == 0) {
                    inputsMessage +=
                        "<br>Premium Options = " + at_t_premiumOptions_SelectedValue[index];
                } else {
                    inputsMessage += "<br>" + at_t_premiumOptions_SelectedValue[index];
                }
            }
            inputsMessage += "<br><br><h3>AT&T Internet Options </h3>";
            inputsMessage += "Modem Rental = " + at_t_modemRental_SelectedValue;
            inputsMessage +=
                "<br>Fiber Territory = " + at_t_fiberTerritory_SelectedValue;
            inputsMessage +=
                "<br>Non-Fiber Territory = " + at_t_nonFiberTerritory_SelectedValue;

            summaryMessage =
                document.getElementsByClassName("summary-section")[0].innerHTML;
        } else if (document.getElementById("tabDetails_2").style.display == "") {
            // COMCAST Input Fields
            if (
                jQuery("input[name=comcast_channelLineup_checkboxes]:checked").val() !=
                undefined
            ) {
                var comcast_channelLineup_SelectedValue = document.getElementById(
                    jQuery("input[name=comcast_channelLineup_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var comcast_tvSlider_SelectedValue = slider4.val();

                var comcast_equipmentOptions_SelectedValue = document.getElementById(
                    jQuery("input[name=comcast_EquipmentOptions_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var comcast_premiumOptions_SelectedValue = [];
                var comcast_arrayForPremiumOptions = [
                    "HBO MAX = $14.99",
                    "Cinemax = $11",
                    "Show Time = $11",
                    "Starz = $11",
                    "Sports Package = $6",
                    "TMC = $40",
                ];
                for (
                    let index = 0; index <
                    document.getElementsByName("comcast_PremiumChannels_checkboxes").length; index++
                ) {
                    if (
                        document.getElementsByName("comcast_PremiumChannels_checkboxes")[index]
                        .checked == true
                    ) {
                        comcast_premiumOptions_SelectedValue.push(
                            comcast_arrayForPremiumOptions[index]
                        );
                    }
                }
            }
            var comcast_modemRental_SelectedValue = jQuery(
                "input[name=comcast_modernRental]:checked"
            ).val();

            var comcast_internetOptionsSlider_SelectedValue = slider5.val();

            var comcast_installationOptions_SelectedValue = document.getElementById(
                jQuery("input[name=comcast_InstallationOptions_checkboxes]:checked")[0].id
            ).nextSibling.nextSibling.outerText;

            var comcast_autopay_SelectedValue = jQuery(
                "input[name=comcast_Autoplay_checkboxes]:checked"
            ).val();

            var comcast_addphone_SelectedValue = jQuery(
                "input[name=comcast_AddPhone_checkboxes]:checked"
            ).val();

            inputsMessage = "<h1 style='text-align:center;'>COMCAST</h1>";
            inputsMessage += "<br><h3>COMCAST TV Options</h3>";
            inputsMessage +=
                "Channel Lineup = " + comcast_channelLineup_SelectedValue;
            inputsMessage += "<br> TV's = " + comcast_tvSlider_SelectedValue;
            inputsMessage +=
                "<br>Equipment Options = " + comcast_equipmentOptions_SelectedValue;
            for (
                let index = 0; index < comcast_premiumOptions_SelectedValue.length; index++
            ) {
                if (index == 0) {
                    inputsMessage +=
                        "<br>Premium Options = " + comcast_premiumOptions_SelectedValue[index];
                } else {
                    inputsMessage += "<br>" + comcast_premiumOptions_SelectedValue[index];
                }
            }
            inputsMessage += "<br><h3>Comcast Internet Options</h3>";
            inputsMessage +=
                "Modem Rental = " + comcast_modemRental_SelectedValue;
            inputsMessage +=
                "<br>Comcast Internet Slider = " +
                comcast_internetOptionsSlider_SelectedValue;
            inputsMessage +=
                "<br>Installation Options = " +
                comcast_installationOptions_SelectedValue;
            inputsMessage += "<br>Autopay = " + comcast_autopay_SelectedValue;
            inputsMessage += "<br>Add Phone = " + comcast_addphone_SelectedValue;

            summaryMessage =
                document.getElementsByClassName("summary-section")[1].innerHTML;
        } else if (document.getElementById("tabDetails_3").style.display == "") {
            // SPECTRUM Input Fields
            if (
                jQuery("input[name=spectrum_channelLineup_checkboxes]:checked").val() !=
                undefined
            ) {
                var spectrum_channelLineup_SelectedValue = document.getElementById(
                    jQuery("input[name=spectrum_channelLineup_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var spectrum_tvSlider_SelectedValue = slider6.val();

                var spectrum_dvrSlider_SelectedValue = slider7.val();

                var spectrum_premiumOptions_SelectedValue = [];
                var spectrum_arrayForPremiumOptions = [
                    "HBO  = $15",
                    "Show Time = $15",
                    "Cinemax = $9.99",
                    "TMC = $9.99",
                    "Starz = $9.99",
                    "Epix = $5.99",
                    "Starz Encore = $5.99",
                    "Sports Pack = $5",
                    "Fox Soccer Plus = $10",
                    "MLB Extra = $129.99",
                ];
                for (
                    let index = 0; index <
                    document.getElementsByName("spectrum_PremiumChannels_checkboxes").length; index++
                ) {
                    if (
                        document.getElementsByName("spectrum_PremiumChannels_checkboxes")[index]
                        .checked == true
                    ) {
                        spectrum_premiumOptions_SelectedValue.push(
                            spectrum_arrayForPremiumOptions[index]
                        );
                    }
                }
            }
            var spectrum_modemRental_SelectedValue = jQuery(
                "input[name=spectrum_modernRental]:checked"
            ).val();

            var spectrum_internetOptionsSlider_SelectedValue = slider8.val();

            var spectrum_installationOptions_SelectedValue = document.getElementById(
                jQuery("input[name=spectrum_InstallationOptions_checkboxes]:checked")[0]
                .id
            ).nextSibling.nextSibling.outerText;

            // jQuery(
            // 	"input[name=spectrum_InstallationOptions_checkboxes]:checked"
            // ).val();

            var spectrum_addPhone_SelectedValue = jQuery(
                "input[name=spectrum_AddPhone]:checked"
            ).val();

            inputsMessage = "<h1 style='text-align:center;'>SPECTRUM</h1>";
            inputsMessage += "<br><h3>SPECTRUM TV Options</h3>";
            inputsMessage +=
                "Channel Lineup = " + spectrum_channelLineup_SelectedValue;
            inputsMessage += "<br>TV's = " + spectrum_tvSlider_SelectedValue;
            inputsMessage += "<br>DVR's = " + spectrum_dvrSlider_SelectedValue;
            for (
                let index = 0; index < spectrum_premiumOptions_SelectedValue.length; index++
            ) {
                if (index == 0) {
                    inputsMessage +=
                        "<br>Premium Options = " +
                        spectrum_premiumOptions_SelectedValue[index];
                } else {
                    inputsMessage += "<br>" + spectrum_premiumOptions_SelectedValue[index];
                }
            }
            inputsMessage += "<br><h3>Spectrum Internet Options</h3>";
            inputsMessage +=
                "Modem Rental = " + spectrum_modemRental_SelectedValue;
            inputsMessage +=
                "<br>Spectrum Internet Slider = " +
                spectrum_internetOptionsSlider_SelectedValue;
            inputsMessage +=
                "<br>Installation Options = " +
                spectrum_installationOptions_SelectedValue;
            inputsMessage += "<br>Add Phone = " + spectrum_addPhone_SelectedValue;

            summaryMessage =
                document.getElementsByClassName("summary-section")[2].innerHTML;
        } else if (document.getElementById("tabDetails_4").style.display == "") {
            // METRONET Input Fields
            if (
                jQuery("input[name=metronet_channelLineup_checkboxes]:checked").val() !=
                undefined
            ) {
                var metronet_channelLineup_SelectedValue = document.getElementById(
                    jQuery("input[name=metronet_channelLineup_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var metronet_tvSlider_SelectedValue = slider9.val();

                var metronet_dvrSlider_SelectedValue = slider10.val();

                var metronet_premiumOptions_SelectedValue = [];
                var metronet_arrayForPremiumOptions = [
                    "HBO Max = $15",
                    "Show Time = $8.50",
                    "Cinemax = $8.47",
                    "Starz = $7.18",
                    "Sports Package = $4.52",
                ];

                for (
                    let index = 0; index <
                    document.getElementsByName("metronet_PremiumChannels_checkboxes").length; index++
                ) {
                    if (
                        document.getElementsByName("metronet_PremiumChannels_checkboxes")[index]
                        .checked == true
                    ) {
                        metronet_premiumOptions_SelectedValue.push(
                            metronet_arrayForPremiumOptions[index]
                        );
                    }
                }
            }
            var metronet_modemRental_SelectedValue = [];
            var metronet_arrayForModemRental = [
                "Whole Home Wi-Fi ($10)",
                "Technology Service Fee ($9.95)",
            ];

            for (
                let index = 0; index < document.getElementsByName("metronet_modernRental").length; index++
            ) {
                if (
                    document.getElementsByName("metronet_modernRental")[index].checked ==
                    true
                ) {
                    metronet_modemRental_SelectedValue.push(
                        metronet_arrayForModemRental[index]
                    );
                }
            }

            var metronet_internetOptionsSlider_SelectedValue = slider11.val();

            var metronet_installationOptions_SelectedValue = document.getElementById(
                jQuery("input[name=metronet_InstallationOptions_checkboxes]:checked")[0]
                .id
            ).nextSibling.nextSibling.outerText;

            var metronet_addPhone_SelectedValue = jQuery(
                "input[name=metronet_AddPhone]:checked"
            ).val();

            inputsMessage = "<h1 style='text-align:center;'>METRONET</h1>";
            inputsMessage += "<br><h3>METRONET TV Options</h3>";
            inputsMessage +=
                "Channel Lineup = " + metronet_channelLineup_SelectedValue;
            inputsMessage += "<br>TV's = " + metronet_tvSlider_SelectedValue;
            inputsMessage += "<br>DVR's = " + metronet_dvrSlider_SelectedValue;
            for (
                let index = 0; index < metronet_premiumOptions_SelectedValue.length; index++
            ) {
                if (index == 0) {
                    inputsMessage +=
                        "<br>Premium Options = " +
                        metronet_premiumOptions_SelectedValue[index];
                } else {
                    inputsMessage += "<br>" + metronet_premiumOptions_SelectedValue[index];
                }
            }
            inputsMessage += "<br><h3>Metronet Internet Options</h3>";
            for (
                let index = 0; index < metronet_modemRental_SelectedValue.length; index++
            ) {
                if (index == 0) {
                    inputsMessage +=
                        "Modem Rental = " + metronet_modemRental_SelectedValue[index];
                } else {
                    inputsMessage += "<br>" + metronet_modemRental_SelectedValue[index];
                }
            }

            inputsMessage +=
                "<br>Metronet Internet Slider = " +
                metronet_internetOptionsSlider_SelectedValue;
            inputsMessage +=
                "<br>Installation Options = " +
                metronet_installationOptions_SelectedValue;
            inputsMessage += "<br>Add Phone = " + metronet_addPhone_SelectedValue;

            summaryMessage =
                document.getElementsByClassName("summary-section")[3].innerHTML;
        } else if (document.getElementById("tabDetails_5").style.display == "") {
            // FRONTIER Input Fields

            var frontier_modemRental_SelectedValue = jQuery(
                "input[name=frontier_modernRental]:checked"
            ).val();

            var frontier_internetOptionsSlider_SelectedValue = slider12.val();

            var frontier_installationOptions_SelectedValue = document.getElementById(
                jQuery("input[name=frontier_InstallationOptions_checkboxes]:checked")[0]
                .id
            ).nextSibling.nextSibling.outerText;

            inputsMessage = "<h1 style='text-align:center;'>FRONTIER</h1>";
            inputsMessage += "<br><h3>Frontier Internet Options </h3>";
            inputsMessage +=
                "Modem Rental = " + frontier_modemRental_SelectedValue;
            inputsMessage +=
                "<br>Frontier Internet Slider = " +
                frontier_internetOptionsSlider_SelectedValue;
            inputsMessage +=
                "<br>Installation Options = " +
                frontier_installationOptions_SelectedValue;

            summaryMessage =
                document.getElementsByClassName("summary-section")[4].innerHTML;
        } else if (document.getElementById("tabDetails_6").style.display == "") {
            // DIRECTV Input Fields
            if (
                jQuery("input[name=directv_channelLineup_checkboxes]:checked").val() !=
                undefined
            ) {
                var direcTv_channelLineup_SelectedValue = document.getElementById(
                    jQuery("input[name=directv_channelLineup_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var direcTv_tvSlider_SelectedValue = slider13.val();

                var direcTv_premiumOptions_SelectedValue = [];
                var direcTv_arrayForPremiumOptions = [
                    "HBO Max = $14.99",
                    "Cinemax = $10.99",
                    "Starz = $10.99",
                    "Show Time = $10.99",
                    "Sports Pack = $13.99",
                    "MLB Extra Innings = $129.96",
                    "Fox Soccer Plus = $14.99",
                    "MLS Direct Kick = $89.00",
                    "NFL Sunday Ticket = $395.94",
                ];
                for (
                    let index = 0; index <
                    document.getElementsByName("directv_PremiumChannels_checkboxes").length; index++
                ) {
                    if (
                        document.getElementsByName("directv_PremiumChannels_checkboxes")[index]
                        .checked == true
                    ) {
                        direcTv_premiumOptions_SelectedValue.push(
                            direcTv_arrayForPremiumOptions[index]
                        );
                    }
                }
            }
            var direcTv_autoPay_SelectedValue = jQuery(
                "input[name=directv_AutoPay]:checked"
            ).val();

            inputsMessage = "<h1 style='text-align:center;'>DirecTV</h1>";
            inputsMessage += "<br><h3>DirecTV TV Options</h3>";
            inputsMessage +=
                "Channel Lineup = " + direcTv_channelLineup_SelectedValue;
            inputsMessage += "<br>TV's = " + direcTv_tvSlider_SelectedValue;
            for (
                let index = 0; index < direcTv_premiumOptions_SelectedValue.length; index++
            ) {
                if (index == 0) {
                    inputsMessage +=
                        "<br>Premium Options = " + direcTv_premiumOptions_SelectedValue[index];
                } else {
                    inputsMessage += "<br>" + direcTv_premiumOptions_SelectedValue[index];
                }
            }

            inputsMessage += "<br>Auto Pay = " + direcTv_autoPay_SelectedValue;

            summaryMessage =
                document.getElementsByClassName("summary-section")[5].innerHTML;
        } else if (document.getElementById("tabDetails_7").style.display == "") {
            // I3 BROADBAND Input Fields
            if (
                jQuery(
                    "input[name=i3_Broadband_channelLineup_checkboxes]:checked"
                ).val() != undefined
            ) {
                var i3Broadband_channelLineup_SelectedValue = document.getElementById(
                    jQuery("input[name=i3_Broadband_channelLineup_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var i3Broadband_tvSlider_SelectedValue = slider14.val();

                var i3Broadband_wholeHomeDvrSlider_SelectedValue = slider15.val();

                var i3Broadband_premiumOptions_SelectedValue = [];
                var i3Broadband_arrayForPremiumOptions = [
                    "HBO Max = $17",
                    "Show Time = $17.50",
                    "Cinemax = $15",
                    "Starz = $10",
                    "Movies Plus = $10",
                    "Sports Plus = $10",
                ];

                for (
                    let index = 0; index <
                    document.getElementsByName("i3_Broadband_PremiumChannels_checkboxes")
                    .length; index++
                ) {
                    if (
                        document.getElementsByName("i3_Broadband_PremiumChannels_checkboxes")[
                            index
                        ].checked == true
                    ) {
                        i3Broadband_premiumOptions_SelectedValue.push(
                            i3Broadband_arrayForPremiumOptions[index]
                        );
                    }
                }
            }
            var i3Broadband_wifiPodsSlider_SelectedValue = slider16.val();

            var i3Broadband_internetOptionsSlider_SelectedValue = slider17.val();

            var i3Broadband_installationOptions_SelectedValue =
                document.getElementById(
                    jQuery(
                        "input[name=i3_Broadband_InstallationOptions_checkboxes]:checked"
                    )[0].id
                ).nextSibling.nextSibling.outerText;

            var i3Broadband_addPhoneFiber_SelectedValue = jQuery(
                "input[name=i3_Broadband_AddPhone]:checked"
            ).val();

            inputsMessage = "<h1 style='text-align:center;'>I3 BROADBAND</h1>";
            inputsMessage += "<br><h3>I3 BROADBAND TV Options</h3>";
            inputsMessage +=
                "Channel Lineup = " + i3Broadband_channelLineup_SelectedValue;
            inputsMessage += "<br>TV's = " + i3Broadband_tvSlider_SelectedValue;
            inputsMessage +=
                "<br>Whole Home DVR's = " + i3Broadband_wholeHomeDvrSlider_SelectedValue;
            for (
                let index = 0; index < i3Broadband_premiumOptions_SelectedValue.length; index++
            ) {
                if (index == 0) {
                    inputsMessage +=
                        "<br>Premium Options = " +
                        i3Broadband_premiumOptions_SelectedValue[index];
                } else {
                    inputsMessage += "<br>" + i3Broadband_premiumOptions_SelectedValue[index];
                }
            }
            inputsMessage += "<br><h3>I3 Broadband Internet Options</h3>";
            inputsMessage +=
                "Wifi Pods = " + i3Broadband_wifiPodsSlider_SelectedValue;
            inputsMessage +=
                "<br>I3 Broadband Internet Slider = " +
                i3Broadband_internetOptionsSlider_SelectedValue;

            inputsMessage +=
                "<br>Installation Options = " +
                i3Broadband_installationOptions_SelectedValue;
            inputsMessage +=
                "<br>Add Phone Fiber = " + i3Broadband_addPhoneFiber_SelectedValue;

            summaryMessage =
                document.getElementsByClassName("summary-section")[6].innerHTML;
        } else if (document.getElementById("tabDetails_8").style.display == "") {
            // WOW Input Fields
            if (
                jQuery(
                    "input[name=i3_Broadband_channelLineup_checkboxes]:checked"
                ).val() != undefined
            ) {
                var wow_channelLineup_SelectedValue = document.getElementById(
                    jQuery("input[name=wow_channelLineup_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var wow_tvSlider_SelectedValue = slider18.val();
            }
            var wow_wifiModemrental_SelectedValue = jQuery(
                "input[name=wow_ModemRental]:checked"
            ).val();

            var wow_wholeHomeWifi_SelectedValue = jQuery(
                "input[name=wow_WholeHomeWifi]:checked"
            ).val();

            var wow_internetOptionsSlider_SelectedValue = slider19.val();

            var wow_addPhoneFiber_SelectedValue = jQuery(
                "input[name=wow_AddPhone]:checked"
            ).val();

            var wow_installationOptions_SelectedValue = jQuery(
                "input[name=wow_InstallationOptions_checkboxes]:checked"
            ).val();

            inputsMessage = "<h1 style='text-align:center;'>WOW</h1>";
            inputsMessage += "<br><h3>WOW TV Options</h3>";
            inputsMessage +=
                "Channel Lineup = " + wow_channelLineup_SelectedValue;
            inputsMessage += "<br>TV's = " + wow_tvSlider_SelectedValue;

            inputsMessage += "<br><h3>Wow Internet Options</h3>";

            inputsMessage +=
                "Wifi Modem Rental = " + wow_wifiModemrental_SelectedValue;
            inputsMessage +=
                "<br>Whole Home Wifi = " + wow_wholeHomeWifi_SelectedValue;
            inputsMessage +=
                "<br>Wow Internet Slider = " + wow_internetOptionsSlider_SelectedValue;

            inputsMessage +=
                "<br>Add Phone Fiber = " + wow_addPhoneFiber_SelectedValue;
            inputsMessage +=
                "<br>Installation Options = " + wow_installationOptions_SelectedValue;

            document.getElementsByClassName("summary-section")[7].innerHTML;
        } else if (document.getElementById("tabDetails_9").style.display == "") {
            // MEDIACOM Input Fields
            if (
                jQuery(
                    "input[name=i3_Broadband_channelLineup_checkboxes]:checked"
                ).val() != undefined
            ) {
                var mediacom_channelLineup_SelectedValue = document.getElementById(
                    jQuery("input[name=mediacom_channelLineup_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var mediacom_tivoSmartBoxSlider_SelectedValue = slider20.val();

                var mediacom_tivoSingleRoomDVR_SelectedValue = jQuery(
                    "input[name=mediacom_SingleRoomDVR]:checked"
                ).val();

                var mediacom_tivoMultiRoomDVR_SelectedValue = jQuery(
                    "input[name=mediacom_MultiRoomDVR]:checked"
                ).val();

                var mediacom_premiumOptions_SelectedValue = [];
                var mediacom_arrayForPremiumOptions = [
                    "HBO Max = $18.95",
                    "Cinemax = $12.95",
                    "Show Time = $14.95",
                    "Starz = $12",
                ];

                for (
                    let index = 0; index <
                    document.getElementsByName("mediacom_PremiumChannels_checkboxes").length; index++
                ) {
                    if (
                        document.getElementsByName("mediacom_PremiumChannels_checkboxes")[index]
                        .checked == true
                    ) {
                        mediacom_premiumOptions_SelectedValue.push(
                            mediacom_arrayForPremiumOptions[index]
                        );
                    }
                }
            }
            var mediacom_modemRental_SelectedValue = jQuery(
                "input[name=mediacom_ModemRental]:checked"
            ).val();

            var mediacom_additionalAeroExtenders_SelectedValue = slider21.val();

            var mediacom_internetOptionsSlider_SelectedValue = slider22.val();

            var mediacom_installationOptions_SelectedValue =
                "Tech Installations " +
                jQuery(
                    "input[name=mediacom_InstallationOptions_checkboxes]:checked"
                ).val();

            var mediacom_addPhone_SelectedValue = jQuery(
                "input[name=mediacom_AddPhone]:checked"
            ).val();

            inputsMessage = "<h1 style='text-align:center;'>MEDIACOM</h1>";
            inputsMessage += "<br><h3>MEDIACOM TV Options</h3>";
            inputsMessage +=
                "Channel Lineup = " + mediacom_channelLineup_SelectedValue;
            inputsMessage +=
                "<br>TV's = " + mediacom_tivoSmartBoxSlider_SelectedValue;
            inputsMessage +=
                "<br>TiVo Single Room DVR Service = " +
                mediacom_tivoSingleRoomDVR_SelectedValue;
            inputsMessage +=
                "<br>TiVo Multi Room DVR Service = " +
                mediacom_tivoMultiRoomDVR_SelectedValue;

            for (
                let index = 0; index < mediacom_premiumOptions_SelectedValue.length; index++
            ) {
                if (index == 0) {
                    inputsMessage +=
                        "<br>Premium Options = " +
                        mediacom_premiumOptions_SelectedValue[index];
                } else {
                    inputsMessage += "<br>" + mediacom_premiumOptions_SelectedValue[index];
                }
            }

            inputsMessage += "<br><h3>MEDIACOM Internet Options</h3>";

            inputsMessage +=
                "Modem Rental = " + mediacom_modemRental_SelectedValue;
            inputsMessage +=
                "<br>Additional Eero Extenders = " +
                mediacom_additionalAeroExtenders_SelectedValue;
            inputsMessage +=
                "<br>Mediacom Internet Slider = " +
                mediacom_internetOptionsSlider_SelectedValue;

            inputsMessage +=
                "<br>Installation Options = " +
                mediacom_installationOptions_SelectedValue;
            inputsMessage +=
                "<br>Add Phone Fiber = " + mediacom_addPhone_SelectedValue;

            document.getElementsByClassName("summary-section")[8].innerHTML;
        } else if (document.getElementById("tabDetails_10").style.display == "") {
            // HUGHES-NET Input Fields

            var hughesNet_modemRental_SelectedValue = jQuery(
                "input[name=hughes_ModemRental]:checked"
            ).val();

            var hughesNet_purchaseModem_SelectedValue = jQuery(
                "input[name=hughes_PurchaseModem]:checked"
            ).val();

            var hughesNet_internetOptionsSlider_SelectedValue = slider23.val();

            var hughesNet_installationOptions_SelectedValue =
                "Tech Installation " +
                jQuery("input[name=hughes_InstallationOptions_checkboxes]:checked").val();

            inputsMessage = "<h1 style='text-align:center;'>HUGHES NET</h1>";
            inputsMessage += "<br><h3>Hughes Net Satelite Internet Options</h3>";

            inputsMessage +=
                "Modem Rental = " + hughesNet_modemRental_SelectedValue;
            inputsMessage +=
                "<br>Purchase Modem = " + hughesNet_purchaseModem_SelectedValue;
            inputsMessage +=
                "<br>Hughes Net Internet Slider = " +
                hughesNet_internetOptionsSlider_SelectedValue;

            inputsMessage +=
                "<br>Installation Options = " +
                hughesNet_installationOptions_SelectedValue;

            document.getElementsByClassName("summary-section")[9].innerHTML;
        } else if (document.getElementById("tabDetails_11").style.display == "") {
            // CENTURY-LINK Input Fields

            var centuryLink_modemRental_SelectedValue = jQuery(
                "input[name=century_ModemRental]:checked"
            ).val();

            var centuryLink_internetOptionsSlider_SelectedValue = slider24.val();

            var centuryLink_installationOptions_SelectedValue = jQuery(
                "input[name=century_InstallationOptions_checkboxes]:checked"
            ).val();

            inputsMessage = "<h1 style='text-align:center;'>CENTURY LINK</h1>";
            inputsMessage += "<br><h3>CENTURY LINK Internet Options</h3>";
            inputsMessage +=
                "Modem Rental = " + centuryLink_modemRental_SelectedValue;
            inputsMessage +=
                "<br>Century Link Internet Slider = " +
                centuryLink_internetOptionsSlider_SelectedValue;

            inputsMessage +=
                "<br>Installation Options = " +
                centuryLink_installationOptions_SelectedValue;

            document.getElementsByClassName("summary-section")[10].innerHTML;
        } else if (document.getElementById("tabDetails_12").style.display == "") {
            // RCN Input Fields
            if (
                jQuery("input[name=rcn_channelLineup_checkboxes]:checked").val() !=
                undefined
            ) {
                var rcn_channelLineup_SelectedValue = document.getElementById(
                    jQuery("input[name=rcn_channelLineup_checkboxes]:checked")[0].id
                ).nextSibling.nextSibling.outerText;

                var rcn_tvSlider_SelectedValue = slider25.val();

                var rcn_premiumOptions_SelectedValue = [];
                var rcn_arrayForPremiumOptions = [
                    "HBO Max = $14.99",
                    "Cinemax = $11.95",
                    "Showtime/TMC = $17.95",
                    "Starz = $12.95",
                    "Premier Total Pack = $31",
                    "Premier Family and Kids = $11.99",
                    "Premier Entertainment = $16.99",
                    "Premier News and Information = $11.99",
                    "Premier Sports = $18.99",
                ];

                for (
                    let index = 0; index <
                    document.getElementsByName("rcn_PremiumChannels_checkboxes").length; index++
                ) {
                    if (
                        document.getElementsByName("rcn_PremiumChannels_checkboxes")[index]
                        .checked == true
                    ) {
                        rcn_premiumOptions_SelectedValue.push(
                            rcn_arrayForPremiumOptions[index]
                        );
                    }
                }
            }
            var rcn_internetEquipment_SelectedValue = jQuery(
                "input[name=rcn_internetOptions]:checked"
            ).val();

            var rcn_internetOptionsSlider_SelectedValue = slider26.val();

            var rcn_addPhone_SelectedValue = jQuery(
                "input[name=rcn_AddPhone]:checked"
            ).val();

            var rcn_installationOptions_SelectedValue = jQuery(
                "input[name=rcn_InstallationOptions_checkboxes]:checked"
            ).val();

            inputsMessage = "<h1 style='text-align:center;'>RCN</h1>";
            inputsMessage += "<br><h3>RCN TV Options</h3>";
            inputsMessage +=
                "Channel Lineup = " + rcn_channelLineup_SelectedValue;
            inputsMessage += "<br>TV's = " + rcn_tvSlider_SelectedValue;
            for (
                let index = 0; index < rcn_premiumOptions_SelectedValue.length; index++
            ) {
                if (index == 0) {
                    inputsMessage +=
                        "<br>Premium Options = " + rcn_premiumOptions_SelectedValue[index];
                } else {
                    inputsMessage += "<br>" + rcn_premiumOptions_SelectedValue[index];
                }
            }

            inputsMessage += "<br><h3>RCN Internet Options</h3>";

            inputsMessage +=
                "Internet Equipment = " + rcn_internetEquipment_SelectedValue;

            inputsMessage +=
                "<br>Rcn Internet Slider = " + rcn_internetOptionsSlider_SelectedValue;

            inputsMessage += "<br>Add Phone = " + rcn_addPhone_SelectedValue;
            inputsMessage +=
                "<br>Installation Options = " + rcn_installationOptions_SelectedValue;

            document.getElementsByClassName("summary-section")[11].innerHTML;
        }
        // ________________________________________________
        // ___________________________________________________
        let uniqueLinkGenerated = false;
        if (uniqueLinkForSpecificUser != "") {
            uniqueLinkGenerated = true;
        } else {
            uniqueLinkGenerated = false;
        }
        // ___________________________________________________
        $.ajax({
            url: "./php/submit_email.php",
            type: "POST",
            data: {
                userName: UsernameOfCustomer,
                uniqueLinkOfCustomer: uniqueLinkForSpecificUser,
                name: userData[0].name,
                email: userData[0].email,
                mailhost: userData[0].mail_host,
                mailport: userData[0].mail_port,
                mailencryption: userData[0].mail_encryption,
                mailauth: userData[0].mail_auth,
                mailfrom: userData[0].mail_from_address,
                mailusername: userData[0].mail_username,
                mailpassword: userData[0].mail_password,
                customeremail: document.getElementById("staticEmail").value,
                summarymessage: summaryMessage,
                inputsmessage: inputsMessage,
            },
            success: function(data) {
                debugger;
                if (uniqueLinkGenerated == true) {
                    console.log("Mail Send! Successfully");
                    $('#myExampleModal').modal('show');
                    forInsertingDataInEmail_Data_Table()
                } else {
                    console.log("Mail Send! Successfully");
                    $('#myExampleModal2').modal('show');
                }
                // console.log("Mail Send! Successfully");
                // $('#myExampleModal').modal('show');

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest);
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
                console.log("ERROR");
            },
        });
    }


    function forInsertingDataInEmail_Data_Table() {
        $.ajax({
            url: "./model/addDataInEmailTable.php",
            type: "POST",
            data: {
                userName: UsernameOfCustomer,
                summarymessage: summaryMessage,
                inputsmessage: inputsMessage,
            },
            success: function(data) {
                debugger;
                console.log("Data Submitted Successfully");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest);
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
                console.log("ERROR");
            },
        });

    }


    function setLabelsByDefaultsFromData() {
        // AT & T
        $('label[for="entertainment"]')[0].innerHTML = "Entertainment (" + at_t_TV_Packages[0] + ")"
        $('label[for="choice"]')[0].innerHTML = "Choice (" + at_t_TV_Packages[1] + ")"
        $('label[for="ultimate"]')[0].innerHTML = "Ultimate (" + at_t_TV_Packages[2] + ")"
        $('label[for="Premier"]')[0].innerHTML = "Premier (" + at_t_TV_Packages[3] + ")"
        // COMCAST
        $('label[for="basic"]')[0].innerHTML = "Basic (" + comcast_TV_Packages[0] + ")"
        $('label[for="extra"]')[0].innerHTML = "Extra (" + comcast_TV_Packages[1] + ")"
        $('label[for="preferred"]')[0].innerHTML = "Preferred (" + comcast_TV_Packages[2] + ")"
        // SPECTRUM
        $('label[for="tv_select"]')[0].innerHTML = "Tv Select (" + spectrum_TV_Packages[0] + ")"
        $('label[for="tv_silver"]')[0].innerHTML = "Tv Silver (" + spectrum_TV_Packages[1] + ")"
        $('label[for="tv_gold"]')[0].innerHTML = "Tv Gold (" + spectrum_TV_Packages[2] + ")"
        // METRONET 
        $('label[for="basicTV"]')[0].innerHTML = "Basic TV (" + metronet_TV_Packages[0] + ")"
        $('label[for="standardTV"]')[0].innerHTML = "Standard TV (" + metronet_TV_Packages[1] + ")"
        $('label[for="preferredTV"]')[0].innerHTML = "Preferred TV (" + metronet_TV_Packages[2] + ")"
        // DIRECTV
        $('label[for="directv_PreferredChoice"]')[0].innerHTML = "Preferred Choice (" + directv_TV_Packages[0] +
            ")"
        $('label[for="directv_Entertainment"]')[0].innerHTML = "Entertainment (" + directv_TV_Packages[1] + ")"
        $('label[for="directv_Choice"]')[0].innerHTML = "Choice (" + directv_TV_Packages[2] + ")"
        $('label[for="directv_Ultimate"]')[0].innerHTML = "Ultimate (" + directv_TV_Packages[3] + ")"
        $('label[for="directv_Premier"]')[0].innerHTML = "Premier (" + directv_TV_Packages[4] + ")"
        // I3 BROADBAND
        $('label[for="i3_Broadband_mustView_TV"]')[0].innerHTML = "MustView TV (" + i3_Broadband_TV_Packages[0] + ")"
        $('label[for="i3_Broadband_maxView_TV"]')[0].innerHTML = "MaxView TV (" + i3_Broadband_TV_Packages[1] + ")"
        $('label[for="i3_Broadband_megaView_TV"]')[0].innerHTML = "MegaView TV (" + i3_Broadband_TV_Packages[2] + ")"
        // WOW
        $('label[for="wow_smallCable"]')[0].innerHTML = "Small Cable (" + wow_TV_Packages[0] + ")"
        $('label[for="wow_mediumCable"]')[0].innerHTML = "Medium Cable (" + wow_TV_Packages[1] + ")"
        $('label[for="wow_largeCable"]')[0].innerHTML = "Large Cable (" + wow_TV_Packages[2] + ")"
        // MEDIACOM
        $('label[for="mediacom_local_TV"]')[0].innerHTML = "Local TV (" + mediacom_TV_Packages[0] + ")"
        $('label[for="mediacom_essential_TV"]')[0].innerHTML = "Essential TV (" + mediacom_TV_Packages[1] + ")"
        $('label[for="mediacom_variety_TV"]')[0].innerHTML = "Variety TV (" + mediacom_TV_Packages[2] + ")"
        // RCN
        $('label[for="rcn_Basic_TV"]')[0].innerHTML = "Basic TV (" + rcn_TV_Packages[0] + ")"
        $('label[for="rcn_Signature_TV"]')[0].innerHTML = "Signature TV (" + rcn_TV_Packages[1] + ")"
    }
    </script>
</body>

</html>