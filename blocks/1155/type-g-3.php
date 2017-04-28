<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <!--Ket Noi File Less -->
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/type-g-3.less', 'css/type-g-3.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-3.css">

    </head>

    <body>
        <header>
            <div class="type-g-3">
                <!--Begin Header Top-->
                <div class="container">

                    <div class=" col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Billing</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label for="cardNumber">Invoice ID: 2016MM-ID</label>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><img class="pull-right">Payment Details <img src="images/accepted_c22e0.png"></h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" >
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="cardNumber">CARD NUMBER</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"  placeholder="Valid Card Number" required autofocus data-stripe="number" />
                                                    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                </div>
                                            </div>                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 col-md-7">
                                            <div class="form-group">
                                                <label for="expMonth">EXPIRATION DATE</label>
                                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                                    <input type="text" class="form-control"  placeholder="MM" required data-stripe="exp_month" />
                                                </div>
                                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                                    <input type="text" class="form-control"  placeholder="YY" required data-stripe="exp_year" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-md-5 pull-right">
                                            <div class="form-group">
                                                <label for="cvCode">CV CODE</label>
                                                <input type="password" class="form-control"  placeholder="CV" required data-stripe="cvc" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="couponCode">COUPON CODE</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>                        
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn btn-success btn-lg btn-block" type="submit">Submit Payment</button>
                                        </div>
                                    </div>
                                    <div class="row" style="display:none;">
                                        <div class="col-xs-12">
                                            <p class="payment-errors"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--End Header Top-->

        </header>
        

    </body>
</html>