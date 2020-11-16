<script>
    // phone number validation
   $(document).ready(function() {
    $("#phone").keyup(function(e) {
        var phone = $("#phone").val();
        console.log(phone);
        var _token = $("input[name='_token']").val();
        var phone_len = phone.length;
        var first_number = parseInt(phone[0]);
        if (phone_len == 10 && first_number > 5) {
            $.ajax({
                url: "{{url('/register/checkphone')}}",
                method: "POST",
                data: { phone: phone, _token: _token },
                success: function(result) {
                    if (result == "unique") {
                        $("#phone_error")
                            .html("<small>Phone Number Available</small>")
                            .css("color", "green");
                        $("#register_button").prop("disabled", false);
                    } else {
                        $("#phone_error")
                            .html("<small>Phone Number Already taken</small>")
                            .css("color", "red");
                        $("#register_button").prop("disabled", true);
                    }
                }
            });
        } else {
            $("#phone_error")
                .html("<small>Enter 10-digit number</small>")
                .css("color", "red");
            $("#register_button").prop("disabled", true);
        }
    });

    // GST Validation

    $("#gst").keyup(function(e) {
        var gst = $("#gst").val();
        // console.log(gst)
        var _token = $("input[name='_token']").val();
        var first_number = parseInt(gst[0]);
        // var patt= /
        // console.log(
        //     gst.match(/d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}/)
        // );
            $.ajax({
                url: "{{url('/shop_register/checkgst')}}",
                method: "POST",
                data: { gst: gst, _token: _token },
                success: function(result) {
                    // console.log()
                    if (result == "unique") {
                        $("#gst_error")
                            .html("<small>gst Number Available</small>")
                            .css("color", "green");
                        $("#create_shop").prop("disabled", false);
                    } else {
                        $("#gst_error")
                            .html("<small>gst Number Already taken</small>")
                            .css("color", "red");
                        $("#create_shop").prop("disabled", true);
                    }
                }
            });

    });
});

$(document).ready(function() {
    $("#build_btn").fadeOut();

});
</script>
<script>
    $(document).ready(function () {
           $('#build_btn').fadeOut();
           let w=$( document ).width();
           if (w > 2150 ) {
            $('#build_btn').fadeIn();
            }
           });

        $("#sell_on_MVZ").scroll(function () {
           var y = $(this).scrollTop();
           var w= $( document ).width();
        //    console.log(w);
            if (y > 90 || w >= 1024 ) {
            $('#build_btn').fadeIn();
            } else {
            $('#build_btn').fadeOut();
            }
        });

// profile change
        $(document).ready(function () {
            jQuery("#profile_tog").click(function () {
            jQuery("#profile_update_trig").trigger('click');

            });
        $("#profile_update_trig").change(function (e) {
            $("#profile_change").submit();
            // var fileName = "";
            //     fileName=e.target.files[0].name;
            //     console.log(fileName)

        });
        });
</script>
{{-- <script type="text/javascript">
    Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

    init:function(){
      var submitButton = document.querySelector("#submit-all");
      myDropzone = this;

      submitButton.addEventListener('click', function(){
        myDropzone.processQueue();
      });

      this.on("complete", function(){
        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
        {
          var _this = this;
          _this.removeAllFiles();
        }
        load_images();
      });

    }

  };

  load_images();

  function load_images()
  {
    $.ajax({
      url:"{{ route('dropzone.fetch') }}",
success:function(data)
{
$('#uploaded_image').html(data);
}
})
}

$(document).on('click', '.remove_image', function(){
var name = $(this).attr('id');
$.ajax({
url:"{{ route('dropzone.delete') }}",
data:{name : name},
success:function(data){
load_images();
}
})
});

</script> --}}
