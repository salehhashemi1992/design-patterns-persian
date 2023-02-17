Static Factory
==============

تعریف
-----
الگوی Static Factory یکی از انواع الگوهای Creational یا سازنده محسوب میشه که کارش در نهایت ایجاد شی
هست.
در این الگو کلاسی رو تعریف می کنیم که مسئولیتش **ایجاد شی از کلاس های دیگه** هست، اشیا ایجاد شده هم همیشه کلاس والد
مشترکی دارن.
تفاوتش با انواع دیگه ی الگوهای Factory این هست که اینجا فقط یک متد static داریم که تمام انواع آبجکت ها رو ایجاد می
کنه که معمولا هم اسمش ``factory`` یا ``build`` هست.

چه زمانی استفاده میشه؟
----------------------
این الگو زمانی استفاده میشه که یک کلاس از subclass هایی که قراره تولید بشن اطلاع نداره.


کاربرد عملی
-----------
فرض کنید در حال کار رو روی برنامه ای هستیم که امکان پردازش انواع مختلف داده رو داره. داده هایی در فرمت های مختلف CSV،
JSON، XML و...
حالا در برنامه قصد دارید آبجکتی ایجاد کنید که امکان پردازش این داده رو با توجه به فرمت مشخص شده داشته باشه.
در عین حال کلاس والد نباید از نحوه ی ایجاد اشیا از کلاس های پردازش گر مطلع باشه

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

.. _`GitHub`: https://github.com/salehhashemi1992/design-patterns/tree/main/Creational/StaticFactory