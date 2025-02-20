<?php
  session_start();
  include './php/conexion.php';

  if(isset($_GET['id']) && isset($_GET['cantidad'])){
    $idProducto = $_GET['id'];
    $cantidad = (int)$_GET['cantidad'];
    
    // Aquí deberías validar que $idProducto y $cantidad son válidos

    if(isset($_SESSION['carrito'])){
      // El carrito ya existe
      $arreglo = $_SESSION['carrito'];
      $encontro = false;
      $numero = 0;
      // Buscar el producto en el carrito
      for($i = 0; $i < count($arreglo); $i++){
        if($arreglo[$i]['Id'] == $idProducto){
          $encontro = true;
          $numero = $i;
        }
      }
      if($encontro){
        // Producto existente, actualizar cantidad
        $arreglo[$numero]['Cantidad'] += $cantidad;
      } else {
        // Producto nuevo, obtener datos y añadir
        $res = $conexion->query('select * from productos where id='.$idProducto) or die($conexion->error);
        $fila = mysqli_fetch_row($res);
        $arreglo[] = array(
          'Id' => $idProducto,
          'Nombre' => $fila[1],
          'Precio' => $fila[3],
          'Imagen' => $fila[4],
          'Cantidad' => $cantidad
        );
      }
      $_SESSION['carrito'] = $arreglo;
    } else {
      // El carrito no existe, crear uno nuevo con el producto
      $res = $conexion->query('select * from productos where id='.$idProducto) or die($conexion->error);
      $fila = mysqli_fetch_row($res);
      $_SESSION['carrito'] = array(
        array(
          'Id' => $idProducto,
          'Nombre' => $fila[1],
          'Precio' => $fila[3],
          'Imagen' => $fila[4],
          'Cantidad' => $cantidad
        )
      );
    }
    header("Location: ./cart.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda </title>
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

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remover</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $total = 0;
                  if(isset($_SESSION['carrito'])){
                    $arregloCarrito =$_SESSION['carrito'];
                    for($i=0;$i<count($arregloCarrito);$i++){
                      $total= $total + ( $arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad'] );
                ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/<?php echo $arregloCarrito[$i]['Imagen']; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['Nombre']; ?></h2>
                    </td>
                    <td>$<?php echo number_format($arregloCarrito[$i]['Precio'], 2, '.', ''); ?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus btnIncrementar" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center txtCantidad" 
                            data-precio="<?php echo $arregloCarrito[$i]['Precio']; ?>"
                            data-id="<?php echo $arregloCarrito[$i]['Id']; ?>"
                            value="<?php echo $arregloCarrito[$i]['Cantidad']; ?>" 
                            placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus btnIncrementar" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td class="cant<?php echo $arregloCarrito[$i]['Id']; ?>">
                      $<?php echo number_format($arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad'], 2, '.', '') ; ?></td>
                    <td><a href="#" class="btn btn-primary btn-sm btnEliminar" data-id="<?php echo $arregloCarrito[$i]['Id'];?>">X</a></td>
                  </tr>
                  <?php } } ?>
                  
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">TOTAL DE LA CESTA</h3>
                  </div>
                </div>
                  <!-- Subtotal y Total de la cesta -->
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <span class="text-black">Subtotal</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black" id="subtotal">$<?php echo number_format($total, 2, '.', '');?></strong>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black" id="total-cesta">$<?php echo number_format($total, 2, '.', '') ;?></strong>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">COMPROBAR</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
  <script>
        $(document).ready(function() {
      // Eliminar producto
      $(".btnEliminar").click(function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        var boton = $(this);
        $.ajax({
          method: 'POST',
          url: './php/eliminarCarrito.php',
          data: {
            id: id
          }
        }).done(function(respuesta) {
          boton.closest('tr').remove();
          actualizarTotalCesta(); // Actualizar el total después de eliminar un producto
        });
      });

      // Incrementar/decrementar cantidad
      $(".btnIncrementar").click(function() {
        var precio = $(this).parent('div').parent('div').find('input').data('precio');
        var id = $(this).parent('div').parent('div').find('input').data('id');
        var cantidad = $(this).parent('div').parent('div').find('input').val();
        incrementar(cantidad, precio, id);
        actualizarTotalCesta(); // Actualizar el total después de cambiar la cantidad
      });

      // Función para actualizar la cantidad en el servidor y en la interfaz de usuario
      function incrementar(cantidad, precio, id) {
        var mult = parseFloat(cantidad) * parseFloat(precio);
        $(".cant" + id).text("$" + mult.toFixed(2));
        $.ajax({
          method: 'POST',
          url: './php/actualizar.php',
          data: {
            id: id,
            cantidad: cantidad
          }
        }).done(function(respuesta) {
          // Aquí podrías actualizar el total si la respuesta del servidor lo requiere
        });
      }

      // Función para actualizar el total del carrito
      function actualizarTotalCesta() {
        var subtotal = 0;
        $(".txtCantidad").each(function() {
          var cantidad = parseInt($(this).val());
          var precio = parseFloat($(this).data('precio'));
          subtotal += cantidad * precio;
        });
        $("#subtotal").text('$' + subtotal.toFixed(2));
        $("#total-cesta").text('$' + subtotal.toFixed(2)); // Asumiendo que no hay gastos adicionales
      }

      // Evento para actualizar el total cuando se cambia la cantidad manualmente
      $(".txtCantidad").keyup(function() {
        actualizarTotalCesta();
      });

      // Inicializar el total al cargar la página
      actualizarTotalCesta();
    });
  </script>
  </body>
</html>