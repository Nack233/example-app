<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
    <link rel="stylesheet" href="Mycss.css">
    <link rel="javasheet" href="tests.js">
</head>

<body>
    <!-- Header -->
    <header>
        <img src="data:image/png;base64,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"
            alt="Logo" class="header-logo" style="vertical-align: middle;">
        <h1>ระบบจองห้องประชุมหน่วยงานราชการ</h1>
    </header>
    <!-- Main -->
    <main>
        <form>
            <div class="tab-container">
                <div class="tab-button active">จองห้องประชุม</div>
                <div class="tab-button">ติดตามสถานะการจอง</div>
            </div>
            <div class="date-input-card">
                <div class="input-group">
                    <input type="text" placeholder="ค้นหาห้อง" />
                </div>
                <div class="input-group">
                    <input type="date" placeholder="วัน/เดือน/ปี" />
                    <input type="date" placeholder="วัน/เดือน/ปี" />
                </div>
                <div class="time-input">
                    <input type="time" placeholder="ชั่วโมง:นาที" />
                    <input type="time" placeholder="--:--" />
                </div>
                <div class="search-button"><a href="/my-love" class="nav-link">
                    <button>ค้นหาห้อง</button></a>
                </div>
            </div>
        </form>
        <p>หมายเหตุ: กรุณากรอกเงื่อนไขที่ต้องการค้นหา * ไม่สามารถเว้น</p>
    </main>
</body>

</html>

<!-- Css -->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f2f2f2;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 8px;
        border-radius: 20px;
    }

    main {
        background-color: #fff;
        padding: 100px;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .tab-container {
        display: flex;
        width: 100%;

    }

    .tab-button {
        flex: 1;
        padding: 10px;
        background-color: #f1f1f1;
        border: none;
        outline: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-align: center;
        border-radius: 10px;
    }

    .tab-button:hover {
        background-color: #ddd;
    }

    .tab-button.active {
        background-color: #ccc;
    }

    .search-box input,
    .date-picker input,
    .time-picker input {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button {
        padding: 10px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    p {
        margin-top: 20px;
        color: #666;
    }

    .date-input-card {
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border-radius: 4px;
        padding: 16px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: inline-block;
    }

    .input-group {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
    }

    .input-group input {
        padding: 8px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 14px;
        flex: 1;
    }

    .calendar-icon {
        margin-left: 8px;
        font-size: 18px;
        color: #666666;
        cursor: pointer;
    }

    .time-input {
        display: flex;
        justify-content: space-between;
    }

    .time-input input {
        padding: 8px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 14px;
        width: 48%;
    }

    .form-header {
        background-color: #f2f2f2;
        padding: 8px;
        font-weight: bold;
        color: #333333;
        margin-bottom: 1px;
    }

    header img {

        width: 70px;
        /* ปรับขนาดของภาพโลโก้ */
        height: auto;
        /* ปรับขนาดของภาพโลโก้ */
        border-radius: 5px;
    }

    .header-logo {
        float: left;
        margin-right: 10px;
    }

    .header-title {
        float: right;
        margin-left: 10px;
    }

    .search-button {
        margin-top: 30px;
        margin-bottom: 30px;
        text-align: center;
    }

    .search-button {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search-button button {
        font-size: 16px;
        padding: 12px 100px;
    }

    .search-button button:hover {
        background-color: #444;
    }
</style>
