<div class="container" style="margin-top:100px">
    <div class="row justify-content-md-center">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5>Select template to use</h5>
                </div>
                <div class="card-body">
                    <ul class=" list-unstyled">
                        <li>                    
                            <a href="#template" data-toggle="collapse">Promo Template</a>
                        </li>
                            <ul id="template" class="collapse list-unstyled">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('welcome/promo_template') ?>">New Cars Promo Template</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('welcome/used_promo_template') ?>">Used Cars Promo Template</a>
                                </li>
                            </ul>
                        <li>
                            <a  href="<?php echo base_url('welcome/news_template') ?>">News Template</a>
                        </li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</div>