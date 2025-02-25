<?php
session_start();
if(!isset($_SESSION['carrito'])){
  header('Location: ./index.php');
}
$arreglo = $_SESSION['carrito'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 
    <form action="./thankyou.php" method="post">
      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12">
              <div class="border p-4 rounded" role="alert">
                Returning customer? <a href="#">Click here</a> to login
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Datos de Facturación</h2>
                <div class="p-3 p-lg-5 border">
                  <div class="form-group">
                    <label for="c_country" class="text-black">País <span class="text-danger">*</span></label>
                    <select id="c_country" class="form-control" name="country">
                      <option value="1">Seleccione un país</option>    
                      <option value="2">Bolivia</option>    
                      <option value="3">Argentina</option>    
                      <option value="4">Brasil</option>    
                      <option value="5">Uruguay</option>    
                      <option value="6">Paraguay</option>    
                      <option value="7">Chile</option>    
                      <option value="8">Colombia</option>    
                      <option value="9">Republica Dominicana</option>    
                    </select>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_fname" name="c_fname">
                    </div>
                    <div class="col-md-6">
                      <label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_lname" name="c_lname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_companyname" class="text-black">Nombre de Compañia </label>
                      <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Direccion">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_state_country" class="text-black">Estado / País <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                    </div>
                    <div class="col-md-6">
                      <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <div class="col-md-6">
                      <label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                    </div>
                    <div class="col-md-6">
                      <label for="c_phone" class="text-black">Telefono <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Numero de Telefono">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> ¿Crear una cuenta?</label>
                    <div class="collapse" id="create_an_account">
                      <div class="py-2">
                        <p class="mb-3">Cree una cuenta introduciendo la siguiente información. Si ya es cliente, inicie sesión en la parte superior de la página.</p>
                        <div class="form-group">
                          <label for="c_account_password" class="text-black">Contraseña de la cuenta</label>
                          <input type="password" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
                    <div class="collapse" id="ship_different_address">
                      <div class="py-2">

                        <div class="form-group">
                          <label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
                          <select id="c_diff_country" class="form-control">
                            <option value="1">Select a country</option>    
                            <option value="2">bangladesh</option>    
                            <option value="3">Algeria</option>    
                            <option value="4">Afghanistan</option>    
                            <option value="5">Ghana</option>    
                            <option value="6">Albania</option>    
                            <option value="7">Bahrain</option>    
                            <option value="8">Colombia</option>    
                            <option value="9">Dominican Republic</option>    
                          </select>
                        </div>


                        <div class="form-group row">
                          <div class="col-md-6">
                            <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                          </div>
                          <div class="col-md-6">
                            <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-md-12">
                            <label for="c_diff_companyname" class="text-black">Company Name </label>
                            <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-md-12">
                            <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
                          </div>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>

                        <div class="form-group row">
                          <div class="col-md-6">
                            <label for="c_diff_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                          </div>
                          <div class="col-md-6">
                            <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                          </div>
                        </div>

                        <div class="form-group row mb-5">
                          <div class="col-md-6">
                            <label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                          </div>
                          <div class="col-md-6">
                            <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
                          </div>
                        </div>

                      </div>

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="c_order_notes" class="text-black">Order Notes</label>
                    <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                  </div>

                </div>
              </div>
              <div class="col-md-6">

                <div class="row mb-5">
                  <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                    <div class="p-3 p-lg-5 border">
                      
                      <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                      <div class="input-group w-75">
                        <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                
                <div class="row mb-5">
                  <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">Tu Orden</h2>
                    <div class="p-3 p-lg-5 border">
                      <table class="table site-block-order-table mb-5">
                        <thead>
                          <th>Producto</th>
                          <th>Total</th>
                        </thead>
                        <tbody>
                        <?php
                          $total =0;
                          for($i=0;$i<count($arreglo);$i++){
                            $total = $total+ ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);
                          
                        ?>
                          <tr>
                            <td><?php echo $arreglo[$i]['Nombre']; ?></td>
                            <td>$<?php echo number_format($arreglo[$i]['Precio'], 2, '.', '') ; ?></td>
                          </tr>
                          
                          <?php
                            }
                          ?>
                          <tr>
                            <td>Total de Orden</td>
                            <td>$<?php echo number_format($total, 2, '.', '') ; ?></td>
                          </tr>
                        </tbody>
                      </table>

                      <div class="border p-3 mb-3">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Transferencia bancaria directa</a></h3>

                        <div class="collapse" id="collapsebank">
                          <div class="py-2">
                            <p class="mb-0">"Realiza tu pago directamente en nuestra cuenta bancaria. Utiliza tu ID de pedido como referencia de pago. Tu pedido no será enviado hasta que los fondos se hayan confirmado y reflejado en nuestra cuenta. Este método es ideal para quienes prefieren una transacción segura y verificable."</p>
                          </div>
                        </div>
                      </div>

                      <div class="border p-3 mb-3">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Pago con cheque</a></h3>

                        <div class="collapse" id="collapsecheque">
                          <div class="py-2">
                            <p class="mb-0">"Con el pago mediante cheque, podrás efectuar tu pago directamente a nuestra cuenta bancaria. Asegúrate de escribir el ID de tu pedido en el cheque como referencia. Ten en cuenta que el envío de tu pedido se realizará una vez que el cheque haya sido recibido y procesado por nuestro banco."</p>
                          </div>
                        </div>
                      </div>

                      <div class="border p-3 mb-5">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                        <div class="collapse" id="collapsepaypal">
                          <div class="py-2">
                            <p class="mb-0">"Disfruta de la conveniencia y seguridad al pagar con PayPal. Solo tienes que seleccionar PayPal como tu método de pago y serás redirigido a su plataforma para finalizar la transacción. Tu ID de pedido servirá como referencia. Con PayPal, tu pedido se procesará inmediatamente tras la confirmación del pago, ofreciéndote una experiencia de compra ágil y segura."</p>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Confirmar Pedido</button>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            
          </div>
          <!-- </form> -->
        </div>
      </div>
    </form>
    <?php include("./layouts/footer.php"); ?> 
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>