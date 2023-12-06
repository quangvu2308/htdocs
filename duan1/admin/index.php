<?php require_once('database/dbhelper.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Thêm Sản Phẩm</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- summernote -->
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <!-- Thông kê sản phẩm -->
                    <a class="nav-link active" href="index.php">Thống kê</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category/quanlydanhmuc.php">Quản lý danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product/">Quản lý sản phẩm</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="quanlygiohang.php">Quản lý đơn hàng</a>
                </li>
            </ul>
        </header>
        <div class="container">
            <main>
                <h1>Bảng thống kê</h1>
                <section class="dashboard">
                    <div class="table">
                        <div class="sp">
                            <p>Sản phẩm</p>
                            <?php
                            $sql = "SELECT * FROM `product`";
                            $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                            $result = mysqli_query($conn, $sql);
                            echo '<span>' . mysqli_num_rows($result) . '</span>';
                            ?>

                            <!-- thự mục -->
                            <p><a href="product/">xem chi tiết➜</a></p>
                        </div>
                        <div class="sp kh">
                            <p>Khách hàng</p>
                            <?php
                            $sql = "SELECT * FROM `user`";
                            $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                            $result = mysqli_query($conn, $sql);
                            echo '<span>' . mysqli_num_rows($result) . '</span>';
                            ?>
                            <p><a href="quanlygiohang.php">xem chi tiết➜</a></p>
                        </div>
                        <div class="sp dm">
                            <p>Danh mục</p>
                            <?php
                            $sql = "SELECT * FROM `category`";
                            $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                            $result = mysqli_query($conn, $sql);
                            echo '<span>' . mysqli_num_rows($result) . '</span>';
                            ?>
                            <p><a href="category/quanlydanhmuc.php">xem chi tiết➜</a></p>
                        </div>
                        <div class="sp dh">
                            <p>Đơn hàng</p>
                            <?php
                            $sql = "SELECT * FROM `order_details`";
                            $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                            $result = mysqli_query($conn, $sql);
                            echo '<span>' . mysqli_num_rows($result) . '</span>';
                            ?>
                            <p><a href="">xem chi tiết➜</a></p>
                        </div>
                    </div>
                </section>
                <section class="new-order">
                    <h4>Đơn hàng mới</h4>
                    <table>
                        <tr class="bold">
                            <td>STT</td>
                            <td>Tên</td>
                            <td>Tên sản phẩm/Số lượng</td>
                            <td>Giá sản phẩm</td>
                            <td>Địa chỉ</td>
                            <td>Số điện thoại</td>
                        </tr>
                        <?php
                            try {

                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                } else {
                                    $page = 1;
                                }
                                $limit = 10;
                                $start = ($page - 1) * $limit;

                                $sql = "SELECT * from orders, order_details, product
                                where order_details.order_id=orders.id and product.id=order_details.product_id ORDER BY order_date DESC limit $start,$limit ";
                                $order_details_List = executeResult($sql);
                                $total = 0;
                                $count = 0;
                                // if (is_array($order_details_List) || is_object($order_details_List)){
                                foreach ($order_details_List as $item) {
                                    echo '
                                        <tr style="text-align: center;">
                                            <td>' . (++$count) . '</td>
                                            <td>' . $item['fullname'] . '</td>
                                            <td>' . $item['title'] . '<br>(<strong>' . $item['num'] . '</strong>)</td>
                                            <td class="b-500 red">' . number_format($item['num'] * $item['price'], 0, ',', '.') . '<span> VNĐ</span></td>
                                            <td>' . $item['address'] . '</td>
                                            <td class="b-500">' . $item['phone_number'] . '</td>
                                        </tr>
                                    ';
                                }
                            } catch (Exception $e) {
                                die("Lỗi thực thi sql: " . $e->getMessage());
                            }
                            ?>
                    </table>
                </section>
            </main>
        </div>
    </div>
</body>
<style>
    #wrapper{
        padding-bottom: 5rem;
    }
    .b-500 {
        font-weight: 500;
    }

    .red {
        color: red;
    }

    .green {
        color: green;
    }
</style>

</html>