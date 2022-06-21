var jsonVariableForStoringDataInMySql;

var uniq;

var currentUrl;

var uniqueUrl;

var uniqueLinkForSpecificUser = "";

var SavesAllDataForCustomer = () => {
	// AT & T Input Fields

	var at_t_channelLineup_SelectedValue = jQuery(
		"input[name=channelLineup_checkboxes]:checked"
	).val();

	var at_t_tvSlider_SelectedValue = slider1.val();

	var at_t_equipmentOptions_SelectedValue = jQuery(
		"input[name=equipmentOptions_checkboxes]:checked"
	).val();

	var at_t_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index < document.getElementsByName("premiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("premiumChannels_checkboxes")[index].checked ==
			true
		) {
			at_t_premiumOptions_SelectedValue.push(index);
		}
	}

	var at_t_modemRental_SelectedValue = jQuery(
		"input[name=modernRental]:checked"
	).val();

	debugger;
	var at_t_fiberTerritory_SelectedValue = slider2.val();

	var at_t_nonFiberTerritory_SelectedValue = slider3.val();

	// COMCAST Input Fields

	var comcast_channelLineup_SelectedValue = jQuery(
		"input[name=comcast_channelLineup_checkboxes]:checked"
	).val();

	var comcast_tvSlider_SelectedValue = slider4.val();

	var comcast_equipmentOptions_SelectedValue = jQuery(
		"input[name=comcast_EquipmentOptions_checkboxes]:checked"
	).val();

	var comcast_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index <
		document.getElementsByName("comcast_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("comcast_PremiumChannels_checkboxes")[index]
				.checked == true
		) {
			comcast_premiumOptions_SelectedValue.push(index);
		}
	}

	var comcast_modemRental_SelectedValue = jQuery(
		"input[name=comcast_modernRental]:checked"
	).val();

	var comcast_internetOptionsSlider_SelectedValue = slider5.val();

	var comcast_installationOptions_SelectedValue = jQuery(
		"input[name=comcast_InstallationOptions_checkboxes]:checked"
	).val();

	var comcast_autopay_SelectedValue = jQuery(
		"input[name=comcast_Autoplay_checkboxes]:checked"
	).val();

	var comcast_addphone_SelectedValue = jQuery(
		"input[name=comcast_Autoplay_checkboxes]:checked"
	).val();

	// SPECTRUM Input Fields

	var spectrum_channelLineup_SelectedValue = jQuery(
		"input[name=spectrum_channelLineup_checkboxes]:checked"
	).val();

	var spectrum_tvSlider_SelectedValue = slider6.val();

	var spectrum_dvrSlider_SelectedValue = slider7.val();

	var spectrum_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index <
		document.getElementsByName("spectrum_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("spectrum_PremiumChannels_checkboxes")[index]
				.checked == true
		) {
			spectrum_premiumOptions_SelectedValue.push(index);
		}
	}

	var spectrum_modemRental_SelectedValue = jQuery(
		"input[name=spectrum_modernRental]:checked"
	).val();

	var spectrum_internetOptionsSlider_SelectedValue = slider8.val();

	var spectrum_installationOptions_SelectedValue = jQuery(
		"input[name=spectrum_InstallationOptions_checkboxes]:checked"
	).val();

	var spectrum_addPhone_SelectedValue = jQuery(
		"input[name=spectrum_AddPhone]:checked"
	).val();

	// METRONET Input Fields

	var metronet_channelLineup_SelectedValue = jQuery(
		"input[name=metronet_channelLineup_checkboxes]:checked"
	).val();

	var metronet_tvSlider_SelectedValue = slider9.val();

	var metronet_dvrSlider_SelectedValue = slider10.val();

	var metronet_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index <
		document.getElementsByName("metronet_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("metronet_PremiumChannels_checkboxes")[index]
				.checked == true
		) {
			metronet_premiumOptions_SelectedValue.push(index);
		}
	}

	var metronet_modemRental_SelectedValue = [];

	for (
		let index = 0;
		index < document.getElementsByName("metronet_modernRental").length;
		index++
	) {
		if (
			document.getElementsByName("metronet_modernRental")[index].checked == true
		) {
			metronet_modemRental_SelectedValue.push(index);
		}
	}

	var metronet_internetOptionsSlider_SelectedValue = slider11.val();

	var metronet_installationOptions_SelectedValue = jQuery(
		"input[name=metronet_InstallationOptions_checkboxes]:checked"
	).val();

	var metronet_addPhone_SelectedValue = jQuery(
		"input[name=metronet_AddPhone]:checked"
	).val();

	// FRONTIER Input Fields

	var frontier_modemRental_SelectedValue = jQuery(
		"input[name=frontier_modernRental]:checked"
	).val();

	var frontier_internetOptionsSlider_SelectedValue = slider12.val();

	var frontier_installationOptions_SelectedValue = jQuery(
		"input[name=frontier_InstallationOptions_checkboxes]:checked"
	).val();

	// DIRECTV Input Fields

	var direcTv_channelLineup_SelectedValue = jQuery(
		"input[name=directv_channelLineup_checkboxes]:checked"
	).val();

	var direcTv_tvSlider_SelectedValue = slider13.val();

	var direcTv_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index <
		document.getElementsByName("directv_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("directv_PremiumChannels_checkboxes")[index]
				.checked == true
		) {
			direcTv_premiumOptions_SelectedValue.push(index);
		}
	}

	var direcTv_autoPay_SelectedValue = jQuery(
		"input[name=directv_AutoPay]:checked"
	).val();

	// I3 BROADBAND Input Fields

	var i3Broadband_channelLineup_SelectedValue = jQuery(
		"input[name=i3_Broadband_channelLineup_checkboxes]:checked"
	).val();

	var i3Broadband_tvSlider_SelectedValue = slider14.val();

	var i3Broadband_wholeHomeDvrSlider_SelectedValue = slider15.val();

	var i3Broadband_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index <
		document.getElementsByName("i3_Broadband_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("i3_Broadband_PremiumChannels_checkboxes")[index]
				.checked == true
		) {
			i3Broadband_premiumOptions_SelectedValue.push(index);
		}
	}

	var i3Broadband_wifiPodsSlider_SelectedValue = slider16.val();

	var i3Broadband_internetOptionsSlider_SelectedValue = slider17.val();

	var i3Broadband_installationOptions_SelectedValue = jQuery(
		"input[name=i3_Broadband_InstallationOptions_checkboxes]:checked"
	).val();

	var i3Broadband_addPhoneFiber_SelectedValue = jQuery(
		"input[name=i3_Broadband_AddPhone]:checked"
	).val();

	// WOW Input Fields

	var wow_channelLineup_SelectedValue = jQuery(
		"input[name=wow_channelLineup_checkboxes]:checked"
	).val();

	var wow_tvSlider_SelectedValue = slider18.val();

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

	// MEDIACOM Input Fields

	var mediacom_channelLineup_SelectedValue = jQuery(
		"input[name=mediacom_channelLineup_checkboxes]:checked"
	).val();

	var mediacom_tivoSmartBoxSlider_SelectedValue = slider20.val();

	var mediacom_tivoSingleRoomDVR_SelectedValue = jQuery(
		"input[name=mediacom_SingleRoomDVR]:checked"
	).val();

	var mediacom_tivoMultiRoomDVR_SelectedValue = jQuery(
		"input[name=mediacom_MultiRoomDVR]:checked"
	).val();

	var mediacom_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index <
		document.getElementsByName("mediacom_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("mediacom_PremiumChannels_checkboxes")[index]
				.checked == true
		) {
			mediacom_premiumOptions_SelectedValue.push(index);
		}
	}

	var mediacom_modemRental_SelectedValue = jQuery(
		"input[name=mediacom_ModemRental]:checked"
	).val();

	var mediacom_additionalAeroExtenders_SelectedValue = slider21.val();

	var mediacom_internetOptionsSlider_SelectedValue = slider22.val();

	var mediacom_installationOptions_SelectedValue = jQuery(
		"input[name=mediacom_InstallationOptions_checkboxes]:checked"
	).val();

	var mediacom_addPhone_SelectedValue = jQuery(
		"input[name=mediacom_AddPhone]:checked"
	).val();

	// HUGHES-NET Input Fields

	var hughesNet_modemRental_SelectedValue = jQuery(
		"input[name=hughes_ModemRental]:checked"
	).val();

	var hughesNet_purchaseModem_SelectedValue = jQuery(
		"input[name=hughes_PurchaseModem]:checked"
	).val();

	var hughesNet_internetOptionsSlider_SelectedValue = slider23.val();

	var hughesNet_installationOptions_SelectedValue = jQuery(
		"input[name=hughes_InstallationOptions_checkboxes]:checked"
	).val();

	// CENTURY-LINK Input Fields

	var centuryLink_modemRental_SelectedValue = jQuery(
		"input[name=century_ModemRental]:checked"
	).val();

	var centuryLink_internetOptionsSlider_SelectedValue = slider24.val();

	var centuryLink_installationOptions_SelectedValue = jQuery(
		"input[name=century_InstallationOptions_checkboxes]:checked"
	).val();

	// RCN Input Fields

	var rcn_channelLineup_SelectedValue = jQuery(
		"input[name=rcn_channelLineup_checkboxes]:checked"
	).val();

	var rcn_tvSlider_SelectedValue = slider25.val();

	var rcn_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index < document.getElementsByName("rcn_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("rcn_PremiumChannels_checkboxes")[index]
				.checked == true
		) {
			rcn_premiumOptions_SelectedValue.push(index);
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

	// AT T DTV STREAM Input Fields

	var at_t_dtv_channelLineup_SelectedValue = jQuery(
		"input[name=at_t_dtv_channelLineup_checkboxes]:checked"
	).val();

	var at_t_dtv_tvSlider_SelectedValue = slider27.val();

	var at_t_dtv_equipmentOptions_SelectedValue = jQuery(
		"input[name=at_t_dtv_EquipmentOptions_checkboxes]:checked"
	).val();

	var at_t_dtv_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index <
		document.getElementsByName("at_t_dtv_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("at_t_dtv_PremiumChannels_checkboxes")[index]
				.checked == true
		) {
			at_t_dtv_premiumOptions_SelectedValue.push(index);
		}
	}

	var at_t_dtv_modemRental_SelectedValue = jQuery(
		"input[name=at_t_dtv_modernRental]:checked"
	).val();

	var at_t_dtv_internetOptionsSlider_SelectedValue = slider28.val();

	var at_t_dtv_installationOptions_SelectedValue = jQuery(
		"input[name=at_t_dtv_InstallationOptions_checkboxes]:checked"
	).val();

	// DTV SATELITE Input Fields

	var dtv_channelLineup_SelectedValue = jQuery(
		"input[name=dtv_channelLineup_checkboxes]:checked"
	).val();

	var dtv_tvSlider_SelectedValue = slider29.val();

	var dtv_equipmentOptions_SelectedValue = jQuery(
		"input[name=dtv_EquipmentOptions_checkboxes]:checked"
	).val();

	var dtv_premiumOptions_SelectedValue = [];

	for (
		let index = 0;
		index < document.getElementsByName("dtv_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementsByName("dtv_PremiumChannels_checkboxes")[index]
				.checked == true
		) {
			dtv_premiumOptions_SelectedValue.push(index);
		}
	}

	var dtv_modemRental_SelectedValue = jQuery(
		"input[name=dtv_modernRental]:checked"
	).val();

	var dtv_internetOptionsSlider_SelectedValue = slider30.val();

	var dtv_addPhone_SelectedValue = jQuery(
		"input[name=dtv_AddPhone_checkboxes]:checked"
	).val();

	var dtv_activationFee_SelectedValue = jQuery(
		"input[name=dtv_activationFee_checkboxes]:checked"
	).val();

	// ________________________________________________

	// ________________________________________________

	jsonVariableForStoringDataInMySql = {};

	// AT & T

	jsonVariableForStoringDataInMySql.at_t_channelLineup_SelectedValue_Json =
		at_t_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_tvSlider_SelectedValue_Json =
		at_t_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_equipmentOptions_SelectedValue_Json =
		at_t_equipmentOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_premiumOptions_SelectedValue_Json =
		at_t_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_modemRental_SelectedValue_Json =
		at_t_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_fiberTerritory_SelectedValue_Json =
		at_t_fiberTerritory_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_nonFiberTerritory_SelectedValue_Json =
		at_t_nonFiberTerritory_SelectedValue;

	// COMCAST

	jsonVariableForStoringDataInMySql.comcast_channelLineup_SelectedValue_Json =
		comcast_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.comcast_tvSlider_SelectedValue_Json =
		comcast_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.comcast_equipmentOptions_SelectedValue_Json =
		comcast_equipmentOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.comcast_premiumOptions_SelectedValue_Json =
		comcast_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.comcast_modemRental_SelectedValue_Json =
		comcast_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.comcast_internetOptionsSlider_SelectedValue_Json =
		comcast_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.comcast_installationOptions_SelectedValue_Json =
		comcast_installationOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.comcast_autopay_SelectedValue_Json =
		comcast_autopay_SelectedValue;
	jsonVariableForStoringDataInMySql.comcast_addphone_SelectedValue_Json =
		comcast_addphone_SelectedValue;

	// SPECTRUM

	jsonVariableForStoringDataInMySql.spectrum_channelLineup_SelectedValue_Json =
		spectrum_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.spectrum_tvSlider_SelectedValue_Json =
		spectrum_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.spectrum_dvrSlider_SelectedValue_Json =
		spectrum_dvrSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.spectrum_premiumOptions_SelectedValue_Json =
		spectrum_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.spectrum_modemRental_SelectedValue_Json =
		spectrum_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.spectrum_internetOptionsSlider_SelectedValue_Json =
		spectrum_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.spectrum_installationOptions_SelectedValue_Json =
		spectrum_installationOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.spectrum_addPhone_SelectedValue_Json =
		spectrum_addPhone_SelectedValue;

	// METRONET

	jsonVariableForStoringDataInMySql.metronet_channelLineup_SelectedValue_Json =
		metronet_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.metronet_tvSlider_SelectedValue_Json =
		metronet_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.metronet_dvrSlider_SelectedValue_Json =
		metronet_dvrSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.metronet_premiumOptions_SelectedValue_Json =
		metronet_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.metronet_modemRental_SelectedValue_Json =
		metronet_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.metronet_internetOptionsSlider_SelectedValue_Json =
		metronet_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.metronet_installationOptions_SelectedValue_Json =
		metronet_installationOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.metronet_addPhone_SelectedValue_Json =
		metronet_addPhone_SelectedValue;

	// FRONTIER

	jsonVariableForStoringDataInMySql.frontier_modemRental_SelectedValue_Json =
		frontier_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.frontier_internetOptionsSlider_SelectedValue_Json =
		frontier_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.frontier_installationOptions_SelectedValue_Json =
		frontier_installationOptions_SelectedValue;

	// DIRECTV

	jsonVariableForStoringDataInMySql.direcTv_channelLineup_SelectedValue_Json =
		direcTv_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.direcTv_tvSlider_SelectedValue_Json =
		direcTv_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.direcTv_premiumOptions_SelectedValue_Json =
		direcTv_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.direcTv_autoPay_SelectedValue_Json =
		direcTv_autoPay_SelectedValue;

	// I3-BROADBAND

	jsonVariableForStoringDataInMySql.i3Broadband_channelLineup_SelectedValue_Json =
		i3Broadband_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.i3Broadband_tvSlider_SelectedValue_Json =
		i3Broadband_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.i3Broadband_wholeHomeDvrSlider_SelectedValue_Json =
		i3Broadband_wholeHomeDvrSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.i3Broadband_premiumOptions_SelectedValue_Json =
		i3Broadband_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.i3Broadband_wifiPodsSlider_SelectedValue_Json =
		i3Broadband_wifiPodsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.i3Broadband_internetOptionsSlider_SelectedValue_Json =
		i3Broadband_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.i3Broadband_installationOptions_SelectedValue_Json =
		i3Broadband_installationOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.i3Broadband_addPhoneFiber_SelectedValue_Json =
		i3Broadband_addPhoneFiber_SelectedValue;

	// WOW

	jsonVariableForStoringDataInMySql.wow_channelLineup_SelectedValue_Json =
		wow_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.wow_tvSlider_SelectedValue_Json =
		wow_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.wow_wifiModemrental_SelectedValue_Json =
		wow_wifiModemrental_SelectedValue;

	jsonVariableForStoringDataInMySql.wow_wholeHomeWifi_SelectedValue_Json =
		wow_wholeHomeWifi_SelectedValue;

	jsonVariableForStoringDataInMySql.wow_internetOptionsSlider_SelectedValue_Json =
		wow_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.wow_addPhoneFiber_SelectedValue_Json =
		wow_addPhoneFiber_SelectedValue;

	jsonVariableForStoringDataInMySql.wow_installationOptions_SelectedValue_Json =
		wow_installationOptions_SelectedValue;

	// MEDIACOM

	jsonVariableForStoringDataInMySql.mediacom_channelLineup_SelectedValue_Json =
		mediacom_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.mediacom_tivoSmartBoxSlider_SelectedValue_Json =
		mediacom_tivoSmartBoxSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.mediacom_tivoSingleRoomDVR_SelectedValue_Json =
		mediacom_tivoSingleRoomDVR_SelectedValue;

	jsonVariableForStoringDataInMySql.mediacom_tivoMultiRoomDVR_SelectedValue_Json =
		mediacom_tivoMultiRoomDVR_SelectedValue;

	jsonVariableForStoringDataInMySql.mediacom_premiumOptions_SelectedValue_Json =
		mediacom_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.mediacom_modemRental_SelectedValue_Json =
		mediacom_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.mediacom_additionalAeroExtenders_SelectedValue_Json =
		mediacom_additionalAeroExtenders_SelectedValue;

	jsonVariableForStoringDataInMySql.mediacom_internetOptionsSlider_SelectedValue_Json =
		mediacom_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.mediacom_installationOptions_SelectedValue_Json =
		mediacom_installationOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.mediacom_addPhone_SelectedValue_Json =
		mediacom_addPhone_SelectedValue;

	// HUGHES-NET

	jsonVariableForStoringDataInMySql.hughesNet_modemRental_SelectedValue_Json =
		hughesNet_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.hughesNet_purchaseModem_SelectedValue_Json =
		hughesNet_purchaseModem_SelectedValue;

	jsonVariableForStoringDataInMySql.hughesNet_internetOptionsSlider_SelectedValue_Json =
		hughesNet_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.hughesNet_installationOptions_SelectedValue_Json =
		hughesNet_installationOptions_SelectedValue;

	// CENTURY-LINK

	jsonVariableForStoringDataInMySql.centuryLink_modemRental_SelectedValue_Json =
		centuryLink_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.centuryLink_internetOptionsSlider_SelectedValue_Json =
		centuryLink_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.centuryLink_installationOptions_SelectedValue_Json =
		centuryLink_installationOptions_SelectedValue;

	// RCN

	jsonVariableForStoringDataInMySql.rcn_channelLineup_SelectedValue_Json =
		rcn_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.rcn_tvSlider_SelectedValue_Json =
		rcn_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.rcn_premiumOptions_SelectedValue_Json =
		rcn_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.rcn_internetEquipment_SelectedValue_Json =
		rcn_internetEquipment_SelectedValue;

	jsonVariableForStoringDataInMySql.rcn_internetOptionsSlider_SelectedValue_Json =
		rcn_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.rcn_addPhone_SelectedValue_Json =
		rcn_addPhone_SelectedValue;

	jsonVariableForStoringDataInMySql.rcn_installationOptions_SelectedValue_Json =
		rcn_installationOptions_SelectedValue;

	// AT_T_DTV Stream

	jsonVariableForStoringDataInMySql.at_t_dtv_channelLineup_SelectedValue_Json =
		at_t_dtv_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_dtv_tvSlider_SelectedValue_Json =
		at_t_dtv_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_dtv_equipmentOptions_SelectedValue_Json =
		at_t_dtv_equipmentOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_dtv_premiumOptions_SelectedValue_Json =
		at_t_dtv_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_dtv_modemRental_SelectedValue_Json =
		at_t_dtv_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_dtv_internetOptionsSlider_SelectedValue_Json =
		at_t_dtv_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.at_t_dtv_installationOptions_SelectedValue_Json =
		at_t_dtv_installationOptions_SelectedValue;

	// DTV Satelite

	jsonVariableForStoringDataInMySql.dtv_channelLineup_SelectedValue_Json =
		dtv_channelLineup_SelectedValue;

	jsonVariableForStoringDataInMySql.dtv_tvSlider_SelectedValue_Json =
		dtv_tvSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.dtv_equipmentOptions_SelectedValue_Json =
		dtv_equipmentOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.dtv_premiumOptions_SelectedValue_Json =
		dtv_premiumOptions_SelectedValue;

	jsonVariableForStoringDataInMySql.dtv_modemRental_SelectedValue_Json =
		dtv_modemRental_SelectedValue;

	jsonVariableForStoringDataInMySql.dtv_internetOptionsSlider_SelectedValue_Json =
		dtv_internetOptionsSlider_SelectedValue;

	jsonVariableForStoringDataInMySql.dtv_addPhone_SelectedValue_Json =
		dtv_addPhone_SelectedValue;

	jsonVariableForStoringDataInMySql.dtv_activationFee_SelectedValue_Json =
		dtv_activationFee_SelectedValue;

	// _____________________________________

	var currenttabThatsOpen;

	for (let index = 1; index <= 14; index++) {
		if (document.getElementById("tabDetails_" + index).style.display != "none") {
			currenttabThatsOpen = index;
		}
	}

	jsonVariableForStoringDataInMySql.currenttabThatsOpen_Json =
		currenttabThatsOpen;

	// ______________________________________________________

	// ______________________________________________________

	uniq = new Date().getTime();

	currentUrl = window.location.href;
	currentUrl = currentUrl.replace("page.php", "");
	uniqueUrl = currentUrl + "customer/" + "?id=" + uniq;

	var a = uniqueUrl.split("?");

	var b = a[1].split("=");

	var currentUserId = b[1];

	$.ajax({
		url: "./php/store_customer_data.php",

		type: "POST",

		data: {
			unique_Id: currentUserId,
			unique_Url: uniqueUrl,
			customer_Data: JSON.stringify(jsonVariableForStoringDataInMySql),
			username: UsernameOfCustomer,
		},

		success: function (data) {
			debugger;
			document.getElementsByClassName("modal-body")[0].style.overflowWrap =
				"anywhere";

			uniqueLinkForSpecificUser = data;
			document.getElementsByClassName("modal-body")[0].innerHTML =
				"Data have been saved successfuly, this is the unique link for the data: " +
				"</br><a target='_blank' href=" +
				data +
				">" +
				data +
				"</a>";

			$("#exampleModal").modal("show");
		},

		error: function (XMLHttpRequest, textStatus, errorThrown) {
			console.log(XMLHttpRequest);
			console.log("Status: " + textStatus);
			console.log("Error: " + errorThrown);
			console.log("ERROR");
			s;
		},
	});
};

function closeModal() {
	$("#exampleModal").modal("hide");
}
