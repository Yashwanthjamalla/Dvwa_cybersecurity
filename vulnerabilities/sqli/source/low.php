<?php

if (isset($_REQUEST['Submit'])) {

    // Get input safely
    $id = $_REQUEST['id'];

    switch ($_DVWA['SQLI_DB']) {

        case 'MySQL':

            
            $stmt = $GLOBALS["___mysqli_ston"]->prepare(
                "SELECT first_name, last_name FROM users WHERE user_id = ?"
            );

            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                $first = $row["first_name"];
                $last  = $row["last_name"];

                $html .= "<pre>ID: {$id}<br />First name: {$first}<br />Surname: {$last}</pre>";
            }

            $stmt->close();
            break;

        case 'SQLITE':
            // SQLite not used in this setup
            break;
    }
}

?>
