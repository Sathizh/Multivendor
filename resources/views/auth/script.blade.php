<script>
    // phone number validation
    $(document).ready(function () {


    $('#phone').keyup(function (e) {
    var phone = $('#phone').val();
    console.log(phone)
    var _token = $("input[name='_token']").val();
    var phone_len = phone.length;
    var first_number = parseInt(phone[0]);
    if (phone_len == 10 && first_number > 5){
    $.ajax({
    url:'{{url('/register/checkphone')}}',
    method : 'POST',
    data : {phone:phone, _token:_token},
    success:function(result){
    if(result == 'unique')
    {
    $('#phone_error').html('<small>Phone Number Available</small>').css("color", 'green');

    // $("#otp_button").prop('disabled', false);
    $("#register_button").prop('disabled', false);
    }
    else{
    $('#phone_error').html('<small>Phone Number Already taken</small>').css("color", 'red');

    // $("#otp_button").prop('disabled', true);
    $("#register_button").prop('disabled', true);
    }
    }
    });
    }
    else{
    $('#phone_error').html('<small>Enter 10-digit number</small>').css("color", 'red');

    // $("#otp_button").prop('disabled', true);
    $("#register_button").prop('disabled', true);
    }
    });
    });
</script>
