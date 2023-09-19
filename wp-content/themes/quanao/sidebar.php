<div class="border-bottom mb-4 pb-4">
    <h5 class="font-weight-semi-bold mb-4">LỌC SẢN PHẨM</h5>
    <form action="#" method="POST">
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <div class="list-group">

                <h5>Danh mục sản phẩm</h5>
                <?php
                    $pd = array(
                        'type' => 'product',
                        'child_of' =>0,
                        'parent'  =>0,
                        'hide_empty' =>0,
                        'taxonomy' =>'product_cat',
                        'number' =>5
                    );
                    $categories = get_categories($pd);
                    foreach($categories as $sp){ ?>
                <a class="p-1" href="<?php 
                                    echo get_term_link($sp->slug,'product_cat');
                                ?>"><?php 
                                // echo get_term_link($sp->slug,'product_cat');
                                echo $sp->name; 
                            ?></a>

                <?php   
                    }
                ?>
            </div>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="price-2">
            <label class="custom-control-label" for="price-2">$100 - $200</label>
            <span class="badge border font-weight-normal">295</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="price-3">
            <label class="custom-control-label" for="price-3">$200 - $300</label>
            <span class="badge border font-weight-normal">246</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="price-4">
            <label class="custom-control-label" for="price-4">$300 - $400</label>
            <span class="badge border font-weight-normal">145</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
            <input type="checkbox" class="custom-control-input" id="price-5">
            <label class="custom-control-label" for="price-5">$400 - $500</label>
            <span class="badge border font-weight-normal">168</span>
        </div>
    </form>
</div>

<div class="border-bottom mb-4 pb-4">
    <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
    <form>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" checked id="color-all">
            <label class="custom-control-label" for="price-all">All Color</label>
            <span class="badge border font-weight-normal">1000</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="color-1">
            <label class="custom-control-label" for="color-1">Black</label>
            <span class="badge border font-weight-normal">150</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="color-2">
            <label class="custom-control-label" for="color-2">White</label>
            <span class="badge border font-weight-normal">295</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="color-3">
            <label class="custom-control-label" for="color-3">Red</label>
            <span class="badge border font-weight-normal">246</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="color-4">
            <label class="custom-control-label" for="color-4">Blue</label>
            <span class="badge border font-weight-normal">145</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
            <input type="checkbox" class="custom-control-input" id="color-5">
            <label class="custom-control-label" for="color-5">Green</label>
            <span class="badge border font-weight-normal">168</span>
        </div>
    </form>
</div>

<div class="mb-5">
    <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
    <form>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" checked id="size-all">
            <label class="custom-control-label" for="size-all">All Size</label>
            <span class="badge border font-weight-normal">1000</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="size-1">
            <label class="custom-control-label" for="size-1">XS</label>
            <span class="badge border font-weight-normal">150</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="size-2">
            <label class="custom-control-label" for="size-2">S</label>
            <span class="badge border font-weight-normal">295</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="size-3">
            <label class="custom-control-label" for="size-3">M</label>
            <span class="badge border font-weight-normal">246</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="size-4">
            <label class="custom-control-label" for="size-4">L</label>
            <span class="badge border font-weight-normal">145</span>
        </div>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
            <input type="checkbox" class="custom-control-input" id="size-5">
            <label class="custom-control-label" for="size-5">XL</label>
            <span class="badge border font-weight-normal">168</span>
        </div>
    </form>
</div>