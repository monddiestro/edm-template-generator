<script>

    $('#btn_generate').on('click',function(){

        var header_title = $('#header_title').val();
        var header_img = $('#header_img').val();
        var header_desc = $('#header_desc').val();
        var header_url = $('#header_url').val();
        var news_one_img = $('#news_one_img').val();
        var news_one_title = $('#news_one_title').val();
        var news_one_desc = $('#news_one_desc').val();
        var news_one_url = $('#news_one_url').val();
        var news_two_img = $('#news_two_img').val();
        var news_two_title = $('#news_two_title').val();
        var news_two_desc = $('#news_two_desc').val();
        var news_two_url = $('#news_two_url').val();
        var news_three_title = $('#news_three_title').val();
        var news_three_desc = $('#news_three_desc').val();
        var news_three_url = $('#news_three_url').val();
        var features_one_img = $('#features_one_img').val();
        var features_one_title = $('#features_one_title').val();
        var features_one_desc = $('#features_one_desc').val();
        var features_one_url = $('#features_one_url').val();
        var features_two_title = $('#features_two_title').val();
        var features_two_desc = $('#features_two_desc').val();
        var features_two_url = $('#features_two_url').val();
        var tips_one_img = $('#tips_one_img').val();
        var tips_one_title = $('#tips_one_title').val();
        var tips_one_desc = $('#tips_one_desc').val();
        var tips_one_url = $('#tips_one_url').val();
        var tips_two_title = $('#tips_two_title').val();
        var tips_two_desc = $('#tips_two_desc').val();
        var tips_two_url = $('#tips_two_url').val();

        var base_url = "<?php echo base_url('welcome/news_template') ?>";
        var url = base_url + '?header_title='+header_title+'&header_img='+header_img+'&header_desc='+header_desc+'&header_url='+header_url+'&news_one_img='+news_one_img+'&news_one_title='+news_one_title+'&news_one_desc='+news_one_desc+'&news_one_url='+news_one_url+'&news_two_img='+news_two_img+'&news_two_title='+news_two_title+
        '&news_two_desc='+ news_two_desc+'&news_two_url='+news_two_url+'&news_three_title='+news_three_title+'&news_three_desc='+news_three_desc+'&news_three_url='+news_three_url+'&features_one_img='+features_one_img+'&features_one_title='+features_one_title+'&features_one_desc='+features_one_desc+'&features_one_url='+features_one_url+
        '&features_two_title='+features_two_title+'&features_two_desc='+features_two_desc+'&features_two_url='+features_two_url+'&tips_one_img='+tips_one_img+'&tips_one_title='+tips_one_title+'&tips_one_desc='+tips_one_desc+'&tips_one_url='+tips_one_url+'&tips_two_title='+tips_two_title+
        '&tips_two_desc='+tips_two_desc+'&tips_two_url='+tips_two_url;

        window.location = url;
    });

</script>