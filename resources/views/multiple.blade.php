<!DOCTYPE html>
<html>

<head>
    <title>Multiplication Table Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <h1>Multiplication Table Calculator</h1>
    <div class="form-group">
        <label for="inputNumber">Enter a number:</label>
        <input type="number" id="inputNumber" class="form-control" min="1" required>
    </div>
    <button id="generateTableBtn" class="btn btn-primary">Generate Table</button>
    <div id="multiplicationTable"></div>

    <script>
        $(document).ready(function() {
            $("#generateTableBtn").click(function() {
                const inputNumber = parseInt($("#inputNumber").val());

                // Validate input
                if (isNaN(inputNumber) || inputNumber < 1) {
                    alert("Please enter a valid positive number.");
                    return;
                }

                // Clear previous table (if any)
                $("#multiplicationTable").empty();

                // Create the multiplication table
                const table = $("<table>", { class: "table table-bordered" });
                const tableHead = $("<thead>");
                const tableBody = $("<tbody>");

                // Create table header
                tableHead.append($("<tr>").append($("<th>", { text: "#" }), $("<th>", { text: "Result" })));

                // Generate table rows
                for (let i = 1; i <= inputNumber; i++) {
                    const tableRow = $("<tr>");
                    const numberTd = $("<td>", { text: i });
                    const productTd = $("<td>");

                    // Calculate and display product
                    for (let j = 1; j <= inputNumber; j++) {
                        const product = i * j;
                        productTd.append($("<span>", { class: "product", text: `${i} x ${j} = ${product}` }))
                            .append("<br>");
                    }

                    tableRow.append(numberTd, productTd);
                    tableBody.append(tableRow);
                }

                // Add table head and body to the table
                table.append(tableHead, tableBody);

                // Add the table to the DOM
                $("#multiplicationTable").append(table);
            });
        });
    </script>
</body>

</html>
