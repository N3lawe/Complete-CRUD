<?php
include "db_conn.php"; // إدراج ملف الاتصال بقاعدة البيانات

$id = $_GET["id"]; // استرجاع معرف السجل المراد حذفه من عنوان URL

// استعلام SQL لحذف السجل من جدول crud حيث id يساوي $id
$sql = "DELETE FROM `crud` WHERE id = $id";
$result = mysqli_query($conn, $sql); // تنفيذ استعلام الحذف

if ($result) { // التحقق مما إذا تم تنفيذ الاستعلام بنجاح
    header("Location: index.php?msg=Data deleted successfully"); // إعادة توجيه المستخدم إلى صفحة index مع رسالة نجاح
} else {
    echo "Failed: " . mysqli_error($conn); // في حال فشل العملية، عرض رسالة الخطأ
}
