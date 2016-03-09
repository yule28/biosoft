(function() {
  jQuery(function() {
    return $('#form-contact').bootstrapValidator({
      feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      live: 'enabled',
      fields: {
        'nombre': {
          trigger: "blur",
          validators: {
            notEmpty: {
              message: "Debe colocar su nombre."
            }
          }
        },
        'correo': {
          trigger: "blur",
          validators: {
            notEmpty: {
              message: "Debe colocar un correo."
            },
            emailAddress: {
              message: "Debe ser un correo valido."
            }
          }
        },
        'asunto': {
          trigger: "blur",
          validators: {
            notEmpty: {
              message: "Debe colocar un asunto"
            }
          }
        },
        'mensaje': {
          trigger: "blur",
          validators: {
            notEmpty: {
              message: "Debe colocar un mensaje"
            }
          }
        }
      }
    });
  });

})
.call(this);

