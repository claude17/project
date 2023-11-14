<html>
    <head>
        <title>order page</title>
    </head>
    <body>
        <center>
            <form action="" method="post">
                <fieldset>
                    <h2>choose item to order</h2>
        
                    <input type="radio" name="foodname" value="Pizza" /> Pizza
                    <br>Price: 5$<br>
                    Pizza Quantity: <input type="number" name="quantity" min="0" value="0"><br>
                    1+1
                    Payment Type: 
                    <select id="payment_type" name="payment_type">
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                    </select><br>

                    Payment Amount: <input type="number" name="payment_amount" step="0.01" min="0"><br>

                    <input type="submit" name="submit" value="Place Order">
                </fieldset> 
            </form>
        </center>
    </body>
</html>