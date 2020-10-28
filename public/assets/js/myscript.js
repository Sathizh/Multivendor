jQuery(document).ready(function () {
    jQuery('#product_name').keyup(function (e) {
        jQuery('#product_preview_name').text(this.value);
    });
    jQuery('#product_price').keyup(function (e) {
        jQuery('#product_preview_price').text("₹ " + this.value + ".00");
    });
    jQuery('#product_brand').keyup(function (e) {
        jQuery('#product_preview_brand').html("<b>Brand: </b>" + this.value);
    });
    jQuery('#product_weight').keyup(function (e) {
        jQuery('#product_preview_weight').html(" " + this.value);
    });
    jQuery('#product_measur').change(function (e) {
        jQuery('#product_preview_measur').html(this.value);
    });
    jQuery('.cke_editable').change(function (e) {
        var desc = CKEDITOR.instances['discription'].getData();
        console.log(desc);
        jQuery('#product_preview_discription').html("<b>Discription: </b>" + this.value);
    });
    jQuery('#product_status').change(function (e) {
        if (this.value == "In Stock")
            jQuery('#product_preview_status').html(this.value).css("color", 'green');
        else if (this.value == "Out of Stock")
            jQuery('#product_preview_status').html(this.value).css("color", 'red');
        else
            jQuery('#product_preview_status').html(this.value).css("color", '#ffc107');
    });
    jQuery('#field_empty_warning').hide();
    jQuery("#add_product").click(function (e) {
        if (jQuery('#product_name').val() == ""
            || jQuery('#product_price').val() == ""
            || jQuery('#product_qty').val() == ""
            || jQuery('#product_weight').val() == ""
        ) {
            // jQuery('#product_name').scrollTop("10px");
            jQuery('#scroll_top').trigger("click");
            jQuery('#b_d').trigger("click");
            jQuery('#field_empty_warning').trigger("click");
        }
        else {
            let disc = (CKEDITOR.instances['product_preview_discription']).getData();
            jQuery('#product_discription').attr("value", disc)

            jQuery('#addd_product').submit();
        }

    });
    jQuery(document).ready(function () {

        jQuery('input[type="file"]').change(function (e) {

            // alert(e.target.files[0].name)
            var fileName = "";
            for (var i = 0; i < (e.target.files).length; i++) {
                fileName += " ," + e.target.files[i].name;
            }
            fileName = e.target.files[0].name;

            // console.log(e.target.files.length)
            for (var i = 0; i < e.target.files.length; i++) {
                // console.log(i + e.target.files.length)


                jQuery('.product_preview_image_slider')[i].href = (window.URL ? URL : webkitURL).createObjectURL(this.files[i]);
                jQuery('.product_preview_image')[i].src = (window.URL ? URL : webkitURL).createObjectURL(this.files[i]);
                jQuery('.product_preview_image_thumb')[i].src = (window.URL ? URL : webkitURL).createObjectURL(this.files[i]);
            }
            // jQuery('#label1').html(fileName);
            // jQuery('.product_preview_image')[0].src=(window.URL ? URL : webkitURL).createObjectURL(this.files[0]);
            // jQuery('.product_preview_image')[1].src=(window.URL ? URL : webkitURL).createObjectURL(this.files[0]);
        });
    });

});
