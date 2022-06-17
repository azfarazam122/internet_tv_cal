// TABLE 1 SLIDERs
let slider1 = $('#tv').ionRangeSlider({
  skin: 'big',
  min: 0,
  max: 6,
  from: 2,
  grid: true,
  values: ['0', '1', '2', '3', '4', '5', '6'],
  onChange: function (data) {
    runOperation_Tab1();
  },
});
let slider2 = $('#fiber').ionRangeSlider({
  skin: 'big',
  min: 0,
  max: 1200,
  from: 2,
  grid: true,
  values: ['0', '300mbps', '500mbps', '1000mbps'],
  onChange: function (data) {
    runOperation_Tab1();
  },
});
let slider3 = $('#nonFiber').ionRangeSlider({
  skin: 'big',
  min: 0,
  max: 1200,
  from: 0,
  grid: true,
  values: ['0', '25mbps', '50mbps', '75mbps', '100mbps'],
  onChange: function (data) {
    runOperation_Tab1();
  },
});

// TABLE 2 SLIDERs
let slider4 = $('#comcast_tv').ionRangeSlider({
  skin: 'big',
  min: 0,
  max: 6,
  from: 2,
  grid: true,
  values: ['0', '1', '2', '3', '4', '5', '6'],
  onChange: function (data) {
    runOperation_Tab2();
  },
});
let slider5 = $('#comcast_Internet').ionRangeSlider({
  skin: 'big',
  min: 0,
  max: 1200,
  from: 2,
  grid: true,
  values: [
    '0',
    '50mbps',
    '100mbps',
    '200mbps',
    '400mbps',
    '800mbps',
    '1200mbps',
  ],
  onChange: function (data) {
    runOperation_Tab2();
  },
});
// _________________________________________________________________________
// TABLES FUNCTIOS
runOperation_Tab1();
function runOperation_Tab1() {
  // -------------------------------------------------------------
  // TABLE 1

  // 1st Row
  for (let index = 0; index < 4; index++) {
    let checkboxes_variable = document.getElementsByName(
      'channelLineup_checkboxes'
    );
    if (checkboxes_variable[index].checked == true) {
      let label = checkboxes_variable[index].nextElementSibling.innerText;
      label = label.split(' ');
      document.getElementById('channelLineup_Text').innerHTML = label[0];
      document.getElementById('channelLineup_Price').innerHTML =
        '$' + checkboxes_variable[index].value.toLocaleString() + '/month';
    }
  }
  // 2nd Row
  let tv_variable = slider1.val();
  $('#tvbox_1_Text_At_t').hide();
  $('#tvbox_2_Text_At_t').hide();
  $('#tvbox_3_Text_At_t').hide();
  $('#tvbox_4_Text_At_t').hide();
  $('#tvbox_5_Text_At_t').hide();
  $('#tvbox_6_Text_At_t').hide();
  for (let index = 1; index <= numeral(tv_variable).value(); index++) {
    $('#tvbox_' + index + '_Text_At_t').show();
    document.getElementById('tvbox_' + index + '_Price').innerHTML = '$5/month';
  }
  // document.getElementById('tvbox_1_Text').innerHTML = tv_variable + ' TV Box';
  // document.getElementById('tvbox_1_Price').innerHTML = '$5/month';
  // 3rd Row
  // document.getElementById('tvbox_2_Text').innerHTML = tv_variable + ' TV Box';
  // document.getElementById('tvbox_2_Price').innerHTML = '$5/month';

  // 4th Row
  for (let index = 0; index < 2; index++) {
    let checkboxes_variable = document.getElementsByName(
      'equipmentOptions_checkboxes'
    );
    if (checkboxes_variable[index].checked == true) {
      let label = checkboxes_variable[index].nextElementSibling.innerText;
      label = label.split('(');
      document.getElementById('equipment_Text').innerHTML = label[0];
      if (index == 0) {
        document.getElementById('equipment_Price').innerHTML =
          checkboxes_variable[index].value;
      } else {
        document.getElementById('equipment_Price').innerHTML =
          checkboxes_variable[index].value + '/month';
      }
    }
  }

  // 5th Row
  let checkboxes_variable = document.getElementsByName(
    'premiumChannels_checkboxes'
  );

  if (checkboxes_variable[0].checked == true) {
    $('#premium_1_At_t').show();
    document.getElementById('premium_1_Price').innerHTML = '$14.99';
  } else {
    $('#premium_1_At_t').hide();
    document.getElementById('premium_1_Price').innerHTML = '';
  }

  if (checkboxes_variable[1].checked == true) {
    $('#premium_2_At_t').show();
    document.getElementById('premium_2_Price').innerHTML = '$11';
  } else {
    $('#premium_2_At_t').hide();
    document.getElementById('premium_2_Price').innerHTML = '';
  }

  if (checkboxes_variable[2].checked == true) {
    $('#premium_3_At_t').show();
    document.getElementById('premium_3_Price').innerHTML = '$11';
  } else {
    $('#premium_3_At_t').hide();
    document.getElementById('premium_3_Price').innerHTML = '';
  }

  if (checkboxes_variable[3].checked == true) {
    $('#premium_4_At_t').show();
    document.getElementById('premium_4_Price').innerHTML = '$11';
  } else {
    $('#premium_4_At_t').hide();
    document.getElementById('premium_4_Price').innerHTML = '';
  }

  if (checkboxes_variable[4].checked == true) {
    $('#premium_5_At_t').show();
    document.getElementById('premium_5_Price').innerHTML = '$6';
  } else {
    $('#premium_5_At_t').hide();
    document.getElementById('premium_5_Price').innerHTML = '';
  }

  if (checkboxes_variable[5].checked == true) {
    $('#premium_6_At_t').show();
    document.getElementById('premium_6_Price').innerHTML = '$5';
  } else {
    $('#premium_6_At_t').hide();
    document.getElementById('premium_6_Price').innerHTML = '';
  }

  if (checkboxes_variable[6].checked == true) {
    $('#premium_7_At_t').show();
    document.getElementById('premium_7_Price').innerHTML = '$40';
  } else {
    $('#premium_7_At_t').hide();
    document.getElementById('premium_7_Price').innerHTML = '';
  }

  // 6th Row
  let total = numeral(
    document.getElementById('channelLineup_Price').innerHTML
  ).value();

  for (let index = 1; index <= 7; index++) {
    if (
      document.getElementById('premium_' + index + '_Price').innerHTML != ''
    ) {
      total += numeral(
        document.getElementById('premium_' + index + '_Price').innerHTML
      ).value();
    }
  }
  total += numeral(slider1.val()).value() * 5;

  if (
    numeral(document.getElementById('equipment_Price').innerHTML).value() !=
    null
  ) {
    total += numeral(
      document.getElementById('equipment_Price').innerHTML
    ).value();
  }

  document.getElementById('totalTelevision_Price').innerHTML =
    '$' + total.toLocaleString() + '/month + taxes and fees';

  // -------------------------------------------------------------
  // TABLE 2

  // 1st Row
  if (slider2.val() == '0') {
    $('#fiber_1_Text_At_t').hide();
    document.getElementById('fiber_Text').innerHTML = slider2.val();
    document.getElementById('fiber_Price').innerHTML = '$0/month';
  } else if (slider2.val() == '300mbps') {
    $('#fiber_1_Text_At_t').show();
    document.getElementById('fiber_Text').innerHTML = slider2.val();
    document.getElementById('fiber_Price').innerHTML = '$35/month';
  } else if (slider2.val() == '500mbps') {
    $('#fiber_1_Text_At_t').show();
    document.getElementById('fiber_Text').innerHTML = slider2.val();
    document.getElementById('fiber_Price').innerHTML = '$45/month';
  } else if (slider2.val() == '1000mbps') {
    $('#fiber_1_Text_At_t').show();
    document.getElementById('fiber_Text').innerHTML = slider2.val();
    document.getElementById('fiber_Price').innerHTML = '$60/month';
  }

  // 2nd Row
  if (slider3.val() == '0') {
    $('#nonFiber_1_Text_At_t').hide();
    document.getElementById('nonFiber_Text').innerHTML = slider3.val();
    document.getElementById('nonFiber_Price').innerHTML = '$0/month';
  } else if (slider3.val() == '25mbps') {
    $('#nonFiber_1_Text_At_t').show();
    document.getElementById('nonFiber_Text').innerHTML = slider3.val();
    document.getElementById('nonFiber_Price').innerHTML = '$45/month';
  } else if (slider3.val() == '50mbps') {
    $('#nonFiber_1_Text_At_t').show();
    document.getElementById('nonFiber_Text').innerHTML = slider3.val();
    document.getElementById('nonFiber_Price').innerHTML = '$45/month';
  } else if (slider3.val() == '75mbps') {
    $('#nonFiber_1_Text_At_t').show();
    document.getElementById('nonFiber_Text').innerHTML = slider3.val();
    document.getElementById('nonFiber_Price').innerHTML = '$45/month';
  } else if (slider3.val() == '100mbps') {
    $('#nonFiber_1_Text_At_t').show();
    document.getElementById('nonFiber_Text').innerHTML = slider3.val();
    document.getElementById('nonFiber_Price').innerHTML = '$45/month';
  }

  // 3rd Row
  document.getElementById('modernRental_Text').innerHTML = 'Modern Rental';
  if (document.getElementsByName('modernRental')[0].checked == true) {
    document.getElementById('modernRental_Price').innerHTML = '$10/Month';
  } else {
    document.getElementById('modernRental_Price').innerHTML = 'No ';
  }

  // 4th Row
  let total_2 = 0;
  if (
    numeral(document.getElementById('fiber_Price').innerHTML).value() != null
  ) {
    total_2 =
      total_2 +
      numeral(document.getElementById('fiber_Price').innerHTML).value();
  }
  if (
    numeral(document.getElementById('nonFiber_Price').innerHTML).value() != null
  ) {
    total_2 =
      total_2 +
      numeral(document.getElementById('nonFiber_Price').innerHTML).value();
  }
  if (
    numeral(document.getElementById('modernRental_Price').innerHTML).value() !=
    null
  ) {
    total_2 += numeral(
      document.getElementById('modernRental_Price').innerHTML
    ).value();
  }
  document.getElementById('totalInternet_Price').innerHTML =
    '$' + total_2 + '/month';

  // TABLE 3
  // Grand Total Row
  document.getElementById('totalOfAll_Price').innerHTML =
    '$' +
    (
      numeral(
        document.getElementById('totalTelevision_Price').innerHTML
      ).value() +
      numeral(document.getElementById('totalInternet_Price').innerHTML).value()
    ).toLocaleString() +
    '/month + Taxes and Fees';

  // -------------------------------------------------------------
}
// _________________________________________________________________________
runOperation_Tab2();
function runOperation_Tab2() {
  // -------------------------------------------------------------
  // TABLE 2

  // 1st Row
  for (let index = 0; index < 3; index++) {
    let checkboxes_variable = document.getElementsByName(
      'comcast_channelLineup_checkboxes'
    );
    if (checkboxes_variable[index].checked == true) {
      let label = checkboxes_variable[index].nextElementSibling.innerText;
      label = label.split(' ');
      document.getElementById('comcast_ChannelLineup_Text').innerHTML =
        label[0];
      document.getElementById('comcast_ChannelLineup_Price').innerHTML =
        checkboxes_variable[index].value.toLocaleString() + '/month';
    }
  }

  // 2nd Row

  // ------
  let tv_variable_2 = slider4.val();
  $('#tvbox_1_Text_Comcast').hide();
  $('#tvbox_2_Text_Comcast').hide();
  $('#tvbox_3_Text_Comcast').hide();
  $('#tvbox_4_Text_Comcast').hide();
  $('#tvbox_5_Text_Comcast').hide();
  $('#tvbox_6_Text_Comcast').hide();
  for (let index = 1; index <= numeral(tv_variable_2).value(); index++) {
    $('#tvbox_' + index + '_Text_Comcast').show();
    document.getElementById('comcast_tvbox_' + index + '_Price').innerHTML =
      '$7.50/month';
  }

  // 4th Row
  for (let index = 0; index < 2; index++) {
    let checkboxes_variable_2 = document.getElementsByName(
      'comcast_EquipmentOptions_checkboxes'
    );
    if (checkboxes_variable_2[index].checked == true) {
      let label = checkboxes_variable_2[index].nextElementSibling.innerText;
      label = label.split('(');
      document.getElementById('comcast_equipment_Text').innerHTML = label[0];
      if (index == 0) {
        document.getElementById('comcast_equipment_Price').innerHTML =
          checkboxes_variable_2[index].value;
      } else {
        document.getElementById('comcast_equipment_Price').innerHTML =
          checkboxes_variable_2[index].value + '/month';
      }
    }
  }

  // 5th Row
  // -----------------------------------------------------------------------------------
  // 5th Row
  let checkboxes_variable = document.getElementsByName(
    'comcast_PremiumChannels_checkboxes'
  );

  if (checkboxes_variable[0].checked == true) {
    $('#premiumText_1_Comcast').show();
    document.getElementById('comcast_1_premium_Price').innerHTML = '$15';
  } else {
    $('#premiumText_1_Comcast').hide();
    document.getElementById('comcast_1_premium_Price').innerHTML = '';
  }

  if (checkboxes_variable[1].checked == true) {
    $('#premiumText_2_Comcast').show();
    document.getElementById('comcast_2_premium_Price').innerHTML = '$12';
  } else {
    $('#premiumText_2_Comcast').hide();
    document.getElementById('comcast_2_premium_Price').innerHTML = '';
  }

  if (checkboxes_variable[2].checked == true) {
    $('#premiumText_3_Comcast').show();
    document.getElementById('comcast_3_premium_Price').innerHTML = '$12';
  } else {
    $('#premiumText_3_Comcast').hide();
    document.getElementById('comcast_3_premium_Price').innerHTML = '';
  }

  if (checkboxes_variable[3].checked == true) {
    $('#premiumText_4_Comcast').show();
    document.getElementById('comcast_4_premium_Price').innerHTML = '$8.99';
  } else {
    $('#premiumText_4_Comcast').hide();
    document.getElementById('comcast_4_premium_Price').innerHTML = '';
  }

  if (checkboxes_variable[4].checked == true) {
    $('#premiumText_5_Comcast').show();
    document.getElementById('comcast_5_premium_Price').innerHTML = '$9.95';
  } else {
    $('#premiumText_5_Comcast').hide();
    document.getElementById('comcast_5_premium_Price').innerHTML = '';
  }

  if (checkboxes_variable[5].checked == true) {
    $('#premiumText_6_Comcast').show();
    document.getElementById('comcast_6_premium_Price').innerHTML = '$12';
  } else {
    $('#premiumText_6_Comcast').hide();
    document.getElementById('comcast_6_premium_Price').innerHTML = '';
  }

  // -----------------------------------------------------------------------------------

  // 6th Row
  let total_3 = numeral(
    document.getElementById('comcast_ChannelLineup_Price').innerHTML
  ).value();
  // +
  // numeral(document.getElementById('comcast_premium_Price').innerHTML).value();
  for (let index = 1; index <= 6; index++) {
    if (
      document.getElementById('comcast_' + index + '_premium_Price')
        .innerHTML != ''
    ) {
      total_3 += numeral(
        document.getElementById('comcast_' + index + '_premium_Price').innerHTML
      ).value();
    }
  }
  total_3 += numeral(slider4.val()).value() * 7.5;
  if (
    numeral(
      document.getElementById('comcast_equipment_Price').innerHTML
    ).value() != null
  ) {
    total_3 += numeral(
      document.getElementById('comcast_equipment_Price').innerHTML
    ).value();
  }

  document.getElementById('comcast_TotalTelevision_Price').innerHTML =
    '$' + total_3.toLocaleString() + '/month + taxes and fees';

  // -------------------------------------------------------------
  // TABLE 2

  // 1st Row
  if (slider5.val() == '50mbps') {
    document.getElementById('comcast_fiber_Text').innerHTML = slider5.val();
    document.getElementById('comcast_fiber_Price').innerHTML = '$25/month';
  } else if (slider5.val() == '100mbps') {
    document.getElementById('comcast_fiber_Text').innerHTML = slider5.val();
    document.getElementById('comcast_fiber_Price').innerHTML = '$40/month';
  } else if (slider5.val() == '200mbps') {
    document.getElementById('comcast_fiber_Text').innerHTML = slider5.val();
    document.getElementById('comcast_fiber_Price').innerHTML = '$50/month';
  } else if (slider5.val() == '400mbps') {
    document.getElementById('comcast_fiber_Text').innerHTML = slider5.val();
    document.getElementById('comcast_fiber_Price').innerHTML = '$50/month';
  } else if (slider5.val() == '800mbps') {
    document.getElementById('comcast_fiber_Text').innerHTML = slider5.val();
    document.getElementById('comcast_fiber_Price').innerHTML = '$60/month';
  } else if (slider5.val() == '1200mbps') {
    document.getElementById('comcast_fiber_Text').innerHTML = slider5.val();
    document.getElementById('comcast_fiber_Price').innerHTML = '$70/month';
  }

  // 2nd Row
  document.getElementById('comcast_modernRental_Text').innerHTML =
    'Modern Rental';
  if (document.getElementsByName('comcast_modernRental')[0].checked == true) {
    document.getElementById('comcast_modernRental_Price').innerHTML = 'Free';
  } else if (
    document.getElementsByName('comcast_modernRental')[1].checked == true
  ) {
    document.getElementById('comcast_modernRental_Price').innerHTML =
      '$14/Month';
  } else {
    document.getElementById('comcast_modernRental_Price').innerHTML =
      '$25/Month';
  }

  // 3rd Row
  let total_4 = 0;
  if (
    numeral(document.getElementById('comcast_fiber_Price').innerHTML).value() !=
    null
  ) {
    total_4 =
      total_4 +
      numeral(document.getElementById('comcast_fiber_Price').innerHTML).value();
  }
  if (
    numeral(
      document.getElementById('comcast_modernRental_Price').innerHTML
    ).value() != null
  ) {
    total_4 += numeral(
      document.getElementById('comcast_modernRental_Price').innerHTML
    ).value();
  }
  document.getElementById('comcast_TotalInternet_Price').innerHTML =
    '$' + total_4 + '/month';

  // TABLE 3
  // Grand Total Row
  if (document.getElementById('comcast_AutoplayYes').checked) {
    document.getElementById('comcast_installation_Price').innerHTML =
      '$-$10/month';
  } else {
    document.getElementById('comcast_installation_Price').innerHTML =
      '$-$0/month';
  }

  let totalOfComcast =
    numeral(
      document.getElementById('comcast_TotalTelevision_Price').innerHTML
    ).value() +
    numeral(
      document.getElementById('comcast_TotalInternet_Price').innerHTML
    ).value();
  totalOfComcast = totalOfComcast - 30 - 10;
  document.getElementById('comcast_TotalOfAll_Price').innerHTML =
    '$' + totalOfComcast.toLocaleString() + '/month + Taxes and Fees';

  // _________________________________________________________________________
}
// _________________________________________________________________________

// _________________________________________________________________________
function displayTabs(element) {
  // document.getElementById('tab_1').style.backgroundColor = 'white';
  // document.getElementById('tab_1').style.color = 'black';
  // document.getElementById('tab_2').style.backgroundColor = 'white';
  // document.getElementById('tab_2').style.color = 'black';
  // document.getElementById('tab_3').style.backgroundColor = 'white';
  // document.getElementById('tab_3').style.color = 'black';
  // document.getElementById('tab_4').style.backgroundColor = 'white';
  // document.getElementById('tab_4').style.color = 'black';
  // document.getElementById('tab_5').style.backgroundColor = 'white';
  // document.getElementById('tab_5').style.color = 'black';
  // document.getElementById('tab_6').style.backgroundColor = 'white';
  // document.getElementById('tab_6').style.color = 'black';
  // document.getElementById('tab_7').style.backgroundColor = 'white';
  // document.getElementById('tab_7').style.color = 'black';
  // document.getElementById(element.id).style.backgroundColor = '#00afe8';
  // document.getElementById(element.id).style.color = 'white';

  document.getElementById('tab_1').style.top = '0px';
  document.getElementById('tab_2').style.top = '0px';
  document.getElementById('tab_3').style.top = '0px';
  document.getElementById('tab_4').style.top = '0px';
  document.getElementById('tab_5').style.top = '0px';
  document.getElementById('tab_6').style.top = '0px';
  document.getElementById('tab_7').style.top = '0px';
  document.getElementById(element.id).style.top = '5px';
  $('#tabDetails_1').hide();
  $('#tabDetails_2').hide();

  $('#tabDetails_' + numeral(element.id).value()).show();

  setTimeout(function () {
    runOperation_Tab2();
  }, 500);
}

// _________________________________________________________________________
function displayEntertainmentFeatures() {
  $('#Entertainment_at_t').toggle();
}
function displayChoiceFeatures() {
  $('#Choice_at_t').toggle();
}
function displayUltimateFeatures() {
  $('#Ultimate_at_t').toggle();
}
function displayPremierFeatures() {
  $('#Premier_at_t').toggle();
}
// _________________________________________________________________________
