$(document).ready(function() {
  function saveSettings() {
    OC.msg.startSaving('#registration_settings_msg');
    $.ajax({
      url: OC.generateUrl('/apps/ndcregistration/settings'),
      type: 'POST',
      data: $('#registration_settings_form').serialize(),
      success: function(data){
        OC.msg.finishedSaving('#registration_settings_msg', data);
      },
      error: function(data){
        OC.msg.finishedError('#registration_settings_msg', data.responseJSON.message);
      }
    });
  }

  function saveEnableStatus() {
    OC.msg.startSaving('#registration_settings_msg');
    const value = $('input#registration_enabled').is(":checked")
    $.ajax({
      url: OC.generateUrl('/apps/ndcregistration/settings/status'),
      type: 'POST',
      data: { str: value ? 'yes' : 'no' } ,
      success: function(data){
        OC.msg.finishedSaving('#registration_settings_msg', data);
      },
      error: function(data){
        OC.msg.finishedError('#registration_settings_msg', data.responseJSON.message);
      },
      complete: function(){
        $('#registration_settings_form > div:first-child').toggle(value)
      }
    });
  }

  $('input#registration_enabled').change(saveEnableStatus);
  $('#registration_settings_form').change(saveSettings);
  $('#registration').keypress(function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
    }
  });
});
