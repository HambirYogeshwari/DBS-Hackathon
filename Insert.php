<?php
    $stock_name = $_POST['stock_name'];
    $order_type = $_POST['order_type'];
    $price = $_POST['price'];
    $order_quant = $_POST['order_quant'];
    
    $connection = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connection,"cust");

    $date = date('d/m/Y', time());

    $query = "INSERT INTO `cust_det` (cust_id, stock_name, order_quant, order_type, exec_quant, price, order_status, order_date) VALUES (1, '$stock_name', '$order_quant', '$order_type', 0, '$price', 'PLACED', $date)";
           $result = mysqli_query($connection, $query);
    
    if($result){
        echo "<script>
            alert('Success');
        </script>";
        header("Location: index.html");
        exit();
    }
    else{
        echo "not registered";
    }
    
    function test_input($data) 
    {
        if(isset($_POST['Submit']))
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
?>