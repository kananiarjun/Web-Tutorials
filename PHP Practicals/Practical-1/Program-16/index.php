<?php
$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");
$message = '';




if (isset($_POST["add_to_cart"])) {
    $item_array = array(
        'item_id' => $_POST["hidden_id"],
        'item_name' => $_POST["item_name"],
        'item_quantity' => $_POST["quantity"],
        'item_price' => $_POST["item_price"]
    );


   
    if (isset($_COOKIE["shopping_cart"])) {
        $cookie_data = stripslashes($_COOKIE['shopping_cart']);
        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }


 
    $item_id_list = array_column($cart_data, 'item_id');
    if (!in_array($_POST["hidden_id"], $item_id_list)) {
        $cart_data[] = $item_array;
    }


   
    setcookie('shopping_cart', json_encode($cart_data), time() + (86400 * 30)); // 30 days expiry
    header("location:index.php?success=1");
}




if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
    $cart_data = json_decode($cookie_data, true);
   
    foreach ($cart_data as $keys => $values) {
        if ($cart_data[$keys]['item_id'] == $_GET["id"]) {
            unset($cart_data[$keys]);
        }
    }
   
    setcookie("shopping_cart", json_encode(array_values($cart_data)), time() + (86400 * 30));
    header("location:index.php?remove=1");
}




if (isset($_GET["action"]) && $_GET["action"] == "clear") {
    setcookie("shopping_cart", "", time() - 3600);
    header("location:index.php?clearall=1");
}




if (isset($_GET["success"])) {
    $message = '<div class="alert alert-success">Item Added into Cart</div>';
}




$cart_items = isset($_COOKIE['shopping_cart']) ? json_decode(stripslashes($_COOKIE['shopping_cart']), true) : [];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
<?php echo $message; ?>
<h2>Products</h2>
<!-- Assume products are fetched from database -->
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <tr>
        <td>Product 1</td>
        <td>$10.00</td>
        <td>
            <form method="post" action="">
                <input type="hidden" name="hidden_id" value="1" />
                <input type="hidden" name="item_name" value="Product 1" />
                <input type="hidden" name="item_price" value="10.00" />
                <input type="number" name="quantity" value="1" min="1" />
                <input type="submit" name="add_to_cart" value="Add to Cart"/>
            </form>
        </td>
    </tr>
</table>


<h2>Shopping Cart</h2>
<table>
    <?php if (!empty($cart_items)): ?>
        <?php foreach ($cart_items as $item): ?>
            <tr>
                <td><?php echo $item["item_name"]; ?></td>
                <td><?php echo $item["item_quantity"]; ?></td>
                <td>$<?php echo number_format($item["item_price"], 2); ?></td>
                <td><a href="?action=delete&id=<?php echo $item['item_id']; ?>">Remove</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="4">No items in cart.</td></tr>
    <?php endif; ?>
</table>


<a href="?action=clear">Clear Cart</a>


</body>
</html>
