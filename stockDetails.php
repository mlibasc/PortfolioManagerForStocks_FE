<!DOCTYPE html>
<html>

<head>
    <title>Portfolio Manager</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h1>Stock Details</h1>

    <?php
    $url = "http://localhost:8080/api/v1/stock/{id}";
    $json_data = file_get_contents($url);

    $stock = json_decode($json_data, true);
    ?>
    <table>
        <tr>
            <th>Symbol</th>
            <th>Price</th>
            <th>Currency</th>
        </tr>
        <?php foreach ($stock as $elem) : ?>
            <tr>
                <td>
                    <?php
                    echo ($elem["symbol"]);
                    ?>
                </td>
                <td>
                    <?php
                    echo ($elem["price"]);
                    ?>
                </td>
                <td>
                    <?php
                    echo ($elem["currency"]);
                    ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
<?php
echo ("<br><a href = \"viewAllPortfolios.php\">View All Portfolios</a><br>");
echo ("<a href = \"viewAllStocks.php\">View All Stocks</a><br>"); 
echo ("<a href = \"viewAllFXSpots.php\">View All FX Spots</a>"); 
?>
</html>