/** @format */

// TAB 1 SLIDERs
//#region
var slider1 = $("#tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4", "5", "6"],
	onChange: function () {
		runOperation_Tab1();
	},
});
var slider2 = $("#fiber").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0", "300mbps", "500mbps", "1000mbps"],
	onChange: function () {
		runOperation_Tab1();
	},
});
var slider3 = $("#nonFiber").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 0,
	grid: true,
	values: ["0", "25mbps", "50mbps", "75mbps", "100mbps"],
	onChange: function () {
		runOperation_Tab1();
	},
});
//#endregion

// TAB 2 SLIDERs
//#region
var slider4 = $("#comcast_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4", "5", "6"],
	onChange: function () {
		runOperation_Tab2();
	},
});
var slider5 = $("#comcast_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: [
		"0mbps",
		"50mbps",
		"100mbps",
		"300mbps",
		"600mbps",
		"900mbps",
		"1200mbps",
	],
	onChange: function () {
		runOperation_Tab2();
	},
});
//#endregion

// TAB 3 SLIDERs
//#region
var slider6 = $("#spectrum_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4"],
	onChange: function () {
		runOperation_Tab3();
	},
});
var slider7 = $("#spectrum_dvr").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4"],
	onChange: function () {
		runOperation_Tab3();
	},
});
var slider8 = $("#spectrum_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0mbps", "200mbps", "400mbps", "GIG"],
	onChange: function () {
		runOperation_Tab3();
	},
});
//#endregion

// TAB 4 SLIDERs
//#region
var slider9 = $("#metronet_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 1,
	grid: true,
	values: ["0", "1", "2"],
	onChange: function () {
		runOperation_Tab4();
	},
});
var slider10 = $("#metronet_dvr").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 1,
	grid: true,
	values: ["0", "1"],
	onChange: function () {
		runOperation_Tab4();
	},
});
var slider11 = $("#metronet_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 3,
	grid: true,
	values: ["0mbps", "100mbps", "200mbps", "500mbps", "GIG"],
	onChange: function () {
		runOperation_Tab4();
	},
});
//#endregion

// TAB 5 SLIDERs
//#region
var slider12 = $("#frontier_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 3,
	grid: true,
	values: ["0mbps", "25mbps", "50mbps", "500mbps", "1000mbps"],
	onChange: function () {
		runOperation_Tab5();
	},
});
//#endregion

// TAB 6 SLIDERs
//#region
var slider13 = $("#directv_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4", "5", "6", "7", "8"],
	onChange: function () {
		runOperation_Tab6();
	},
});
// _________________________________________________________________________
//#endregion

// TAB 7 SLIDERs
//#region
var slider14 = $("#i3_Broadband_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4", "5"],
	onChange: function () {
		runOperation_Tab7();
	},
});

var slider15 = $("#i3_Broadband_dvr").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 2,
	from: 1,
	grid: true,
	values: ["0", "1"],
	onChange: function () {
		runOperation_Tab7();
	},
});

var slider16 = $("#i3_Broadband_Wifi_Pods").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0", "1(2-3 Bed)", "2(3-4 Bed)", "3(4-5 Bed)", "4(5+ Bed)"],
	onChange: function () {
		runOperation_Tab7();
	},
});

var slider17 = $("#i3_Broadband_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0mbps", "250mbps", "500mbps", "1000mbps"],
	onChange: function () {
		runOperation_Tab7();
	},
});
// _________________________________________________________________________
//#endregion

// TAB 8 SLIDERs
//#region
var slider18 = $("#wow_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4", "5"],
	onChange: function () {
		runOperation_Tab8();
	},
});

var slider19 = $("#wow_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0mbps", "100mbps", "200mbps", "500mbps", "1000mbps"],
	onChange: function () {
		runOperation_Tab8();
	},
});
//#endregion

// TAB 9 SLIDERs
//#region
var slider20 = $("#mediacom_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4", "5"],
	onChange: function () {
		runOperation_Tab9();
	},
});

var slider21 = $("#mediacom_Additional_Eero").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4", "5"],
	onChange: function () {
		runOperation_Tab9();
	},
});

var slider22 = $("#mediacom_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0mbps", "60mbps", "100mbps", "300mbps", "1000mbps"],
	onChange: function () {
		runOperation_Tab9();
	},
});
// _________________________________________________________________________
//#endregion

// TAB 10 SLIDERs
//#region
var slider23 = $("#hughes_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0GB", "10GB", "20GB", "30GB", "50GB"],
	onChange: function () {
		runOperation_Tab10();
	},
});
//#endregion

// TAB 11 SLIDERs
//#region
var slider24 = $("#century_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0mbps", "30mbps", "100mbps", "940mbps"],
	onChange: function () {
		runOperation_Tab11();
	},
});
//#endregion

// TAB 12 SLIDERs
//#region
var slider25 = $("#rcn_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4"],
	onChange: function () {
		runOperation_Tab12();
	},
});
var slider26 = $("#rcn_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0mbps", "50mbps", "250mbps", "500mbps", "1000mbps"],
	onChange: function () {
		runOperation_Tab12();
	},
});

// TAB 13 SLIDERs
//#region
var slider27 = $("#at_t_dtv_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4", "5", "6"],
	onChange: function () {
		runOperation_Tab13();
	},
});
var slider28 = $("#at_t_dtv_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0mbps", "300mbps", "500mbps", "1000mbps"],
	onChange: function () {
		runOperation_Tab13();
	},
});
//#endregion

// TAB 14 SLIDERs
//#region
var slider29 = $("#dtv_tv").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 6,
	from: 2,
	grid: true,
	values: ["0", "1", "2", "3", "4", "5", "6"],
	onChange: function () {
		runOperation_Tab14();
	},
});
var slider30 = $("#dtv_Internet").ionRangeSlider({
	skin: "big",
	min: 0,
	max: 1200,
	from: 2,
	grid: true,
	values: ["0mbps", "300mbps", "500mbps", "1000mbps"],
	onChange: function () {
		runOperation_Tab14();
	},
});
//#endregion

// TABLES FUNCTIONS
// _________________________________________________________________________
// AT & T
runOperation_Tab1();
function runOperation_Tab1() {
	// -------------------------------------------------------------
	// TABLE 1

	// 1st Row
	var ifAllChannelLineups_Of_At_t = false;
	for (let index = 0; index < 4; index++) {
		let checkboxes_variable = document.getElementsByName(
			"channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false &&
			checkboxes_variable[3].checked == false
		) {
			$("#At_t_TelevisionSummary").hide();
			// ----------------------
			ifAllChannelLineups_Of_At_t = true;
			// ----------------------
			// Disabling Television Summary Properties
			slider1.data("ionRangeSlider").update({ disable: true });
			for (
				let index = 0;
				index < document.getElementsByName("equipmentOptions_checkboxes").length;
				index++
			) {
				document.getElementsByName("equipmentOptions_checkboxes")[
					index
				].disabled = true;
			}
			for (
				let index = 0;
				index < document.getElementsByName("premiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("premiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			// ----------------------

			document.getElementById("channelLineup_Price").innerHTML = "$0/month";
			document.getElementById("tvbox_1_Price").innerHTML = "$0/month";
			document.getElementById("tvbox_2_Price").innerHTML = "$0/month";
			document.getElementById("tvbox_3_Price").innerHTML = "$0/month";
			document.getElementById("tvbox_4_Price").innerHTML = "$0/month";
			document.getElementById("tvbox_5_Price").innerHTML = "$0/month";
			document.getElementById("tvbox_6_Price").innerHTML = "$0/month";
			document.getElementById("equipment_Price").innerHTML = "$0/month";
			document.getElementById("premium_1_Price").innerHTML = "$0";
			document.getElementById("premium_2_Price").innerHTML = "$0";
			document.getElementById("premium_3_Price").innerHTML = "$0";
			document.getElementById("premium_4_Price").innerHTML = "$0";
			document.getElementById("premium_5_Price").innerHTML = "$0";
			document.getElementById("premium_6_Price").innerHTML = "$0";
			document.getElementById("premium_7_Price").innerHTML = "$0";
			document.getElementById("totalTelevision_Price").innerHTML = "$0";
		}

		if (checkboxes_variable[index].checked == true) {
			$("#At_t_TelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider1.data("ionRangeSlider").update({ disable: false });
			for (
				let index = 0;
				index < document.getElementsByName("equipmentOptions_checkboxes").length;
				index++
			) {
				document.getElementsByName("equipmentOptions_checkboxes")[
					index
				].disabled = false;
			}
			for (
				let index = 0;
				index < document.getElementsByName("premiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("premiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------
			let label = checkboxes_variable[index].nextElementSibling.innerText;
			label = label.split(" ");
			document.getElementById("channelLineup_Text").innerHTML = label[0];
			document.getElementById("channelLineup_Price").innerHTML =
				at_t_TV_Packages[index];
			// document.getElementById('channelLineup_Price').innerHTML =
			//   '$' + checkboxes_variable[index].value.toLocaleString() + '/month';
		}
	}
	// 2nd Row
	let tv_variable = slider1.val();
	$("#tvbox_1_Text_At_t").hide();
	$("#tvbox_2_Text_At_t").hide();
	$("#tvbox_3_Text_At_t").hide();
	$("#tvbox_4_Text_At_t").hide();
	$("#tvbox_5_Text_At_t").hide();
	$("#tvbox_6_Text_At_t").hide();

	if (ifAllChannelLineups_Of_At_t != true) {
		for (let index = 1; index <= numeral(tv_variable).value(); index++) {
			$("#tvbox_" + index + "_Text_At_t").show();
			document.getElementById("tvbox_" + index + "_Price").innerHTML =
				at_t_TV_s_Price.One;
		}
	}

	// 4th Row
	if (ifAllChannelLineups_Of_At_t != true) {
		for (let index = 0; index < 2; index++) {
			let checkboxes_variable = document.getElementsByName(
				"equipmentOptions_checkboxes"
			);
			if (checkboxes_variable[index].checked == true) {
				let label = checkboxes_variable[index].nextElementSibling.innerText;
				label = label.split("(");
				document.getElementById("equipment_Text").innerHTML = label[0];
				if (index == 0) {
					document.getElementById("equipment_Price").innerHTML =
						at_t_EquipmentOptions.Twenty_Hour_DVR;
					// checkboxes_variable[index].value;
				} else {
					document.getElementById("equipment_Price").innerHTML =
						at_t_EquipmentOptions.Unlimited_DVR;
					// checkboxes_variable[index].value + '/month';
				}
			}
		}
	}

	// 5th Row
	let checkboxes_variable = document.getElementsByName(
		"premiumChannels_checkboxes"
	);

	if (ifAllChannelLineups_Of_At_t != true) {
		if (checkboxes_variable[0].checked == true) {
			$("#premium_1_At_t").show();
			document.getElementById("premium_1_Price").innerHTML =
				at_t_PremiumChannels.HBO_Max;
		} else {
			$("#premium_1_At_t").hide();
			document.getElementById("premium_1_Price").innerHTML = "";
		}

		if (checkboxes_variable[1].checked == true) {
			$("#premium_2_At_t").show();
			document.getElementById("premium_2_Price").innerHTML =
				at_t_PremiumChannels.Cinemax;
		} else {
			$("#premium_2_At_t").hide();
			document.getElementById("premium_2_Price").innerHTML = "";
		}

		if (checkboxes_variable[2].checked == true) {
			$("#premium_3_At_t").show();
			document.getElementById("premium_3_Price").innerHTML =
				at_t_PremiumChannels.Showtime;
		} else {
			$("#premium_3_At_t").hide();
			document.getElementById("premium_3_Price").innerHTML = "";
		}

		if (checkboxes_variable[3].checked == true) {
			$("#premium_4_At_t").show();
			document.getElementById("premium_4_Price").innerHTML =
				at_t_PremiumChannels.Starz;
		} else {
			$("#premium_4_At_t").hide();
			document.getElementById("premium_4_Price").innerHTML = "";
		}

		if (checkboxes_variable[4].checked == true) {
			$("#premium_5_At_t").show();
			document.getElementById("premium_5_Price").innerHTML =
				at_t_PremiumChannels.Epix;
		} else {
			$("#premium_5_At_t").hide();
			document.getElementById("premium_5_Price").innerHTML = "";
		}

		if (checkboxes_variable[5].checked == true) {
			$("#premium_6_At_t").show();
			document.getElementById("premium_6_Price").innerHTML =
				at_t_PremiumChannels.Movies_Extra_Pack;
		} else {
			$("#premium_6_At_t").hide();
			document.getElementById("premium_6_Price").innerHTML = "";
		}

		if (checkboxes_variable[6].checked == true) {
			$("#premium_7_At_t").show();
			document.getElementById("premium_7_Price").innerHTML =
				at_t_PremiumChannels.NBA_League_Pass;
		} else {
			$("#premium_7_At_t").hide();
			document.getElementById("premium_7_Price").innerHTML = "";
		}
	}

	// 6th Row
	let total = numeral(
		document.getElementById("channelLineup_Price").innerHTML
	).value();

	for (let index = 1; index <= 7; index++) {
		if (document.getElementById("premium_" + index + "_Price").innerHTML != "") {
			total += numeral(
				document.getElementById("premium_" + index + "_Price").innerHTML
			).value();
		}
	}
	if (ifAllChannelLineups_Of_At_t != true) {
		total +=
			numeral(slider1.val()).value() * numeral(at_t_TV_s_Price.One).value();
	}

	if (
		numeral(document.getElementById("equipment_Price").innerHTML).value() != null
	) {
		total += numeral(
			document.getElementById("equipment_Price").innerHTML
		).value();
	}

	document.getElementById("totalTelevision_Price").innerHTML =
		"$" + total.toLocaleString() + "/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	if (slider2.val() == "0") {
		$("#fiber_1_Text_At_t").hide();
		document.getElementById("fiber_Text").innerHTML = slider2.val();
		document.getElementById("fiber_Price").innerHTML =
			at_t_FiberTerritory.F_0_Mbps;
	} else if (slider2.val() == "300mbps") {
		$("#fiber_1_Text_At_t").show();
		document.getElementById("fiber_Text").innerHTML = slider2.val();
		document.getElementById("fiber_Price").innerHTML =
			at_t_FiberTerritory.F_300_Mbps;
	} else if (slider2.val() == "500mbps") {
		$("#fiber_1_Text_At_t").show();
		document.getElementById("fiber_Text").innerHTML = slider2.val();
		document.getElementById("fiber_Price").innerHTML =
			at_t_FiberTerritory.F_500_Mbps;
	} else if (slider2.val() == "1000mbps") {
		$("#fiber_1_Text_At_t").show();
		document.getElementById("fiber_Text").innerHTML = slider2.val();
		document.getElementById("fiber_Price").innerHTML =
			at_t_FiberTerritory.F_1000_Mbps;
	}

	// 2nd Row
	if (slider3.val() == "0") {
		$("#nonFiber_1_Text_At_t").hide();
		document.getElementById("nonFiber_Text").innerHTML = slider3.val();
		document.getElementById("nonFiber_Price").innerHTML =
			at_t_NonFiberTerritory.NF_0_Mbps;
	} else if (slider3.val() == "25mbps") {
		$("#nonFiber_1_Text_At_t").show();
		document.getElementById("nonFiber_Text").innerHTML = slider3.val();
		document.getElementById("nonFiber_Price").innerHTML =
			at_t_NonFiberTerritory.NF_25_Mbps;
	} else if (slider3.val() == "50mbps") {
		$("#nonFiber_1_Text_At_t").show();
		document.getElementById("nonFiber_Text").innerHTML = slider3.val();
		document.getElementById("nonFiber_Price").innerHTML =
			at_t_NonFiberTerritory.NF_50_Mbps;
	} else if (slider3.val() == "75mbps") {
		$("#nonFiber_1_Text_At_t").show();
		document.getElementById("nonFiber_Text").innerHTML = slider3.val();
		document.getElementById("nonFiber_Price").innerHTML =
			at_t_NonFiberTerritory.NF_75_Mbps;
	} else if (slider3.val() == "100mbps") {
		$("#nonFiber_1_Text_At_t").show();
		document.getElementById("nonFiber_Text").innerHTML = slider3.val();
		document.getElementById("nonFiber_Price").innerHTML =
			at_t_NonFiberTerritory.NF_100_Mbps;
	}

	// 3rd Row
	document.getElementById("modernRental_Text").innerHTML = "Modem Rental";
	if (document.getElementsByName("modernRental")[0].checked == true) {
		document.getElementById("modernRental_Price").innerHTML =
			at_t_ModemRental.Yes;
	} else {
		document.getElementById("modernRental_Price").innerHTML = at_t_ModemRental.No;
	}

	// 4th Row
	let total_2 = 0;
	if (
		numeral(document.getElementById("fiber_Price").innerHTML).value() != null
	) {
		total_2 =
			total_2 + numeral(document.getElementById("fiber_Price").innerHTML).value();
	}
	if (
		numeral(document.getElementById("nonFiber_Price").innerHTML).value() != null
	) {
		total_2 =
			total_2 +
			numeral(document.getElementById("nonFiber_Price").innerHTML).value();
	}
	if (
		numeral(document.getElementById("modernRental_Price").innerHTML).value() !=
		null
	) {
		total_2 += numeral(
			document.getElementById("modernRental_Price").innerHTML
		).value();
	}
	document.getElementById("totalInternet_Price").innerHTML =
		"$" + total_2 + "/month";

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotion = document.getElementById("At_t_PromotionSectionBody");
	tablePromotion.innerHTML = "";
	for (let index = 0; index < at_t_Promotions.length; index++) {
		$("#At_t_PromotionSection")
			.find("#At_t_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' + at_t_Promotions[index] + "</td></tr>"
			);
	}
	let tableUpdate = document.getElementById("At_t_UpdateSectionBody");
	tableUpdate.innerHTML = "";
	for (let index = 0; index < at_t_Updates.length; index++) {
		$("#At_t_UpdateSection")
			.find("#At_t_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + at_t_Updates[index] + "</td></tr>"
			);
	}
	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"At_t_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < at_t_TopSellingPoints.length; index++) {
		$("#At_t_TopSellingPointsSection")
			.find("#At_t_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"At_t_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < at_t_RequiredNewServiceInformation.length;
		index++
	) {
		$("#At_t_RequiredNewServiceInfoSection")
			.find("#At_t_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"At_t_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < at_t_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#At_t_RequiredDisconnectionInformationSection")
			.find("#At_t_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"At_t_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < at_t_AdditionalServiceInformation.length;
		index++
	) {
		$("#At_t_AdditionalServiceInformationSection")
			.find("#At_t_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"At_t_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < at_t_InstallationOptions.length; index++) {
		$("#At_t_InstallationOptionsSection")
			.find("#At_t_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// TABLE 3
	// Grand Total Row
	document.getElementById("totalOfAll_Price").innerHTML =
		"$" +
		(
			numeral(document.getElementById("totalTelevision_Price").innerHTML).value() +
			numeral(document.getElementById("totalInternet_Price").innerHTML).value()
		).toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// -------------------------------------------------------------
}
// _________________________________________________________________________
// COMCAST
runOperation_Tab2();
function runOperation_Tab2() {
	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	var ifAllChannelLineups_Of_Comcast = false;
	for (let index = 0; index < 3; index++) {
		let checkboxes_variable = document.getElementsByName(
			"comcast_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false
		) {
			$("#comcastTelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider4.data("ionRangeSlider").update({ disable: true });
			for (
				let index = 0;
				index <
				document.getElementsByName("comcast_EquipmentOptions_checkboxes").length;
				index++
			) {
				document.getElementsByName("comcast_EquipmentOptions_checkboxes")[
					index
				].disabled = true;
			}
			for (
				let index = 0;
				index <
				document.getElementsByName("comcast_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("comcast_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			// ----------------------

			// document.getElementById("comcast_ChannelLineup_Price").innerHTML =
			// 	"$0/month";
			document.getElementById("comcast_tvbox_1_Price").innerHTML = "$0/month";
			document.getElementById("comcast_tvbox_2_Price").innerHTML = "$0/month";
			document.getElementById("comcast_tvbox_3_Price").innerHTML = "$0/month";
			document.getElementById("comcast_tvbox_4_Price").innerHTML = "$0/month";
			document.getElementById("comcast_tvbox_5_Price").innerHTML = "$0/month";
			document.getElementById("comcast_tvbox_6_Price").innerHTML = "$0/month";
			document.getElementById("comcast_equipment_Price").innerHTML = "$0/month";
			document.getElementById("comcast_1_premium_Price").innerHTML = "$0";
			document.getElementById("comcast_2_premium_Price").innerHTML = "$0";
			document.getElementById("comcast_3_premium_Price").innerHTML = "$0";
			document.getElementById("comcast_4_premium_Price").innerHTML = "$0";
			document.getElementById("comcast_5_premium_Price").innerHTML = "$0";
			document.getElementById("comcast_6_premium_Price").innerHTML = "$0";
			ifAllChannelLineups_Of_Comcast = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#comcastTelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider4.data("ionRangeSlider").update({ disable: false });
			for (
				let index = 0;
				index <
				document.getElementsByName("comcast_EquipmentOptions_checkboxes").length;
				index++
			) {
				document.getElementsByName("comcast_EquipmentOptions_checkboxes")[
					index
				].disabled = false;
			}
			for (
				let index = 0;
				index <
				document.getElementsByName("comcast_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("comcast_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------

			let label = checkboxes_variable[index].nextElementSibling.innerText;
			label = label.split(" ");
			document.getElementById("comcast_ChannelLineup_Text").innerHTML = label[0];
			// document.getElementById("comcast_ChannelLineup_Price").innerHTML =
			// 	comcast_TV_Packages[index];
			// checkboxes_variable[index].value.toLocaleString() + '/month';
		}
	}

	// 2nd Row

	// ------
	let tv_variable_2 = slider4.val();
	$("#tvbox_1_Text_Comcast").hide();
	$("#tvbox_2_Text_Comcast").hide();
	$("#tvbox_3_Text_Comcast").hide();
	$("#tvbox_4_Text_Comcast").hide();
	$("#tvbox_5_Text_Comcast").hide();
	$("#tvbox_6_Text_Comcast").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_Comcast").show();
		document.getElementById("comcast_tvbox_" + index + "_Price").innerHTML =
			comcast_TV_s_Price.One;
	}

	// 4th Row
	for (let index = 0; index < 3; index++) {
		let checkboxes_variable_2 = document.getElementsByName(
			"comcast_EquipmentOptions_checkboxes"
		);
		if (checkboxes_variable_2[index].checked == true) {
			let label = checkboxes_variable_2[index].nextElementSibling.innerText;
			label = label.split("(");
			document.getElementById("comcast_equipment_Text").innerHTML = label[0];
			if (index == 0) {
				document.getElementById("comcast_equipment_Price").innerHTML =
					comcast_EquipmentOptions.Twenty_Hour_DVR;
			} else if (index == 1) {
				document.getElementById("comcast_equipment_Price").innerHTML =
					comcast_EquipmentOptions.OneFifty_Hour_DVR;
			} else {
				document.getElementById("comcast_equipment_Price").innerHTML =
					comcast_EquipmentOptions.ThreeHundred_Hour_DVR;
			}
		}
	}

	// 5th Row
	// -----------------------------------------------------------------------------------
	// 5th Row
	let checkboxes_variable = document.getElementsByName(
		"comcast_PremiumChannels_checkboxes"
	);
	if (checkboxes_variable[0].checked == true) {
		$("#premiumText_1_Comcast").show();
		document.getElementById("comcast_1_premium_Price").innerHTML =
			comcast_PremiumChannels.HBO;
	} else {
		$("#premiumText_1_Comcast").hide();
		document.getElementById("comcast_1_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[1].checked == true) {
		$("#premiumText_2_Comcast").show();
		document.getElementById("comcast_2_premium_Price").innerHTML =
			comcast_PremiumChannels.Cinemax;
	} else {
		$("#premiumText_2_Comcast").hide();
		document.getElementById("comcast_2_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[2].checked == true) {
		$("#premiumText_3_Comcast").show();
		document.getElementById("comcast_3_premium_Price").innerHTML =
			comcast_PremiumChannels.Showtime;
	} else {
		$("#premiumText_3_Comcast").hide();
		document.getElementById("comcast_3_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[3].checked == true) {
		$("#premiumText_4_Comcast").show();
		document.getElementById("comcast_4_premium_Price").innerHTML =
			comcast_PremiumChannels.Starz;
	} else {
		$("#premiumText_4_Comcast").hide();
		document.getElementById("comcast_4_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[4].checked == true) {
		$("#premiumText_5_Comcast").show();
		document.getElementById("comcast_5_premium_Price").innerHTML =
			comcast_PremiumChannels.Sports_Package;
	} else {
		$("#premiumText_5_Comcast").hide();
		document.getElementById("comcast_5_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[5].checked == true) {
		$("#premiumText_6_Comcast").show();
		document.getElementById("comcast_6_premium_Price").innerHTML =
			comcast_PremiumChannels.TMC;
	} else {
		$("#premiumText_6_Comcast").hide();
		document.getElementById("comcast_6_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[6].checked == true) {
		$("#premiumText_7_Comcast").show();
		document.getElementById("comcast_7_premium_Price").innerHTML =
			comcast_PremiumChannels.TMC;
	} else {
		$("#premiumText_7_Comcast").hide();
		document.getElementById("comcast_7_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[7].checked == true) {
		$("#premiumText_8_Comcast").show();
		document.getElementById("comcast_8_premium_Price").innerHTML =
			comcast_PremiumChannels.TMC;
	} else {
		$("#premiumText_8_Comcast").hide();
		document.getElementById("comcast_8_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[8].checked == true) {
		$("#premiumText_9_Comcast").show();
		document.getElementById("comcast_9_premium_Price").innerHTML =
			comcast_PremiumChannels.TMC;
	} else {
		$("#premiumText_9_Comcast").hide();
		document.getElementById("comcast_9_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[9].checked == true) {
		$("#premiumText_10_Comcast").show();
		document.getElementById("comcast_10_premium_Price").innerHTML =
			comcast_PremiumChannels.TMC;
	} else {
		$("#premiumText_10_Comcast").hide();
		document.getElementById("comcast_10_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[10].checked == true) {
		$("#premiumText_11_Comcast").show();
		document.getElementById("comcast_11_premium_Price").innerHTML =
			comcast_PremiumChannels.TMC;
	} else {
		$("#premiumText_11_Comcast").hide();
		document.getElementById("comcast_11_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[11].checked == true) {
		$("#premiumText_12_Comcast").show();
		document.getElementById("comcast_12_premium_Price").innerHTML =
			comcast_PremiumChannels.TMC;
	} else {
		$("#premiumText_12_Comcast").hide();
		document.getElementById("comcast_12_premium_Price").innerHTML = "";
	}

	// -----------------------------------------------------------------------------------

	// 6th Row
	let total_3 = 0;

	for (let index = 1; index <= 12; index++) {
		if (
			document.getElementById("comcast_" + index + "_premium_Price").innerHTML !=
			""
		) {
			total_3 += numeral(
				document.getElementById("comcast_" + index + "_premium_Price").innerHTML
			).value();
		}
	}
	total_3 +=
		numeral(slider4.val()).value() * numeral(comcast_TV_s_Price.One).value();
	if (
		numeral(
			document.getElementById("comcast_equipment_Price").innerHTML
		).value() != null
	) {
		total_3 += numeral(
			document.getElementById("comcast_equipment_Price").innerHTML
		).value();
	}

	document.getElementById("comcast_TotalTelevision_Price").innerHTML =
		"$" + total_3.toLocaleString() + "/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	let chooseBundlePrice;
	if (
		document.getElementsByName("comcast_channelLineup_checkboxes")[0].checked
	) {
		chooseBundlePrice = comcast_BundlePrice_Basic_TV;
	} else if (
		document.getElementsByName("comcast_channelLineup_checkboxes")[1].checked
	) {
		chooseBundlePrice = comcast_BundlePrice_Extra_TV;
	} else {
		chooseBundlePrice = comcast_BundlePrice_Preferred_TV;
	}

	if (slider5.val() == "0mbps") {
		document.getElementById("comcast_bundle_Price").innerHTML =
			chooseBundlePrice.I_0_Mbps;
	} else if (slider5.val() == "50mbps") {
		document.getElementById("comcast_bundle_Price").innerHTML =
			chooseBundlePrice.I_50_Mbps;
	} else if (slider5.val() == "100mbps") {
		document.getElementById("comcast_bundle_Price").innerHTML =
			chooseBundlePrice.I_100_Mbps;
	} else if (slider5.val() == "300mbps") {
		document.getElementById("comcast_bundle_Price").innerHTML =
			chooseBundlePrice.I_300_Mbps;
	} else if (slider5.val() == "600mbps") {
		document.getElementById("comcast_bundle_Price").innerHTML =
			chooseBundlePrice.I_600_Mbps;
	} else if (slider5.val() == "900mbps") {
		document.getElementById("comcast_bundle_Price").innerHTML =
			chooseBundlePrice.I_900_Mbps;
	} else if (slider5.val() == "1200mbps") {
		document.getElementById("comcast_bundle_Price").innerHTML =
			chooseBundlePrice.I_1200_Mbps;
	}

	// 2nd Row
	document.getElementById("comcast_modernRental_Text").innerHTML =
		"Modem Rental";
	if (document.getElementsByName("comcast_modernRental")[0].checked == true) {
		document.getElementById("comcast_modernRental_Price").innerHTML =
			comcast_ModemRental.Modem_And_Router;
	} else if (
		document.getElementsByName("comcast_modernRental")[1].checked == true
	) {
		document.getElementById("comcast_modernRental_Price").innerHTML =
			comcast_ModemRental.Whole_Home_Modem_And_Router;
	}

	// 3rd Row
	let total_4 = 0;
	// if (
	// 	numeral(document.getElementById("comcast_fiber_Price").innerHTML).value() !=
	// 	null
	// ) {
	// 	total_4 =
	// 		total_4 +
	// 		numeral(document.getElementById("comcast_fiber_Price").innerHTML).value();
	// }
	if (
		numeral(
			document.getElementById("comcast_modernRental_Price").innerHTML
		).value() != null
	) {
		total_4 += numeral(
			document.getElementById("comcast_modernRental_Price").innerHTML
		).value();
	}
	document.getElementById("comcast_TotalInternet_Price").innerHTML =
		"$" + total_4 + "/month";

	// TABLE 3
	// INSTALLATION FESS
	if (
		document.getElementsByName("comcast_InstallationOptions_checkboxes")[0]
			.checked
	) {
		document.getElementById("comcast_activationFee_Price").innerHTML =
			comcast_InstallationFee.SelfInstall;
	} else {
		document.getElementById("comcast_activationFee_Price").innerHTML =
			comcast_InstallationFee.TechInstall;
	}

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById(
		"comcast_PromotionSectionBody"
	);
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < comcast_Promotions.length; index++) {
		$("#comcast_PromotionSection")
			.find("#comcast_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					comcast_Promotions[index] +
					"</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("comcast_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < comcast_Updates.length; index++) {
		$("#comcast_UpdateSection")
			.find("#comcast_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + comcast_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"comcast_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < comcast_TopSellingPoints.length; index++) {
		$("#comcast_TopSellingPointsSection")
			.find("#comcast_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					comcast_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"comcast_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < comcast_RequiredNewServiceInformation.length;
		index++
	) {
		$("#comcast_RequiredNewServiceInfoSection")
			.find("#comcast_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					comcast_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"comcast_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < comcast_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#comcast_RequiredDisconnectionInformationSection")
			.find("#comcast_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					comcast_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"comcast_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < comcast_AdditionalServiceInformation.length;
		index++
	) {
		$("#comcast_AdditionalServiceInformationSection")
			.find("#comcast_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					comcast_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"comcast_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < comcast_InstallationOptions.length; index++) {
		$("#comcast_InstallationOptionsSection")
			.find("#comcast_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					comcast_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// Grand Total Row
	if (document.getElementById("comcast_AutoplayYes").checked) {
		document.getElementById("comcast_AutoPay_Discount").innerHTML =
			comcast_AutopayDiscount.Yes;
	} else {
		document.getElementById("comcast_AutoPay_Discount").innerHTML =
			comcast_AutopayDiscount.No;
	}

	if (document.getElementById("comcast_AddPhoneYes").checked) {
		document.getElementById("comcast_addPhone_Price").innerHTML =
			comcast_AddPhone.Yes;
	} else {
		document.getElementById("comcast_addPhone_Price").innerHTML =
			comcast_AddPhone.No;
	}

	// Comcast Bundle Discount Calculation
	var sliderValue = slider5.val();
	// if (numeral(sliderValue).value() != "0") {
	// 	if (
	// 		document.getElementsByName("comcast_channelLineup_checkboxes")[0].checked
	// 	) {
	// 		document.getElementById("comcast_bundle_Price").innerHTML =
	// 			comcast_BundleDiscount_Basic_TV[
	// 				"B_" + numeral(sliderValue).value() + "mbps"
	// 			];
	// 	} else if (
	// 		document.getElementsByName("comcast_channelLineup_checkboxes")[1].checked
	// 	) {
	// 		document.getElementById("comcast_bundle_Price").innerHTML =
	// 			comcast_BundleDiscount_Extra_TV[
	// 				"E_" + numeral(sliderValue).value() + "mbps"
	// 			];
	// 	} else if (
	// 		document.getElementsByName("comcast_channelLineup_checkboxes")[2].checked
	// 	) {
	// 		document.getElementById("comcast_bundle_Price").innerHTML =
	// 			comcast_BundleDiscount_Preferred_TV[
	// 				"P_" + numeral(sliderValue).value() + "mbps"
	// 			];
	// 	}
	// } else {
	// 	document.getElementById("comcast_bundle_Price").innerHTML = "$0/month";
	// }
	// if (ifAllChannelLineups_Of_Comcast == true) {
	// 	document.getElementById("comcast_bundle_Price").innerHTML = "$0/month";
	// }

	let totalOfComcast = numeral(
		document.getElementById("comcast_TotalInternet_Price").innerHTML
	).value();
	if (ifAllChannelLineups_Of_Comcast != true) {
		totalOfComcast += numeral(
			document.getElementById("comcast_TotalTelevision_Price").innerHTML
		).value();
	}
	// totalOfComcast = totalOfComcast - 30;
	totalOfComcast += numeral(
		document.getElementById("comcast_bundle_Price").innerHTML
	).value();
	totalOfComcast += numeral(
		document.getElementById("comcast_addPhone_Price").innerHTML
	).value();

	totalOfComcast -= numeral(
		document.getElementById("comcast_AutoPay_Discount").innerHTML
	).value();

	if (
		document.getElementById("comcastTelevisionSummary").style.display == "none"
	) {
		document.getElementById("comcast_TotalOfAll_Price").innerHTML =
			"$" +
			totalOfComcast.toLocaleString(undefined, {
				minimumFractionDigits: 2,
				maximumFractionDigits: 2,
			}) +
			"/month + Taxes and Fees";
	} else {
		document.getElementById("comcast_TotalOfAll_Price").innerHTML =
			"$" +
			totalOfComcast.toLocaleString(undefined, {
				minimumFractionDigits: 2,
				maximumFractionDigits: 2,
			}) +
			"/month + Taxes and Fees";
	}
	// _________________________________________________________________________
}
// _________________________________________________________________________
// SPECTRUM
function runOperation_Tab3() {
	// -------------------------------------------------------------
	// TABLE 2

	var ifAllChannelLineups_Of_Spectrum = false;
	// 1st Row
	for (let index = 0; index < 3; index++) {
		let checkboxes_variable = document.getElementsByName(
			"spectrum_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false
		) {
			$("#spectrumTelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider6.data("ionRangeSlider").update({ disable: true });
			slider7.data("ionRangeSlider").update({ disable: true });
			for (
				let index = 0;
				index <
				document.getElementsByName("spectrum_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("spectrum_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			for (
				let index = 0;
				index <
				document.getElementsByName("spectrum_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("spectrum_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			// ----------------------

			document.getElementById("spectrum_ChannelLineup_Price").innerHTML =
				"$0/month";
			document.getElementById("spectrum_tvbox_1_Price").innerHTML = "$0/month";
			document.getElementById("spectrum_tvbox_2_Price").innerHTML = "$0/month";
			document.getElementById("spectrum_tvbox_3_Price").innerHTML = "$0/month";
			document.getElementById("spectrum_tvbox_4_Price").innerHTML = "$0/month";
			document.getElementById("spectrum_dvrbox_1_Price").innerHTML = "$0/month";
			document.getElementById("spectrum_dvrbox_2_Price").innerHTML = "$0/month";
			document.getElementById("spectrum_dvrbox_3_Price").innerHTML = "$0/month";
			document.getElementById("spectrum_dvrbox_4_Price").innerHTML = "$0/month";
			document.getElementById("spectrum_1_premium_Price").innerHTML = "$0";
			document.getElementById("spectrum_2_premium_Price").innerHTML = "$0";
			document.getElementById("spectrum_3_premium_Price").innerHTML = "$0";
			document.getElementById("spectrum_4_premium_Price").innerHTML = "$0";
			document.getElementById("spectrum_5_premium_Price").innerHTML = "$0";
			document.getElementById("spectrum_6_premium_Price").innerHTML = "$0";
			document.getElementById("spectrum_7_premium_Price").innerHTML = "$0";
			document.getElementById("spectrum_8_premium_Price").innerHTML = "$0";
			document.getElementById("spectrum_9_premium_Price").innerHTML = "$0";
			document.getElementById("spectrum_10_premium_Price").innerHTML = "$0";
			ifAllChannelLineups_Of_Spectrum = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#spectrumTelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider6.data("ionRangeSlider").update({ disable: false });
			slider7.data("ionRangeSlider").update({ disable: false });
			for (
				let index = 0;
				index <
				document.getElementsByName("spectrum_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("spectrum_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			for (
				let index = 0;
				index <
				document.getElementsByName("spectrum_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("spectrum_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------

			let label = checkboxes_variable[index].nextElementSibling.innerText;
			label = label.split(" ");
			if (index == 0) {
				document.getElementById("spectrum_ChannelLineup_Text").innerHTML =
					"TV Select";
			} else if (index == 1) {
				document.getElementById("spectrum_ChannelLineup_Text").innerHTML =
					"TV Silver";
			} else if (index == 2) {
				document.getElementById("spectrum_ChannelLineup_Text").innerHTML =
					"TV Gold";
			}
			document.getElementById("spectrum_ChannelLineup_Price").innerHTML =
				spectrum_TV_Packages[index];
			// checkboxes_variable[index].value.toLocaleString() + '/month';
		}
	}

	// 2nd Row

	// ------
	let tv_variable_2 = slider6.val();
	$("#tvbox_1_Text_Spectrum").hide();
	$("#tvbox_2_Text_Spectrum").hide();
	$("#tvbox_3_Text_Spectrum").hide();
	$("#tvbox_4_Text_Spectrum").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_Spectrum").show();
		document.getElementById("spectrum_tvbox_" + index + "_Price").innerHTML =
			spectrum_TV_s_Price.One;
	}
	let dvr_variable = slider7.val();
	$("#dvrbox_1_Text_Spectrum").hide();
	$("#dvrbox_2_Text_Spectrum").hide();
	$("#dvrbox_3_Text_Spectrum").hide();
	$("#dvrbox_4_Text_Spectrum").hide();
	for (let index = numeral(dvr_variable).value(); index <= 4; index++) {
		document.getElementById("spectrum_dvrbox_" + index + "_Price").innerHTML = "";
	}

	for (let index = 1; index <= numeral(dvr_variable).value(); index++) {
		$("#dvrbox_" + index + "_Text_Spectrum").show();

		if (index == 1) {
			document.getElementById("spectrum_dvrbox_" + index + "_Price").innerHTML =
				spectrum_DVR_s_Price.One;
		} else if (index == 2) {
			document.getElementById("spectrum_dvrbox_" + index + "_Price").innerHTML =
				spectrum_DVR_s_Price.Two;
		} else if (index == 3) {
			document.getElementById("spectrum_dvrbox_" + index + "_Price").innerHTML =
				spectrum_DVR_s_Price.Three;
		} else if (index == 4) {
			document.getElementById("spectrum_dvrbox_" + index + "_Price").innerHTML =
				spectrum_DVR_s_Price.Four;
		}
	}

	// 4th Row
	// for (let index = 0; index < 2; index++) {
	//   let checkboxes_variable_2 = document.getElementsByName(
	//     'comcast_EquipmentOptions_checkboxes'
	//   );
	//   if (checkboxes_variable_2[index].checked == true) {
	//     let label = checkboxes_variable_2[index].nextElementSibling.innerText;
	//     label = label.split('(');
	//     document.getElementById('comcast_equipment_Text').innerHTML = label[0];
	//     if (index == 0) {
	//       document.getElementById('comcast_equipment_Price').innerHTML =
	//         comcast_EquipmentOptions.Twenty_Hour_DVR;
	//     } else {
	//       document.getElementById('comcast_equipment_Price').innerHTML =
	//         comcast_EquipmentOptions.OneFifty_Hour_DVR;
	//     }
	//   }
	// }

	// 4th Row
	let checkboxes_variable = document.getElementsByName(
		"spectrum_PremiumChannels_checkboxes"
	);

	if (checkboxes_variable[0].checked == true) {
		$("#premiumText_1_Spectrum").show();
		document.getElementById("spectrum_1_premium_Price").innerHTML =
			spectrum_PremiumChannels.HBO;
	} else {
		$("#premiumText_1_Spectrum").hide();
		document.getElementById("spectrum_1_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[1].checked == true) {
		$("#premiumText_2_Spectrum").show();
		document.getElementById("spectrum_2_premium_Price").innerHTML =
			spectrum_PremiumChannels.Showtime;
	} else {
		$("#premiumText_2_Spectrum").hide();
		document.getElementById("spectrum_2_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[2].checked == true) {
		$("#premiumText_3_Spectrum").show();
		document.getElementById("spectrum_3_premium_Price").innerHTML =
			spectrum_PremiumChannels.Cinemax;
	} else {
		$("#premiumText_3_Spectrum").hide();
		document.getElementById("spectrum_3_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[3].checked == true) {
		$("#premiumText_4_Spectrum").show();
		document.getElementById("spectrum_4_premium_Price").innerHTML =
			spectrum_PremiumChannels.TMC;
	} else {
		$("#premiumText_4_Spectrum").hide();
		document.getElementById("spectrum_4_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[4].checked == true) {
		$("#premiumText_5_Spectrum").show();
		document.getElementById("spectrum_5_premium_Price").innerHTML =
			spectrum_PremiumChannels.Starz;
	} else {
		$("#premiumText_5_Spectrum").hide();
		document.getElementById("spectrum_5_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[5].checked == true) {
		$("#premiumText_6_Spectrum").show();
		document.getElementById("spectrum_6_premium_Price").innerHTML =
			spectrum_PremiumChannels.Epix;
	} else {
		$("#premiumText_6_Spectrum").hide();
		document.getElementById("spectrum_6_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[6].checked == true) {
		$("#premiumText_7_Spectrum").show();
		document.getElementById("spectrum_7_premium_Price").innerHTML =
			spectrum_PremiumChannels.Starz_Encore;
	} else {
		$("#premiumText_7_Spectrum").hide();
		document.getElementById("spectrum_7_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[7].checked == true) {
		$("#premiumText_8_Spectrum").show();
		document.getElementById("spectrum_8_premium_Price").innerHTML =
			spectrum_PremiumChannels.Sports_Pack;
	} else {
		$("#premiumText_8_Spectrum").hide();
		document.getElementById("spectrum_8_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[8].checked == true) {
		$("#premiumText_9_Spectrum").show();
		document.getElementById("spectrum_9_premium_Price").innerHTML =
			spectrum_PremiumChannels.Fox_Soccer_Plus;
	} else {
		$("#premiumText_9_Spectrum").hide();
		document.getElementById("spectrum_9_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[9].checked == true) {
		$("#premiumText_10_Spectrum").show();
		document.getElementById("spectrum_10_premium_Price").innerHTML =
			spectrum_PremiumChannels.MLB_Extra;
	} else {
		$("#premiumText_10_Spectrum").hide();
		document.getElementById("spectrum_10_premium_Price").innerHTML = "";
	}

	// -----------------------------------------------------------------------------------

	// 6th Row
	let total_3 = numeral(
		document.getElementById("spectrum_ChannelLineup_Price").innerHTML
	).value();
	// +
	// numeral(document.getElementById('comcast_premium_Price').innerHTML).value();
	for (let index = 1; index <= 10; index++) {
		if (
			document.getElementById("spectrum_" + index + "_premium_Price").innerHTML !=
			""
		) {
			total_3 += numeral(
				document.getElementById("spectrum_" + index + "_premium_Price").innerHTML
			).value();
		}
	}
	total_3 +=
		numeral(slider6.val()).value() * numeral(spectrum_TV_s_Price.One).value();

	total_3 +=
		numeral(
			document.getElementById("spectrum_dvrbox_1_Price").innerHTML
		).value() +
		numeral(
			document.getElementById("spectrum_dvrbox_2_Price").innerHTML
		).value() +
		numeral(
			document.getElementById("spectrum_dvrbox_3_Price").innerHTML
		).value() +
		numeral(document.getElementById("spectrum_dvrbox_4_Price").innerHTML).value();
	// if (
	//   numeral(
	//     document.getElementById('comcast_equipment_Price').innerHTML
	//   ).value() != null
	// ) {
	//   total_3 += numeral(
	//     document.getElementById('comcast_equipment_Price').innerHTML
	//   ).value();
	// }

	document.getElementById("spectrum_TotalTelevision_Price").innerHTML =
		"$" + total_3.toLocaleString() + "/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	if (slider8.val() == "0mbps") {
		document.getElementById("spectrum_fiber_Text").innerHTML = slider8.val();
		document.getElementById("spectrum_fiber_Price").innerHTML =
			spectrum_InternetOnly.I_0_Mbps;
	} else if (slider8.val() == "200mbps") {
		document.getElementById("spectrum_fiber_Text").innerHTML = slider8.val();
		document.getElementById("spectrum_fiber_Price").innerHTML =
			spectrum_InternetOnly.I_200_Mbps;
	} else if (slider8.val() == "400mbps") {
		document.getElementById("spectrum_fiber_Text").innerHTML = slider8.val();
		document.getElementById("spectrum_fiber_Price").innerHTML =
			spectrum_InternetOnly.I_400_Mbps;
	} else if (slider8.val() == "GIG") {
		document.getElementById("spectrum_fiber_Text").innerHTML = slider8.val();
		document.getElementById("spectrum_fiber_Price").innerHTML =
			spectrum_InternetOnly.Gig;
	}

	// 2nd Row
	document.getElementById("spectrum_modernRental_Text").innerHTML =
		"Modem Rental";
	if (document.getElementsByName("spectrum_modernRental")[0].checked == true) {
		document.getElementById("spectrum_modernRental_Price").innerHTML =
			spectrum_ModemRental.CustomerOwned;
	} else if (
		document.getElementsByName("spectrum_modernRental")[1].checked == true
	) {
		document.getElementById("spectrum_modernRental_Price").innerHTML =
			spectrum_ModemRental.ModemOnly;
	} else {
		document.getElementById("spectrum_modernRental_Price").innerHTML =
			spectrum_ModemRental.WifiPlusModem;
	}

	if (document.getElementsByName("spectrum_AddPhone")[0].checked) {
		document.getElementById("spectrum_addPhone_Price").innerHTML =
			spectrum_AddPhone.Yes;
		document.getElementById("addPhone_Spectrum").style.display = "";
	} else {
		document.getElementById("spectrum_addPhone_Price").innerHTML =
			spectrum_AddPhone.No;
		document.getElementById("addPhone_Spectrum").style.display = "none";
	}

	// 3rd Row
	let total_4 = 0;
	if (
		numeral(document.getElementById("spectrum_fiber_Price").innerHTML).value() !=
		null
	) {
		total_4 =
			total_4 +
			numeral(document.getElementById("spectrum_fiber_Price").innerHTML).value();
	}
	if (
		numeral(
			document.getElementById("spectrum_modernRental_Price").innerHTML
		).value() != null
	) {
		total_4 += numeral(
			document.getElementById("spectrum_modernRental_Price").innerHTML
		).value();
	}
	total_4 += numeral(
		document.getElementById("spectrum_addPhone_Price").innerHTML
	).value();
	document.getElementById("spectrum_TotalInternet_Price").innerHTML =
		"$" +
		total_4.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month";

	// TABLE 3
	// INSTALLATION FESS
	if (
		document.getElementsByName("spectrum_InstallationOptions_checkboxes")[0]
			.checked
	) {
		document.getElementById("spectrum_installationFee_Price").innerHTML =
			spectrum_InstallationFee.SelfInstall;
	} else if (
		document.getElementsByName("spectrum_InstallationOptions_checkboxes")[1]
			.checked
	) {
		document.getElementById("spectrum_installationFee_Price").innerHTML =
			spectrum_InstallationFee.TechInstall;
	} else {
		document.getElementById("spectrum_installationFee_Price").innerHTML =
			spectrum_InstallationFee.InStorePickUp;
	}

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById(
		"spectrum_PromotionSectionBody"
	);
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < spectrum_Promotions.length; index++) {
		$("#spectrum_PromotionSection")
			.find("#spectrum_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					spectrum_Promotions[index] +
					"</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("spectrum_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < spectrum_Updates.length; index++) {
		$("#spectrum_UpdateSection")
			.find("#spectrum_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + spectrum_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"spectrum_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < spectrum_TopSellingPoints.length; index++) {
		$("#spectrum_TopSellingPointsSection")
			.find("#spectrum_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					spectrum_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"spectrum_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < spectrum_RequiredNewServiceInformation.length;
		index++
	) {
		$("#spectrum_RequiredNewServiceInfoSection")
			.find("#spectrum_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					spectrum_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"spectrum_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < spectrum_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#spectrum_RequiredDisconnectionInformationSection")
			.find("#spectrum_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					spectrum_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"spectrum_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < spectrum_AdditionalServiceInformation.length;
		index++
	) {
		$("#spectrum_AdditionalServiceInformationSection")
			.find("#spectrum_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					spectrum_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"spectrum_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < spectrum_InstallationOptions.length; index++) {
		$("#spectrum_InstallationOptionsSection")
			.find("#spectrum_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					spectrum_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// Grand Total Row
	if (ifAllChannelLineups_Of_Spectrum == true) {
		document.getElementById("spectrum_bundlediscount_Price").innerHTML =
			"$0/month";
	} else {
		document.getElementById("spectrum_bundlediscount_Price").innerHTML =
			spectrum_BundleDiscount.value;
	}

	let totalOfSpectrum = numeral(
		document.getElementById("spectrum_TotalInternet_Price").innerHTML
	).value();
	if (ifAllChannelLineups_Of_Spectrum == false) {
		totalOfSpectrum += numeral(
			document.getElementById("spectrum_TotalTelevision_Price").innerHTML
		).value();
	}

	totalOfSpectrum =
		totalOfSpectrum -
		numeral(
			document.getElementById("spectrum_bundlediscount_Price").innerHTML
		).value();
	document.getElementById("spectrum_TotalOfAll_Price").innerHTML =
		"$" +
		totalOfSpectrum.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// _________________________________________________________________________
}
// _________________________________________________________________________
// METRONET
function runOperation_Tab4() {
	// -------------------------------------------------------------
	// TABLE 2

	var ifAllChannelLineups_Of_Metronet = false;
	// 1st Row
	for (let index = 0; index < 3; index++) {
		let checkboxes_variable = document.getElementsByName(
			"metronet_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false
		) {
			$("#metronetTelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider9.data("ionRangeSlider").update({ disable: true });
			slider10.data("ionRangeSlider").update({ disable: true });

			for (
				let index = 0;
				index <
				document.getElementsByName("metronet_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("metronet_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			// ----------------------
			document.getElementById("metronet_ChannelLineup_Price").innerHTML =
				"$0/month";
			document.getElementById("metronet_tvbox_1_Price").innerHTML = "$0/month";
			document.getElementById("metronet_tvbox_2_Price").innerHTML = "$0/month";
			// document.getElementById('comcast_equipment_Price').innerHTML = '$0/month';
			document.getElementById("metronet_dvrbox_1_Price").innerHTML = "$0/month";
			document.getElementById("metronet_1_premium_Price").innerHTML = "$0";
			document.getElementById("metronet_2_premium_Price").innerHTML = "$0";
			document.getElementById("metronet_3_premium_Price").innerHTML = "$0";
			document.getElementById("metronet_4_premium_Price").innerHTML = "$0";
			document.getElementById("metronet_5_premium_Price").innerHTML = "$0";
			ifAllChannelLineups_Of_Metronet = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#metronetTelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider9.data("ionRangeSlider").update({ disable: false });
			slider10.data("ionRangeSlider").update({ disable: false });

			for (
				let index = 0;
				index <
				document.getElementsByName("metronet_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("metronet_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------

			let label = checkboxes_variable[index].nextElementSibling.innerText;
			label = label.split(" ");
			if (index == 0) {
				document.getElementById("metronet_ChannelLineup_Text").innerHTML =
					"Basic TV";
			} else if (index == 1) {
				document.getElementById("metronet_ChannelLineup_Text").innerHTML =
					"Standard TV";
			} else if (index == 2) {
				document.getElementById("metronet_ChannelLineup_Text").innerHTML =
					"Preferred TV";
			}
			document.getElementById("metronet_ChannelLineup_Price").innerHTML =
				metronet_TV_Packages[index];
			// checkboxes_variable[index].value.toLocaleString() + '/month';
		}
	}

	// 2nd Row

	// ------
	let tv_variable_2 = slider9.val();
	$("#tvbox_1_Text_Metronet").hide();
	$("#tvbox_2_Text_Metronet").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_Metronet").show();
		document.getElementById("metronet_tvbox_" + index + "_Price").innerHTML =
			metronet_TV_s_Price.One;
	}

	let dvr_variable = slider10.val();
	$("#dvrbox_1_Text_Metronet").hide();
	document.getElementById("metronet_dvrbox_" + "1" + "_Price").innerHTML = "";
	for (let index = 1; index <= numeral(dvr_variable).value(); index++) {
		$("#dvrbox_" + index + "_Text_Metronet").show();

		if (index == 1) {
			document.getElementById("metronet_dvrbox_" + index + "_Price").innerHTML =
				metronet_DVR_s_Price.One;
		}
	}

	// 4th Row
	let checkboxes_variable = document.getElementsByName(
		"metronet_PremiumChannels_checkboxes"
	);

	if (checkboxes_variable[0].checked == true) {
		$("#premiumText_1_Metronet").show();
		document.getElementById("metronet_1_premium_Price").innerHTML =
			metronet_PremiumChannels.HBO_Max;
	} else {
		$("#premiumText_1_Metronet").hide();
		document.getElementById("metronet_1_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[1].checked == true) {
		$("#premiumText_2_Metronet").show();
		document.getElementById("metronet_2_premium_Price").innerHTML =
			metronet_PremiumChannels.Showtime;
	} else {
		$("#premiumText_2_Metronet").hide();
		document.getElementById("metronet_2_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[2].checked == true) {
		$("#premiumText_3_Metronet").show();
		document.getElementById("metronet_3_premium_Price").innerHTML =
			metronet_PremiumChannels.Cinemax;
	} else {
		$("#premiumText_3_Metronet").hide();
		document.getElementById("metronet_3_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[3].checked == true) {
		$("#premiumText_4_Metronet").show();
		document.getElementById("metronet_4_premium_Price").innerHTML =
			metronet_PremiumChannels.Starz;
	} else {
		$("#premiumText_4_Metronet").hide();
		document.getElementById("metronet_4_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[4].checked == true) {
		$("#premiumText_5_Metronet").show();
		document.getElementById("metronet_5_premium_Price").innerHTML =
			metronet_PremiumChannels.Sports_Package;
	} else {
		$("#premiumText_5_Metronet").hide();
		document.getElementById("metronet_5_premium_Price").innerHTML = "";
	}
	// -----------------------------------------------------------------------------------

	// 6th Row
	let total_3 = numeral(
		document.getElementById("metronet_ChannelLineup_Price").innerHTML
	).value();
	// +
	// numeral(document.getElementById('comcast_premium_Price').innerHTML).value();
	for (let index = 1; index <= 5; index++) {
		if (
			document.getElementById("metronet_" + index + "_premium_Price").innerHTML !=
			""
		) {
			total_3 += numeral(
				document.getElementById("metronet_" + index + "_premium_Price").innerHTML
			).value();
		}
	}
	// total_3 +=
	//   numeral(slider6.val()).value() * numeral(spectrum_TV_s_Price.One).value();

	total_3 += numeral(
		document.getElementById("metronet_dvrbox_1_Price").innerHTML
	).value();

	document.getElementById("metronet_TotalTelevision_Price").innerHTML =
		"$" + total_3.toLocaleString() + "/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	if (slider11.val() == "0mbps") {
		document.getElementById("metronet_fiber_Text").innerHTML = slider11.val();
		document.getElementById("metronet_fiber_Price").innerHTML =
			metronet_InternetOnly.I_0_Mbps;
	} else if (slider11.val() == "100mbps") {
		document.getElementById("metronet_fiber_Text").innerHTML = slider11.val();
		document.getElementById("metronet_fiber_Price").innerHTML =
			metronet_InternetOnly.I_100_Mbps;
	} else if (slider11.val() == "200mbps") {
		document.getElementById("metronet_fiber_Text").innerHTML = slider11.val();
		document.getElementById("metronet_fiber_Price").innerHTML =
			metronet_InternetOnly.I_200_Mbps;
	} else if (slider11.val() == "500mbps") {
		document.getElementById("metronet_fiber_Text").innerHTML = slider11.val();
		document.getElementById("metronet_fiber_Price").innerHTML =
			metronet_InternetOnly.I_500_Mbps;
	} else if (slider11.val() == "GIG") {
		document.getElementById("metronet_fiber_Text").innerHTML = slider11.val();
		document.getElementById("metronet_fiber_Price").innerHTML =
			metronet_InternetOnly.Gig;
	}

	// 2nd Row
	let modemRental_variable = document.getElementsByName("metronet_modernRental");

	if (modemRental_variable[0].checked == true) {
		$("#modemRental_1_Metronet").show();
		document.getElementById("metronet_modernRental_1_Price").innerHTML =
			metronet_ModemRental.WholeHomeWifi;
		document.getElementById("metronet_modernRental_1_Text").innerHTML =
			"Whole Home Wi-Fi";
	} else {
		$("#modemRental_1_Metronet").hide();
		document.getElementById("metronet_modernRental_1_Price").innerHTML = "";
		document.getElementById("metronet_modernRental_1_Text").innerHTML = "";
	}
	if (modemRental_variable[1].checked == true) {
		$("#modemRental_2_Metronet").show();
		document.getElementById("metronet_modernRental_2_Price").innerHTML =
			metronet_ModemRental.TechnologyServiceFree;
		document.getElementById("metronet_modernRental_2_Text").innerHTML =
			"Technology Service Fee";
	} else {
		$("#modemRental_2_Metronet").hide();
		document.getElementById("metronet_modernRental_2_Price").innerHTML = "";
		document.getElementById("metronet_modernRental_2_Text").innerHTML = "";
	}

	if (document.getElementsByName("metronet_AddPhone")[0].checked) {
		document.getElementById("metronet_addPhone_Price").innerHTML =
			metronet_AddPhone.Yes;
		document.getElementById("addPhone_Metronet").style.display = "";
	} else {
		document.getElementById("metronet_addPhone_Price").innerHTML =
			metronet_AddPhone.No;
		document.getElementById("addPhone_Metronet").style.display = "none";
	}

	// 3rd Row
	let total_4 = 0;
	if (
		numeral(document.getElementById("metronet_fiber_Price").innerHTML).value() !=
		null
	) {
		total_4 =
			total_4 +
			numeral(document.getElementById("metronet_fiber_Price").innerHTML).value();
	}

	if (
		numeral(
			document.getElementById("metronet_modernRental_1_Price").innerHTML
		).value() != null
	) {
		total_4 += numeral(
			document.getElementById("metronet_modernRental_1_Price").innerHTML
		).value();
	}

	if (
		numeral(
			document.getElementById("metronet_modernRental_2_Price").innerHTML
		).value() != null
	) {
		total_4 += numeral(
			document.getElementById("metronet_modernRental_2_Price").innerHTML
		).value();
	}
	total_4 += numeral(
		document.getElementById("metronet_addPhone_Price").innerHTML
	).value();
	document.getElementById("metronet_TotalInternet_Price").innerHTML =
		"$" + total_4.toFixed(2) + "/month";

	// TABLE 3
	// INSTALLATION FESS
	if (
		document.getElementsByName("metronet_InstallationOptions_checkboxes")[0]
			.checked
	) {
		document.getElementById("metronet_installationFee_Price").innerHTML =
			metronet_InstallationFee.SelfInstall;
	} else if (
		document.getElementsByName("metronet_InstallationOptions_checkboxes")[1]
			.checked
	) {
		document.getElementById("metronet_installationFee_Price").innerHTML =
			metronet_InstallationFee.TechInstall;
	}

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById(
		"metronet_PromotionSectionBody"
	);
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < metronet_Promotions.length; index++) {
		$("#metronet_PromotionSection")
			.find("#metronet_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					metronet_Promotions[index] +
					"</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("metronet_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < metronet_Updates.length; index++) {
		$("#metronet_UpdateSection")
			.find("#metronet_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + metronet_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"metronet_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < metronet_TopSellingPoints.length; index++) {
		$("#metronet_TopSellingPointsSection")
			.find("#metronet_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					metronet_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"metronet_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < metronet_RequiredNewServiceInformation.length;
		index++
	) {
		$("#metronet_RequiredNewServiceInfoSection")
			.find("#metronet_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					metronet_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"metronet_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < metronet_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#metronet_RequiredDisconnectionInformationSection")
			.find("#metronet_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					metronet_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"metronet_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < metronet_AdditionalServiceInformation.length;
		index++
	) {
		$("#metronet_AdditionalServiceInformationSection")
			.find("#metronet_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					metronet_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"metronet_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < metronet_InstallationOptions.length; index++) {
		$("#metronet_InstallationOptionsSection")
			.find("#metronet_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					metronet_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// Metronet Bundle Discount Calculation
	var sliderValue = slider11.val();
	if (numeral(sliderValue).value() != "0") {
		if (
			document.getElementsByName("metronet_channelLineup_checkboxes")[0].checked
		) {
			if (sliderValue == "GIG") {
				document.getElementById("metronet_discount_Price").innerHTML =
					metronet_BundleDiscount_Basic_TV.B_GIGmbps;
			} else {
				document.getElementById("metronet_discount_Price").innerHTML =
					metronet_BundleDiscount_Basic_TV[
						"B_" + numeral(sliderValue).value().toLocaleString() + "mbps"
					];
			}
		} else if (
			document.getElementsByName("metronet_channelLineup_checkboxes")[1].checked
		) {
			if (sliderValue == "GIG") {
				document.getElementById("metronet_discount_Price").innerHTML =
					metronet_BundleDiscount_Extra_TV.E_GIGmbps;
			} else {
				document.getElementById("metronet_discount_Price").innerHTML =
					metronet_BundleDiscount_Extra_TV[
						"E_" + numeral(sliderValue).value().toLocaleString() + "mbps"
					];
			}
		} else if (
			document.getElementsByName("metronet_channelLineup_checkboxes")[2].checked
		) {
			if (sliderValue == "GIG") {
				document.getElementById("metronet_discount_Price").innerHTML =
					metronet_BundleDiscount_Preferred_TV.P_GIGmbps;
			} else {
				document.getElementById("metronet_discount_Price").innerHTML =
					metronet_BundleDiscount_Preferred_TV[
						"P_" + numeral(sliderValue).value().toLocaleString() + "mbps"
					];
			}
		}
	} else {
		document.getElementById("metronet_discount_Price").innerHTML = "$0/month";
	}

	let totalOfMetronet = numeral(
		document.getElementById("metronet_TotalInternet_Price").innerHTML
	).value();
	if (ifAllChannelLineups_Of_Metronet == false) {
		totalOfMetronet += numeral(
			document.getElementById("metronet_TotalTelevision_Price").innerHTML
		).value();
	}
	// totalOfMetronet = totalOfMetronet - 5;
	document.getElementById("metronet_TotalOfAll_Price").innerHTML =
		"$" +
		totalOfMetronet.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// _________________________________________________________________________
}
// _________________________________________________________________________
// FRONTIER
function runOperation_Tab5() {
	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	if (slider12.val() == "0mbps") {
		document.getElementById("frontier_fiber_Text").innerHTML = slider12.val();
		document.getElementById("frontier_fiber_Price").innerHTML =
			frontier_InternetOnly.I_0_Mbps;
	} else if (slider12.val() == "25mbps") {
		document.getElementById("frontier_fiber_Text").innerHTML = slider12.val();
		document.getElementById("frontier_fiber_Price").innerHTML =
			frontier_InternetOnly.I_25_Mbps;
	} else if (slider12.val() == "50mbps") {
		document.getElementById("frontier_fiber_Text").innerHTML = slider12.val();
		document.getElementById("frontier_fiber_Price").innerHTML =
			frontier_InternetOnly.I_50_Mbps;
	} else if (slider12.val() == "500mbps") {
		document.getElementById("frontier_fiber_Text").innerHTML = slider12.val();
		document.getElementById("frontier_fiber_Price").innerHTML =
			frontier_InternetOnly.I_500_Mbps;
	} else if (slider12.val() == "1000mbps") {
		document.getElementById("frontier_fiber_Text").innerHTML = slider12.val();
		document.getElementById("frontier_fiber_Price").innerHTML =
			frontier_InternetOnly.I_1000_Mbps;
	}

	// 2nd Row
	let modemRental_variable = document.getElementsByName("frontier_modernRental");

	document.getElementById("frontier_modernRental_Text").innerHTML =
		"Modem Rental";
	if (modemRental_variable[0].checked == true) {
		document.getElementById("frontier_modernRental_Price").innerHTML =
			frontier_ModemRental.Yes;
	} else {
		document.getElementById("frontier_modernRental_Price").innerHTML =
			frontier_ModemRental.No;
	}

	// 3rd Row
	let total_4 = 0;
	if (
		numeral(document.getElementById("frontier_fiber_Price").innerHTML).value() !=
		null
	) {
		total_4 =
			total_4 +
			numeral(document.getElementById("frontier_fiber_Price").innerHTML).value();
	}

	if (
		numeral(
			document.getElementById("frontier_modernRental_Price").innerHTML
		).value() != null
	) {
		total_4 += numeral(
			document.getElementById("frontier_modernRental_Price").innerHTML
		).value();
	}

	document.getElementById("frontier_TotalInternet_Price").innerHTML =
		"$" + total_4 + "/month";

	// TABLE 3
	// INSTALLATION FESS
	if (
		document.getElementsByName("frontier_InstallationOptions_checkboxes")[0]
			.checked
	) {
		document.getElementById("frontier_installationFee_Price").innerHTML =
			frontier_InstallationFee.SelfInstall;
	} else if (
		document.getElementsByName("frontier_InstallationOptions_checkboxes")[1]
			.checked
	) {
		document.getElementById("frontier_installationFee_Price").innerHTML =
			frontier_InstallationFee.TechInstall;
	}

	let totalOfSpectrum = numeral(
		document.getElementById("frontier_TotalInternet_Price").innerHTML
	).value();
	totalOfSpectrum = totalOfSpectrum;
	document.getElementById("frontier_TotalOfAll_Price").innerHTML =
		"$" +
		totalOfSpectrum.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById(
		"frontier_PromotionSectionBody"
	);
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < frontier_Promotions.length; index++) {
		$("#frontier_PromotionSection")
			.find("#frontier_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					frontier_Promotions[index] +
					"</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("frontier_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < frontier_Updates.length; index++) {
		$("#frontier_UpdateSection")
			.find("#frontier_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + frontier_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"frontier_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < frontier_TopSellingPoints.length; index++) {
		$("#frontier_TopSellingPointsSection")
			.find("#frontier_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					frontier_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"frontier_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < frontier_RequiredNewServiceInformation.length;
		index++
	) {
		$("#frontier_RequiredNewServiceInfoSection")
			.find("#frontier_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					frontier_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"frontier_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < frontier_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#frontier_RequiredDisconnectionInformationSection")
			.find("#frontier_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					frontier_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"frontier_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < frontier_AdditionalServiceInformation.length;
		index++
	) {
		$("#frontier_AdditionalServiceInformationSection")
			.find("#frontier_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					frontier_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"frontier_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < frontier_InstallationOptions.length; index++) {
		$("#frontier_InstallationOptionsSection")
			.find("#frontier_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					frontier_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// _________________________________________________________________________
}
// _________________________________________________________________________
// DIRECTV
function runOperation_Tab6() {
	// -------------------------------------------------------------
	// TABLE 2

	var ifAllChannelLineups_Of_Directv = false;
	// 1st Row
	for (let index = 0; index < 5; index++) {
		let checkboxes_variable = document.getElementsByName(
			"directv_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false &&
			checkboxes_variable[3].checked == false &&
			checkboxes_variable[4].checked == false
		) {
			$("#directvTelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider13.data("ionRangeSlider").update({ disable: true });

			for (
				let index = 0;
				index <
				document.getElementsByName("directv_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("directv_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			// ----------------------
			document.getElementById("directv_ChannelLineup_Price").innerHTML =
				"$0/month";
			document.getElementById("directv_tvbox_1_Price").innerHTML = "$0/month";
			document.getElementById("directv_tvbox_2_Price").innerHTML = "$0/month";
			document.getElementById("directv_tvbox_3_Price").innerHTML = "$0/month";
			document.getElementById("directv_tvbox_4_Price").innerHTML = "$0/month";
			document.getElementById("directv_tvbox_5_Price").innerHTML = "$0/month";
			document.getElementById("directv_tvbox_6_Price").innerHTML = "$0/month";
			document.getElementById("directv_tvbox_7_Price").innerHTML = "$0/month";
			document.getElementById("directv_tvbox_8_Price").innerHTML = "$0/month";

			document.getElementById("directv_1_premium_Price").innerHTML = "$0";
			document.getElementById("directv_2_premium_Price").innerHTML = "$0";
			document.getElementById("directv_3_premium_Price").innerHTML = "$0";
			document.getElementById("directv_4_premium_Price").innerHTML = "$0";
			document.getElementById("directv_5_premium_Price").innerHTML = "$0";
			document.getElementById("directv_6_premium_Price").innerHTML = "$0";
			document.getElementById("directv_7_premium_Price").innerHTML = "$0";
			document.getElementById("directv_8_premium_Price").innerHTML = "$0";
			document.getElementById("directv_9_premium_Price").innerHTML = "$0";
			ifAllChannelLineups_Of_Directv = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#directvTelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider13.data("ionRangeSlider").update({ disable: false });

			for (
				let index = 0;
				index <
				document.getElementsByName("directv_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("directv_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------

			let label = checkboxes_variable[index].nextElementSibling.innerText;
			label = label.split(" ");
			if (index == 0) {
				document.getElementById("directv_ChannelLineup_Text").innerHTML =
					"Preferred Choice";
			} else if (index == 1) {
				document.getElementById("directv_ChannelLineup_Text").innerHTML =
					"Entertainment";
			} else if (index == 2) {
				document.getElementById("directv_ChannelLineup_Text").innerHTML = "Choice";
			} else if (index == 3) {
				document.getElementById("directv_ChannelLineup_Text").innerHTML =
					"Ultimate";
			} else if (index == 4) {
				document.getElementById("directv_ChannelLineup_Text").innerHTML = "Premier";
			}
			document.getElementById("directv_ChannelLineup_Price").innerHTML =
				directv_TV_Packages[index];
		}
	}

	// 2nd Row

	// ------
	let tv_variable_2 = slider13.val();
	$("#tvbox_1_Text_Directv").hide();
	$("#tvbox_2_Text_Directv").hide();
	$("#tvbox_3_Text_Directv").hide();
	$("#tvbox_4_Text_Directv").hide();
	$("#tvbox_5_Text_Directv").hide();
	$("#tvbox_6_Text_Directv").hide();
	$("#tvbox_7_Text_Directv").hide();
	$("#tvbox_8_Text_Directv").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_Directv").show();
		if (index == 1) {
			document.getElementById("directv_tvbox_" + index + "_Price").innerHTML =
				"Free";
		} else {
			document.getElementById("directv_tvbox_" + index + "_Price").innerHTML =
				directv_TV_s_Price.One;
		}
	}

	// 4th Row
	let checkboxes_variable = document.getElementsByName(
		"directv_PremiumChannels_checkboxes"
	);

	if (checkboxes_variable[0].checked == true) {
		$("#premiumText_1_Directv").show();
		document.getElementById("directv_1_premium_Price").innerHTML =
			directv_PremiumChannels.HBO_Max;
	} else {
		$("#premiumText_1_Directv").hide();
		document.getElementById("directv_1_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[1].checked == true) {
		$("#premiumText_2_Directv").show();
		document.getElementById("directv_2_premium_Price").innerHTML =
			directv_PremiumChannels.Cinemax;
	} else {
		$("#premiumText_2_Directv").hide();
		document.getElementById("directv_2_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[2].checked == true) {
		$("#premiumText_3_Directv").show();
		document.getElementById("directv_3_premium_Price").innerHTML =
			directv_PremiumChannels.Starz;
	} else {
		$("#premiumText_3_Directv").hide();
		document.getElementById("directv_3_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[3].checked == true) {
		$("#premiumText_4_Directv").show();
		document.getElementById("directv_4_premium_Price").innerHTML =
			directv_PremiumChannels.Showtime;
	} else {
		$("#premiumText_4_Directv").hide();
		document.getElementById("directv_4_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[4].checked == true) {
		$("#premiumText_5_Directv").show();
		document.getElementById("directv_5_premium_Price").innerHTML =
			directv_PremiumChannels.Sports_Pack;
	} else {
		$("#premiumText_5_Directv").hide();
		document.getElementById("directv_5_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[5].checked == true) {
		$("#premiumText_6_Directv").show();
		document.getElementById("directv_6_premium_Price").innerHTML =
			directv_PremiumChannels.MLB_Extra_Innings;
	} else {
		$("#premiumText_6_Directv").hide();
		document.getElementById("directv_6_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[6].checked == true) {
		$("#premiumText_7_Directv").show();
		document.getElementById("directv_7_premium_Price").innerHTML =
			directv_PremiumChannels.Fox_Soccer_Plus;
	} else {
		$("#premiumText_7_Directv").hide();
		document.getElementById("directv_7_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[7].checked == true) {
		$("#premiumText_8_Directv").show();
		document.getElementById("directv_8_premium_Price").innerHTML =
			directv_PremiumChannels.MLS_Direct_kick;
	} else {
		$("#premiumText_8_Directv").hide();
		document.getElementById("directv_8_premium_Price").innerHTML = "";
	}
	if (checkboxes_variable[8].checked == true) {
		$("#premiumText_9_Directv").show();
		document.getElementById("directv_9_premium_Price").innerHTML =
			directv_PremiumChannels.NFL_Sunday_Ticket_Max;
	} else {
		$("#premiumText_9_Directv").hide();
		document.getElementById("directv_9_premium_Price").innerHTML = "";
	}
	// -----------------------------------------------------------------------------------

	// 6th Row
	let total_3 = numeral(
		document.getElementById("directv_ChannelLineup_Price").innerHTML
	).value();
	// +
	// numeral(document.getElementById('comcast_premium_Price').innerHTML).value();
	for (let index = 1; index <= 9; index++) {
		if (
			document.getElementById("directv_" + index + "_premium_Price").innerHTML !=
			""
		) {
			total_3 += numeral(
				document.getElementById("directv_" + index + "_premium_Price").innerHTML
			).value();
		}
	}

	for (let index = 1; index <= numeral(slider13.val()).value(); index++) {
		if (
			document.getElementById("directv_tvbox_" + index + "_Price").innerHTML != ""
		) {
			total_3 += numeral(
				document.getElementById("directv_tvbox_" + index + "_Price").innerHTML
			).value();
		}
	}

	document.getElementById("directv_TotalTelevision_Price").innerHTML =
		"$" + total_3.toLocaleString() + "/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// TABLE 3
	// INSTALLATION FESS
	if (document.getElementsByName("directv_AutoPay")[0].checked) {
		document.getElementById("directv_Autopay_Price").innerHTML =
			directv_AutopayDiscount.Yes;
	} else if (document.getElementsByName("directv_AutoPay")[1].checked) {
		document.getElementById("directv_Autopay_Price").innerHTML =
			directv_AutopayDiscount.No;
	}

	let totalOfDirectv = 0;
	if (ifAllChannelLineups_Of_Directv == false) {
		totalOfDirectv += numeral(
			document.getElementById("directv_TotalTelevision_Price").innerHTML
		).value();
	}

	totalOfDirectv =
		totalOfDirectv -
		numeral(document.getElementById("directv_Autopay_Price").innerHTML).value();
	document.getElementById("directv_TotalOfAll_Price").innerHTML =
		"$" +
		totalOfDirectv.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById(
		"directv_PromotionSectionBody"
	);
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < directv_Promotions.length; index++) {
		$("#directv_PromotionSection")
			.find("#directv_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					directv_Promotions[index] +
					"</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("directv_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < directv_Updates.length; index++) {
		$("#directv_UpdateSection")
			.find("#directv_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + directv_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"directv_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < directv_TopSellingPoints.length; index++) {
		$("#directv_TopSellingPointsSection")
			.find("#directv_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					directv_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"directv_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < directv_RequiredNewServiceInformation.length;
		index++
	) {
		$("#directv_RequiredNewServiceInfoSection")
			.find("#directv_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					directv_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"directv_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < directv_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#directv_RequiredDisconnectionInformationSection")
			.find("#directv_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					directv_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"directv_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < directv_AdditionalServiceInformation.length;
		index++
	) {
		$("#directv_AdditionalServiceInformationSection")
			.find("#directv_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					directv_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"directv_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < directv_InstallationOptions.length; index++) {
		$("#directv_InstallationOptionsSection")
			.find("#directv_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					directv_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// _________________________________________________________________________
}
// _________________________________________________________________________
// I3 BROADBAND
function runOperation_Tab7() {
	// -------------------------------------------------------------
	// TABLE 2

	var ifAllChannelLineups_Of_i3_Broadband = false;
	// 1st Row
	for (let index = 0; index < 3; index++) {
		let checkboxes_variable = document.getElementsByName(
			"i3_Broadband_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false
		) {
			$("#i3_BroadbandTelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider14.data("ionRangeSlider").update({ disable: true });
			slider15.data("ionRangeSlider").update({ disable: true });

			for (
				let index = 0;
				index <
				document.getElementsByName("i3_Broadband_PremiumChannels_checkboxes")
					.length;
				index++
			) {
				document.getElementsByName("i3_Broadband_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			// // ----------------------
			// document.getElementById('i3_Broadband_ChannelLineup_Price').innerHTML =
			//   '$0/month';
			// document.getElementById('i3_Broadband_tvbox_1_Price').innerHTML = '$0/month';
			// document.getElementById('i3_Broadband_tvbox_2_Price').innerHTML = '$0/month';
			// document.getElementById('i3_Broadband_tvbox_3_Price').innerHTML = '$0/month';
			// document.getElementById('i3_Broadband_tvbox_4_Price').innerHTML = '$0/month';
			// document.getElementById('i3_Broadband_tvbox_5_Price').innerHTML = '$0/month';
			// document.getElementById('metronet_dvrbox_1_Price').innerHTML = '$0/month';
			// document.getElementById('metronet_1_premium_Price').innerHTML = '$0';
			// document.getElementById('metronet_2_premium_Price').innerHTML = '$0';
			// document.getElementById('metronet_3_premium_Price').innerHTML = '$0';
			// document.getElementById('metronet_4_premium_Price').innerHTML = '$0';
			// document.getElementById('metronet_5_premium_Price').innerHTML = '$0';
			ifAllChannelLineups_Of_i3_Broadband = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#i3_BroadbandTelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider14.data("ionRangeSlider").update({ disable: false });
			slider15.data("ionRangeSlider").update({ disable: false });

			for (
				let index = 0;
				index <
				document.getElementsByName("i3_Broadband_PremiumChannels_checkboxes")
					.length;
				index++
			) {
				document.getElementsByName("i3_Broadband_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------

			// let label = checkboxes_variable[index].nextElementSibling.innerText;
			// label = label.split(' ');
			if (index == 0) {
				document.getElementById("i3_Broadband_ChannelLineup_Text").innerHTML =
					"Must View TV";
			} else if (index == 1) {
				document.getElementById("i3_Broadband_ChannelLineup_Text").innerHTML =
					"Max View TV";
			} else if (index == 2) {
				document.getElementById("i3_Broadband_ChannelLineup_Text").innerHTML =
					"Mega View TV";
			}
			document.getElementById("i3_Broadband_ChannelLineup_Price").innerHTML =
				i3_Broadband_TV_Packages[index];
		}
	}

	// 2nd Row
	// ------
	let tv_variable_2 = slider14.val();
	$("#tvbox_1_Text_i3_Broadband").hide();
	$("#tvbox_2_Text_i3_Broadband").hide();
	$("#tvbox_3_Text_i3_Broadband").hide();
	$("#tvbox_4_Text_i3_Broadband").hide();
	$("#tvbox_5_Text_i3_Broadband").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_i3_Broadband").show();
		document.getElementById("i3_Broadband_tvbox_" + index + "_Price").innerHTML =
			i3_Broadband_TV_s_Price[index - 1];
	}

	let dvr_variable = slider15.val();
	$("#dvrbox_1_Text_i3_Broadband").hide();
	document.getElementById("i3_Broadband_dvrbox_" + "1" + "_Price").innerHTML =
		"";
	for (let index = 1; index <= numeral(dvr_variable).value(); index++) {
		$("#dvrbox_" + index + "_Text_i3_Broadband").show();

		if (index == 1) {
			document.getElementById(
				"i3_Broadband_dvrbox_" + index + "_Price"
			).innerHTML = i3_Broadband_DVR_s_Price.One;
		}
	}

	// 4th Row
	let checkboxes_variable = document.getElementsByName(
		"i3_Broadband_PremiumChannels_checkboxes"
	);
	for (let index = 0; index < checkboxes_variable.length; index++) {
		if (checkboxes_variable[index].checked == true) {
			$("#premiumText_" + (index + 1) + "_i3_Broadband").show();
			document.getElementById(
				"i3_Broadband_" + (index + 1) + "_premium_Price"
			).innerHTML = i3_Broadband_PremiumChannels[index];
		} else {
			$("#premiumText_" + (index + 1) + "_i3_Broadband").hide();
			document.getElementById(
				"i3_Broadband_" + (index + 1) + "_premium_Price"
			).innerHTML = "";
		}
	}

	// if (checkboxes_variable[0].checked == true) {
	//   $('#premiumText_1_Metronet').show();
	//   document.getElementById('metronet_1_premium_Price').innerHTML =
	//     metronet_PremiumChannels.HBO_Max;
	// } else {
	//   $('#premiumText_1_Metronet').hide();
	//   document.getElementById('metronet_1_premium_Price').innerHTML = '';
	// }
	// if (checkboxes_variable[1].checked == true) {
	//   $('#premiumText_2_Metronet').show();
	//   document.getElementById('metronet_2_premium_Price').innerHTML =
	//     metronet_PremiumChannels.Showtime;
	// } else {
	//   $('#premiumText_2_Metronet').hide();
	//   document.getElementById('metronet_2_premium_Price').innerHTML = '';
	// }
	// if (checkboxes_variable[2].checked == true) {
	//   $('#premiumText_3_Metronet').show();
	//   document.getElementById('metronet_3_premium_Price').innerHTML =
	//     metronet_PremiumChannels.Cinemax;
	// } else {
	//   $('#premiumText_3_Metronet').hide();
	//   document.getElementById('metronet_3_premium_Price').innerHTML = '';
	// }
	// if (checkboxes_variable[3].checked == true) {
	//   $('#premiumText_4_Metronet').show();
	//   document.getElementById('metronet_4_premium_Price').innerHTML =
	//     metronet_PremiumChannels.Starz;
	// } else {
	//   $('#premiumText_4_Metronet').hide();
	//   document.getElementById('metronet_4_premium_Price').innerHTML = '';
	// }
	// if (checkboxes_variable[4].checked == true) {
	//   $('#premiumText_5_Metronet').show();
	//   document.getElementById('metronet_5_premium_Price').innerHTML =
	//     metronet_PremiumChannels.Sports_Package;
	// } else {
	//   $('#premiumText_5_Metronet').hide();
	//   document.getElementById('metronet_5_premium_Price').innerHTML = '';
	// }
	// -----------------------------------------------------------------------------------

	// 6th Row
	let total_Of_Television_Of_i3_Broadband = numeral(
		document.getElementById("i3_Broadband_ChannelLineup_Price").innerHTML
	).value();
	// +
	// numeral(document.getElementById('comcast_premium_Price').innerHTML).value();
	for (
		let index = 1;
		index <=
		document.getElementsByName("i3_Broadband_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementById("i3_Broadband_" + index + "_premium_Price")
				.innerHTML != ""
		) {
			total_Of_Television_Of_i3_Broadband += numeral(
				document.getElementById("i3_Broadband_" + index + "_premium_Price")
					.innerHTML
			).value();
		}
	}
	// total_Of_Television_Of_i3_Broadband +=
	//   numeral(slider6.val()).value() * numeral(spectrum_TV_s_Price.One).value();
	for (let index = 0; index < numeral(slider14.val()).value(); index++) {
		total_Of_Television_Of_i3_Broadband += numeral(
			i3_Broadband_TV_s_Price[index]
		).value();
	}

	total_Of_Television_Of_i3_Broadband += numeral(
		document.getElementById("i3_Broadband_dvrbox_1_Price").innerHTML
	).value();

	document.getElementById("i3_Broadband_TotalTelevision_Price").innerHTML =
		"$" +
		total_Of_Television_Of_i3_Broadband.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	debugger;
	if (slider17.val() == "0mbps") {
		document.getElementById("i3_Broadband_fiber_Text").innerHTML = slider17.val();
		document.getElementById("i3_Broadband_fiber_Price").innerHTML =
			i3_Broadband_InternetOnly.I_0_Mbps;
	} else if (slider17.val() == "250mbps") {
		document.getElementById("i3_Broadband_fiber_Text").innerHTML = slider17.val();
		document.getElementById("i3_Broadband_fiber_Price").innerHTML =
			i3_Broadband_InternetOnly.I_250_Mbps;
	} else if (slider17.val() == "500mbps") {
		document.getElementById("i3_Broadband_fiber_Text").innerHTML = slider17.val();
		document.getElementById("i3_Broadband_fiber_Price").innerHTML =
			i3_Broadband_InternetOnly.I_500_Mbps;
	} else if (slider17.val() == "1000mbps") {
		document.getElementById("i3_Broadband_fiber_Text").innerHTML = slider17.val();
		document.getElementById("i3_Broadband_fiber_Price").innerHTML =
			i3_Broadband_InternetOnly.I_1000_Mbps;
	}

	if (slider16.val() == "0") {
		document.getElementById("i3_Broadband_wifiPods_Text").innerHTML =
			slider16.val();
		document.getElementById("i3_Broadband_wifiPods_Price").innerHTML =
			i3_Broadband_WifiPods.Zero_Wifi_Pod;
	} else if (slider16.val() == "1(2-3 Bed)") {
		document.getElementById("i3_Broadband_wifiPods_Text").innerHTML =
			slider16.val();
		document.getElementById("i3_Broadband_wifiPods_Price").innerHTML =
			i3_Broadband_WifiPods.One_Wifi_Pod;
	} else if (slider16.val() == "2(3-4 Bed)") {
		document.getElementById("i3_Broadband_wifiPods_Text").innerHTML =
			slider16.val();
		document.getElementById("i3_Broadband_wifiPods_Price").innerHTML =
			i3_Broadband_WifiPods.Two_Wifi_Pod;
	} else if (slider16.val() == "3(4-5 Bed)") {
		document.getElementById("i3_Broadband_wifiPods_Text").innerHTML =
			slider16.val();
		document.getElementById("i3_Broadband_wifiPods_Price").innerHTML =
			i3_Broadband_WifiPods.Three_Wifi_Pod;
	} else if (slider16.val() == "4(5+ Bed)") {
		document.getElementById("i3_Broadband_wifiPods_Text").innerHTML =
			slider16.val();
		document.getElementById("i3_Broadband_wifiPods_Price").innerHTML =
			i3_Broadband_WifiPods.Four_Wifi_Pod;
	}

	if (document.getElementsByName("i3_Broadband_AddPhone")[0].checked) {
		document.getElementById("i3_Broadband_addPhone_Price").innerHTML =
			i3_Broadband_AddPhone.Yes;
		document.getElementById("addPhone_i3_Broadband").style.display = "";
	} else {
		document.getElementById("i3_Broadband_addPhone_Price").innerHTML =
			i3_Broadband_AddPhone.No;
		document.getElementById("addPhone_i3_Broadband").style.display = "none";
	}

	// 3rd Row
	let totalOfInternetSummary_i3_Broadband = 0;
	if (
		numeral(
			document.getElementById("i3_Broadband_fiber_Price").innerHTML
		).value() != null
	) {
		totalOfInternetSummary_i3_Broadband =
			totalOfInternetSummary_i3_Broadband +
			numeral(
				document.getElementById("i3_Broadband_fiber_Price").innerHTML
			).value();
	}

	totalOfInternetSummary_i3_Broadband += numeral(
		document.getElementById("i3_Broadband_wifiPods_Price").innerHTML
	).value();

	totalOfInternetSummary_i3_Broadband += numeral(
		document.getElementById("i3_Broadband_addPhone_Price").innerHTML
	).value();

	document.getElementById("i3_Broadband_TotalInternet_Price").innerHTML =
		"$" +
		totalOfInternetSummary_i3_Broadband.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month";

	// TABLE 3

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById(
		"i3_Broadband_PromotionSectionBody"
	);
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < i3_Broadband_Promotions.length; index++) {
		$("#i3_Broadband_PromotionSection")
			.find("#i3_Broadband_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					i3_Broadband_Promotions[index] +
					"</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById(
		"i3_Broadband_UpdateSectionBody"
	);
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < i3_Broadband_Updates.length; index++) {
		$("#i3_Broadband_UpdateSection")
			.find("#i3_Broadband_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					i3_Broadband_Updates[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"i3_Broadband_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < i3_Broadband_TopSellingPoints.length; index++) {
		$("#i3_Broadband_TopSellingPointsSection")
			.find("#i3_Broadband_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					i3_Broadband_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"i3_Broadband_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < i3_Broadband_RequiredNewServiceInformation.length;
		index++
	) {
		$("#i3_Broadband_RequiredNewServiceInfoSection")
			.find("#i3_Broadband_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					i3_Broadband_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"i3_Broadband_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < i3_Broadband_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#i3_Broadband_RequiredDisconnectionInformationSection")
			.find("#i3_Broadband_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					i3_Broadband_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"i3_Broadband_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < i3_Broadband_AdditionalServiceInformation.length;
		index++
	) {
		$("#i3_Broadband_AdditionalServiceInformationSection")
			.find("#i3_Broadband_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					i3_Broadband_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"i3_Broadband_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < i3_Broadband_InstallationOptions.length; index++) {
		$("#i3_Broadband_InstallationOptionsSection")
			.find("#i3_Broadband_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					i3_Broadband_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// I3_BROADBAND Bundle Discount Calculation
	// Will have to work on this later .....
	// var sliderValue = slider17.val();
	// if (numeral(sliderValue).value() != '$0/month') {
	//   if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[0]
	//       .checked
	//   ) {
	//     document.getElementById('metronet_discount_Price').innerHTML =
	//       metronet_BundleDiscount_Basic_TV[
	//         'B_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//       ];
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[1]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV.E_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV[
	//           'E_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[2]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV.P_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV[
	//           'P_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   }
	// } else {
	//   document.getElementById('metronet_discount_Price').innerHTML = '$0/month';
	// }

	let totalOf_i3_Broadband = numeral(
		document.getElementById("i3_Broadband_TotalInternet_Price").innerHTML
	).value();
	if (ifAllChannelLineups_Of_i3_Broadband == false) {
		totalOf_i3_Broadband += numeral(
			document.getElementById("i3_Broadband_TotalTelevision_Price").innerHTML
		).value();
	}
	// totalOf_i3_Broadband = totalOf_i3_Broadband - 5;
	document.getElementById("i3_Broadband_TotalOfAll_Price").innerHTML =
		"$" +
		totalOf_i3_Broadband.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// _________________________________________________________________________
}
// _________________________________________________________________________
// WOW
function runOperation_Tab8() {
	// -------------------------------------------------------------
	// TABLE 2

	var ifAllChannelLineups_Of_wow = false;
	// 1st Row
	for (let index = 0; index < 3; index++) {
		let checkboxes_variable = document.getElementsByName(
			"wow_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false
		) {
			$("#wow_TelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider18.data("ionRangeSlider").update({ disable: true });

			ifAllChannelLineups_Of_wow = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#wow_TelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider18.data("ionRangeSlider").update({ disable: false });

			// ----------------------

			// let label = checkboxes_variable[index].nextElementSibling.innerText;
			// label = label.split(' ');
			if (index == 0) {
				document.getElementById("wow_ChannelLineup_Text").innerHTML = "Small Cable";
			} else if (index == 1) {
				document.getElementById("wow_ChannelLineup_Text").innerHTML =
					"Medium Cable";
			} else if (index == 2) {
				document.getElementById("wow_ChannelLineup_Text").innerHTML = "Large Cable";
			}
			document.getElementById("wow_ChannelLineup_Price").innerHTML =
				wow_TV_Packages[index];
		}
	}

	// 2nd Row
	// ------
	let tv_variable_2 = slider18.val();
	$("#tvbox_1_Text_wow").hide();
	$("#tvbox_2_Text_wow").hide();
	$("#tvbox_3_Text_wow").hide();
	$("#tvbox_4_Text_wow").hide();
	$("#tvbox_5_Text_wow").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_wow").show();
		document.getElementById("wow_tvbox_" + index + "_Price").innerHTML =
			wow_TV_s_Price.One;
	}

	// let dvr_variable = slider15.val();
	// $('#dvrbox_1_Text_i3_Broadband').hide();
	// document.getElementById('i3_Broadband_dvrbox_' + '1' + '_Price').innerHTML =
	//   '';
	// for (let index = 1; index <= numeral(dvr_variable).value(); index++) {
	//   $('#dvrbox_' + index + '_Text_i3_Broadband').show();

	//   if (index == 1) {
	//     document.getElementById(
	//       'i3_Broadband_dvrbox_' + index + '_Price'
	//     ).innerHTML = i3_Broadband_DVR_s_Price.One;
	//   }
	// }

	// 4th Row
	// let checkboxes_variable = document.getElementsByName(
	//   'i3_Broadband_PremiumChannels_checkboxes'
	// );
	// for (let index = 0; index < checkboxes_variable.length; index++) {
	//   if (checkboxes_variable[index].checked == true) {
	//     $('#premiumText_' + (index + 1) + '_i3_Broadband').show();
	//     document.getElementById(
	//       'i3_Broadband_' + (index + 1) + '_premium_Price'
	//     ).innerHTML = i3_Broadband_PremiumChannels[index];
	//   } else {
	//     $('#premiumText_' + (index + 1) + '_i3_Broadband').hide();
	//     document.getElementById(
	//       'i3_Broadband_' + (index + 1) + '_premium_Price'
	//     ).innerHTML = '';
	//   }
	// }

	// -----------------------------------------------------------------------------------

	// 6th Row
	let total_Of_Television_Of_wow = numeral(
		document.getElementById("wow_ChannelLineup_Price").innerHTML
	).value();
	// +
	// numeral(document.getElementById('comcast_premium_Price').innerHTML).value();

	// total_Of_Television_Of_wow +=
	//   numeral(slider6.val()).value() * numeral(spectrum_TV_s_Price.One).value();
	for (let index = 0; index < numeral(slider18.val()).value(); index++) {
		total_Of_Television_Of_wow += numeral(wow_TV_s_Price.One).value();
	}

	// total_Of_Television_Of_wow += numeral(
	//   document.getElementById('i3_Broadband_dvrbox_1_Price').innerHTML
	// ).value();

	document.getElementById("wow_TotalTelevision_Price").innerHTML =
		"$" +
		total_Of_Television_Of_wow.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	if (document.getElementsByName("wow_ModemRental")[0].checked) {
		document.getElementById("wow_wifimodemRental_Price").innerHTML =
			wow_ModemRental.Yes;
		document.getElementById("wifiModemRental_wow").style.display = "";
	} else {
		document.getElementById("wow_wifimodemRental_Price").innerHTML =
			wow_ModemRental.No;
		document.getElementById("wifiModemRental_wow").style.display = "none";
	}

	// 2nd Row
	if (document.getElementsByName("wow_WholeHomeWifi")[0].checked) {
		document.getElementById("wow_wholeHomeWifi_Price").innerHTML =
			wow_WholeHomeWifi.Yes;
		document.getElementById("wholeHomeWifi_wow").style.display = "";
	} else {
		document.getElementById("wow_wholeHomeWifi_Price").innerHTML =
			wow_WholeHomeWifi.No;
		document.getElementById("wholeHomeWifi_wow").style.display = "none";
	}

	// 3rd Row
	if (slider19.val() == "0mbps") {
		document.getElementById("wow_fiber_Text").innerHTML = slider19.val();
		document.getElementById("wow_fiber_Price").innerHTML =
			wow_InternetOnly.I_0_Mbps;
	} else if (slider19.val() == "100mbps") {
		document.getElementById("wow_fiber_Text").innerHTML = slider19.val();
		document.getElementById("wow_fiber_Price").innerHTML =
			wow_InternetOnly.I_100_Mbps;
	} else if (slider19.val() == "200mbps") {
		document.getElementById("wow_fiber_Text").innerHTML = slider19.val();
		document.getElementById("wow_fiber_Price").innerHTML =
			wow_InternetOnly.I_200_Mbps;
	} else if (slider19.val() == "500mbps") {
		document.getElementById("wow_fiber_Text").innerHTML = slider19.val();
		document.getElementById("wow_fiber_Price").innerHTML =
			wow_InternetOnly.I_500_Mbps;
	} else if (slider19.val() == "1000mbps") {
		document.getElementById("wow_fiber_Text").innerHTML = slider19.val();
		document.getElementById("wow_fiber_Price").innerHTML =
			wow_InternetOnly.I_1000_Mbps;
	}

	if (document.getElementsByName("wow_AddPhone")[0].checked) {
		document.getElementById("wow_addPhone_Price").innerHTML = wow_AddPhone.Yes;
		document.getElementById("addPhone_wow").style.display = "";
	} else {
		document.getElementById("wow_addPhone_Price").innerHTML = wow_AddPhone.No;
		document.getElementById("addPhone_wow").style.display = "none";
	}

	// 3rd Row
	let totalOfInternetSummary_wow = 0;
	totalOfInternetSummary_wow += numeral(
		document.getElementById("wow_wifimodemRental_Price").innerHTML
	).value();

	totalOfInternetSummary_wow += numeral(
		document.getElementById("wow_wholeHomeWifi_Price").innerHTML
	).value();

	if (
		numeral(document.getElementById("wow_fiber_Price").innerHTML).value() != null
	) {
		totalOfInternetSummary_wow =
			totalOfInternetSummary_wow +
			numeral(document.getElementById("wow_fiber_Price").innerHTML).value();
	}

	totalOfInternetSummary_wow += numeral(
		document.getElementById("wow_addPhone_Price").innerHTML
	).value();

	document.getElementById("wow_TotalInternet_Price").innerHTML =
		"$" +
		totalOfInternetSummary_wow.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month";

	// Installation Fee
	if (
		document.getElementsByName("wow_InstallationOptions_checkboxes")[0].checked
	) {
		document.getElementById("wow_installationFee_Price").innerHTML =
			wow_InstallationFee.SelfInstall;
	} else {
		document.getElementById("wow_installationFee_Price").innerHTML =
			wow_InstallationFee.TechInstall;
	}

	// TABLE 3

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById("wow_PromotionSectionBody");
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < wow_Promotions.length; index++) {
		$("#wow_PromotionSection")
			.find("#wow_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' + wow_Promotions[index] + "</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("wow_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < wow_Updates.length; index++) {
		$("#wow_UpdateSection")
			.find("#wow_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + wow_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"wow_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < wow_TopSellingPoints.length; index++) {
		$("#wow_TopSellingPointsSection")
			.find("#wow_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					wow_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"wow_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < wow_RequiredNewServiceInformation.length;
		index++
	) {
		$("#wow_RequiredNewServiceInfoSection")
			.find("#wow_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					wow_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"wow_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < wow_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#wow_RequiredDisconnectionInformationSection")
			.find("#wow_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					wow_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"wow_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (let index = 0; index < wow_AdditionalServiceInformation.length; index++) {
		$("#wow_AdditionalServiceInformationSection")
			.find("#wow_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					wow_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"wow_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < wow_InstallationOptions.length; index++) {
		$("#wow_InstallationOptionsSection")
			.find("#wow_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					wow_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// I3_BROADBAND Bundle Discount Calculation
	// Will have to work on this later .....
	// var sliderValue = slider17.val();
	// if (numeral(sliderValue).value() != '$0/month') {
	//   if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[0]
	//       .checked
	//   ) {
	//     document.getElementById('metronet_discount_Price').innerHTML =
	//       metronet_BundleDiscount_Basic_TV[
	//         'B_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//       ];
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[1]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV.E_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV[
	//           'E_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[2]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV.P_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV[
	//           'P_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   }
	// } else {
	//   document.getElementById('metronet_discount_Price').innerHTML = '$0/month';
	// }

	let totalOf_wow = numeral(
		document.getElementById("wow_TotalInternet_Price").innerHTML
	).value();

	if (ifAllChannelLineups_Of_wow == false) {
		totalOf_wow += numeral(
			document.getElementById("wow_TotalTelevision_Price").innerHTML
		).value();
	}
	// totalOf_wow = totalOf_wow - 5;
	document.getElementById("wow_TotalOfAll_Price").innerHTML =
		"$" +
		totalOf_wow.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// _________________________________________________________________________
}
// _________________________________________________________________________
// MEDIACOM
function runOperation_Tab9() {
	// -------------------------------------------------------------
	// TABLE 2

	var ifAllChannelLineups_Of_mediacom = false;
	// 1st Row
	for (let index = 0; index < 3; index++) {
		let checkboxes_variable = document.getElementsByName(
			"mediacom_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false
		) {
			$("#mediacomTelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider20.data("ionRangeSlider").update({ disable: true });
			// slider15.data('ionRangeSlider').update({ disable: true });

			for (
				let index = 0;
				index < document.getElementsByName("mediacom_SingleRoomDVR").length;
				index++
			) {
				document.getElementsByName("mediacom_SingleRoomDVR")[index].disabled = true;
			}

			for (
				let index = 0;
				index < document.getElementsByName("mediacom_MultiRoomDVR").length;
				index++
			) {
				document.getElementsByName("mediacom_MultiRoomDVR")[index].disabled = true;
			}

			for (
				let index = 0;
				index <
				document.getElementsByName("mediacom_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("mediacom_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			ifAllChannelLineups_Of_mediacom = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#mediacomTelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider20.data("ionRangeSlider").update({ disable: false });

			for (
				let index = 0;
				index < document.getElementsByName("mediacom_SingleRoomDVR").length;
				index++
			) {
				document.getElementsByName("mediacom_SingleRoomDVR")[
					index
				].disabled = false;
			}

			for (
				let index = 0;
				index < document.getElementsByName("mediacom_MultiRoomDVR").length;
				index++
			) {
				document.getElementsByName("mediacom_MultiRoomDVR")[index].disabled = false;
			}

			for (
				let index = 0;
				index <
				document.getElementsByName("mediacom_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("mediacom_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------

			if (index == 0) {
				document.getElementById("mediacom_ChannelLineup_Text").innerHTML =
					"Local TV";
			} else if (index == 1) {
				document.getElementById("mediacom_ChannelLineup_Text").innerHTML =
					"Essential TV";
			} else if (index == 2) {
				document.getElementById("mediacom_ChannelLineup_Text").innerHTML =
					"Variety TV";
			}
			document.getElementById("mediacom_ChannelLineup_Price").innerHTML =
				mediacom_TV_Packages[index];
		}
	}

	// 2nd Row
	// ------
	let tv_variable_2 = slider20.val();
	$("#tvbox_1_Text_mediacom").hide();
	$("#tvbox_2_Text_mediacom").hide();
	$("#tvbox_3_Text_mediacom").hide();
	$("#tvbox_4_Text_mediacom").hide();
	$("#tvbox_5_Text_mediacom").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_mediacom").show();
		if (index == 1) {
			document.getElementById("mediacom_tvbox_" + index + "_Price").innerHTML =
				mediacom_TV_s_Price.One;
		} else {
			document.getElementById("mediacom_tvbox_" + index + "_Price").innerHTML =
				mediacom_TV_s_Price.Two;
		}
	}
	if (document.getElementsByName("mediacom_SingleRoomDVR")[0].checked) {
		document.getElementById("mediacom_SingleRoomDVR_1_Price").innerHTML =
			mediacom_SingleRoom_DVR_Price.Yes;
		document.getElementById("SingleRoomDVR_1_Text_mediacom").style.display = "";
	} else {
		document.getElementById("mediacom_SingleRoomDVR_1_Price").innerHTML =
			mediacom_SingleRoom_DVR_Price.No;
		document.getElementById("SingleRoomDVR_1_Text_mediacom").style.display =
			"none";
	}

	if (document.getElementsByName("mediacom_MultiRoomDVR")[0].checked) {
		document.getElementById("mediacom_MultiRoomDVR_1_Price").innerHTML =
			mediacom_MultiRoom_DVR_Price.Yes;
		document.getElementById("MultiRoomDVR_1_Text_mediacom").style.display = "";
	} else {
		document.getElementById("mediacom_MultiRoomDVR_1_Price").innerHTML =
			mediacom_MultiRoom_DVR_Price.No;
		document.getElementById("MultiRoomDVR_1_Text_mediacom").style.display =
			"none";
	}

	// 4th Row
	let checkboxes_variable = document.getElementsByName(
		"mediacom_PremiumChannels_checkboxes"
	);
	for (let index = 0; index < checkboxes_variable.length; index++) {
		if (checkboxes_variable[index].checked == true) {
			$("#premiumText_" + (index + 1) + "_mediacom").show();
			document.getElementById(
				"mediacom_" + (index + 1) + "_premium_Price"
			).innerHTML = mediacom_PremiumChannels[index];
		} else {
			$("#premiumText_" + (index + 1) + "_mediacom").hide();
			document.getElementById(
				"mediacom_" + (index + 1) + "_premium_Price"
			).innerHTML = "";
		}
	}

	// -----------------------------------------------------------------------------------

	// 6th Row
	let total_Of_Television_Of_mediacom = numeral(
		document.getElementById("mediacom_ChannelLineup_Price").innerHTML
	).value();
	for (
		let index = 1;
		index <=
		document.getElementsByName("mediacom_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementById("mediacom_" + index + "_premium_Price").innerHTML !=
			""
		) {
			total_Of_Television_Of_mediacom += numeral(
				document.getElementById("mediacom_" + index + "_premium_Price").innerHTML
			).value();
		}
	}
	// total_Of_Television_Of_mediacom +=
	//   numeral(slider6.val()).value() * numeral(spectrum_TV_s_Price.One).value();
	for (let index = 1; index < numeral(slider20.val()).value(); index++) {
		total_Of_Television_Of_mediacom += numeral(mediacom_TV_s_Price.Two).value();
	}

	total_Of_Television_Of_mediacom += numeral(
		document.getElementById("mediacom_SingleRoomDVR_1_Price").innerHTML
	).value();
	total_Of_Television_Of_mediacom += numeral(
		document.getElementById("mediacom_MultiRoomDVR_1_Price").innerHTML
	).value();

	document.getElementById("mediacom_TotalTelevision_Price").innerHTML =
		"$" +
		total_Of_Television_Of_mediacom.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	document.getElementById("mediacom_EeroExtenders_Text").innerHTML =
		slider21.val() + " Additional Eero";
	if (slider21.val() == "0") {
		document.getElementById("mediacom_EeroExtenders_Price").innerHTML =
			mediacom_Eero_Extenders.E_0;
	} else if (slider21.val() == "1") {
		document.getElementById("mediacom_EeroExtenders_Price").innerHTML =
			mediacom_Eero_Extenders.E_1;
	} else if (slider21.val() == "2") {
		document.getElementById("mediacom_EeroExtenders_Price").innerHTML =
			mediacom_Eero_Extenders.E_2;
	} else if (slider21.val() == "3") {
		document.getElementById("mediacom_EeroExtenders_Price").innerHTML =
			mediacom_Eero_Extenders.E_3;
	} else if (slider21.val() == "4") {
		document.getElementById("mediacom_EeroExtenders_Price").innerHTML =
			mediacom_Eero_Extenders.E_4;
	} else if (slider21.val() == "5") {
		document.getElementById("mediacom_EeroExtenders_Price").innerHTML =
			mediacom_Eero_Extenders.E_5;
	}

	// 1st Row
	if (slider22.val() == "0mbps") {
		document.getElementById("mediacom_fiber_Text").innerHTML = slider22.val();
		document.getElementById("mediacom_fiber_Price").innerHTML =
			mediacom_InternetOnly.I_0_Mbps;
	} else if (slider22.val() == "60mbps") {
		document.getElementById("mediacom_fiber_Text").innerHTML = slider22.val();
		document.getElementById("mediacom_fiber_Price").innerHTML =
			mediacom_InternetOnly.I_60_Mbps;
	} else if (slider22.val() == "100mbps") {
		document.getElementById("mediacom_fiber_Text").innerHTML = slider22.val();
		document.getElementById("mediacom_fiber_Price").innerHTML =
			mediacom_InternetOnly.I_100_Mbps;
	} else if (slider22.val() == "300mbps") {
		document.getElementById("mediacom_fiber_Text").innerHTML = slider22.val();
		document.getElementById("mediacom_fiber_Price").innerHTML =
			mediacom_InternetOnly.I_300_Mbps;
	} else if (slider22.val() == "1000mbps") {
		document.getElementById("mediacom_fiber_Text").innerHTML = slider22.val();
		document.getElementById("mediacom_fiber_Price").innerHTML =
			mediacom_InternetOnly.I_1000_Mbps;
	}

	if (document.getElementsByName("mediacom_ModemRental")[0].checked) {
		document.getElementById("mediacom_modemRental_Price").innerHTML =
			mediacom_ModemRental.Customer_Owned;
	} else {
		document.getElementById("mediacom_modemRental_Price").innerHTML =
			mediacom_ModemRental.Wifi_Rental;
	}

	if (document.getElementsByName("mediacom_AddPhone")[0].checked) {
		document.getElementById("mediacom_addPhone_Price").innerHTML =
			i3_Broadband_AddPhone.Yes;
		document.getElementById("addPhone_mediacom").style.display = "";
	} else {
		document.getElementById("mediacom_addPhone_Price").innerHTML =
			i3_Broadband_AddPhone.No;
		document.getElementById("addPhone_mediacom").style.display = "none";
	}

	// 3rd Row
	let totalOfInternetSummary_mediacom = 0;
	if (
		numeral(document.getElementById("mediacom_fiber_Price").innerHTML).value() !=
		null
	) {
		totalOfInternetSummary_mediacom += numeral(
			document.getElementById("mediacom_fiber_Price").innerHTML
		).value();
	}
	if (
		numeral(
			document.getElementById("mediacom_EeroExtenders_Price").innerHTML
		).value() != null
	) {
		totalOfInternetSummary_mediacom += numeral(
			document.getElementById("mediacom_EeroExtenders_Price").innerHTML
		).value();
	}

	totalOfInternetSummary_mediacom += numeral(
		document.getElementById("mediacom_modemRental_Price").innerHTML
	).value();

	totalOfInternetSummary_mediacom += numeral(
		document.getElementById("mediacom_addPhone_Price").innerHTML
	).value();

	document.getElementById("mediacom_TotalInternet_Price").innerHTML =
		"$" +
		totalOfInternetSummary_mediacom.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month";

	// TABLE 3

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById(
		"mediacom_PromotionSectionBody"
	);
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < mediacom_Promotions.length; index++) {
		$("#mediacom_PromotionSection")
			.find("#mediacom_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					mediacom_Promotions[index] +
					"</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("mediacom_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < mediacom_Updates.length; index++) {
		$("#mediacom_UpdateSection")
			.find("#mediacom_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + mediacom_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"mediacom_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < mediacom_TopSellingPoints.length; index++) {
		$("#mediacom_TopSellingPointsSection")
			.find("#mediacom_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					mediacom_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"mediacom_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < mediacom_RequiredNewServiceInformation.length;
		index++
	) {
		$("#mediacom_RequiredNewServiceInfoSection")
			.find("#mediacom_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					mediacom_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"mediacom_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < mediacom_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#mediacom_RequiredDisconnectionInformationSection")
			.find("#mediacom_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					mediacom_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"mediacom_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < mediacom_AdditionalServiceInformation.length;
		index++
	) {
		$("#mediacom_AdditionalServiceInformationSection")
			.find("#mediacom_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					mediacom_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"mediacom_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < mediacom_InstallationOptions.length; index++) {
		$("#mediacom_InstallationOptionsSection")
			.find("#mediacom_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					mediacom_InstallationOptions[index] +
					"</td></tr>"
			);
	}
	// I3_BROADBAND Bundle Discount Calculation
	// Will have to work on this later .....
	// var sliderValue = slider17.val();
	// if (numeral(sliderValue).value() != '$0/month') {
	//   if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[0]
	//       .checked
	//   ) {
	//     document.getElementById('metronet_discount_Price').innerHTML =
	//       metronet_BundleDiscount_Basic_TV[
	//         'B_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//       ];
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[1]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV.E_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV[
	//           'E_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[2]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV.P_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV[
	//           'P_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   }
	// } else {
	//   document.getElementById('metronet_discount_Price').innerHTML = '$0/month';
	// }

	let totalOf_mediacom = numeral(
		document.getElementById("mediacom_TotalInternet_Price").innerHTML
	).value();
	if (ifAllChannelLineups_Of_mediacom == false) {
		totalOf_mediacom += numeral(
			document.getElementById("mediacom_TotalTelevision_Price").innerHTML
		).value();
	}
	// totalOf_mediacom = totalOf_mediacom - 5;
	document.getElementById("mediacom_TotalOfAll_Price").innerHTML =
		"$" +
		totalOf_mediacom.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// _________________________________________________________________________
}

// _________________________________________________________________________
// HUGHES NET
runOperation_Tab10();
function runOperation_Tab10() {
	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	if (slider23.val() == "0GB") {
		document.getElementById("hughes_fiber_Text").innerHTML = slider23.val();
		document.getElementById("hughes_fiber_Price").innerHTML =
			hughes_InternetOnly.I_0_GB;
	} else if (slider23.val() == "10GB") {
		document.getElementById("hughes_fiber_Text").innerHTML = slider23.val();
		document.getElementById("hughes_fiber_Price").innerHTML =
			hughes_InternetOnly.I_10_GB;
	} else if (slider23.val() == "20GB") {
		document.getElementById("hughes_fiber_Text").innerHTML = slider23.val();
		document.getElementById("hughes_fiber_Price").innerHTML =
			hughes_InternetOnly.I_20_GB;
	} else if (slider23.val() == "30GB") {
		document.getElementById("hughes_fiber_Text").innerHTML = slider23.val();
		document.getElementById("hughes_fiber_Price").innerHTML =
			hughes_InternetOnly.I_30_GB;
	} else if (slider23.val() == "50GB") {
		document.getElementById("hughes_fiber_Text").innerHTML = slider23.val();
		document.getElementById("hughes_fiber_Price").innerHTML =
			hughes_InternetOnly.I_50_GB;
	}

	if (document.getElementsByName("hughes_ModemRental")[0].checked) {
		document.getElementById("hughes_modemRental_Price").innerHTML =
			hughes_ModemRental.Yes;
		document.getElementById("hughes_ModemRental").style.display = "";
	} else {
		document.getElementById("hughes_modemRental_Price").innerHTML =
			hughes_ModemRental.No;
		document.getElementById("hughes_ModemRental").style.display = "none";
	}

	if (document.getElementsByName("hughes_PurchaseModem")[0].checked) {
		document.getElementById("hughes_purchaseModem_Price").innerHTML =
			hughes_ModemPurchase.Yes;
		document.getElementById("hughes_ModemPurchase").style.display = "";
	} else {
		document.getElementById("hughes_purchaseModem_Price").innerHTML =
			hughes_ModemPurchase.No;
		document.getElementById("hughes_ModemPurchase").style.display = "none";
	}

	// 3rd Row
	let totalOfInternetSummary_hughes = 0;
	if (
		numeral(document.getElementById("hughes_fiber_Price").innerHTML).value() !=
		null
	) {
		totalOfInternetSummary_hughes += numeral(
			document.getElementById("hughes_fiber_Price").innerHTML
		).value();
	}

	totalOfInternetSummary_hughes += numeral(
		document.getElementById("hughes_modemRental_Price").innerHTML
	).value();

	totalOfInternetSummary_hughes += numeral(
		document.getElementById("hughes_purchaseModem_Price").innerHTML
	).value();

	document.getElementById("hughes_TotalInternet_Price").innerHTML =
		"$" +
		totalOfInternetSummary_hughes.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month";

	let tableInstallationOptions = document.getElementById(
		"hughes_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < hughes_InstallationOptions.length; index++) {
		$("#hughes_InstallationOptionsSection")
			.find("#hughes_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					hughes_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"hughes_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < hughes_TopSellingPoints.length; index++) {
		$("#hughes_TopSellingPointsSection")
			.find("#hughes_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					hughes_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"hughes_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < hughes_RequiredNewServiceInformation.length;
		index++
	) {
		$("#hughes_RequiredNewServiceInfoSection")
			.find("#hughes_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					hughes_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"hughes_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < hughes_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#hughes_RequiredDisconnectionInformationSection")
			.find("#hughes_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					hughes_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"hughes_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < hughes_AdditionalServiceInformation.length;
		index++
	) {
		$("#hughes_AdditionalServiceInformationSection")
			.find("#hughes_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					hughes_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	// TABLE 3

	// I3_BROADBAND Bundle Discount Calculation
	// Will have to work on this later .....
	// var sliderValue = slider17.val();
	// if (numeral(sliderValue).value() != '$0/month') {
	//   if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[0]
	//       .checked
	//   ) {
	//     document.getElementById('metronet_discount_Price').innerHTML =
	//       metronet_BundleDiscount_Basic_TV[
	//         'B_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//       ];
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[1]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV.E_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV[
	//           'E_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[2]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV.P_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV[
	//           'P_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   }
	// } else {
	//   document.getElementById('metronet_discount_Price').innerHTML = '$0/month';
	// }
	document.getElementById("hughes_installationFee_Price").innerHTML =
		hughes_InstallationFee.TechInstall;

	let totalOf_hughes = numeral(
		document.getElementById("hughes_TotalInternet_Price").innerHTML
	).value();

	document.getElementById("hughes_TotalOfAll_Price").innerHTML =
		"$" +
		totalOf_hughes.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// _________________________________________________________________________
}

// _________________________________________________________________________
// CENTURY LINK
function runOperation_Tab11() {
	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	if (slider24.val() == "0mbps") {
		document.getElementById("century_fiber_Text").innerHTML = slider24.val();
		document.getElementById("century_fiber_Price").innerHTML =
			century_InternetOnly.I_0_mbps;
	} else if (slider24.val() == "30mbps") {
		document.getElementById("century_fiber_Text").innerHTML = slider24.val();
		document.getElementById("century_fiber_Price").innerHTML =
			century_InternetOnly.I_30_mbps;
	} else if (slider24.val() == "100mbps") {
		document.getElementById("century_fiber_Text").innerHTML = slider24.val();
		document.getElementById("century_fiber_Price").innerHTML =
			century_InternetOnly.I_100_mbps;
	} else if (slider24.val() == "940mbps") {
		document.getElementById("century_fiber_Text").innerHTML = slider24.val();
		document.getElementById("century_fiber_Price").innerHTML =
			century_InternetOnly.I_940_mbps;
	}

	if (document.getElementsByName("century_ModemRental")[0].checked) {
		document.getElementById("century_modemRental_Price").innerHTML =
			century_ModemRental.Yes;
		document.getElementById("century_ModemRental").style.display = "";
	} else {
		document.getElementById("century_modemRental_Price").innerHTML =
			century_ModemRental.No;
		document.getElementById("century_ModemRental").style.display = "none";
	}

	// 3rd Row
	let totalOfInternetSummary_century = 0;
	if (
		numeral(document.getElementById("century_fiber_Price").innerHTML).value() !=
		null
	) {
		totalOfInternetSummary_century += numeral(
			document.getElementById("century_fiber_Price").innerHTML
		).value();
	}

	totalOfInternetSummary_century += numeral(
		document.getElementById("century_modemRental_Price").innerHTML
	).value();

	document.getElementById("century_TotalInternet_Price").innerHTML =
		"$" +
		totalOfInternetSummary_century.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month";

	let tableInstallationOptions = document.getElementById(
		"century_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < century_InstallationOptions.length; index++) {
		$("#century_InstallationOptionsSection")
			.find("#century_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					century_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"century_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < century_TopSellingPoints.length; index++) {
		$("#century_TopSellingPointsSection")
			.find("#century_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					century_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"century_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < century_RequiredNewServiceInformation.length;
		index++
	) {
		$("#century_RequiredNewServiceInfoSection")
			.find("#century_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					century_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"century_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < century_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#century_RequiredDisconnectionInformationSection")
			.find("#century_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					century_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"century_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < century_AdditionalServiceInformation.length;
		index++
	) {
		$("#century_AdditionalServiceInformationSection")
			.find("#century_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					century_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	// TABLE 3

	// I3_BROADBAND Bundle Discount Calculation
	// Will have to work on this later .....
	// var sliderValue = slider17.val();
	// if (numeral(sliderValue).value() != '$0/month') {
	//   if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[0]
	//       .checked
	//   ) {
	//     document.getElementById('metronet_discount_Price').innerHTML =
	//       metronet_BundleDiscount_Basic_TV[
	//         'B_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//       ];
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[1]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV.E_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV[
	//           'E_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[2]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV.P_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV[
	//           'P_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   }
	// } else {
	//   document.getElementById('metronet_discount_Price').innerHTML = '$0/month';
	// }
	document.getElementById("century_installationFee_Price").innerHTML =
		century_InstallationFee.TechInstall;

	let totalOf_hughes = numeral(
		document.getElementById("century_TotalInternet_Price").innerHTML
	).value();

	document.getElementById("century_TotalOfAll_Price").innerHTML =
		"$" +
		totalOf_hughes.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// _________________________________________________________________________
}

// _________________________________________________________________________
// RCN
runOperation_Tab12();
function runOperation_Tab12() {
	// -------------------------------------------------------------
	// TABLE 2

	var ifAllChannelLineups_Of_rcn = false;
	// 1st Row
	for (let index = 0; index < 2; index++) {
		let checkboxes_variable = document.getElementsByName(
			"rcn_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false
		) {
			$("#rcn_TelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider25.data("ionRangeSlider").update({ disable: true });
			// slider15.data('ionRangeSlider').update({ disable: true });

			for (
				let index = 0;
				index < document.getElementsByName("rcn_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("rcn_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			ifAllChannelLineups_Of_rcn = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#rcn_TelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider25.data("ionRangeSlider").update({ disable: false });

			for (
				let index = 0;
				index < document.getElementsByName("rcn_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("rcn_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------

			if (index == 0) {
				document.getElementById("rcn_ChannelLineup_Text").innerHTML = "Basic TV";
			} else if (index == 1) {
				document.getElementById("rcn_ChannelLineup_Text").innerHTML =
					"Signature TV";
			}
			document.getElementById("rcn_ChannelLineup_Price").innerHTML =
				rcn_TV_Packages[index];
		}
	}

	// 2nd Row
	// ------
	let tv_variable_2 = slider25.val();
	$("#tvbox_1_Text_rcn").hide();
	$("#tvbox_2_Text_rcn").hide();
	$("#tvbox_3_Text_rcn").hide();
	$("#tvbox_4_Text_rcn").hide();
	$("#tvbox_5_Text_rcn").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_rcn").show();
		document.getElementById("rcn_tvbox_" + index + "_Price").innerHTML =
			rcn_TV_s_Price[index - 1];
	}

	// 4th Row
	let checkboxes_variable = document.getElementsByName(
		"rcn_PremiumChannels_checkboxes"
	);
	for (let index = 0; index < checkboxes_variable.length; index++) {
		if (checkboxes_variable[index].checked == true) {
			$("#premiumText_" + (index + 1) + "_rcn").show();
			document.getElementById("rcn_" + (index + 1) + "_premium_Price").innerHTML =
				rcn_PremiumChannels[index];
		} else {
			$("#premiumText_" + (index + 1) + "_rcn").hide();
			document.getElementById("rcn_" + (index + 1) + "_premium_Price").innerHTML =
				"";
		}
	}

	// -----------------------------------------------------------------------------------

	// 6th Row
	let total_Of_Television_Of_rcn = numeral(
		document.getElementById("rcn_ChannelLineup_Price").innerHTML
	).value();

	for (
		let index = 1;
		index <= document.getElementsByName("rcn_PremiumChannels_checkboxes").length;
		index++
	) {
		if (
			document.getElementById("rcn_" + index + "_premium_Price").innerHTML != ""
		) {
			total_Of_Television_Of_rcn += numeral(
				document.getElementById("rcn_" + index + "_premium_Price").innerHTML
			).value();
		}
	}
	// total_Of_Television_Of_rcn +=
	//   numeral(slider6.val()).value() * numeral(spectrum_TV_s_Price.One).value();
	for (let index = 1; index < numeral(slider25.val()).value(); index++) {
		total_Of_Television_Of_rcn += numeral(
			document.getElementById("rcn_tvbox_" + index + "_Price").innerHTML
		).value();
	}

	document.getElementById("rcn_TotalTelevision_Price").innerHTML =
		"$" +
		total_Of_Television_Of_rcn.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	if (document.getElementsByName("rcn_internetOptions")[0].checked) {
		document.getElementById("rcn_modemRental_Price").innerHTML =
			rcn_ModemRental.Customer_Owned;
	} else if (document.getElementsByName("rcn_internetOptions")[1].checked) {
		document.getElementById("rcn_modemRental_Price").innerHTML =
			rcn_ModemRental.Standard_Wifi_Plus_Modem;
	} else if (document.getElementsByName("rcn_internetOptions")[2].checked) {
		document.getElementById("rcn_modemRental_Price").innerHTML =
			rcn_ModemRental.Enhanced_Whole_Home_Wifi_Plus_Modem;
	} else if (document.getElementsByName("rcn_internetOptions")[3].checked) {
		document.getElementById("rcn_modemRental_Price").innerHTML =
			rcn_ModemRental.ProGaming_Wifi_Plus_Modem;
	}

	// 2nd Row
	if (slider26.val() == "0mbps") {
		document.getElementById("rcn_fiber_Text").innerHTML = slider26.val();
		document.getElementById("rcn_fiber_Price").innerHTML =
			rcn_InternetOnly.I_0_Mbps;
	} else if (slider26.val() == "50mbps") {
		document.getElementById("rcn_fiber_Text").innerHTML = slider26.val();
		document.getElementById("rcn_fiber_Price").innerHTML =
			rcn_InternetOnly.I_50_Mbps;
	} else if (slider26.val() == "250mbps") {
		document.getElementById("rcn_fiber_Text").innerHTML = slider26.val();
		document.getElementById("rcn_fiber_Price").innerHTML =
			rcn_InternetOnly.I_250_Mbps;
	} else if (slider26.val() == "500mbps") {
		document.getElementById("rcn_fiber_Text").innerHTML = slider26.val();
		document.getElementById("rcn_fiber_Price").innerHTML =
			rcn_InternetOnly.I_500_Mbps;
	} else if (slider26.val() == "1000mbps") {
		document.getElementById("rcn_fiber_Text").innerHTML = slider26.val();
		document.getElementById("rcn_fiber_Price").innerHTML =
			rcn_InternetOnly.I_1000_Mbps;
	}

	if (document.getElementsByName("rcn_AddPhone")[0].checked) {
		document.getElementById("rcn_addPhone_Price").innerHTML =
			i3_Broadband_AddPhone.Yes;
		document.getElementById("addPhone_rcn").style.display = "";
	} else {
		document.getElementById("rcn_addPhone_Price").innerHTML =
			i3_Broadband_AddPhone.No;
		document.getElementById("addPhone_rcn").style.display = "none";
	}

	// 3rd Row
	let totalOfInternetSummary_rcn = 0;
	if (
		numeral(document.getElementById("rcn_fiber_Price").innerHTML).value() != null
	) {
		totalOfInternetSummary_rcn += numeral(
			document.getElementById("rcn_fiber_Price").innerHTML
		).value();
	}

	totalOfInternetSummary_rcn += numeral(
		document.getElementById("rcn_modemRental_Price").innerHTML
	).value();

	totalOfInternetSummary_rcn += numeral(
		document.getElementById("rcn_addPhone_Price").innerHTML
	).value();

	document.getElementById("rcn_TotalInternet_Price").innerHTML =
		"$" +
		totalOfInternetSummary_rcn.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month";

	// TABLE 3

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById("rcn_PromotionSectionBody");
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < rcn_Promotions.length; index++) {
		$("#rcn_PromotionSection")
			.find("#rcn_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' + rcn_Promotions[index] + "</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("rcn_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < rcn_Updates.length; index++) {
		$("#rcn_UpdateSection")
			.find("#rcn_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + rcn_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"rcn_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < rcn_TopSellingPoints.length; index++) {
		$("#rcn_TopSellingPointsSection")
			.find("#rcn_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					rcn_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"rcn_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < rcn_RequiredNewServiceInformation.length;
		index++
	) {
		$("#rcn_RequiredNewServiceInfoSection")
			.find("#rcn_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					rcn_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"rcn_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < rcn_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#rcn_RequiredDisconnectionInformationSection")
			.find("#rcn_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					rcn_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"rcn_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (let index = 0; index < rcn_AdditionalServiceInformation.length; index++) {
		$("#rcn_AdditionalServiceInformationSection")
			.find("#rcn_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					rcn_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"rcn_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < rcn_InstallationOptions.length; index++) {
		$("#rcn_InstallationOptionsSection")
			.find("#rcn_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					rcn_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// I3_BROADBAND Bundle Discount Calculation
	// Will have to work on this later .....
	// var sliderValue = slider17.val();
	// if (numeral(sliderValue).value() != '$0/month') {
	//   if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[0]
	//       .checked
	//   ) {
	//     document.getElementById('metronet_discount_Price').innerHTML =
	//       metronet_BundleDiscount_Basic_TV[
	//         'B_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//       ];
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[1]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV.E_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Extra_TV[
	//           'E_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   } else if (
	//     document.getElementsByName('i3_Broadband_channelLineup_checkboxes')[2]
	//       .checked
	//   ) {
	//     if (sliderValue == 'GIG') {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV.P_GIGmbps;
	//     } else {
	//       document.getElementById('metronet_discount_Price').innerHTML =
	//         metronet_BundleDiscount_Preferred_TV[
	//           'P_' + numeral(sliderValue).value().toLocaleString() + 'mbps'
	//         ];
	//     }
	//   }
	// } else {
	//   document.getElementById('metronet_discount_Price').innerHTML = '$0/month';
	// }

	if (
		document.getElementsByName("rcn_InstallationOptions_checkboxes")[0].checked
	) {
		document.getElementById("rcn_installationFee_Price").innerHTML =
			rcn_InstallationFee.SelfInstall;
	} else {
		document.getElementById("rcn_installationFee_Price").innerHTML =
			rcn_InstallationFee.TechInstall;
	}

	document.getElementById("rcn_activationFee_Price").innerHTML =
		rcn_ActivationFee.ActivationFee;

	// document.getElementById('rcn_installationFee_Price').innerHTML = ;

	let totalOf_rcn = numeral(
		document.getElementById("rcn_TotalInternet_Price").innerHTML
	).value();
	if (ifAllChannelLineups_Of_rcn == false) {
		totalOf_rcn += numeral(
			document.getElementById("rcn_TotalTelevision_Price").innerHTML
		).value();
	}
	document.getElementById("rcn_TotalOfAll_Price").innerHTML =
		"$" +
		totalOf_rcn.toLocaleString(undefined, {
			minimumFractionDigits: 2,
			maximumFractionDigits: 2,
		}) +
		"/month + Taxes and Fees";

	// _________________________________________________________________________
}

// _________________________________________________________________________
// AT&T_DTV
function runOperation_Tab13() {
	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	var ifAllChannelLineups_Of_At_t_dtv = false;
	for (let index = 0; index < 4; index++) {
		let checkboxes_variable = document.getElementsByName(
			"at_t_dtv_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false &&
			checkboxes_variable[3].checked == false
		) {
			$("#at_t_dtvTelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider27.data("ionRangeSlider").update({ disable: true });

			for (
				let index = 0;
				index <
				document.getElementsByName("at_t_dtv_EquipmentOptions_checkboxes").length;
				index++
			) {
				document.getElementsByName("at_t_dtv_EquipmentOptions_checkboxes")[
					index
				].disabled = true;
			}

			for (
				let index = 0;
				index <
				document.getElementsByName("at_t_dtv_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("at_t_dtv_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			// ----------------------

			document.getElementById("at_t_dtv_tvbox_1_Price").innerHTML = "$0/month";
			document.getElementById("at_t_dtv_tvbox_2_Price").innerHTML = "$0/month";
			document.getElementById("at_t_dtv_tvbox_3_Price").innerHTML = "$0/month";
			document.getElementById("at_t_dtv_tvbox_4_Price").innerHTML = "$0/month";
			document.getElementById("at_t_dtv_tvbox_5_Price").innerHTML = "$0/month";
			document.getElementById("at_t_dtv_tvbox_6_Price").innerHTML = "$0/month";
			document.getElementById("at_t_dtv_equipment_Price").innerHTML = "$0/month";
			document.getElementById("at_t_dtv_1_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_2_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_3_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_4_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_5_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_6_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_7_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_8_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_9_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_10_premium_Price").innerHTML = "$0";
			document.getElementById("at_t_dtv_11_premium_Price").innerHTML = "$0";
			ifAllChannelLineups_Of_At_t_dtv = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#at_t_dtvTelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider27.data("ionRangeSlider").update({ disable: false });
			for (
				let index = 0;
				index <
				document.getElementsByName("at_t_dtv_EquipmentOptions_checkboxes").length;
				index++
			) {
				document.getElementsByName("at_t_dtv_EquipmentOptions_checkboxes")[
					index
				].disabled = false;
			}
			for (
				let index = 0;
				index <
				document.getElementsByName("at_t_dtv_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("at_t_dtv_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------

			let label = checkboxes_variable[index].nextElementSibling.innerText;
			document.getElementById("at_t_dtv_ChannelLineup_Text").innerHTML = label;
		}
	}

	// 2nd Row

	// ------
	let tv_variable_2 = slider27.val();
	$("#tvbox_1_Text_At_t_dtv").hide();
	$("#tvbox_2_Text_At_t_dtv").hide();
	$("#tvbox_3_Text_At_t_dtv").hide();
	$("#tvbox_4_Text_At_t_dtv").hide();
	$("#tvbox_5_Text_At_t_dtv").hide();
	$("#tvbox_6_Text_At_t_dtv").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_At_t_dtv").show();
		document.getElementById("at_t_dtv_tvbox_" + index + "_Price").innerHTML =
			at_t_dtv_TV_s_Price.One;
	}

	// Equipment Options
	for (let index = 0; index < 2; index++) {
		let checkboxes_variable_2 = document.getElementsByName(
			"at_t_dtv_EquipmentOptions_checkboxes"
		);
		if (checkboxes_variable_2[index].checked == true) {
			let label = checkboxes_variable_2[index].nextElementSibling.innerText;
			label = label.split("(");
			document.getElementById("at_t_dtv_equipment_Text").innerHTML = label[0];
			if (index == 0) {
				document.getElementById("at_t_dtv_equipment_Price").innerHTML =
					at_t_dtv_EquipmentOptions.Twenty_Hour_DVR;
			} else {
				document.getElementById("at_t_dtv_equipment_Price").innerHTML =
					at_t_dtv_EquipmentOptions.Unlimited_DVR;
			}
		}
	}

	// Premium Options
	// -----------------------------------------------------------------------------------
	// Premium Options
	let checkboxes_variable = document.getElementsByName(
		"at_t_dtv_PremiumChannels_checkboxes"
	);
	if (checkboxes_variable[0].checked == true) {
		$("#premiumText_1_At_t_dtv").show();
		document.getElementById("at_t_dtv_1_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.Desportes;
	} else {
		$("#premiumText_1_At_t_dtv").hide();
		document.getElementById("at_t_dtv_1_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[1].checked == true) {
		$("#premiumText_2_At_t_dtv").show();
		document.getElementById("at_t_dtv_2_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.En_Espanol;
	} else {
		$("#premiumText_2_At_t_dtv").hide();
		document.getElementById("at_t_dtv_2_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[2].checked == true) {
		$("#premiumText_3_At_t_dtv").show();
		document.getElementById("at_t_dtv_3_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.Brazilian;
	} else {
		$("#premiumText_3_At_t_dtv").hide();
		document.getElementById("at_t_dtv_3_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[3].checked == true) {
		$("#premiumText_4_At_t_dtv").show();
		document.getElementById("at_t_dtv_4_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.Vietnamese;
	} else {
		$("#premiumText_4_At_t_dtv").hide();
		document.getElementById("at_t_dtv_4_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[4].checked == true) {
		$("#premiumText_5_At_t_dtv").show();
		document.getElementById("at_t_dtv_5_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.Korean;
	} else {
		$("#premiumText_5_At_t_dtv").hide();
		document.getElementById("at_t_dtv_5_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[5].checked == true) {
		$("#premiumText_6_At_t_dtv").show();
		document.getElementById("at_t_dtv_6_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.HBOMax;
	} else {
		$("#premiumText_6_At_t_dtv").hide();
		document.getElementById("at_t_dtv_6_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[6].checked == true) {
		$("#premiumText_7_At_t_dtv").show();
		document.getElementById("at_t_dtv_7_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.Cinemax;
	} else {
		$("#premiumText_7_At_t_dtv").hide();
		document.getElementById("at_t_dtv_7_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[7].checked == true) {
		$("#premiumText_8_At_t_dtv").show();
		document.getElementById("at_t_dtv_8_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.Epix;
	} else {
		$("#premiumText_8_At_t_dtv").hide();
		document.getElementById("at_t_dtv_8_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[8].checked == true) {
		$("#premiumText_9_At_t_dtv").show();
		document.getElementById("at_t_dtv_9_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.Showtime;
	} else {
		$("#premiumText_9_At_t_dtv").hide();
		document.getElementById("at_t_dtv_9_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[9].checked == true) {
		$("#premiumText_10_At_t_dtv").show();
		document.getElementById("at_t_dtv_10_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.Starz;
	} else {
		$("#premiumText_10_At_t_dtv").hide();
		document.getElementById("at_t_dtv_10_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[10].checked == true) {
		$("#premiumText_11_At_t_dtv").show();
		document.getElementById("at_t_dtv_11_premium_Price").innerHTML =
			at_t_dtv_PremiumChannels.Movies_Extra_pack;
	} else {
		$("#premiumText_11_At_t_dtv").hide();
		document.getElementById("at_t_dtv_11_premium_Price").innerHTML = "";
	}

	// -----------------------------------------------------------------------------------

	// 6th Row
	let totalOfTelevisionSummary = 0;

	for (let index = 1; index <= 11; index++) {
		if (
			document.getElementById("at_t_dtv_" + index + "_premium_Price").innerHTML !=
			""
		) {
			totalOfTelevisionSummary += numeral(
				document.getElementById("at_t_dtv_" + index + "_premium_Price").innerHTML
			).value();
		}
	}
	totalOfTelevisionSummary +=
		numeral(slider4.val()).value() * numeral(at_t_dtv_TV_s_Price.One).value();
	if (
		numeral(
			document.getElementById("at_t_dtv_equipment_Price").innerHTML
		).value() != null
	) {
		totalOfTelevisionSummary += numeral(
			document.getElementById("at_t_dtv_equipment_Price").innerHTML
		).value();
	}

	document.getElementById("at_t_dtv_TotalTelevision_Price").innerHTML =
		"$" + totalOfTelevisionSummary.toLocaleString() + "/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	let chooseBundlePrice;
	if (
		document.getElementsByName("at_t_dtv_channelLineup_checkboxes")[0].checked
	) {
		chooseBundlePrice = at_t_dtv_BundlePrice_Entertainment_TV;
	} else if (
		document.getElementsByName("at_t_dtv_channelLineup_checkboxes")[1].checked
	) {
		chooseBundlePrice = at_t_dtv_BundlePrice_Choice_TV;
	} else if (
		document.getElementsByName("at_t_dtv_channelLineup_checkboxes")[2].checked
	) {
		chooseBundlePrice = at_t_dtv_BundlePrice_Ultimate_TV;
	} else if (
		document.getElementsByName("at_t_dtv_channelLineup_checkboxes")[3].checked
	) {
		chooseBundlePrice = at_t_dtv_BundlePrice_Premier_TV;
	} else {
		chooseBundlePrice = at_t_dtv_BundlePrice_No_TV;
	}

	if (slider28.val() == "0mbps") {
		document.getElementById("at_t_dtv_bundle_Price").innerHTML =
			chooseBundlePrice.I_0_Mbps;
	} else if (slider28.val() == "300mbps") {
		document.getElementById("at_t_dtv_bundle_Price").innerHTML =
			chooseBundlePrice.I_300_Mbps;
	} else if (slider28.val() == "500mbps") {
		document.getElementById("at_t_dtv_bundle_Price").innerHTML =
			chooseBundlePrice.I_500_Mbps;
	} else if (slider28.val() == "1000mbps") {
		document.getElementById("at_t_dtv_bundle_Price").innerHTML =
			chooseBundlePrice.I_1000_Mbps;
	}

	// 2nd Row
	document.getElementById("at_t_dtv_modernRental_Text").innerHTML =
		"Modem & Router";
	if (document.getElementsByName("at_t_dtv_modernRental")[0].checked == true) {
		document.getElementById("at_t_dtv_modernRental_Price").innerHTML =
			at_t_dtv_ModemRental.Modem_And_Router;
	}

	// 3rd Row
	let total_4 = 0;
	if (
		numeral(
			document.getElementById("at_t_dtv_modernRental_Price").innerHTML
		).value() != null
	) {
		total_4 += numeral(
			document.getElementById("at_t_dtv_modernRental_Price").innerHTML
		).value();
	}
	document.getElementById("at_t_dtv_TotalInternet_Price").innerHTML =
		"$" + total_4 + "/month";

	// TABLE 3
	// INSTALLATION FESS
	if (
		document.getElementsByName("at_t_dtv_InstallationOptions_checkboxes")[0]
			.checked
	) {
		document.getElementById("at_t_dtv_activationFee_Price").innerHTML =
			at_t_dtv_InstallationFee.Fiber;
	} else {
		document.getElementById("at_t_dtv_activationFee_Price").innerHTML =
			at_t_dtv_InstallationFee.NonFiber;
	}

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById(
		"at_t_dtv_PromotionSectionBody"
	);
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < at_t_dtv_Promotions.length; index++) {
		$("#at_t_dtv_PromotionSection")
			.find("#at_t_dtv_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_dtv_Promotions[index] +
					"</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("at_t_dtv_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < at_t_dtv_Updates.length; index++) {
		$("#at_t_dtv_UpdateSection")
			.find("#at_t_dtv_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + at_t_dtv_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"at_t_dtv_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < at_t_dtv_TopSellingPoints.length; index++) {
		$("#at_t_dtv_TopSellingPointsSection")
			.find("#at_t_dtv_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_dtv_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"at_t_dtv_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < at_t_dtv_RequiredNewServiceInformation.length;
		index++
	) {
		$("#at_t_dtv_RequiredNewServiceInfoSection")
			.find("#at_t_dtv_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_dtv_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"at_t_dtv_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < at_t_dtv_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#at_t_dtv_RequiredDisconnectionInformationSection")
			.find("#at_t_dtv_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_dtv_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"at_t_dtv_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < at_t_dtv_AdditionalServiceInformation.length;
		index++
	) {
		$("#at_t_dtv_AdditionalServiceInformationSection")
			.find("#at_t_dtv_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_dtv_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"at_t_dtv_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < at_t_dtv_InstallationOptions.length; index++) {
		$("#at_t_dtv_InstallationOptionsSection")
			.find("#at_t_dtv_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					at_t_dtv_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// Grand Total Row

	// at_t_dtv Bundle Discount Calculation
	var sliderValue = slider28.val();
	let totalOfAt_t_dtv = numeral(
		document.getElementById("at_t_dtv_TotalInternet_Price").innerHTML
	).value();
	if (ifAllChannelLineups_Of_At_t_dtv != true) {
		totalOfAt_t_dtv += numeral(
			document.getElementById("at_t_dtv_TotalTelevision_Price").innerHTML
		).value();
	}
	totalOfAt_t_dtv += numeral(
		document.getElementById("at_t_dtv_bundle_Price").innerHTML
	).value();

	if (
		document.getElementById("at_t_dtvTelevisionSummary").style.display == "none"
	) {
		document.getElementById("at_t_dtv_TotalOfAll_Price").innerHTML =
			"$" +
			totalOfAt_t_dtv.toLocaleString(undefined, {
				minimumFractionDigits: 2,
				maximumFractionDigits: 2,
			}) +
			"/month + Taxes and Fees";
	} else {
		document.getElementById("at_t_dtv_TotalOfAll_Price").innerHTML =
			"$" +
			totalOfAt_t_dtv.toLocaleString(undefined, {
				minimumFractionDigits: 2,
				maximumFractionDigits: 2,
			}) +
			"/month + Taxes and Fees";
	}
	// _________________________________________________________________________
}

// _________________________________________________________________________
// AT&T_DTV
runOperation_Tab14();
function runOperation_Tab14() {
	// -------------------------------------------------------------
	// 1st Row
	var ifAllChannelLineups_Of_dtv = false;
	for (let index = 0; index < 4; index++) {
		let checkboxes_variable = document.getElementsByName(
			"dtv_channelLineup_checkboxes"
		);
		if (
			checkboxes_variable[0].checked == false &&
			checkboxes_variable[1].checked == false &&
			checkboxes_variable[2].checked == false &&
			checkboxes_variable[3].checked == false
		) {
			$("#dtvTelevisionSummary").hide();
			// ----------------------
			// Disabling Television Summary Properties
			slider29.data("ionRangeSlider").update({ disable: true });

			for (
				let index = 0;
				index <
				document.getElementsByName("dtv_EquipmentOptions_checkboxes").length;
				index++
			) {
				document.getElementsByName("dtv_EquipmentOptions_checkboxes")[
					index
				].disabled = true;
			}

			for (
				let index = 0;
				index < document.getElementsByName("dtv_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("dtv_PremiumChannels_checkboxes")[
					index
				].disabled = true;
			}
			// ----------------------

			document.getElementById("dtv_tvbox_1_Price").innerHTML = "$0/month";
			document.getElementById("dtv_tvbox_2_Price").innerHTML = "$0/month";
			document.getElementById("dtv_tvbox_3_Price").innerHTML = "$0/month";
			document.getElementById("dtv_tvbox_4_Price").innerHTML = "$0/month";
			document.getElementById("dtv_tvbox_5_Price").innerHTML = "$0/month";
			document.getElementById("dtv_tvbox_6_Price").innerHTML = "$0/month";
			document.getElementById("dtv_equipment_Price").innerHTML = "$0/month";
			document.getElementById("dtv_1_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_2_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_3_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_4_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_5_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_6_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_7_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_8_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_9_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_10_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_11_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_12_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_13_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_14_premium_Price").innerHTML = "$0";
			document.getElementById("dtv_15_premium_Price").innerHTML = "$0";
			ifAllChannelLineups_Of_dtv = true;
		}
		if (checkboxes_variable[index].checked == true) {
			$("#dtvTelevisionSummary").show();
			// ----------------------
			// Enabling Television Summary Properties
			slider29.data("ionRangeSlider").update({ disable: false });
			for (
				let index = 0;
				index <
				document.getElementsByName("dtv_EquipmentOptions_checkboxes").length;
				index++
			) {
				document.getElementsByName("dtv_EquipmentOptions_checkboxes")[
					index
				].disabled = false;
			}
			for (
				let index = 0;
				index < document.getElementsByName("dtv_PremiumChannels_checkboxes").length;
				index++
			) {
				document.getElementsByName("dtv_PremiumChannels_checkboxes")[
					index
				].disabled = false;
			}
			// ----------------------

			let label = checkboxes_variable[index].nextElementSibling.innerText;
			document.getElementById("dtv_ChannelLineup_Text").innerHTML = label;
		}
	}

	// 2nd Row

	// ------
	let tv_variable_2 = slider29.val();
	$("#tvbox_1_Text_Dtv").hide();
	$("#tvbox_2_Text_Dtv").hide();
	$("#tvbox_3_Text_Dtv").hide();
	$("#tvbox_4_Text_Dtv").hide();
	$("#tvbox_5_Text_Dtv").hide();
	$("#tvbox_6_Text_Dtv").hide();
	for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
		$("#tvbox_" + index + "_Text_Dtv").show();
		document.getElementById("dtv_tvbox_" + index + "_Price").innerHTML =
			dtv_TV_s_Price.One;
	}

	// Equipment Options
	for (let index = 0; index < 2; index++) {
		let checkboxes_variable_2 = document.getElementsByName(
			"dtv_EquipmentOptions_checkboxes"
		);
		if (checkboxes_variable_2[index].checked == true) {
			let label = checkboxes_variable_2[index].nextElementSibling.innerText;
			label = label.split("(");
			document.getElementById("dtv_equipment_Text").innerHTML = label[0];
			if (index == 0) {
				document.getElementById("dtv_equipment_Price").innerHTML =
					dtv_EquipmentOptions.Twenty_Hour_DVR;
			} else {
				document.getElementById("dtv_equipment_Price").innerHTML =
					dtv_EquipmentOptions.Unlimited_DVR;
			}
		}
	}

	// Premium Options
	// -----------------------------------------------------------------------------------
	// Premium Options
	let checkboxes_variable = document.getElementsByName(
		"dtv_PremiumChannels_checkboxes"
	);
	if (checkboxes_variable[0].checked == true) {
		$("#premiumText_1_Dtv").show();
		document.getElementById("dtv_1_premium_Price").innerHTML =
			dtv_PremiumChannels.Desportes;
	} else {
		$("#premiumText_1_Dtv").hide();
		document.getElementById("dtv_1_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[1].checked == true) {
		$("#premiumText_2_Dtv").show();
		document.getElementById("dtv_2_premium_Price").innerHTML =
			dtv_PremiumChannels.En_Espanol;
	} else {
		$("#premiumText_2_Dtv").hide();
		document.getElementById("dtv_2_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[2].checked == true) {
		$("#premiumText_3_Dtv").show();
		document.getElementById("dtv_3_premium_Price").innerHTML =
			dtv_PremiumChannels.Brazilian;
	} else {
		$("#premiumText_3_Dtv").hide();
		document.getElementById("dtv_3_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[3].checked == true) {
		$("#premiumText_4_Dtv").show();
		document.getElementById("dtv_4_premium_Price").innerHTML =
			dtv_PremiumChannels.Vietnamese;
	} else {
		$("#premiumText_4_Dtv").hide();
		document.getElementById("dtv_4_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[4].checked == true) {
		$("#premiumText_5_Dtv").show();
		document.getElementById("dtv_5_premium_Price").innerHTML =
			dtv_PremiumChannels.Korean;
	} else {
		$("#premiumText_5_Dtv").hide();
		document.getElementById("dtv_5_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[5].checked == true) {
		$("#premiumText_6_Dtv").show();
		document.getElementById("dtv_6_premium_Price").innerHTML =
			dtv_PremiumChannels.HBOMax;
	} else {
		$("#premiumText_6_Dtv").hide();
		document.getElementById("dtv_6_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[6].checked == true) {
		$("#premiumText_7_Dtv").show();
		document.getElementById("dtv_7_premium_Price").innerHTML =
			dtv_PremiumChannels.Cinemax;
	} else {
		$("#premiumText_7_Dtv").hide();
		document.getElementById("dtv_7_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[7].checked == true) {
		$("#premiumText_8_Dtv").show();
		document.getElementById("dtv_8_premium_Price").innerHTML =
			dtv_PremiumChannels.Epix;
	} else {
		$("#premiumText_8_Dtv").hide();
		document.getElementById("dtv_8_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[8].checked == true) {
		$("#premiumText_9_Dtv").show();
		document.getElementById("dtv_9_premium_Price").innerHTML =
			dtv_PremiumChannels.Showtime;
	} else {
		$("#premiumText_9_Dtv").hide();
		document.getElementById("dtv_9_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[9].checked == true) {
		$("#premiumText_10_Dtv").show();
		document.getElementById("dtv_10_premium_Price").innerHTML =
			dtv_PremiumChannels.Starz;
	} else {
		$("#premiumText_10_Dtv").hide();
		document.getElementById("dtv_10_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[10].checked == true) {
		$("#premiumText_11_Dtv").show();
		document.getElementById("dtv_11_premium_Price").innerHTML =
			dtv_PremiumChannels.Movies_Extra_pack;
	} else {
		$("#premiumText_11_Dtv").hide();
		document.getElementById("dtv_11_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[11].checked == true) {
		$("#premiumText_12_Dtv").show();
		document.getElementById("dtv_12_premium_Price").innerHTML =
			dtv_PremiumChannels.MLB_Extra_Innings;
	} else {
		$("#premiumText_12_Dtv").hide();
		document.getElementById("dtv_12_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[12].checked == true) {
		$("#premiumText_13_Dtv").show();
		document.getElementById("dtv_13_premium_Price").innerHTML =
			dtv_PremiumChannels.MLS_Direct_Kick;
	} else {
		$("#premiumText_13_Dtv").hide();
		document.getElementById("dtv_13_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[13].checked == true) {
		$("#premiumText_14_Dtv").show();
		document.getElementById("dtv_14_premium_Price").innerHTML =
			dtv_PremiumChannels.Fox_Soccer_Plus;
	} else {
		$("#premiumText_14_Dtv").hide();
		document.getElementById("dtv_14_premium_Price").innerHTML = "";
	}

	if (checkboxes_variable[14].checked == true) {
		$("#premiumText_15_Dtv").show();
		document.getElementById("dtv_15_premium_Price").innerHTML =
			dtv_PremiumChannels.NFL_Sunday_Ticket;
	} else {
		$("#premiumText_15_Dtv").hide();
		document.getElementById("dtv_15_premium_Price").innerHTML = "";
	}

	// -----------------------------------------------------------------------------------

	// 6th Row
	let totalOfTelevisionSummary = 0;

	for (let index = 1; index <= 15; index++) {
		if (
			document.getElementById("dtv_" + index + "_premium_Price").innerHTML != ""
		) {
			totalOfTelevisionSummary += numeral(
				document.getElementById("dtv_" + index + "_premium_Price").innerHTML
			).value();
		}
	}
	totalOfTelevisionSummary +=
		numeral(slider4.val()).value() * numeral(dtv_TV_s_Price.One).value();
	if (
		numeral(document.getElementById("dtv_equipment_Price").innerHTML).value() !=
		null
	) {
		totalOfTelevisionSummary += numeral(
			document.getElementById("dtv_equipment_Price").innerHTML
		).value();
	}

	document.getElementById("dtv_TotalTelevision_Price").innerHTML =
		"$" + totalOfTelevisionSummary.toLocaleString() + "/month + taxes and fees";

	// -------------------------------------------------------------
	// TABLE 2

	// 1st Row
	let chooseBundlePrice;
	if (document.getElementsByName("dtv_channelLineup_checkboxes")[0].checked) {
		chooseBundlePrice = dtv_BundlePrice_Entertainment_TV;
	} else if (
		document.getElementsByName("dtv_channelLineup_checkboxes")[1].checked
	) {
		chooseBundlePrice = dtv_BundlePrice_Choice_TV;
	} else if (
		document.getElementsByName("dtv_channelLineup_checkboxes")[2].checked
	) {
		chooseBundlePrice = dtv_BundlePrice_Ultimate_TV;
	} else if (
		document.getElementsByName("dtv_channelLineup_checkboxes")[3].checked
	) {
		chooseBundlePrice = dtv_BundlePrice_Premier_TV;
	} else {
		chooseBundlePrice = dtv_BundlePrice_No_TV;
	}

	if (slider30.val() == "0mbps") {
		document.getElementById("dtv_bundle_Price").innerHTML =
			chooseBundlePrice.I_0_Mbps;
	} else if (slider30.val() == "300mbps") {
		document.getElementById("dtv_bundle_Price").innerHTML =
			chooseBundlePrice.I_300_Mbps;
	} else if (slider30.val() == "500mbps") {
		document.getElementById("dtv_bundle_Price").innerHTML =
			chooseBundlePrice.I_500_Mbps;
	} else if (slider30.val() == "1000mbps") {
		document.getElementById("dtv_bundle_Price").innerHTML =
			chooseBundlePrice.I_1000_Mbps;
	}

	// 2nd Row
	document.getElementById("dtv_modernRental_Text").innerHTML = "Modem & Router";
	if (document.getElementsByName("dtv_modernRental")[0].checked == true) {
		document.getElementById("dtv_modernRental_Price").innerHTML =
			dtv_ModemRental.Modem_And_Router;
	}

	if (document.getElementsByName("dtv_AddPhone_checkboxes")[0].checked) {
		document.getElementById("dtv_addPhone_Price").innerHTML = dtv_AddPhone.Yes;
	} else {
		document.getElementById("dtv_addPhone_Price").innerHTML = dtv_AddPhone.No;
	}

	if (document.getElementsByName("dtv_activationFee_checkboxes")[0].checked) {
		document.getElementById("dtv_activationFee_Price").innerHTML =
			dtv_ActivationFee.Yes;
	} else {
		document.getElementById("dtv_activationFee_Price").innerHTML =
			dtv_ActivationFee.No;
	}

	// 3rd Row
	let total_4 = 0;
	if (
		numeral(
			document.getElementById("dtv_modernRental_Price").innerHTML
		).value() != null
	) {
		total_4 += numeral(
			document.getElementById("dtv_modernRental_Price").innerHTML
		).value();
	}

	// AddPhone
	if (document.getElementsByName("dtv_AddPhone_checkboxes")[0].checked) {
		total_4 += numeral(
			document.getElementById("dtv_addPhone_Price").innerHTML
		).value();
	}
	// ActivationFee
	if (document.getElementsByName("dtv_activationFee_checkboxes")[0].checked) {
		total_4 += numeral(
			document.getElementById("dtv_activationFee_Price").innerHTML
		).value();
	}

	document.getElementById("dtv_TotalInternet_Price").innerHTML =
		"$" + total_4 + "/month";

	// PROMOTIONS AND UPDATE SECTION
	let tablePromotionBody = document.getElementById("dtv_PromotionSectionBody");
	tablePromotionBody.innerHTML = "";
	for (let index = 0; index < dtv_Promotions.length; index++) {
		$("#dtv_PromotionSection")
			.find("#dtv_PromotionSectionBody")
			.append(
				'<tr><td style="text-align: left">' + dtv_Promotions[index] + "</td></tr>"
			);
	}
	let tableUpdateBody = document.getElementById("dtv_UpdateSectionBody");
	tableUpdateBody.innerHTML = "";
	for (let index = 0; index < dtv_Updates.length; index++) {
		$("#dtv_UpdateSection")
			.find("#dtv_UpdateSectionBody")
			.append(
				'<tr><td style="text-align: left">' + dtv_Updates[index] + "</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->
	// TOP SELLING POINTS SECTION
	let tableTopSellingPoints = document.getElementById(
		"dtv_TopSellingPointsSectionBody"
	);
	tableTopSellingPoints.innerHTML = "";
	for (let index = 0; index < dtv_TopSellingPoints.length; index++) {
		$("#dtv_TopSellingPointsSection")
			.find("#dtv_TopSellingPointsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					dtv_TopSellingPoints[index] +
					"</td></tr>"
			);
	}

	// REQUIRED NEW SERVICE INFO
	let tableRequiredNewServiceInfo = document.getElementById(
		"dtv_RequiredNewServiceInfoSectionBody"
	);
	tableRequiredNewServiceInfo.innerHTML = "";
	for (
		let index = 0;
		index < dtv_RequiredNewServiceInformation.length;
		index++
	) {
		$("#dtv_RequiredNewServiceInfoSection")
			.find("#dtv_RequiredNewServiceInfoSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					dtv_RequiredNewServiceInformation[index] +
					"</td></tr>"
			);
	}
	// REQUIRED DISCONNECTION INFORMATION
	let tableRequiredDisconnectionInfo = document.getElementById(
		"dtv_RequiredDisconnectionInformationSectionBody"
	);
	tableRequiredDisconnectionInfo.innerHTML = "";
	for (
		let index = 0;
		index < dtv_RequiredDisconnectionInformation.length;
		index++
	) {
		$("#dtv_RequiredDisconnectionInformationSection")
			.find("#dtv_RequiredDisconnectionInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					dtv_RequiredDisconnectionInformation[index] +
					"</td></tr>"
			);
	}
	// ADDITIONAL SERVICE INFORMATION
	let tableAdditionalServiceInfo = document.getElementById(
		"dtv_AdditionalServiceInformationSectionBody"
	);
	tableAdditionalServiceInfo.innerHTML = "";
	for (let index = 0; index < dtv_AdditionalServiceInformation.length; index++) {
		$("#dtv_AdditionalServiceInformationSection")
			.find("#dtv_AdditionalServiceInformationSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					dtv_AdditionalServiceInformation[index] +
					"</td></tr>"
			);
	}

	// <!-- ________________________________________________ -->
	// <!-- ________________________________________________ -->
	// <!-- THIS PART SHOULD BE ADDED IN CUSTOMER VERSION TOOO -->

	let tableInstallationOptions = document.getElementById(
		"dtv_InstallationOptionsSectionBody"
	);
	tableInstallationOptions.innerHTML = "";
	for (let index = 0; index < dtv_InstallationOptions.length; index++) {
		$("#dtv_InstallationOptionsSection")
			.find("#dtv_InstallationOptionsSectionBody")
			.append(
				'<tr><td style="text-align: left">' +
					dtv_InstallationOptions[index] +
					"</td></tr>"
			);
	}

	// Grand Total Row

	// at_t_dtv Bundle Discount Calculation
	let totalOfAt_t_dtv = numeral(
		document.getElementById("dtv_TotalInternet_Price").innerHTML
	).value();
	if (ifAllChannelLineups_Of_dtv != true) {
		totalOfAt_t_dtv += numeral(
			document.getElementById("dtv_TotalTelevision_Price").innerHTML
		).value();
	}
	totalOfAt_t_dtv += numeral(
		document.getElementById("dtv_bundle_Price").innerHTML
	).value();

	if (document.getElementById("dtvTelevisionSummary").style.display == "none") {
		document.getElementById("dtv_TotalOfAll_Price").innerHTML =
			"$" +
			totalOfAt_t_dtv.toLocaleString(undefined, {
				minimumFractionDigits: 2,
				maximumFractionDigits: 2,
			}) +
			"/month + Taxes and Fees";
	} else {
		document.getElementById("dtv_TotalOfAll_Price").innerHTML =
			"$" +
			totalOfAt_t_dtv.toLocaleString(undefined, {
				minimumFractionDigits: 2,
				maximumFractionDigits: 2,
			}) +
			"/month + Taxes and Fees";
	}
	// _________________________________________________________________________
}

// _________________________________________________________________________
function displayTabs(element) {
	jQuery(".tab-menu").removeClass("selected");
	jQuery("#" + element.id).addClass("selected");

	for (
		let index = 1;
		index <= document.getElementsByClassName("no-of-total-tabs").length;
		index++
	) {
		$("#tabDetails_" + index).hide();
	}

	$("#tabDetails_" + numeral(element.id).value()).show();
	if (numeral(element.id).value() >= 2) {
		setTimeout(function () {
			window["runOperation_Tab" + numeral(element.id).value()]();
		}, 500);
	}
}

// _________________________________________________________________________
function displayEntertainmentFeatures() {
	$("#Entertainment_at_t").toggle();
}
function displayChoiceFeatures() {
	$("#Choice_at_t").toggle();
}
function displayUltimateFeatures() {
	$("#Ultimate_at_t").toggle();
}
function displayPremierFeatures() {
	$("#Premier_at_t").toggle();
}
// _________________________________________________________________________

$(document).ready(function () {
	$(".channelLineUp-At-t").click(function () {
		$(".channelLineUp-At-t").not(this).prop("checked", false);
	});
	$(".channelLineup-comcast").click(function () {
		$(".channelLineup-comcast").not(this).prop("checked", false);
	});

	$(".channelLineup-at_t_dtv").click(function () {
		$(".channelLineup-at_t_dtv").not(this).prop("checked", false);
	});
	$(".channelLineup-dtv").click(function () {
		$(".channelLineup-dtv").not(this).prop("checked", false);
	});
});

// _________________________________________________________________________
