<?php

$to = $_POST['c_email_address'];
$subject = 'Gracias por tu compra en ElectroInnova';
$from = 'electroinnova@gmail.com';

// Headers necesarios para enviar email en formato HTML
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$from.'>' . "\r\n";

// Estilos CSS en línea para el correo electrónico
$estilos = "
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f6f6f6;
        }
        .container {
            background-color: #fff;
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .total {
            font-weight: bold;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
";

// Estructura del mensaje
$message = '
<html>
<body>
    <div class="container">
        <h1 style="color:#1d1d1d">Gracias por tu compra '.$_POST['c_fname']." ".$_POST['c_lname'].'</h1>
        <h3>Detalles de la compra</h3>
        <table>
            <thead>
                <tr>
                    <th>Nombre del producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>';

$total = 0;
$arregloCarrito = $_SESSION['carrito'];

foreach ($arregloCarrito as $producto) {
    $subtotal = $producto['Precio'] * $producto['Cantidad'];
    $total += $subtotal;
    $message .= '
                <tr>
                    <td>'. $producto['Nombre'] .'</td>
                    <td>'. $producto['Precio'] .'</td>
                    <td>'. $producto['Cantidad'] .'</td>
                    <td>'. $subtotal .'</td>
                </tr>';
}

$message .= '
            </tbody>
        </table>
        <p class="total">Total de la compra: $'. $total .'</p>
        <a href="http://localhost/carrito/verpedido.php?id_venta='.$id_venta.'" class="btn">Ver Status del pedido</a>
    </div>
</body>
</html>
';

$message = $estilos . $message;

if (mail($to, $subject, $message, $headers)) {
    //echo "Mensaje enviado correctamente";
} else {
    //echo 'No se pudo enviar el email';
}
?>




            
        
        
        
            
    
