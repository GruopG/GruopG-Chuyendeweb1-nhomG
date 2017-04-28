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
        $less->compileFile('./less/type-g-4.less', 'css/type-g-4.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-4.css">

    </head>
    <div class="type-g-4">
            <div class="container">
                <div class="centered title"><h1>Welcome to our checkout.</h1></div>
                <div class="col-sm-6">
                    <div class="tab-content">
                        <div id="stripe" class="tab-pane fade in active">
                            <br>
                            <div class='form-row'>
                                <div class='form-group required'>
                                    <div class='error form-group hide'>
                                        <div class='alert-danger alert'>
                                            Please correct the errors and try again.
                                        </div>
                                    </div>
                                    <label class='control-label'>Name on Card</label>
                                    <input class='form-control' size='4' type='text'>
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class='form-group card required'>
                                    <label class='control-label'>Card Number</label>
                                    <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class='form-group card required'>
                                    <label class='control-label'>Billing Address</label>
                                    <input autocomplete='off' class='form-control' size='20' type='text'>
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class='form-group cvc required'>
                                    <label class='control-label'>CVC</label>
                                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                                <div class='form-group expiration required'>
                                    <label class='control-label'>Expiration</label>
                                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='form-group expiration required'>
                                    <label class='control-label'>Year</label>
                                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class='form-group'>
                                    <label class='control-label'></label>
                                    <button class='form-control btn btn-primary' type='submit'> Continue →</button>
                                    </form>    
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>   
                <div class="col-sm-6">
                    <label class='control-label'></label><!-- spacing -->
                    <div class="alert alert-info">Please choose your method of payment and hit continue. You will then be sent down to pay using your selected payment option.</div>
                    <br>
                    <div class="btn-group-vertical btn-block">
                        <a class="btn btn-default" data-toggle="tab" href="#stripe">Stripe/Credit Card</a>
                        <a class="btn btn-default" data-toggle="tab" href="#paypal">PayPal</a>
                    </div>
                    <br><br><br>
                    <div class="jumbotron jumbotron-flat">
                        <div class="center"><h2><i>BALANCE DUE:</i></h2></div>
                        <div class="paymentAmt">$100</div>
                    </div>
                    <br><br><br>
                </div>
            </div>
    </div>

</body>
</html>