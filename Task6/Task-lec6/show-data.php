<?php
session_start();

// تأكد من وجود البيانات في الجلسة
if (isset($_SESSION['user_data'])) {
    $user_name = htmlspecialchars($_SESSION['user_data']['user_name']);
    $user_email = htmlspecialchars($_SESSION['user_data']['user_email']);
    $user_password = htmlspecialchars($_SESSION['user_data']['user_password']);
    $phone = htmlspecialchars($_SESSION['user_data']['phone']); // إضافة المتغير phone
    $salary = htmlspecialchars($_SESSION['user_data']['salary']); // إضافة المتغير salary
    $user_type = htmlspecialchars($_SESSION['user_data']['type']); // إضافة المتغير user_type

    echo "<h3>User Name:</h3> $user_name <br>";
    echo "<h3>User Email:</h3> $user_email <br>";
    echo "<h3>User Password:</h3> $user_password <br>";
    echo "<h3>User Phone:</h3> $phone <br>"; // عرض الهاتف
    echo "<h3>User Salary:</h3> $salary <br>"; // عرض الراتب
    echo "<h3>User Type:</h3> $user_type <br>"; // عرض نوع المستخدم
    
    // يمكنك إلغاء البيانات من الجلسة بعد العرض
    unset($_SESSION['user_data']);
    unset($_SESSION['success']);
} else {
    echo "No data available.";
}
?>
