<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>giá sau khi chiết khấu</title>
</head>
<body>
<table>
    <tr>
       <td>Mô tả của sản phẩm </td>
       <td> : </td>
       <td>{{ $ProductDescription }}</td>
    </tr>
    <tr>
       <td>Giá niêm yết của sản phẩm </td>
       <td> : </td>
       <td>{{ $ListPrice }}</td>
    </tr>
    <tr>
       <td>Tỷ lệ chiết khấu </td>
       <td> : </td>
       <td>{{ $DiscountPercent }}</td>
    </tr>
    <tr>
       <td> Giá sau khi đã được chiết khấu </td>
       <td> : </td>
       <td> {{ $DiscountPrice }}</td>
    </tr>
    </table>
</body>
</html>