/** @format */

var dataOfAllTheInputFields;
function runOperations() {
  // Checking If Unique Id In Url Is Present In Our CSV File
  const urlOfCurrentWebsite = window.location.href;

  const urlParams = new URLSearchParams(window.location.search);
  var currentUserId = urlParams.get("id");
  if (currentUserId != null) {
    $.ajax({
      url: "php/get_customer_data.php",
      type: "GET",
      data: {
        unique_id: currentUserId,
        // customer_Data: JSON.stringify(jsonVariableForStoringDataInMySql),
      },

      success: function (data) {
        dataOfAllTheInputFields = JSON.parse(data);
        dataOfAllTheInputFields = dataOfAllTheInputFields[0].customerData;
        dataOfAllTheInputFields = JSON.parse(dataOfAllTheInputFields);
        assigningValuesToAllInputFields(dataOfAllTheInputFields);
        console.log(dataOfAllTheInputFields);
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest);
        console.log("Status: " + textStatus);
        console.log("Error: " + errorThrown);
        console.log("ERROR");
      },
    });
  }
}

function assigningValuesToAllInputFields(data) {
  for (let index = 1; index <= 12; index++) {
    if (data.currenttabThatsOpen_Json == index) {
      document.getElementById("tabDetails_" + index).style.display = "";
      jQuery(".tab-menu").removeClass("selected");
      jQuery("#tab_" + index).addClass("selected");
    } else {
      document.getElementById("tab_" + +index).style.display = "none";
      document.getElementById("tabDetails_" + index).style.display = "none";
    }
  }

  if (data.currenttabThatsOpen_Json == 1) {
    // AT & T
    debugger;
    forSelectingABox(
      "channelLineup_checkboxes",
      data.at_t_channelLineup_SelectedValue_Json
    );
    var slider1 = $("#tv").data("ionRangeSlider");
    slider1.update({
      from: data["at_t_tvSlider_SelectedValue_Json"],
    });
    forSelectingABox(
      "equipmentOptions_checkboxes",
      data.at_t_equipmentOptions_SelectedValue_Json
    );
    forSelectingMultipleBoxes(
      "premiumChannels_checkboxes",
      data.at_t_premiumOptions_SelectedValue_Json
    );
    forSelectingABox("modernRental", data.at_t_modemRental_SelectedValue_Json);
    var slider2 = $("#fiber").data("ionRangeSlider");
    if (data["at_t_fiberTerritory_SelectedValue_Json"] == "0") {
      slider2.update({
        from: "0",
      });
    } else if (data["at_t_fiberTerritory_SelectedValue_Json"] == "300mbps") {
      slider2.update({
        from: "1",
      });
    } else if (data["at_t_fiberTerritory_SelectedValue_Json"] == "500mbps") {
      slider2.update({
        from: "2",
      });
    } else if (data["at_t_fiberTerritory_SelectedValue_Json"] == "1000mbps") {
      slider2.update({
        from: "3",
      });
    }
    // slider2.update({
    // 	from: numeral(data["at_t_fiberTerritory_SelectedValue_Json"]).value(),
    // });
    // ___________
    var slider3 = $("#nonFiber").data("ionRangeSlider");
    if (data["at_t_nonFiberTerritory_SelectedValue_Json"] == "0") {
      slider3.update({
        from: "0",
      });
    } else if (data["at_t_nonFiberTerritory_SelectedValue_Json"] == "25mbps") {
      slider3.update({
        from: "1",
      });
    } else if (data["at_t_nonFiberTerritory_SelectedValue_Json"] == "50mbps") {
      slider3.update({
        from: "2",
      });
    } else if (data["at_t_nonFiberTerritory_SelectedValue_Json"] == "75mbps") {
      slider3.update({
        from: "3",
      });
    } else if (data["at_t_nonFiberTerritory_SelectedValue_Json"] == "100mbps") {
      slider3.update({
        from: "4",
      });
    }

    // slider3.update({
    // 	from: numeral(data["at_t_nonFiberTerritory_SelectedValue_Json"]).value(),
    // });
    // ___________

    runOperation_Tab1();
  } else if (data.currenttabThatsOpen_Json == 2) {
    // COMCAST
    forSelectingABox(
      "comcast_channelLineup_checkboxes",
      data.comcast_channelLineup_SelectedValue_Json
    );
    var slider4 = $("#comcast_tv").data("ionRangeSlider");
    slider4.update({
      from: data["comcast_tvSlider_SelectedValue_Json"],
    });
    forSelectingABox(
      "comcast_EquipmentOptions_checkboxes",
      data.comcast_equipmentOptions_SelectedValue_Json
    );

    forSelectingMultipleBoxes(
      "comcast_PremiumChannels_checkboxes",
      data.comcast_premiumOptions_SelectedValue_Json
    );
    forSelectingABox(
      "comcast_modernRental",
      data.comcast_modemRental_SelectedValue_Json
    );
    var slider5 = $("#comcast_Internet").data("ionRangeSlider");
    if (data["comcast_internetOptionsSlider_SelectedValue_Json"] == "0mbps") {
      slider5.update({
        from: "0",
      });
    } else if (
      data["comcast_internetOptionsSlider_SelectedValue_Json"] == "50mbps"
    ) {
      slider5.update({
        from: "1",
      });
    } else if (
      data["comcast_internetOptionsSlider_SelectedValue_Json"] == "100mbps"
    ) {
      slider5.update({
        from: "2",
      });
    } else if (
      data["comcast_internetOptionsSlider_SelectedValue_Json"] == "300mbps"
    ) {
      slider5.update({
        from: "3",
      });
    } else if (
      data["comcast_internetOptionsSlider_SelectedValue_Json"] == "600mbps"
    ) {
      slider5.update({
        from: "4",
      });
    } else if (
      data["comcast_internetOptionsSlider_SelectedValue_Json"] == "900mbps"
    ) {
      slider5.update({
        from: "5",
      });
    } else if (
      data["comcast_internetOptionsSlider_SelectedValue_Json"] == "1200mbps"
    ) {
      slider5.update({
        from: "6",
      });
    }

    // slider5.update({
    // 	from: data["comcast_tvSlider_SelectedValue_Json"],
    // });
    // _____________
    forSelectingABox(
      "comcast_InstallationOptions_checkboxes",
      data.comcast_installationOptions_SelectedValue_Json
    );
    forSelectingABox(
      "comcast_Autoplay_checkboxes",
      data.comcast_autopay_SelectedValue_Json
    );
    forSelectingABox(
      "comcast_AddPhone_checkboxes",
      data.comcast_autopay_SelectedValue_Json
    );
    runOperation_Tab2();
  } else if (data.currenttabThatsOpen_Json == 3) {
    // SPECTRUM
    forSelectingABox(
      "spectrum_channelLineup_checkboxes",
      data.spectrum_channelLineup_SelectedValue_Json
    );
    var slider6 = $("#spectrum_tv").data("ionRangeSlider");
    slider6.update({
      from: data["spectrum_tvSlider_SelectedValue_Json"],
    });
    var slider7 = $("#spectrum_dvr").data("ionRangeSlider");
    slider7.update({
      from: data["spectrum_dvrSlider_SelectedValue_Json"],
    });
    forSelectingMultipleBoxes(
      "spectrum_PremiumChannels_checkboxes",
      data.spectrum_premiumOptions_SelectedValue_Json
    );
    forSelectingABox(
      "spectrum_modernRental",
      data.spectrum_modemRental_SelectedValue_Json
    );
    var slider8 = $("#spectrum_Internet").data("ionRangeSlider");
    if (data["spectrum_internetOptionsSlider_SelectedValue_Json"] == "0mbps") {
      slider8.update({
        from: "0",
      });
    } else if (
      data["spectrum_internetOptionsSlider_SelectedValue_Json"] == "200mbps"
    ) {
      slider8.update({
        from: "1",
      });
    } else if (
      data["spectrum_internetOptionsSlider_SelectedValue_Json"] == "400mbps"
    ) {
      slider8.update({
        from: "2",
      });
    } else if (
      data["spectrum_internetOptionsSlider_SelectedValue_Json"] == "GIG"
    ) {
      slider8.update({
        from: "3",
      });
    }
    forSelectingABox(
      "spectrum_InstallationOptions_checkboxes",
      data.spectrum_installationOptions_SelectedValue_Json
    );
    forSelectingABox(
      "spectrum_AddPhone",
      data.spectrum_addPhone_SelectedValue_Json
    );
    runOperation_Tab3();
  } else if (data.currenttabThatsOpen_Json == 4) {
    // METRONET
    forSelectingABox(
      "metronet_channelLineup_checkboxes",
      data.metronet_channelLineup_SelectedValue_Json
    );
    var slider9 = $("#metronet_tv").data("ionRangeSlider");
    slider9.update({
      from: data["metronet_tvSlider_SelectedValue_Json"],
    });
    var slider10 = $("#metronet_dvr").data("ionRangeSlider");
    slider10.update({
      from: data["metronet_dvrSlider_SelectedValue_Json"],
    });
    forSelectingMultipleBoxes(
      "metronet_PremiumChannels_checkboxes",
      data.metronet_premiumOptions_SelectedValue_Json
    );
    forSelectingMultipleBoxes(
      "metronet_modernRental",
      data.metronet_modemRental_SelectedValue_Json
    );
    var slider11 = $("#metronet_Internet").data("ionRangeSlider");
    debugger;
    if (data["metronet_internetOptionsSlider_SelectedValue_Json"] == "0mbps") {
      slider11.update({
        from: "0",
      });
    } else if (
      data["metronet_internetOptionsSlider_SelectedValue_Json"] == "100mbps"
    ) {
      slider11.update({
        from: "1",
      });
    } else if (
      data["metronet_internetOptionsSlider_SelectedValue_Json"] == "200mbps"
    ) {
      slider11.update({
        from: "2",
      });
    } else if (
      data["metronet_internetOptionsSlider_SelectedValue_Json"] == "500mbps"
    ) {
      slider11.update({
        from: "3",
      });
    } else if (
      data["metronet_internetOptionsSlider_SelectedValue_Json"] == "GIG"
    ) {
      slider11.update({
        from: "4",
      });
    }

    forSelectingABox(
      "metronet_InstallationOptions_checkboxes",
      data.metronet_installationOptions_SelectedValue_Json
    );
    forSelectingABox(
      "metronet_AddPhone",
      data.metronet_addPhone_SelectedValue_Json
    );
    runOperation_Tab4();
  } else if (data.currenttabThatsOpen_Json == 5) {
    // FRONTIER
    forSelectingABox(
      "frontier_modernRental",
      data.frontier_modemRental_SelectedValue_Json
    );
    var slider12 = $("#frontier_Internet").data("ionRangeSlider");
    if (data["frontier_internetOptionsSlider_SelectedValue_Json"] == "0mbps") {
      slider12.update({
        from: "0",
      });
    } else if (
      data["frontier_internetOptionsSlider_SelectedValue_Json"] == "25mbps"
    ) {
      slider12.update({
        from: "1",
      });
    } else if (
      data["frontier_internetOptionsSlider_SelectedValue_Json"] == "50mbps"
    ) {
      slider12.update({
        from: "2",
      });
    } else if (
      data["frontier_internetOptionsSlider_SelectedValue_Json"] == "500mbps"
    ) {
      slider12.update({
        from: "3",
      });
    } else if (
      data["frontier_internetOptionsSlider_SelectedValue_Json"] == "1000mbps"
    ) {
      slider12.update({
        from: "4",
      });
    }

    forSelectingABox(
      "frontier_InstallationOptions_checkboxes",
      data.frontier_installationOptions_SelectedValue_Json
    );
    runOperation_Tab5();
  } else if (data.currenttabThatsOpen_Json == 6) {
    // DIRECTV
    forSelectingABox(
      "directv_channelLineup_checkboxes",
      data.direcTv_channelLineup_SelectedValue_Json
    );
    var slider13 = $("#directv_tv").data("ionRangeSlider");
    slider13.update({
      from: data["direcTv_tvSlider_SelectedValue_Json"],
    });
    forSelectingMultipleBoxes(
      "directv_PremiumChannels_checkboxes",
      data.direcTv_premiumOptions_SelectedValue_Json
    );

    forSelectingABox(
      "directv_AutoPay",
      data.direcTv_autoPay_SelectedValue_Json
    );
    runOperation_Tab6();
  } else if (data.currenttabThatsOpen_Json == 7) {
    // I3-BROADBAND
    forSelectingABox(
      "i3_Broadband_channelLineup_checkboxes",
      data.i3Broadband_channelLineup_SelectedValue_Json
    );
    var slider14 = $("#i3_Broadband_tv").data("ionRangeSlider");
    slider14.update({
      from: data["i3Broadband_tvSlider_SelectedValue_Json"],
    });
    var slider15 = $("#i3_Broadband_dvr").data("ionRangeSlider");
    slider15.update({
      from: data["i3Broadband_wholeHomeDvrSlider_SelectedValue_Json"],
    });
    forSelectingMultipleBoxes(
      "i3_Broadband_PremiumChannels_checkboxes",
      data.i3Broadband_premiumOptions_SelectedValue_Json
    );
    var slider16 = $("#i3_Broadband_Wifi_Pods").data("ionRangeSlider");
    if (data["i3Broadband_wifiPodsSlider_SelectedValue_Json"] == "0") {
      slider16.update({
        from: "0",
      });
    } else if (
      data["i3Broadband_wifiPodsSlider_SelectedValue_Json"] == "1(2-3 Bed)"
    ) {
      slider16.update({
        from: "1",
      });
    } else if (
      data["i3Broadband_wifiPodsSlider_SelectedValue_Json"] == "2(3-4 Bed)"
    ) {
      slider16.update({
        from: "2",
      });
    } else if (
      data["i3Broadband_wifiPodsSlider_SelectedValue_Json"] == "3(4-5 Bed)"
    ) {
      slider16.update({
        from: "3",
      });
    } else if (
      data["i3Broadband_wifiPodsSlider_SelectedValue_Json"] == "4(5+ Bed)"
    ) {
      slider16.update({
        from: "4",
      });
    }

    var slider17 = $("#i3_Broadband_Internet").data("ionRangeSlider");
    if (
      data["i3Broadband_internetOptionsSlider_SelectedValue_Json"] == "0mbps"
    ) {
      slider17.update({
        from: "0",
      });
    } else if (
      data["i3Broadband_internetOptionsSlider_SelectedValue_Json"] == "200mbps"
    ) {
      slider17.update({
        from: "1",
      });
    } else if (
      data["i3Broadband_internetOptionsSlider_SelectedValue_Json"] == "400mbps"
    ) {
      slider17.update({
        from: "2",
      });
    } else if (
      data["i3Broadband_internetOptionsSlider_SelectedValue_Json"] == "600mbps"
    ) {
      slider17.update({
        from: "3",
      });
    } else if (
      data["i3Broadband_internetOptionsSlider_SelectedValue_Json"] == "800mbps"
    ) {
      slider17.update({
        from: "4",
      });
    } else if (
      data["i3Broadband_internetOptionsSlider_SelectedValue_Json"] == "1000mbps"
    ) {
      slider17.update({
        from: "5",
      });
    }

    forSelectingABox(
      "i3_Broadband_InstallationOptions_checkboxes",
      data.i3Broadband_installationOptions_SelectedValue_Json
    );
    forSelectingABox(
      "i3_Broadband_AddPhone",
      data.i3Broadband_addPhoneFiber_SelectedValue_Json
    );
    runOperation_Tab7();
  } else if (data.currenttabThatsOpen_Json == 8) {
    // WOW
    forSelectingABox(
      "wow_channelLineup_checkboxes",
      data.wow_channelLineup_SelectedValue_Json
    );
    var slider18 = $("#wow_tv").data("ionRangeSlider");
    slider18.update({
      from: data["wow_tvSlider_SelectedValue_Json"],
    });
    forSelectingABox(
      "wow_ModemRental",
      data.wow_wifiModemrental_SelectedValue_Json
    );
    forSelectingABox(
      "wow_WholeHomeWifi",
      data.wow_wholeHomeWifi_SelectedValue_Json
    );
    var slider19 = $("#wow_Internet").data("ionRangeSlider");
    if (data["wow_internetOptionsSlider_SelectedValue_Json"] == "0mbps") {
      slider19.update({
        from: "0",
      });
    } else if (
      data["wow_internetOptionsSlider_SelectedValue_Json"] == "100mbps"
    ) {
      slider19.update({
        from: "1",
      });
    } else if (
      data["wow_internetOptionsSlider_SelectedValue_Json"] == "200mbps"
    ) {
      slider19.update({
        from: "2",
      });
    } else if (
      data["wow_internetOptionsSlider_SelectedValue_Json"] == "500mbps"
    ) {
      slider19.update({
        from: "3",
      });
    } else if (
      data["wow_internetOptionsSlider_SelectedValue_Json"] == "1000mbps"
    ) {
      slider19.update({
        from: "4",
      });
    }

    forSelectingABox("wow_AddPhone", data.wow_addPhoneFiber_SelectedValue_Json);
    forSelectingABox(
      "wow_InstallationOptions_checkboxes",
      data.wow_installationOptions_SelectedValue_Json
    );
    runOperation_Tab8();
  } else if (data.currenttabThatsOpen_Json == 9) {
    // MEDIACOM
    forSelectingABox(
      "mediacom_channelLineup_checkboxes",
      data.mediacom_channelLineup_SelectedValue_Json
    );
    var slider20 = $("#mediacom_tv").data("ionRangeSlider");
    slider20.update({
      from: data["mediacom_tivoSmartBoxSlider_SelectedValue_Json"],
    });
    forSelectingABox(
      "mediacom_SingleRoomDVR",
      data.mediacom_tivoSingleRoomDVR_SelectedValue_Json
    );
    forSelectingABox(
      "mediacom_MultiRoomDVR",
      data.mediacom_tivoMultiRoomDVR_SelectedValue_Json
    );
    forSelectingMultipleBoxes(
      "mediacom_PremiumChannels_checkboxes",
      data.mediacom_premiumOptions_SelectedValue_Json
    );
    forSelectingABox(
      "mediacom_ModemRental",
      data.mediacom_modemRental_SelectedValue_Json
    );
    var slider21 = $("#mediacom_Additional_Eero").data("ionRangeSlider");
    slider21.update({
      from: data["mediacom_additionalAeroExtenders_SelectedValue_Json"],
    });
    var slider22 = $("#mediacom_Internet").data("ionRangeSlider");
    if (data["mediacom_internetOptionsSlider_SelectedValue_Json"] == "0mbps") {
      slider22.update({
        from: "0",
      });
    } else if (
      data["mediacom_internetOptionsSlider_SelectedValue_Json"] == "60mbps"
    ) {
      slider22.update({
        from: "1",
      });
    } else if (
      data["mediacom_internetOptionsSlider_SelectedValue_Json"] == "100mbps"
    ) {
      slider22.update({
        from: "2",
      });
    } else if (
      data["mediacom_internetOptionsSlider_SelectedValue_Json"] == "300mbps"
    ) {
      slider22.update({
        from: "3",
      });
    } else if (
      data["mediacom_internetOptionsSlider_SelectedValue_Json"] == "1000mbps"
    ) {
      slider22.update({
        from: "4",
      });
    }

    forSelectingABox(
      "mediacom_InstallationOptions_checkboxes",
      data.mediacom_installationOptions_SelectedValue_Json
    );
    forSelectingABox(
      "mediacom_AddPhone",
      data.mediacom_addPhone_SelectedValue_Json
    );

    runOperation_Tab9();
  } else if (data.currenttabThatsOpen_Json == 10) {
    // HUGHES NET
    forSelectingABox(
      "hughes_ModemRental",
      data.hughesNet_modemRental_SelectedValue_Json
    );
    forSelectingABox(
      "hughes_PurchaseModem",
      data.hughesNet_purchaseModem_SelectedValue_Json
    );
    var slider23 = $("#hughes_Internet").data("ionRangeSlider");
    if (data["hughesNet_internetOptionsSlider_SelectedValue_Json"] == "0GB") {
      slider23.update({
        from: "0",
      });
    } else if (
      data["hughesNet_internetOptionsSlider_SelectedValue_Json"] == "10GB"
    ) {
      slider23.update({
        from: "1",
      });
    } else if (
      data["hughesNet_internetOptionsSlider_SelectedValue_Json"] == "20GB"
    ) {
      slider23.update({
        from: "2",
      });
    } else if (
      data["hughesNet_internetOptionsSlider_SelectedValue_Json"] == "30GB"
    ) {
      slider23.update({
        from: "3",
      });
    } else if (
      data["hughesNet_internetOptionsSlider_SelectedValue_Json"] == "50GB"
    ) {
      slider23.update({
        from: "4",
      });
    }

    forSelectingABox(
      "hughes_InstallationOptions_checkboxes",
      data.hughesNet_installationOptions_SelectedValue_Json
    );
    runOperation_Tab10();
  } else if (data.currenttabThatsOpen_Json == 11) {
    // CENTURY LINK
    forSelectingABox(
      "century_ModemRental",
      data.centuryLink_modemRental_SelectedValue_Json
    );

    var slider24 = $("#century_Internet").data("ionRangeSlider");
    if (
      data["centuryLink_internetOptionsSlider_SelectedValue_Json"] == "0mbps"
    ) {
      slider24.update({
        from: "0",
      });
    } else if (
      data["centuryLink_internetOptionsSlider_SelectedValue_Json"] == "30mbps"
    ) {
      slider24.update({
        from: "1",
      });
    } else if (
      data["centuryLink_internetOptionsSlider_SelectedValue_Json"] == "100mbps"
    ) {
      slider24.update({
        from: "2",
      });
    } else if (
      data["centuryLink_internetOptionsSlider_SelectedValue_Json"] == "940mbps"
    ) {
      slider24.update({
        from: "3",
      });
    }

    forSelectingABox(
      "century_InstallationOptions_checkboxes",
      data.centuryLink_installationOptions_SelectedValue_Json
    );
    runOperation_Tab11();
  } else if (data.currenttabThatsOpen_Json == 12) {
    // RCN
    forSelectingABox(
      "rcn_channelLineup_checkboxes",
      data.rcn_channelLineup_SelectedValue_Json
    );

    var slider25 = $("#rcn_tv").data("ionRangeSlider");
    slider25.update({
      from: data["rcn_tvSlider_SelectedValue_Json"],
    });
    forSelectingMultipleBoxes(
      "rcn_PremiumChannels_checkboxes",
      data.rcn_premiumOptions_SelectedValue_Json
    );
    forSelectingABox(
      "rcn_internetOptions",
      data.rcn_internetEquipment_SelectedValue_Json
    );
    var slider26 = $("#rcn_Internet").data("ionRangeSlider");
    if (data["rcn_internetOptionsSlider_SelectedValue_Json"] == "0mbps") {
      slider26.update({
        from: "0",
      });
    } else if (
      data["rcn_internetOptionsSlider_SelectedValue_Json"] == "50mbps"
    ) {
      slider26.update({
        from: "1",
      });
    } else if (
      data["rcn_internetOptionsSlider_SelectedValue_Json"] == "250mbps"
    ) {
      slider26.update({
        from: "2",
      });
    } else if (
      data["rcn_internetOptionsSlider_SelectedValue_Json"] == "500mbps"
    ) {
      slider26.update({
        from: "3",
      });
    } else if (
      data["rcn_internetOptionsSlider_SelectedValue_Json"] == "1000mbps"
    ) {
      slider26.update({
        from: "4",
      });
    }

    forSelectingABox("rcn_AddPhone", data.rcn_addPhone_SelectedValue_Json);
    forSelectingABox(
      "rcn_InstallationOptions_checkboxes",
      data.rcn_installationOptions_SelectedValue_Json
    );
    runOperation_Tab12();
  } else if (data.currenttabThatsOpen_Json == 13) {
    // COMCAST
    forSelectingABox(
      "at_t_dtv_channelLineup_checkboxes",
      data.at_t_dtv_channelLineup_SelectedValue_Json
    );

    var slider27 = $("#at_t_dtv_tv").data("ionRangeSlider");
    slider27.update({
      from: data["at_t_dtv_tvSlider_SelectedValue_Json"],
    });

    forSelectingABox(
      "at_t_dtv_EquipmentOptions_checkboxes",
      data.at_t_dtv_equipmentOptions_SelectedValue_Json
    );

    forSelectingMultipleBoxes(
      "at_t_dtv_PremiumChannels_checkboxes",
      data.at_t_dtv_premiumOptions_SelectedValue_Json
    );
    forSelectingABox(
      "at_t_dtv_modernRental",
      data.at_t_dtv_modemRental_SelectedValue_Json
    );
    var slider25 = $("#at_t_dtv_Internet").data("ionRangeSlider");
    if (data["at_t_dtv_internetOptionsSlider_SelectedValue_Json"] == "0mbps") {
      slider25.update({
        from: "0",
      });
    } else if (
      data["at_t_dtv_internetOptionsSlider_SelectedValue_Json"] == "300mbps"
    ) {
      slider25.update({
        from: "1",
      });
    } else if (
      data["at_t_dtv_internetOptionsSlider_SelectedValue_Json"] == "500mbps"
    ) {
      slider25.update({
        from: "2",
      });
    } else if (
      data["at_t_dtv_internetOptionsSlider_SelectedValue_Json"] == "1000mbps"
    ) {
      slider25.update({
        from: "3",
      });
    }

    forSelectingABox(
      "at_t_dtv_InstallationOptions_checkboxes",
      data.at_t_dtv_installationOptions_SelectedValue_Json
    );

    runOperation_Tab13();
  }

  // _______________________________________________________________________________
  // _______________________________________________________________________________
}

function forSelectingABox(nameOfDiv, destinationVariable) {
  for (
    let index = 0;
    index < document.getElementsByName(nameOfDiv).length;
    index++
  ) {
    if (
      document.getElementsByName(nameOfDiv)[index].value == destinationVariable
    ) {
      document.getElementsByName(nameOfDiv)[index].checked = true;
    } else {
      document.getElementsByName(nameOfDiv)[index].checked = false;
    }
  }
}

function forSelectingMultipleBoxes(nameOfDiv, jsonArray) {
  for (
    let index = 0;
    index < document.getElementsByName(nameOfDiv).length;
    index++
  ) {
    document.getElementsByName(nameOfDiv)[index].checked = false;
  }
  for (let index = 0; index < jsonArray.length; index++) {
    document.getElementsByName(nameOfDiv)[jsonArray[index]].checked = true;
  }
}
