<style>
    #budgetDiv, #brandDiv, #used_budgetDiv, #used_modelDiv 
    {
        display: none;
        margin-bottom: 30px;
    }
</style>
<div class="form-slide">
    <div class="container">
            <form class="search-car" method="post" style=" ">
                <?php echo e(csrf_field()); ?>

                <div class="form-head" style="border-bottom-left-radius: 25px;padding-bottom: 10px;                ">
                    <h2>ابحث عن السيارة المناسبة</h2>
                </div>
                <!-- TABS -->
                <div class="form-find-area">
                    
                    <ul class="nav theme-tabs">

                        <li role="presentation" class="active">
                            <a data-toggle="tab"  aria-controls="new-car"  href="#new-car" id="new-car-anchor"> 
                                جديد 
                            </a>
                        </li>
                        
                        <li role="presentation" >
                            <a data-toggle="tab" aria-controls="popular" href="#used-car" id="used-car-anchor">
                                مستعمل
                            </a>
                        </li>
                        
                    </ul>

                    <div class="tab-content">
                        <!-- NEW CAR -->
                        <div id="new-car"  class="tab-pane active clearfix">
                            <ul class="nav text-center check-nav">
                                <li>
                                    <input id="radio1" type="radio" name="new_search"  value="budget"/>
                                    <label for="radio1">السعر</label>
                                </li>
                                <li>
                                    <input id="radio2" type="radio" name="new_search" value="brand"/>
                                    <label for="radio2">الموديل</label>
                                </li>
                            </ul>
                            <div  id="budgetDiv">
                                <select name="new_price" id="new_price" class="form-control">
                                    <option> - أختر السعر - </option>
                                    <option value="less_than_500_k"> أقل من 500,000 </option>
                                    <option value="_1kk_500k"> من 500,000 إلي 1,000,000 </option>
                                    <option value="more_than_1_kk"> أكثر من 1,000,000 </option>
                                </select>
                            </div>

                            <div  id="brandDiv">
                                <select name="new_brand_select" id="new_brand_select" class="form-control">
                                    <option> - أختر الماركة - </option>
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e(Crypt::encrypt($category->id)); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="input-group">

                                <a class="site-button button-lg btn-block anchor_point_search" >بحث</a>

                            </div>

                            <div class="input-group text-center">

                                <a class="site-button-link" href="<?php echo e(route('advanced_search')); ?>"><i class="fa fa-angle-left"></i>بحث متقدم</a>
                        
                            </div>
                            
                        </div>

                        <!-- USED CAR -->
                        <div id="used-car"  class="tab-pane clearfix">

                            <ul class="nav text-center check-nav">
                                <li>
                                    <input id="radio3" type="radio" name="used_search"  value="used_budget"/>
                                    <label for="radio3">بالسعر</label>
                                </li>
                                <li>
                                    <input id="radio4" type="radio" name="used_search" value="used_model"/>
                                    <label for="radio4">بالموديل</label>
                                </li>
                            </ul>

                            <div id="used_budgetDiv">

                                <div class="input-group">
                                    <select name="used_price" id="used_price" class="form-control">
                                        <option> - أختر السعر - </option>
                                        <option value="less_than_500_k"> أقل من 500,000 </option>
                                        <option value="_1kk_500k"> من 500,000 إلي 1,000,000 </option>
                                        <option value="more_than_1_kk"> أكثر من 1,000,000 </option>
                                    </select>
                                </div>

                            </div>
                
                            <div  id="used_modelDiv">

                                <div class="input-group">

                                    <select name="used_brand_select" id="used_brand_select" class="form-control">
                                        <option> - أختر الماركة - </option>
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e(Crypt::encrypt($category2->id)); ?>"><?php echo e($category2->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                </div>

                            </div>
                            
                            <div class="input-group">
                                <a class="site-button button-lg btn-block anchor_point_search">بحث</a>
                            </div>

                            <div class="input-group text-center">
                                <a 
                                    class="site-button-link anchor_submit" 
                                    href="<?php echo e(route('advanced_search')); ?>">
                                    <i 
                                    class="fa fa-angle-left"></i>
                                    بحث متقدم
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <?php $__env->startSection('custome_js'); ?>
        <script>
            // ============================================================================
            // تحديد حالة السيارة
            // ============================================================================
            var anchor;
            $("a#new-car-anchor").click(function(){
                anchor = "<?php echo e(route('advanced_search')); ?>?status=new&&";
                $("#radio1, #radio2, #radio3, #radio4").prop('checked', false);
            });
            $("a#used-car-anchor").click(function(){
                anchor = "<?php echo e(route('advanced_search')); ?>?status=used&&";
                $("#radio1, #radio2, #radio3, #radio4").prop('checked', false);
            });
            // ============================================================================
            //  تحديد نوعية البحث
            // ============================================================================
            $("#radio1").click(function(){
                anchor = "<?php echo e(route('advanced_search')); ?>?status=new&&searchBy=price&&";
                $("#brandDiv").fadeOut('fast', function(){
                    $("#budgetDiv").fadeIn('fast');
                })
            });
            $("#radio2").click(function(){
                anchor = "<?php echo e(route('advanced_search')); ?>?status=new&&searchBy=brand&&";
                $("#budgetDiv").fadeOut('fast', function(){
                    $("#brandDiv").fadeIn('fast');
                });
            });
            $("#radio3").click(function(){
                anchor = "<?php echo e(route('advanced_search')); ?>?status=used&&searchBy=price&&";
                $("#used_modelDiv").fadeOut('fast', function(){
                    $("#used_budgetDiv").fadeIn('fast');
                });
            });
            $("#radio4").click(function(){
                anchor = "<?php echo e(route('advanced_search')); ?>?status=used&&searchBy=brand&&";
                $("#used_budgetDiv").fadeOut('fast', function(){
                    $("#used_modelDiv").fadeIn('fast');
                });
            });
            // ============================================================================
            //  تحديد البحث
            // ============================================================================
            $("#new_price").on('change', function(){
                var value = $("option:selected", $(this)).val();
                anchor = "<?php echo e(route('advanced_search')); ?>?status=new&&searchBy=price&&value="+value;
            });
            $("#new_brand_select").on('change', function(){
                var value = $("option:selected", $(this)).val();
                anchor = "<?php echo e(route('advanced_search')); ?>?status=used&&searchBy=brand&&value="+value;
            });
            $("#used_price").on('change', function(){
                var value = $("option:selected", $(this)).val();
                anchor = "<?php echo e(route('advanced_search')); ?>?status=used&&searchBy=price&&value="+value;
            });
            $("#used_brand_select").on('change', function(){
                var value = $("option:selected", $(this)).val();
                anchor = "<?php echo e(route('advanced_search')); ?>?status=used&&searchBy=brand&&value="+value;
            });
            // ============================================================================
            // changing the href 
            // ============================================================================
            function add_href() { $(".anchor_point_search").attr('href', anchor); }
            $(document).on('click', add_href);
            // ============================================================================            
        </script>
    <?php $__env->stopSection(); ?>