/**
 * General purpose javascript functions file.
 *
 * @written by: Diego Silva <contato@diegosilva.me>
 * Created: 02/09/2017
 **/

 /**************************
    Validation  functions
  **************************/

/**
 *  Verify if both 'password' and 'password confirmation' fields contains the same content.
 * @param string passwordFieldId, the html attribut id that should be used to pick passord field
 * @param string passwordConfirmationFieldId, the html attribut id that should be used to pick passord confirmation field
 **/
function checkPasswordConfirm(passwordFieldId, passwordConfirmationFieldId) {
  var passwordInput;
  var passwordConfirmationInput;
  var result;

  passwordInput = $("#" + passwordFieldId);
  passwordInputConfirm = $("#" + passwordConfirmationFieldId);
  result = (passwordInputConfirm.val() === passwordInput.val());

  return result;
}

/**
 * Validates input text field length. The field should containt 'data-min-length' and 'data-max-length' attributes.
 * These attributes are used to test input length by minimum and maximum length, respectively.
 * @param fieldId string, input text html id
 * @return boolean, true if content si ok, an JSON containing element name, minimum length and maxium length otherwise, so
 *         caller can concatenate these infromation on error output message.
 **/
function checkFieldLength(fieldId) {
  var inputField;
  var result;

  result = {
    name: '',
    minLength: 0,
    maxLength: 0
  };

  inputField = $("#" + fieldId);
  result.fieldName = inputField.attr("placeholder");
  result.minLength = parseInt(inputField.attr("data-min-length"));
  result.maxLength = parseInt(inputField.attr("data-max-length"));

  if(inputField.val().length >= result.minLength && inputField.val().length <=  result.maxLength)
    result = true;

  return result;
}

/**
 *
 **/
function checkEmail(fieldId) {
  var inputField;
  var result;
  var regex;

  regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  result = {
    name: '',
    minLength: 0,
    maxLength: 0
  };

  inputField = $("#" + fieldId);
  result.fieldName = inputField.attr("placeholder");
  result.minLength = parseInt(inputField.attr("data-min-length"));
  result.maxLength = parseInt(inputField.attr("data-max-length"));

  if(regex.test(inputField.val()))
    result = true;

  return result;
}

/**
 *
 **/
function showErrorDialog(messages) {

    var dialog = $( "#dialog-message" ).removeClass('hide').dialog({
      modal: true,
      title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon fa fa-check'></i> jQuery UI Dialog</h4></div>",
      title_html: true,
      buttons: [
        {
          text: "Cancel",
          "class" : "btn btn-minier",
          click: function() {
            $( this ).dialog( "close" );
          }
        },
        {
          text: "OK",
          "class" : "btn btn-primary btn-minier",
          click: function() {
            $( this ).dialog( "close" );
          }
        }
      ]
    });

    /**
    dialog.data( "uiDialog" )._title = function(title) {
      title.html( this.options.title );
    };
    **/
  }
}
