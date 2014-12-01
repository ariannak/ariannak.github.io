<form action="index.php" method="post">

    <a href="/quote.php/">Quote</a>    
    / <a href="/buy.php/">Buy</a>
    / <a href="/sell.php/">Sell</a>
    / <a href="/history.php/">History</a>
    / <a href="/changepassword.php/">Change Password</a>
    / <a href="/logout.php/">Log Out</a>
    
</form>

<table border="1" style="width:100%">
    <thead>
        <tr>
            <td><?= "symbol" ?></td>
            <td><?= "name" ?></td>
            <td><?= "shares" ?></td>
            <td><?= "price" ?></td>
            <td><?= "total" ?></td>        
        </tr>
    </thead>
    
    <tbody>   
        <?php foreach ($positions as $positions): ?>
        <tr>
            <td><?= $positions["symbol"] ?></td>
            <td><?= $positions["name"] ?></td>
            <td><?= $positions["shares"] ?></td>
            <td><?= $positions["price"] ?></td>
            <td><?= $positions["TOTAL"] ?></td>
        </tr>
        <?php endforeach ?>      
        <tr>   
            <td><?= "CASH" ?></td>
            <td><?= "" ?></td>
            <td><?= "" ?></td>
            <td><?= "" ?></td>
            <td><?= $cash ?></td>
        </tr>
    </tbody>
</table>
