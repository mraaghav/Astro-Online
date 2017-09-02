/**
 * Login area javascript events file.
 *
 * @written by: Diego Silva <contato@diegosilva.me>
 * Created: 15/06/2017
 * Last update: 02/09/2017
 **/
$(document).ready(function() {

  $('#btn-login-dark').on('click', function(e) {
 	  $('body').attr('class', 'login-layout');
 	  $('#id-text2').attr('class', 'white');
 	  $('#id-company-text').attr('class', 'blue');

 	  e.preventDefault();
  });

  $('#btn-login-light').on('click', function(e) {
 	  $('body').attr('class', 'login-layout light-login');
 	  $('#id-text2').attr('class', 'grey');
 	  $('#id-company-text').attr('class', 'blue');

 	  e.preventDefault();
  });

  $('#btn-login-blur').on('click', function(e) {
 	  $('body').attr('class', 'login-layout blur-login');
 	  $('#id-text2').attr('class', 'white');
 	  $('#id-company-text').attr('class', 'light-blue');

 	  e.preventDefault();
  });

  $(document).on('click', '.toolbar a[data-target]', function(e) {
    var target = $(this).data('target');

    $('.widget-box.visible').removeClass('visible');//hide others
 	  $(target).addClass('visible');//show target

    e.preventDefault();

  });

  // Register form before submit event
  $("#register").on("submit", function(e) {

    var errorMessages;
    var checkResult;

    messages = Array();

    // Validate terms of use
    if(!$("#userTerms").is(":checked"))
      messages[messages.length] = "Você tem que aceitar os termos de uso para continuar o cadastro.";

    // Validadte field "Nome" length
    checkResult = checkFieldLength("userName");
    if(checkResult != true)
      messages[messages.length] = "O campo '"+checkResult.fieldName+"' deve conter no mínimo "+checkResult.minLength+" e no máximo "+checkResult.maxLength+" caracteres.";

    // Validadte field "E-mail" length
    checkResult = checkFieldLength("userEmail");
    if(checkResult != true)
      messages[messages.length] = "O campo '"+checkResult.fieldName+"' deve conter no mínimo "+checkResult.minLength+" e no máximo "+checkResult.maxLength+" caracteres.";

    // Validadte email
    checkResult = checkEmail("userEmail");
    if(checkResult != true)
      messages[messages.length] = "O campo '"+checkResult.fieldName+"' contém um endereço de e-mail inválido.";

    // Validate field "Password" length
    checkResult = checkFieldLength("userPassword");
    if(checkResult != true)
        messages[messages.length] = "Informe uma senha com pelo menos " + checkResult.minLength + " e no máximo " + checkResult.maxLength + " caracteres.";

    // Validate password confirmation
    if(!checkPasswordConfirm("userPassword", "userPasswordConfirm"))
      messages[messages.length] = "Senha e confirmação de senha não conferem.";

    console.log(JSON.stringify(messages));

    e.preventDefault();

  });

});
