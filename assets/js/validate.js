
        <script>
        $(function ()
        {
            $("#contact-form").validate(
                    {
    
                        // Rules for form validation
    
                        rules:
                                {
    
                                    name:
                                            {
    
                                                required: true,
    
                                            },
    
                                    email:
                                            {
    
                                                required: true
    
                                            },
    
                                    phone:
                                            {
    
                                                required: true
    
                                            },
    
                                    message:
                                            {
    
                                                required: true
    
                                            },
                                    captcha:
                                            {
    
                                                required: true
    
                                            },
    
                                },
    
                        // Messages for form validation
    
                        messages:
                                {
                                    name:
                                            {
    
                                                required: '*Please enter name'
    
                                            },
    
                                    email:
                                            {
    
                                                required: '*Please enter email'
    
                                            },
    
                                    phone:
                                            {
    
                                                required: '*Please enter mobile no'
    
                                            },
    
                                    message:
                                            {
    
                                                required: '*Please write message'
    
                                            },
                                    captcha:
                                            {
    
                                                required: '*Please enter captcha'
    
                                            }
    
                                },
    
                        // Do not change code below
    
                        errorPlacement: function (error, element) {
                            error.css('color', 'red');
                            error.insertAfter(element);
                        }
    
                    });
            $("#career-form").validate(
                    {
    
                        // Rules for form validation
    
                        rules:
                                {
    
                                    name:
                                            {
    
                                                required: true,
    
                                            },
    
                                    email:
                                            {
    
                                                required: true
    
                                            },
    
                                    phone:
                                            {
    
                                                required: true
    
                                            },
    
                                    message:
                                            {
    
                                                required: true
    
                                            },
                                    file:
                                            {
    
                                                required: true
    
                                            },
                                    captcha:
                                            {
    
                                                required: true
    
                                            },
    
                                },
    
                        // Messages for form validation
    
                        messages:
                                {
                                    name:
                                            {
    
                                                required: '*Please enter name'
    
                                            },
    
                                    email:
                                            {
    
                                                required: '*Please enter email'
    
                                            },
    
                                    phone:
                                            {
    
                                                required: '*Please enter mobile no'
    
                                            },
    
                                    message:
                                            {
    
                                                required: '*Please write message'
    
                                            },
                                    file:
                                            {
    
                                                required: '*Please select file'
    
                                            },
                                    captcha:
                                            {
    
                                                required: '*Please enter captcha'
    
                                            }
    
                                },
    
                        // Do not change code below
    
                        errorPlacement: function (error, element) {
                            error.css('color', 'red');
                            error.insertAfter(element);
                        }
    
                    });
        });
    </script>
    
    