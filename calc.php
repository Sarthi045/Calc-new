<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="css/calc.css" rel="stylesheet">

    <title> Fast Food Service </title>

    <script>
        function checkPrice() {


            var input = document.getElementsByName("pr");
            var total = 50;
            for (var i = 0; i < input.length; i++) {
                if (input[i].checked) {

                    total += parseFloat(input[i].value);
                }
            }
            document.getElementsByName("total")[0].value = "" + total.toFixed(2);

        }
    </script>
</head>

<body>

    <?php

    ?>

    <div class="heading text-center">
        <h2>The Fast Food Service </h2>
        <h5>Main Branch - OPEN</h5>
    </div>

    <div class="container p-5">
        <div class="row">
            <div class="col-6 pricing p-5 ">
                <h2 class="text-danger"> Food Price </h2>
                <p><b> Service Charge : 50 </b> </p>

                <p id="add" class="pri"> <b>Total : <input value="0.00" readonly="readonly" type="text" name="total" />
                    </b> </p>

            </div>
            <div class="col-6 update p-5">
                <div class="food">
                <form>

                    <div class="pizza border p-3 my-3">
                        <h2 class="text-success"> Pizza Price </h2>
                        <input type="checkbox" name="pr" value="100" onclick="checkPrice()">
                        Margherita Pizza : <b>Rs.100/-</b> <br>
                        <input type="checkbox" name="pr" value="150" onclick="checkPrice()">
                        Cheese n Corn Pizza : <b>Rs.150/-</b> <br>
                        <input type="checkbox" name="pr" value="150" onclick="checkPrice()">
                        Cheese n Tomato Pizza : <b>Rs.150/-</b> <br>
                        <input type="checkbox" name="pr" value="200" onclick="checkPrice()">
                        Double Cheese Margherita Pizza : <b>Rs.200/-</b> <br> <br>
                    </div>
                    <div class="sandwitch border p-3">
                        <h2 class="text-dark  "> Sandwich Price </h2>
                        <input type="checkbox" name="pr" value="50" onclick="checkPrice()">
                        Sandwich : <b>Rs.50/-</b> <br>
                        <input type="checkbox" name="pr" value="100" onclick="checkPrice()">
                        Cheese Sandwich : <b>Rs.100/-</b> <br>
                        <input type="checkbox" name="pr" value="200" onclick="checkPrice()">
                        Grill Sandwich : <b>Rs.200/-</b> <br>
                        <input type="checkbox" name="pr" value="250" onclick="checkPrice()">
                        Mushroom Cheese Grilled Sandwich : <b>Rs.250/-</b> <br>
                    </div>

                </form>
                </div>

            </div>
        </div>
    </div>

</body>

</html>