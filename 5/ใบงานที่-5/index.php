<?php
require_once "connect.php";

$sql = "SELECT no, student_id, prefix, firstname, lastname, classroom
        FROM student
        ORDER BY no ASC";

$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ใบงานที่ 5</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- DataTables -->
    <link
        href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css"
        rel="stylesheet"
    >
</head>

<body>

<div class="container py-5">

    <div class="text-center mb-4">
        <h1>ใบงานที่ 5</h1>
        <p class="text-muted">
            แสดงรายชื่อนักเรียน ห้อง 608
        </p>
    </div>

    <!-- GitHub -->
    <div class="mb-3">
        <a
            href="https://github.com/bunyakorn12/Bunyakorn/tree/main/5/%E0%B9%83%E0%B8%9A%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88-5"
            target="_blank"
            class="btn btn-dark"
        >
            GitHub - ใบงานที่ 5
        </a>
    </div>

    <!-- ตาราง -->
    <div class="card shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table
                    id="studentTable"
                    class="table table-striped table-hover table-bordered"
                >

                    <thead class="table-dark">
                        <tr>
                            <th>เลขที่</th>
                            <th>รหัสนักเรียน</th>
                            <th>คำนำหน้า</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>ห้อง</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php while ($row = $result->fetch_assoc()): ?>

                        <tr>
                            <td><?= htmlspecialchars($row['no']) ?></td>
                            <td><?= htmlspecialchars($row['student_id']) ?></td>
                            <td><?= htmlspecialchars($row['prefix']) ?></td>
                            <td><?= htmlspecialchars($row['firstname']) ?></td>
                            <td><?= htmlspecialchars($row['lastname']) ?></td>
                            <td><?= htmlspecialchars($row['classroom']) ?></td>
                        </tr>

                    <?php endwhile; ?>

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

<script>
$(document).ready(function () {

    $('#studentTable').DataTable({
        language: {
            search: "ค้นหา:",
            lengthMenu: "แสดง _MENU_ รายการ",
            info: "แสดง _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ",
            infoEmpty: "ไม่มีข้อมูล",
            zeroRecords: "ไม่พบข้อมูล",

            paginate: {
                first: "หน้าแรก",
                last: "หน้าสุดท้าย",
                next: "ถัดไป",
                previous: "ก่อนหน้า"
            }
        }
    });

});
</script>

</body>
</html>

<?php
$conn->close();
?>