<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = $model->title;
$categoriesName = [];
if (!empty($model->dealCategories)) {
    foreach ($model->dealCategories as $dc) {
        $categoriesName[] = $dc->category->name;
    }
}
?>
<section class="pdb-100 pdt-70 solitude-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-4">
                <div class="single-product-wrapper">
                    <div class="single-product-content" style="margin-top: 0px;">
                        <div class="header-entry">
                            <div class="product-title" itemprop="name">
                                <h3><?= $model->title ?></h3>
                            </div>
                        </div> 
                        <div class="single-product-desc">
                            <p><?= $model->content; ?></p>
                        </div> 
                    </div> 
                </div> 

                <div class="subscribe-section">
                    <div class="subscribe-section-bg">
                        <div class="subscribe-header text-center">
                            <span>SUBSCRIBE US</span>
                            <h2>Get Amazing Cupons Code & Offers Everyday</h2>
                        </div> 
                        <form class="subscribe-form mailchimp subscribe-input" method="post">
                            <div class="clearfix">
                                <div class="input-field mb-20">
                                    <label class="sr-only" for="email">Email</label>
                                    <input id="subscribeEmail" type="email" name="subscribeEmail" class="validate form-control" placeholder="jon@example.com">
                                </div>
                                <button type="submit" class="btn btn-block btn-primary submit-btn">Yes! let’s so this</button>
                            </div>

                            <p class="subscription-success"></p>
                        </form>
                    </div>
                </div> 
            </div> 
            <div class="col-md-4 col-md-pull-8">
                <div class="tt-sidebar">
                    <div class="widget item-price-widget text-center">
                        <div class="item-from-buy">
                            <a href="<?= $model->destination_url; ?>" class="btn btn-primary btn-lg buy-from-amazon"><i class="fa fa-asterisk"></i>Redeem Offer</a>
                        </div>
                    </div> 
                    <div class="widget product-overview mt-30">
                        <h5>Overview</h5>
                        <div class="product-over-view-details">
                            <p><span>Store</span><img src="<?= $store->store_logo ?>" alt="<?= $store->name ?>"/></p>
                            <p><span>Categories</span><?php echo implode(',', $categoriesName); ?></p>
                            <p><span>Compatibility</span><?= $model->customer_restriction; ?></p>
                            <p><span>End Date</span><?= date('F j Y', strtotime($model->end_date)); ?></p>
                        </div>
                    </div>  
                </div> 
            </div> 
        </div> 
    </div>
</section>