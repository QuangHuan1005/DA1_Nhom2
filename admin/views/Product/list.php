<?php
// Start the session
// print_r($products);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Danh sách sản phẩm</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #eee;
        }

        img {
            max-width: 80px;
        }
    </style>
</head>

<body>

    <h2>Danh sách sản phẩm</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Danh mục</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Tồn kho</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['category_id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td>
                            <?php if ($product['image_url']): ?>
                                <img src="<?= $product['image_url'] ?>" alt="Ảnh sản phẩm">
                            <?php else: ?>
                                Không có ảnh
                            <?php endif; ?>
                        </td>
                        <td><?= ($product['description']) ?></td>
                        <td><?= number_format($product['price'], 0, ',', '.') ?> VND</td>
                        <td><?= $product['stock_quantity'] ?></td>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Không có sản phẩm nào.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>