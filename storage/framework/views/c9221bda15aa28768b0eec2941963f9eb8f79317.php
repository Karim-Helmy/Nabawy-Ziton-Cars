

<?php $__env->startSection('content'); ?>


    

    <?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    

    <style>
        #alerting_div , #SubCategories_div , #Products_div , #others_div, #final_div{
            display: none;
        }
        #final_div {
            background: #eee;
            box-shadow: 0px 5px 0px #ddd;
        }

        #final_div li h3 {
            background: #ccc;
            padding: 5px 12px;
        }

    </style>
    <div class="section-full p-t50 bg-white content-inner-2 compare-car m-b50">
        <div class="container">

            <div class="row" id="alerting_div">
                <div class="col-xs-12 text-right">
                    <div class="alert alert-danger">
                        <h3> "لا يوجد منتجات لهذه الماركة بعد .." </h3>
                    </div>
                </div>
            </div>

            <div class="row">

                

                <div class="col-lg-4 col-md-6 col-xs-12 text-center" style="float:right">

                    <div class="icon-bx-wraper bx-style-1 p-a20 m-b30">

                        <form class="row" method="POST">

                            <?php echo e(csrf_field()); ?>


                            <h4 class="col-lg-12"> - أختر الماركة - </h4>

                            <div class="col-md-3 col-sm-3 col-lg-12 m-b20">
                                <select class="form-control" id="categories">
                                    <option>-أختر الماركة-</option>

                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php 
                                            $category->categories_id = Crypt::encrypt($category->categories_id);
                                         ?>

                                        <option value=" <?php echo e($category->categories_id); ?> "> <?php echo e($category->categories_name); ?> </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>

                            </div>

                            <div class="col-md-3 col-sm-3 col-lg-12">
                                <button class="site-button btn-block" id="nxt1" > - التالى - </button>
                            </div>

                        </form>
                    </div>

                </div>

                

                

                <div class="col-lg-4 col-md-6 col-xs-12 text-center" style="float: right" id="SubCategories_div">

                    <div class="icon-bx-wraper bx-style-1 p-a20 m-b30">

                        <form class="row" method="POST">

                            <?php echo e(csrf_field()); ?>


                            <h4 class="col-lg-12"> - أختر الموديل - </h4>

                            <div class="col-md-3 col-sm-3 col-lg-12 m-b20 form-group" id="SubCategories_form_div">
                                
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-12">
                                <button class="site-button btn-block" id="nxt2" > - التالى - </button>
                            </div>

                        </form>
                    </div>

                </div>

                


                

                <div class="col-lg-4 col-md-6 col-xs-12 text-center" style="float: right" id="Products_div">

                    <div class="icon-bx-wraper bx-style-1 p-a20 m-b30">

                        <form class="row" method="POST">

                            <?php echo e(csrf_field()); ?>


                            <h4 class="col-lg-12"> - أختر المنتج - </h4>

                            <div class="col-md-3 col-sm-3 col-lg-12 m-b20 form-group" id="Products_Form_div">
                                
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-12">
                                <button class="site-button btn-block" id="nxt3" > - التالى - </button>
                            </div>

                        </form>

                    </div>

                </div>

                


                

                <div class="col-lg-4 col-md-6 col-xs-12 text-center" style="float: right" id="others_div">

                    <div class="icon-bx-wraper bx-style-1 p-a20">

                        <div class="row">

                            <div class="col-md-3 col-sm-3 col-lg-12" id="others">

                                <div class="form-group">
                                    <select name="supplier" id="supplier" class="form-control ">
                                        <option value="Null"> - نوع الماركة - </option>
                                        <option>وكيل</option>
                                        <option>خليجى</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="starter" id="starter" class="form-control ">
                                        <option value="Null"> - قيمة المقدم - </option>
                                        <option value="40"> 40 %</option>
                                        <option value="50"> 50 %</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="years" id="years" class="form-control ">
                                        <option value="Null"> - عدد السنين - </option>
                                        <option value="3"> 3 سنوات </option>
                                        <option value="5"> 5 سنوات </option>
                                        <option value="7"> 7 سنوات </option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-3 col-sm-3 col-lg-12">
                                <button class="site-button btn-block" id="nxt4" > - التالى - </button>
                            </div>
                        </div>

                    </div>

                </div>

                

                
                <div class="col-lg-6 col-md-6 col-xs-12 text-center" style="float: right" id="final_div">

                    <div class="icon-bx-wraper bx-style-1 p-a20 m-b30">

                        <div class="row">

                            <div class=" col-md-12 col-sm-12 col-lg-12 m-b20 form-group text-right ">
                                <img
                                        src=" <?php echo e(asset('/')."public/front/assets/images/success-png-success-icon-image-23194-400.png"); ?> "
                                        alt=""
                                        style="height: 90px; margin: auto; display: block;"
                                >
                                <ul class="list-unstyled" style="margin-bottom: 0px;">
                                    <li>
                                        <h3>
                                            <strong style="font-weight: 800" id="car_price">

                                            </strong>
                                            : سعر السيارة
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            <strong style="font-weight: 800" id="installment_value">

                                            </strong>
                                            : قيمة القسط
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            <strong style="font-weight: 800" id="installing_years">

                                            </strong>
                                            : عدد شهور القسط
                                        </h3>
                                    </li>

                                </ul>

                            </div>

                            <div class="col-md-3 col-sm-3 col-lg-12">
                                <button class="btn-block btn btn-success"  onClick="document.location.reload(true)" > - بحث جديد - </button>
                            </div>

                        </div>

                    </div>

                </div>
                

            </div>
        </div>
        <?php echo $__env->make('front.layouts.brands', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('custome_js'); ?>

    <script>

        var products;

        $("#nxt1").on('click', function(e){
            e.preventDefault();

            var category_id = $('#categories option:selected').val();
            var _token = $("input[name=_token]").val();

            $.ajax({
                method: "POST",
                url: " <?php echo e(url('get_products_car_installment')); ?> " ,
                data: {
                    _token : _token ,
                    category__ID : category_id ,
                } ,
                success: function(data) {

                    if ( data.length != 0 ) {

                        $("#alerting_div").fadeOut('fast');

                        $("#nxt1").attr('disabled', 'disabled');
                        $("#nxt1").attr('class', 'btn btn-danger');
                        $("#categories").attr('disabled', 'disabled');
                        $("#SubCategories_div").fadeIn('slow');

                        var Html_options = "<select class='form-control' id='select-form-js'> <option> - أختر الموديل - </option> ";

                        data.map(function(e){
                            Html_options += '<option value = ' +e.id+ ' >'+ e.name +'</option>';
                        })

                        Html_options += "</select>";

                        $("#SubCategories_form_div").html(Html_options);

                    } else {

                        $("#alerting_div").fadeIn('slow');

                    }
                }
            })
        });

        $("#nxt2").click(function(e){

            e.preventDefault();
            var SubCategories_id = $("#select-form-js option:selected").val();
            var _token = $("input[name=_token]").val();

            $.ajax({
                method: "POST" ,
                url: "products_in_sub_category" ,
                data : {
                    id : SubCategories_id ,
                    _token: _token
                } ,
                success: function (data){
                    if ( data != '' ) {
                        products = data;

                        $("#alerting_div").fadeOut('fast');
                        $("#nxt2").attr('class', 'btn btn-danger');
                        $("#nxt2").attr('disabled', 'disabled');
                        $("#select-form-js").attr('disabled', 'disabled');

                        $("#Products_div").fadeIn('slow');

                        var products_content = "<select class='form-control' id='select-form-products-js'> <option> - أختر المنتج - </option>";

                        data.map(function(e){
                            products_content += '<option value ='+e.products_id+'>'+ e.products_name +'</option>';
                        })

                        products_content += "</select>";

                        $("#Products_Form_div").html(products_content);

                    } else {
                        $("#alerting_div").fadeIn('slow');
                        $("#alerting_div h3").text(' لا تتوفر موديلات حالية لهذه الماركة ');
                    }
                }
            })

        })

        $("#nxt3").click(function(){
            $("#alerting_div").fadeOut('fast');
            $("#nxt3").attr('class', 'btn btn-danger');
            $("#nxt3").attr('disabled', 'disabled');
            $("#select-form-products-js").attr('disabled', 'disabled');
            $("#others_div").fadeIn('slow');
        });

        $("#nxt4").click(function(){
            //
            var product_id = $("#select-form-products-js option:selected").val();
            // console.log(product_id);
            var the_products;
            products.map(function(e){
                if( e.products_id == product_id ) {
                    the_products = e ;
                }
            })

            //

            var starter     = parseInt($("#starter option:selected").val());
            var years       = parseInt($("#years option:selected").val());
            var the_price   = parseInt(the_products.products_price);
            var benifit     = parseInt("<?php echo e($benefit); ?>");
            var monthly_payment;

            // console.log(benifit);

            if ( $("#starter").val() != "Null" && $("#years").val() != "Null"  ) {
                
                $("#car_price").text(the_price);
                
                $("#installing_years").text(years*12);
    
                // قيمة المقدمة
                var starter_value = the_price*starter/100;
                // المبلغ الباقي 
                var remaining_value = the_price-starter_value;
                // الفايدة 
                var interest = remaining_value*(benifit/100)*years;
                // المبلغ الكلي بالفايدة
                var total_payment = remaining_value+interest;
                // قيمة القسط الشهرى
                var installment_value = total_payment/(years*12);
    
                $("#installment_value").text(parseInt(installment_value));
    
                $("#final_div").fadeIn('slow');
            } 
            else {
                alert('إختيار خاطئ برجاء اختيار قيم صحيحة'); 
            }
            
        })
        
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>