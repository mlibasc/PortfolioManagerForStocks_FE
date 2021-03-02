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

   <h1>Portfolios</h1>

   <?php
   $url = "http://localhost:8080/api/v1/portfolios";
   $json_data = file_get_contents($url);

   $portfolios = json_decode($json_data, true);
   ?>
   <table>
      <tr>
         <th>Client Name</th>
         <th>Portfolio Name</th>
         <th>Currency</th>
         <th>Total Market Value</th>
      </tr>
      <?php foreach ($portfolios as $elem) : ?>
         <tr>
            <td>
               <?php
               $temp = $elem["clientName"];
               $link = $elem["id"];
               echo ("<a href = \"portfolioDetails.php?link=$link\">$temp</a>");
               ?>
            </td>
            <td>
               <?php
               echo ($elem["portfolioName"]);
               ?>
            </td>
            <td>
               <?php
               echo ($elem["currency"]);
               ?>
            </td>
            <td>
               <?php
               echo ($elem["totalValueOfPortfolio"]);
               ?>
            </td>
         </tr>
      <?php endforeach ?>
   </table>
</body>
<?php
echo ("<br><a href = \"viewAllStocks.php\">View All Stocks</a><br>");
echo ("<a href = \"viewAllFXSpots.php\">View All FX Spots</a>");
?>

</html>