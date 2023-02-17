Factory Method
==============

تعریف
-----
الگوی Factory Method یک الگو از نوع الگوهای سازنده یا Creational محسوب میشه که کار اصلی اون ایجاد شی بدون اطلاع سطوح
بالاتر از جزئیات نحوه ایجاد شی هست.

تفاوتی که با دیگر الگوهای Factory داره اینه که کلاس Factory اصلی یک سری زیرکلاس داره که هر کدوم با استراتژی متفاوتی
به ایجاد اشیا میپردازن. که البته این اشیا ایجاد شده هم همگی interface مشابهی رو پیاده سازی می کنن.

اجزاء
-----
الگوی طراحی Factory Method از چند بخش اصلی تشکیل میشه:
1.   test

2.   test

3.   test

4.   test

چه زمانی استفاده میشه؟
----------------------
این الگو زمانی استفاده میشه که قصد داریم نحوه ایجاد شی از کلاس رو از دید کلاس های رده بالاتر در برنامه پنهان کنیم.

معمول ترین سناریو هایی که از این الگو استفاده می کنیم:

*   ایجاد شی پیچیده هست و نیاز به کدهای زیادی برای انجام تنظیمات و... وجود داره

*   ایجاد شی بستگی به یک متغیر مثل type داره: در شرایط و با توجه به condition های مختلف خروجی متفاوتی رو از factory
انتظار داریم.

*   ایجاد شی همراه با کش: این الگو کش کردن شی خروجی رو هم ساده تر می کنه

*   ایجاد شی منوط به پیاده سازی کردن interface مشخص

کاربرد عملی
-----------
تصویر کنید ما یک فروشگاه طراحی کردیم که محصولات مختلفی در اون به فروش میرسه. مواردی مثل کتاب و لباس و محصولات
الکترونیک و...

هر کدوم از این نوع محصولات خصیصه های متفاوتی هم دارن مثل نام و قیمت و توضیحات.

برای ایجاد شی از هر نوع محصول می تونیم از الگوی Simple Factory استفاده کنیم.

پیاده سازی
-----------
برای پیاده سازی این الگو ابتدا یک interface یا abstract تعریف می کنیم که مشخص کننده ی خصیصه های محصولی هست که قراره
تولید بشه:

.. literalinclude:: Product.php
   :language: php
   :linenos:

حالا انواع محصولات رو به این صورت تعریف می کنیم:

.. literalinclude:: Products.php
   :language: php
   :linenos:

و در نهایت هم کلاس ProductFactory رو داریم که در واقع همون Simple Factory محسوب میشه:

.. literalinclude:: ProductFactory.php
   :language: php
   :linenos:

نحوه فراخوانی
-------------

.. code-block::  php
   :linenos:

   $productFactory = new ProductFactory();
   $product = $productFactory->createProduct("book", "The Lord of the Rings", 20.99, "A classic fantasy novel.");
   echo $product->getName() . "\n";
   echo $product->getPrice() . "\n";
   echo $product->getDescription() . "\n";

.. _`Static Factory`: https://design-patterns-in-persian.readthedocs.io/en/latest/Creational/StaticFactory/README.html