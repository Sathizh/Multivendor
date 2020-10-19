jQuery(document).ready(function () {
    jQuery('#product_name').keyup(function (e) {
        jQuery('#product_preview_name').text(this.value);
    });
    jQuery('#product_price').keyup(function (e) {
        jQuery('#product_preview_price').text("₹ "+this.value+".00");
    });
    jQuery('#product_brand').keyup(function (e) {
        jQuery('#product_preview_brand').html("<b>Brand: </b>"+this.value);
    });
    jQuery('#product_discription').keyup(function (e) {
        jQuery('#product_preview_discription').html("<b>Discription: </b>"+this.value);
    });
    jQuery('#field_empty_warning').hide();
    jQuery("#add_product").click(function (e) {
        if (jQuery('#product_name').val() == ""
            || jQuery('#product_price').val() == ""
            || jQuery('#product_qty').val() == ""
            || jQuery('#product_weight').val() == ""
            || jQuery('#product_discription').val()==""
        )
        {
            jQuery('div#b_d').scrollTop(0);
            jQuery('#b_d').trigger( "click" );
            jQuery('#field_empty_warning').trigger( "click" );
        }
        else
            jQuery('#addd_product').submit();

    });
});
