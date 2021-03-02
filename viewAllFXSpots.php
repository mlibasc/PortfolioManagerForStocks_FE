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

    <h1>FX Spots</h1>

    <?php
    $url = "http://localhost:8080/api/v1/fxspots";
    $json_data = file_get_contents($url);

    $fxspots = json_decode($json_data, true);
    ?>
    <table>
        <tr>
            <th>From Currency</th>
            <th>To Currency</th>
            <th>Rate</th>
        </tr>
        <?php foreach ($fxspots as $elem) : ?>
            <tr>
                <td>
                    <?php
                    echo ($elem["fromCurrency"]);
                    ?>
                </td>
                <td>
                    <?php
                    echo ($elem["toCurrency"]);
                    ?>
                </td>
                <td>
                    <?php
                    echo ($elem["rate"]);
                    ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <?php
    echo ("<br><a href = \"viewAllPortfolios.php\">View All Portfolios</a><br>");
    echo ("<a href = \"viewAllStocks.php\">View All Stocks</a><br>");
    ?>
</body>

</html>