<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chào mừng admin</title>
</head>
<body>
    <p>Chào mừng admin đến với website.</p>
    <p>tính chiết khấu</p>
    <form action='/loginn' method="POST">
        @csrf
        <p>
            <input type="text" name="ProductDescription" placeholder="Mô tả của sản phẩm">
        </p>
        <p>
            <input type="text" name="ListPrice" placeholder="Giá niêm yết">
        </p>
            <input type="text" name="DiscountPercent" placeholder="Tỷ lệ chiết khấu">
        </p>
        <p>
            <button type="submit">tính</button>
        </p>
    </form>
    <p>từ điển</p>
    <form action='/tudien' method="POST">
        @csrf
        <p>
            <input type="text" name="eng" placeholder="từ cần dịch">
        </p>
        <p>
            <button type="submit">dịch</button>
        </p>
    </form>
</body>
</html>