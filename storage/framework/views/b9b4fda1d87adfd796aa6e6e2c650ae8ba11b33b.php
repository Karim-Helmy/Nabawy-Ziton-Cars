

<?php $__env->startSection('content'); ?>



    <?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





<style>
    .table-head {
        background: #191f23;
    }
    .table-head th {
        color: #fff;
        padding: 10px;
        border-left: 1px solid #fff;
    }

    tr:nth-of-type(even) {
        background: #eee;
    }
  th {
        text-align: right!important
    }

    div.alert.alert-danger{
        display: none;
    }
    #loader {
        display: none;
    }
</style>

<div class="section-full p-t50 bg-white content-inner-2">

    <div class="container">                
                <div class="row">
                    <div class="col-xs-12 text-right" style="">
                        <div class="col-md-6 col-xs-12 col-md-offset-6">
                          
                            <div class="search-bx">
                                <h2>ابحث عن اسعار الماركات</h2>
                                <form action="">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                        <select id="category_id" class="form-control text-right" >
                                            <?php 
                                                $id = Crypt::encrypt(null);
                                             ?>
                                            <option value="<?php echo e($id); ?>">  </option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php 
                                                $category->categories_id = Crypt::encrypt($category->categories_id);
                                             ?>
                                                <option 
                                                    value=" <?php echo e($category->categories_id); ?> " 
                                                    class="form-group-lg text-right"
                                                    >
                                                    <?php echo e($category->categories_name); ?> 
                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </form>
                            </div>            
                        
                        </div>      
                    </div>

                    <div class="col-md-12 text-right" style="direction:rtl;">
                                  
                        <div class="icon-bx-wraper bx-style-1 m-b30" >
                            
                            <div class="img text-center" id="loader">
                                <img src=" <?php echo e(asset('/')."public/front/assets/images/lg.dual-ring-loader.gif"); ?> " alt="">
                            </div>

                            <div class="alert alert-danger">
                                <h3 id="result"></h3>
                            </div>
                            
                            <table class="table-dl table-col4 clearfix" id="cars_prices">
                          
                                <thead class="table-head">
                                    <th class="leftview"> الصورة </th>
                                    <th class="leftview"> المنتج </th>
                                    <th class="leftview"> الماركة </th>
                                    <th class="leftview"> تفاصيل القسط </th>
                                    <th class="leftview"> السعر </th>
                                    <th class="leftview"> أخر تعديل </th>
                                </thead>
                                

                                <tbody>

                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>

                                        <td>  
                                            <a data-fancybox-trigger="gallery" href="<?php echo e(asset('/').$product->products_image); ?>" data-fancybox="images"> 
                                                <img src=" <?php echo e(asset('/').$product->products_image); ?> " alt=" <?php echo e($product->categories_name); ?> " style="height: 60px!important;margin: auto;display: block;"> 
                                            </a> 
                                        </td>
                                    
                                        <td> 
                                            <?php echo e($product->products_name); ?>     
                                        </td>
                                    
                                        <td> 
                                            <?php echo e($product->categories_name); ?>     
                                        </td>
                                    
                                        <td>
                                            <button class="btn btn-success calculate_installment" value="<?php echo e($product->products_price); ?>" data-toggle="modal" data-target="#myModal"> تفاصيل القسط </button>
                                        </td>
                                    
                                        <td>  <?php echo e((int)$product->products_price); ?> جنية  </td>
                                    
                                        <td>
                                            <?php echo e(date('d M, Y', strtotime(($product->products_last_modified)))); ?>

                                        </td>
                                    
                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                                </tbody>
                            </table>

                            <?php echo e($products->links()); ?>


                            
                        </div>

                    </div>

                        <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header ">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title text-right" id="myModalLabel"> تفاصيل القسط </h4>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
        $('#category_id').on('change', function (e) {

            $("#cars_prices").fadeOut('fast', function(){
                $("div.alert.alert-danger").fadeOut('fast', function(){
                    $("#loader").fadeIn('slow');
                });                
            });
            
            
            var country_id = $("option:selected", this);
            var country_id_value = this.value;
            var _token = $("input[name=_token]").val();

            // console.log(country_id_value);
            

            $.ajax({

                method : "POST",
                url : " <?php echo e(url('single-brand-data')); ?> " , 
                data : {
                    _token : _token ,
                    category_id : country_id_value ,
                }, 
                success: function(data) {
                    
                if ( data.length != 0) {
                    $('#loader').fadeOut('fast');
                    $("#loader").fadeOut('fast', function(){
                        $("div.alert.alert-danger").fadeOut('slow', function(){
                            $("#cars_prices").fadeIn('slow');
                        });
                    });


                var html_content = 
                "<thead class=\"table-head\"> "+
                    "<th class=\"leftview\"> الصورة </th>" +
                    "<th class=\"leftview\"> المنتج </th>" + 
                    "<th class=\"leftview\"> الماركة </th>" + 
                    "<th class=\"leftview\"> السعر </th>" + 
                    "<th class=\"leftview\"> أخر تعديل </th>" + 
                "</thead>" ;
                   for (let index = 0; index < data.length; index++) {

                    //  Category Name = data[index].categories_name
                    //  product image = data[index].categories_image
                    //  product name = data[index].products_name
                    //  product prics  = data[index].products_price
                    //  last modified  = data[index].products_last_modified
                    // last modified in js format 

                    d = new Date(data[index].products_last_modified);

                    html_content +=

                    "<tr>" + 
                        
                        "<td>" +  
                            "<a "+ 
                            " href=" + "'" + "<?php echo e(asset('/')); ?>"+ data[index].categories_image + "'"+  
                            "target=" + "'_blank'" +
                            "data-fancybox-trigger=\"gallery\""+
                            "data-fancybox=\"images\""+
                            ">"+ 
                                "<img "+ 
                                "src= ' "+ data[index].categories_image + "'"+
                                "alt= ' " +data[index].categories_name + "'"+  
                                "style=" + "'height: 60px!important;margin: auto;display: block;'"+
                                ">"+ 
                            "</a>"+
                        "</td>"+

                        "<td>"+ 
                            data[index].products_name+    
                        "</td>"+

                        "<td>"+ 
                                data[index].categories_name+     
                        "</td>"+

                       /*  "<td>"+
                            "<button class=\"btn btn-success calculate_installment \">"+
                                "تفاصيل القسط "+
                            "</button>"+
                        "</td>"+ */

                        "<td>"+
                            data[index].products_price + " جنية "+
                        "</td>"+

                        "<td>"+
                            d +
                        "</td>"+

                    "</tr>"
                       
                   }

                   html_content += "</table>";

                    
                    $("#cars_prices").html(html_content);
                    
                   } else {

                    $('#loader').fadeOut('fast');

                    $("#loader").fadeOut('fast', function(){
                        $("#cars_prices").fadeOut('fast', function(){
                            $("div.alert.alert-danger").fadeIn('slow');
                        });
                    })
                    
                    $("#result").text(
                        "لا يوجد منتجات لهذه الماركة بعد .."
                    );

                   }
                   
                }

            })

        });

        function installment( products_price, years, starter = 0 , benifit ){

            products_price  = parseInt(products_price);
            years           = parseInt(years);
            starter         = parseInt(starter)/100;
            benifit         = parseInt(benifit)/100;

            var starter_value       =   products_price*starter;
            var remaining           =   products_price-starter_value;
            var interest            =   remaining*benifit*years;
            var total_price         =   starter_value+remaining+interest;
            var installment_value   =   (remaining+interest)/(years*12);

            return parseInt(installment_value);

        }


        $(".calculate_installment").click(function(){
            
            var products_price = $(this).attr('value');
           
            var benifit     = parseInt("<?php echo e($benefit); ?>");

            // 40% installment Starts
                // 3 years installment  
                    
                    var _3_40_I = installment( products_price , 3 , 40 , benifit );

                // 5 years installment

                    var _5_40_I = installment( products_price , 5 , 40 , benifit );

                // 7 years installment

                    var _7_40_I = installment( products_price , 7 , 40 , benifit );

            // 40% installment Ends

            // 50% installment Starts
                // 3 years installment

                    var _3_50_I = installment( products_price , 3 , 50 , benifit );

                // 5 years installment

                    var _5_50_I = installment( products_price , 5 , 50 , benifit );

                // 7 years installment

                    var _7_50_I = installment( products_price , 7 , 50 , benifit );

            // 50% installment Ends


            html_content_price = 
            "<table style=\"direction: rtl;\">" +
                "<thead>"+
                    "<th></th>"+
                    "<th> مقدم 40%  </th>"+
                    "<th> مقدم 50%  </th>"+
                "</thead>"+
                "<tbody>"+
                    "<tr>"+
                        "<td> 3 سنوات </td>"+
                        "<td id=\"_40_3\">" + _3_40_I + "</td>"+
                        "<td id=\"_50_3\"> "+  _3_50_I +" </td>"+
                    "</tr>"+
                   " <tr>"+
                        "<td> 5 سنوات </td>"+
                        "<td id=\"_40_5\">" + _5_40_I + "</td>"+
                        "<td id=\"_50_5\">" + _5_50_I +"</td>"+
                    "</tr>"+
                    "<tr>"+
                        "<td> 7 سنوات </td>"+
                        "<td id=\"_40_7\">"+ _7_40_I +"</td>"+
                        "<td id=\"_50_7\">"+ _7_50_I +"</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>"
            ;

            $(".modal-body").html(html_content_price);

        });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>