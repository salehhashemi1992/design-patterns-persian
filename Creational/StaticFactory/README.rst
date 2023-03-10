Static Factory
==============

تعریف
-----
الگوی Static Factory یکی از انواع الگوهای Creational یا سازنده محسوب میشه که کارش در نهایت ایجاد شی
هست.

در این الگو کلاسی رو تعریف می کنیم که مسئولیتش **ایجاد شی از کلاس های دیگه** با توجه به پارامتر ورودی هست، اشیاء ایجاد
شده هم همیشه کلاس والد مشخصی دارن.

تفاوتش با انواع دیگه ی الگوهای Factory این هست که اینجا فقط یک متد static داریم که تمام انواع آبجکت ها رو ایجاد می
کنه که معمولا هم اسمش ``factory`` یا ``build`` هست.

چه زمانی استفاده میشه؟
----------------------
این الگو زمانی استفاده میشه که قصد داریم نحوه ایجاد شی از کلاس رو از دید کلاس های رده بالاتر در برنامه پنهان کنیم.

معمول ترین سناریو هایی که از این الگو استفاده می کنیم:

*   ایجاد شی پیچیده هست و نیاز به کدهای زیادی برای انجام تنظیمات و... وجود داره
*   ایجاد شی بستگی به یک متغیر داره: در شرایط و با توجه به condition های مختلف خروجی متفاوتی رو از factory انتظار داریم.
*   ایجاد شی همراه با کش: این الگو کش کردن شی خروجی رو هم ساده تر می کنه
*   ایجاد شی منوط به پیاده سازی کردن interface مشخص

کاربرد عملی
-----------
فرض کنید در حال کار رو روی برنامه ای هستیم که امکان پردازش انواع مختلف داده رو داره. داده هایی در فرمت های مختلف CSV،
JSON، XML و...

حالا در برنامه قصد دارید آبجکتی ایجاد کنید که امکان پردازش این داده رو با توجه به فرمت مشخص شده داشته باشه.
در عین حال کلاس والد نباید از نحوه ی ایجاد اشیاء از کلاس های پردازش گر مطلع باشه

پیاده سازی
-----------
برای پیاده سازی این الگو ابتدا یک interface یا abstract تعریف می کنیم که مشخص کننده ی عملکرد آبجکتی هست که قراره تولید
بشه:

.. literalinclude:: DataReader.php
   :language: php
   :linenos:

و بعد مشخص می کنیم که امکان پردازش چه نوع فرمت هایی رو داریم:

.. literalinclude:: Readers.php
   :language: php
   :linenos:

و در نهایت هم کلاس DataProcessor رو داریم که در واقع همون Static Factory محسوب میشه:

.. literalinclude:: DataProcessor.php
   :language: php
   :linenos:

نحوه فراخوانی
-------------

.. code-block::  php
   :linenos:

    $dataReader = DataProcessor::createDataReader('csv');
    $data = $dataReader->readData('myData.csv');

آموزش ویدیویی
-------------

.. raw:: html

    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto;">
        <iframe src="https://www.youtube.com/embed/qEXOJJ0Q6Ls" frameborder="0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
    </div>
