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

    <?php
    $id = $_GET["link"];
    $url = "http://localhost:8080/api/v1/portfolio/$id";
    $json_data = file_get_contents($url);
    $portfolio = json_decode($json_data, true);
    ?>

    <h1>
        <?php
        echo ($portfolio["clientName"] . "-" . $portfolio["portfolioName"] . "-" . $portfolio["currency"] . "-" . $portfolio["totalValueOfPortfolio"]);
        ?>
    </h1>

    <table>
        <tr>
            <th>Stock Symbol</th>
            <th>Price</th>
            <th>Currency</th>
            <th>Units Owned</th>
        </tr>
        <?php for ($i = 0; $i < sizeOf($portfolio["listOfStocks"]); $i++) : ?>
            <tr>
                <td>
                    <?php
                    $temp = $elem;
                    echo ($portfolio["listOfStocks"][$i]["symbol"]);
                    ?>
                </td>
                <td>
                    <?php
                    echo ($portfolio["listOfStocks"][$i]["price"]);
                    ?>
                </td>
                <td>
                    <?php
                    echo ($portfolio["listOfStocks"][$i]["currency"]);
                    ?>
                </td>
                <td>
                    <?php
                    echo ($portfolio["unitOfStocks"][$i]);
                    ?>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
<?php
echo ("<br><a href = \"viewAllPortfolios.php\">View All Portfolios</a><br>");
echo ("<a href = \"viewAllStocks.php\">View All Stocks</a><br>");
echo ("<a href = \"viewAllFXSpots.php\">View All FX Spots</a>");

?>

</html>