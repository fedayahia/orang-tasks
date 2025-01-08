let i = 0;

function countNumbers() {
  i++;
  postMessage(i); // إرسال البيانات إلى الصفحة الرئيسية
  setTimeout(countNumbers, 1000); // تشغيل الوظيفة كل ثانية
}

countNumbers();