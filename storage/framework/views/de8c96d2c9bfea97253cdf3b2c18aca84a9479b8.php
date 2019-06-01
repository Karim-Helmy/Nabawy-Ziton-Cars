<?php $__env->startSection('content'); ?>
<style>
    #brand .search-content {
        margin: 25px auto;
    }
    .product-brand .search-content{
        padding: 0px;
    }
</style>
<?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="section-full content-inner bg-white">
    <div class="container">
        <div class="row">


            <!-- left part start -->

            <div class="col-sm-8 col-md-8 col-lg-9">

                <div class="row">
                    <img 
                        src="<?php echo e(asset('/')); ?>public/front/assets/images/lg.dual-ring-loader.gif" 
                        style="display: none;margin: auto;"
                        id="loader">
                            
                    <div id="masonry" class="dlab-blog-grid-3 used-car-info">
                        
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="dlab-feed-list m-b30 text-left">
                                <div class="dlab-media"> 
                                    <img 
                                        src="<?php echo e(asset('/').$product->products_image); ?>" 
                                        alt="<?php echo e($product->products_name); ?>"
                                        style="height: 220px;">
                                </div>
                                <div class="dlab-info text-left">
                                    <h4 class="dlab-title"><a href="<?php echo e(url("brands/".Crypt::encrypt($product->parent_id)."/"."product/".Crypt::encrypt($product->products_id))); ?>">
                                        <?php echo e($product->products_name); ?> 
                                    </a></h4>
                                    <p class="dlab-price"><span class="text-black">
                                        <?php echo e($product->products_price); ?>

                                    </span></p>
                                    <div class="icon-box-btn text-center m-tb20">
                                        <ul class="clearfix">
                                            <li><?php echo e($product->products_model); ?></li>
                                            <li><?php echo e($product->products_viewed); ?> مشاهدة</li>
                                            <li><a href="<?php echo e(url("brands/".Crypt::encrypt($product->parent_id))); ?>"><?php echo e($product->categories_name); ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="view-seller-dtl">
                                        <a href="<?php echo e(url("brands/".Crypt::encrypt($product->parent_id)."/"."product/".Crypt::encrypt($product->products_id))); ?>" class="site-button btn-block"> - مشاهدة المنتج - </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        <?php echo e($products->links()); ?>


                        

                    </div>
                    
                </div>

            </div>
            
            <!-- left part END -->

            <!-- Side bar start -->
            <div class="col-sm-4 col-md-4 col-lg-3">
                <aside  class="side-bar">
                    <div class="widget recent-posts-entry">
                        <h4 class="widget-title" style="text-align: right;"> بحث متقدم </h4>
                        <div class="dlab-accordion advanced-search toggle" id="accordion1">

                            
                            <div class="panel text-right">
                                
                                <div class="acod-head">
                                    <h5 class="acod-title"> 
                                        <a data-toggle="collapse"  href="#brand" class="collapsed text-right" >
                                            الماركة
                                        </a>
                                    </h5>
                                </div>

                                <div id="brand" class="acod-body collapse in">
                                    <div class="acod-content">

                                        <div class="product-brand" id="searchable-area">
                                            <form method="POST">

                                                <?php echo e(csrf_field()); ?>


                                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <div class="search-content">
                                                        <input id="brand<?php echo e($key); ?>" type="radio" value="<?php echo e($brand->id); ?>" name="brand">
                                                        <label for="brand<?php echo e($key); ?>" class="search-content-area"><?php echo e($brand->name); ?> </label>
                                                    </div>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </form>    
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>

              

                  
                            
                        </div>
                    </div>
                </aside>
            </div>
            <!-- Side bar END -->

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('custome_js'); ?>

<script>
    // fetching ajax data function
    function fetch_result(res)
    {
        var fetch_content;
        res.map(function(e)
        {
            fetch_content += "<div class=\"post card-container col-lg-6 col-md-6 col-sm-6 col-xs-\">"+
                            "<div class=\"dlab-feed-list m-b30 text-left\">"+
                                "<div class=\"dlab-media\">"+
                                    "<img "+
                                        "src=\" <?php echo e(asset('/')); ?>"+e.products_image+"\" "+
                                    " alt=\" "+e.products_name+" \" "+
                                    "style=\" \">"+
                                "</div>"+
                                "<div class=\"dlab-info text-left\">"+
                                    "<h4 class=\"dlab-title\">"+
                                    "<a href=\" <?php echo e(url('/')); ?>/brands/<?php echo e(Crypt::encrypt('')); ?>"+e.parent_id+"/product/<?php echo e(Crypt::encrypt('.); ?>"e.products_id"<?php echo e(.')); ?> \">"+
                                        e.products_name+
                                    "</a></h4>"+
                                    "<p class=\"dlab-price\"><span class=\"text-black\">"+
                                        e.products_price +
                                    "</span></p>"+
                                    "<div class=\"icon-box-btn text-center m-tb20\">"+
                                        "<ul class=\"clearfix\">"+
                                            "<li>"+e.products_model+"</li>"+
                                            "<li>"+e.products_viewed +" مشاهدة</li>"+
                                            "<li><a href=\" \">"+e.categories_name+"</a></li>"+
                                    " </ul>"+
                                    "</div>"+
                                    "<div class=\"view-seller-dtl\">"+
                                        "<a href=\" \" class=\"site-button btn-block\"> - مشاهدة المنتج - </a>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                        "</div>"      
        });
        return fetch_content;
    }
        
    $("#brand .search-content").click(function(){

        $("#masonry").html('');
        
        $("#loader").css('display', 'block');
        
        $("#loader").fadeIn('slow');
        
        var id = $("input[name=brand]:checked").val();
        var _token = $("input[type=hidden]").val();
        var res = '';
        
        $.ajax({
            method: "POST", 
            url: "<?php echo e(url('get_categories')); ?>", 
            data: {
                _token: _token, 
                id: id
            }, 
            success:function( data ){
                var content;
                if ( data != '' )
                {
                    content = fetch_result(data);
                } else { 
                    content = "<div class=\"col-xs-12 text-right\">"+
                        "<div class=\"alert alert-danger\">"+
                            "<h3> لا يوجد منتجات لهذه الماركة بعد .. </h3>"+
                        "</div>"+
                    "</div>"
                }
                $("#loader").fadeOut('fast');
                $("#masonry").html(content);
            }
        })


    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>