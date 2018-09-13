$(function() {
    //对哪个表单做验证
    $('#regForm')
        .bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', 
                invalid: 'glyphicon glyphicon-remove', 
                validating: 'glyphicon glyphicon-refresh' 
            },
            
            fields: {
                //对用户名做验证  
                username: {
                    message: '用户名验证失败', 
                    validators: {
                        notEmpty: {
                            message: '用户名必须填写'
                        }, 
                        stringLength: {
                            min: 6, 
                            max: 12,
                            message: '用户名长度必须在6~12位之间'
                        }
                    }
                },
                password: {
                    message: '密码验证失败',
                    validators: {
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        stringLength: {
                            min: 6, 
                            max: 18, 
                            message: '密码长度必须在6~18位之间'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});