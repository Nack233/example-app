<!DOCTYPE html>
<html>

<head>
    <title>Multiplication Table</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <h1>โปรแกรมรับค่าตัวเลขและสร้างเป็นตารางสูตรคูณ</h1>
    <div class="form-group">
        <label for="inputNumber">ใส่เลขที่ต้องการ:</label>
        <input type="number" id="inputNumber" min="1" required>
    </div>
    <button id="generateTableBtn">Generate Table</button>
    <div id="multiplicationTable"></div>

    <script>
        $(document).ready(function() {
            $("#generateTableBtn").click(function() {
                const inputNumber = parseInt($("#inputNumber").val());

                // Validate input
                if (isNaN(inputNumber) || inputNumber < 1) {
                    alert("กรุณาใส่เลขดีๆได้มั้ยมันใส่ลบไม่ได้นะจ้ะว่างไว้ก็ไม่ได้ขอร้อง!!!!.");
                    return;
                }

                // Clear previous table (if any)
                $("#multiplicationTable").empty();

                // Create the multiplication table
                const table = $("<table>", { class: "table table-bordered" });
                const tableHead = $("<thead>");
                const tableBody = $("<tbody>");

                // Create table header
                tableHead.append($("<tr>").append($("<th>", { text: "#" }), $("<th>", { text: "ผลลัพธ์" })));

                // Generate table rows
                for (let i = inputNumber; i <= inputNumber; i++) {
                    const tableRow = $("<tr>");
                    const numberTd = $("<td>");
                    const productTd = $("<td>");

                    // Calculate and display product
                    for (let j = 1; j <= 12; j++) {
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
