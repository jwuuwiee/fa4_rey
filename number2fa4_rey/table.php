<?php
$names = [
    "Venus", "Zenith", "Valerie", "Zerina", "Zayleigh", "Zoelle", "Zianna", "Zaylen", 
    "Keisha", "Zephyr", "Zion", "Carson", "Caleb",
    "Xyra", "Mercury", "Ximena", "Xavion", "Yejun",
    "Kenji", "Yuan", "Kaori", "Keiko", "Kazumi"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Functions Table</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #ffc757;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>
</head>

<body>

<h2>List of Names - String Functions</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Position of "a"</th>
        <th>Reverse Name</th>
    </tr>

    <?php foreach ($names as $name): ?>

        <?php
            $length = strlen($name);
            $ucfirst = ucfirst($name);

            // replace vowels
            $vowels = ['a','e','i','o','u','A','E','I','O','U'];
            $replaced = str_replace($vowels, '@', $name);

            // position of "a"
            $pos = strpos(strtolower($name), 'a');
            if ($pos !== false) {
                $pos = $pos + 1; // make it human-friendly (start at 1)
            } else {
                $pos = "None";
            }

            // reverse name
            $reverse = strrev($name);
        ?>

        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $length; ?></td>
            <td><?php echo $ucfirst; ?></td>
            <td><?php echo $replaced; ?></td>
            <td><?php echo $pos; ?></td>
            <td><?php echo $reverse; ?></td>
        </tr>

    <?php endforeach; ?>

</table>

</body>
</html>