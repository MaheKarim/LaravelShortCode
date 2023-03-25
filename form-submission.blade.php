@push('stack_js')
    <script>
        function appendErrorMessage(errorMessageContainer, inputName, errorMessage) {
            $('input[name="' + inputName + '"]').addClass('is-invalid');
            errorMessageContainer.removeClass('d-none');
            errorMessageContainer.find("ul").append('<li>' + errorMessage + '</li>');
        }

        function showValidationError(res) {
            if (res.status === 401) {
                window.location.href = '/';
            }

            if (res.status === 422) {
                let errorMessageContainer = $(".print-error-msg");
                errorMessageContainer.find("ul").html('');
                let errorMessage = res.responseJSON.errors;
                for (let item in errorMessage) {
                    if (item.indexOf('.') >= 0) {
                        let inputName = item.split(".").map(function(key, index){
                            if (index !== 0) {
                                return '['+key+']';
                            }
                            return key;
                        }).join('');
                        appendErrorMessage(errorMessageContainer, inputName, errorMessage[item][0]);
                    } else {
                        appendErrorMessage(errorMessageContainer, item, errorMessage[item][0]);
                    }
                }
            }

            $(document).scrollTop(0);
        }

        $(document).ready(function () {
            $(document).on('click', '#saveButton', function () {
                let submitBtn = $(this);
                submitBtn.attr('disabled', true);
                $('.is-invalid').each(function () {
                    $(this).removeClass('is-invalid');
                });
                let form = $(this).parents('form')[0];
                let url = $(form).attr('action');
                let data = new FormData(form);
                $.ajax({
                    method: "POST",
                    contentType: false,
                    cache: false,
                    processData: false,
                    url: url,
                    data: data,
                    success: function (res) {
                        iziToast.success({
                            timeout: 500,
                            title: res.success,
                            position: 'topRight',
                            onClosed: function(instance, toast, closedBy){
                                if (res.redirect_to) {
                                    window.location.href=res.redirect_to;
                                }
                            }
                        });
                        submitBtn.attr('disabled', true);
                    },
                    error: function (res) {
                        showValidationError(res);
                        submitBtn.attr('disabled', false);
                    }
                });
            });

        });
    </script>
@endpush
