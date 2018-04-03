import $ from 'jquery';
import 'bootstrap';
import './scss/App.scss';

$(document).ready(() => {
  const memberURL = 'https://www.mypostcard.com/ajax/popup_register_login.php';

  $('.open-member').click(() => {
    $.ajax({
      type: 'GET',
      url: memberURL,
      success: (data) => {
        $('.members-wrap').html(data);
        $('#members-model').modal();
      },
      error: (error) => {
        console.log(error);
      }
    });

  });

});
