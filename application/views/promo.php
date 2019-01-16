<div class="container" style="margin-top:30px">
    <div class="row justify-content-md-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h5>Promo Template</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                        <div class="form-group">
                                <label for="">Header Title</label>
                                <input id="header_title" type="text" class="form-control" placeholder="Title"/>
                            </div>
                            <div class="form-group">
                                <label for="">Header Image</label>
                                <input id="header_img" type="text" class="form-control" placeholder="Image URL"/>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 1 Image</label>
                                <input id="promo_img_one" type="text" class="form-control" placeholder="Image URL"/>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 1 Title</label>
                                <input id="promo_title_one" type="text" class="form-control" placeholder="Title"/>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 1 Description</label>
                                <textarea id="promo_desc_one" class="form-control" placeholder="Short Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 1 URL</label>
                                <input id="promo_url_one" type="text" class="form-control" placeholder="Promo URL"/>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 2 Image</label>
                                <input id="promo_img_two" type="text" class="form-control" placeholder="Image URL"/>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 2 Title</label>
                                <input id="promo_title_two" type="text" class="form-control" placeholder="Title"/>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 2 Description</label>
                                <textarea id="promo_desc_two" class="form-control" placeholder="Short Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 2 URL</label>
                                <input id="promo_url_two" type="text" class="form-control" placeholder="Promo URL"/>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 3 Image</label>
                                <input id="promo_img_three" type="text" class="form-control" placeholder="Image URL"/>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 3 Title</label>
                                <input id="promo_title_three" type="text" class="form-control" placeholder="Title"/>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 3 Description</label>
                                <textarea id="promo_desc_three" class="form-control" placeholder="Short Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Promo 3 URL</label>
                                <input id="promo_url_three" type="text" class="form-control" placeholder="Promo URL"/>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="">Generated Template</label>
                                <textarea name="" id="" rows="50" class="form-control" ><?php echo $template ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button id="btn_generate" class="btn btn-primary">Generate</button>
                </div>
            </div>
        </div>
    </div>
</div>