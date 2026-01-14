<?php

if (isset($_SESSION['id']) && $_SESSION['id'] !== '') {

    $id = $_SESSION['id'];

    switch ($_DVWA['SQLI_DB']) {

        case 'MySQL':

           
            if (!ctype_digit((string)$id)) {
                $html .= "<pre>Invalid input</pre>";
                break;
            }

           
            $stmt = $GLOBALS["___mysqli_ston"]->prepare(
                "SELECT first_name, last_name FROM users WHERE user_id = ? LIMIT 1"
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
    }
}

?>
