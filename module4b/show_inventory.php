<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=inventory_db", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->query("SELECT * FROM items");
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($items as $item) {
        echo "<p>{$item['item_name']} ({$item['quantity']} units)</p>";
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
/*
--REFLECTIONS--
-I chose these items because these were items that were gifted for birthdays and our anniversary between my partner and I in the past 2 years.
-This system is incredibly... Modular. As long as the values line up, plugging in data seems relatively simple.
-
*/
?>