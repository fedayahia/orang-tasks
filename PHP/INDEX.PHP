<?php
// تعيين ترميز UTF-8 لدعم اللغة العربية
header('Content-Type: text/html; charset=UTF-8');

// الحصول على تاريخ ووقت السيرفر
$date = date("Y-m-d H:i:s");

// عرض رسالة ترحيبية
echo "<h2>مرحبًا بك في سيرفر PHP المحلي! 🎉</h2>";
echo "<p>التاريخ والوقت الحالي: <strong>$date</strong></p>";

// معلومات إضافية عن السيرفر
echo "<h3>تفاصيل السيرفر:</h3>";
echo "<ul>";
echo "<li><strong>إصدار PHP:</strong> " . phpversion() . "</li>";
echo "<li><strong>اسم الخادم:</strong> " . $_SERVER['SERVER_NAME'] . "</li>";
echo "<li><strong>عنوان IP:</strong> " . $_SERVER['SERVER_ADDR'] . "</li>";
echo "<li><strong>المتصفح المستخدم:</strong> " . $_SERVER['HTTP_USER_AGENT'] . "</li>";
echo "</ul>";

?>
