<script>

    $('#btn_generate').on('click',function(){
        var header_title = $('#header_title').val();
        var header_img = $('#header_img').val();
        var header_url = $('#header_url').val();
        var img_one = $('#promo_img_one').val();
        var title_one = $('#promo_title_one').val();
        var desc_one = $('#promo_desc_one').val();
        var url_one = $('#promo_url_one').val();
        var img_two = $('#promo_img_two').val();
        var title_two = $('#promo_title_two').val();
        var desc_two = $('#promo_desc_two').val();
        var url_two = $('#promo_url_two').val();
        var img_three = $('#promo_img_three').val();
        var title_three = $('#promo_title_three').val();
        var desc_three = $('#promo_desc_three').val();
        var url_three = $('#promo_url_three').val();
        
        var base_url = "<?php echo base_url('welcome/used_promo_template') ?>"
        var url = base_url+'?header_title='+header_title+'&header_img='+header_img+'&header_url='+header_url+'&img_one='+img_one+'&title_one='+title_one+'&desc_one='+desc_one+'&url_one='+url_one+'&img_two='+img_two+'&title_two='+title_two+'&desc_two='+desc_two+'&url_two='+url_two+'&img_three='+img_three+'&title_three='+title_three+'&desc_three='+desc_three+'&url_three='+url_three;
        window.location = url;
    });

</script>