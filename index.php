<?php

    // configuration
    require("../includes/config.php"); 

    $rows = query("SELECT shares, symbol FROM stocks WHERE id = ?", $_SESSION["id"]);
    
    $positions = [];
    $cashtable = query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
    $cash = $cashtable[0]["cash"];
    $cash = number_format($cash, 2, '.', ',');
    foreach ($rows as $rows)
    {
        $stock = lookup($rows["symbol"]);
        $rows["symbol"] = strtoupper($rows["symbol"]);
        if ($stock !== false)
        {   
            $TOTAL = $stock["price"] * $rows["shares"];
            $TOTAL = number_format($TOTAL, 2, '.', ',');
            $positions[] = [
                "name" => $stock["name"],
                "price" => $stock["price"],
                "shares" => $rows["shares"],
                "symbol" => $rows["symbol"],
                "TOTAL" => $TOTAL
            ];
        }
    }
    
    
    // render portfolio
    render("portfolio.php", ["positions" => $positions, "cash" => $cash, "title" => "Portfolio"]);
    
?>
