<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .search-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .search-row {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        select, input, button {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="text"] {
            flex-grow: 1;
        }
        button {
            background-color: #f0f0f0;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr {
            background-color: #CABBA1;
        }
        .start-one {
            margin-top: 10px;
            color: #666;
        }
    </style>
</head>
<body>
	<?php include "./header.php" ?>
    <div class="search-container">
        <div class="search-row">
            <select>
                <option>Category</option>
            </select>
            <select>
                <option>Order</option>
            </select>
            <input type="text" placeholder="Name">
            <button>Search</button>
        </div>
        <div class="start-one">+ Start one</div>
        <table>
            <thead>
                <tr>
                    <th>Yaps</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Test</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Test</td>
                </tr>
                <!-- Repeat for desired number of rows -->
            </tbody>
        </table>
    </div>
	<?php include "./footer.php" ?>
</body>
</html>
