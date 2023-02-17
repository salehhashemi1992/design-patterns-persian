Abstract Factory
================

تعریف
-----
الگوی Abstract Factory یک الگو از نوع الگوهای سازنده یا Creational محسوب میشه که کار اصلی اون ایجاد شی بدون اطلاع سطوح
بالاتر از جزئیات نحوه ایجاد شی هست.

تفاوتی که با الگوی `Factory Method`_ داره اینه که اینجا کلاس Factory ما مجموعه یا خانواده ای از آبجکت های مرتبط رو
تولید می کنه.

اجزاء
-----
الگوی طراحی Abstract Factory از چند بخش اصلی تشکیل میشه:

1.   Abstract Factory: یک کلاس abstract که interface ایجاد مجموعه ای از آبجکت های مرتبط به هم رو مشخص می کنه.

2.   کلاس های concrete که abstract مورد قبل رو پیاده سازی می کنه و مجموعه ای از آبجکت های مرتبط رو ایجاد می کنه.

3.   کلاس های abstract که interface آبجکت های خروجی یا ایجاد شده رو مشخص می کنه.

4.   و در نهایت کلاس های مربوط به آبجکت ایجاد شده که مورد سوم رو پیاده سازی می کنن.

.. image:: Abstract_factory_UML.svg
   :alt: UML of Abstract Factory
   :align: center

Giacomo Ritucci, CC BY-SA 3.0, via Wikimedia Commons

چه زمانی استفاده میشه؟
----------------------
این الگو زمانی استفاده میشه که امکان پیش بینی انواع آبجکت هایی که قرار هست تولید بشن وجود نداره و ممکنه هر نوع جدید
به روش متفاوتی تولید بشه.

از مهم ترین دستاوردهای استفاده از این الگوی طراحی در برنامه میشه کمک به رعایت اصول Single Responsibility، Open/Closed
Principle و Dependency Inversion از اصول SOLID رو نام برد.

.. caution::
   .. centered:: ✅ مزایای استفاده
   استفاده از این الگو باعث میشه در سطح بالای برنامه وابستگی به سطوح پایین و انواع پیاده سازی ها از بین بره و
   کلاس های Factory مسئول آماده کردن تنظیمات و سپس ایجاد اشیاء بشن و این مسئولیت رو از روی دوش سطوح بالاتر برنامه بردارن.

   مثلا اگر کد های فراخوانی API مربوط به دسترسی به درگاه پرداخت رو در خود کلاس اصلی برنامه بنویسیم و بعدا کارفرما قصد
   عوض کردن API و روش پرداخت رو داشته باشه مجبوریم تمام تغییرات رو در خود کلاس اصلی ایجاد کنیم در صورتی که با این روش
   سطوح بالای برنامه رو درگیر فراخوانی API نخواهیم کرد.

.. warning::
   .. centered:: ❌ معایب استفاده
   پیچیده تر شدن برنامه به علت نیاز به تعریف انواع زیرکلاس های Factory و اشیاء تولیدی

کاربرد عملی
-----------
فرض کنید در برنامه خودمون بخشی به نام پرداخت داریم که در اون روش های مختلفی هم برای پرداخت وجود داره و هر روش پرداخت
هم روش ایجاد شی مستقل خودش رو داره.

در این شرایط بهترین راه استفاده از Factory Method Design Pattern هست.

پیاده سازی
-----------
ابتدا interface های مربوط به Factory و متد پرداخت رو ایجاد می کنیم:

.. literalinclude:: Interfaces.php
   :language: php
   :linenos:

در مرحله ی بعد پیاده سازی های concrete مربوط به Factory ها رو انجام میدیم:

.. literalinclude:: Factories.php
   :language: php
   :linenos:

همونطور که میبینید هر نوع متد پرداخت روش پیاده سازی مستقل مربوط به خودش رو داره.

و در نهایت هم کلاس های مربوط به متدهای پرداخت رو پیاده سازی می کنیم:

.. literalinclude:: PaymentMethods.php
   :language: php
   :linenos:

نحوه فراخوانی
-------------

.. code-block::  php
   :linenos:

   $creditCardFactory = new CreditCardFactory("1234567890123456", "123", "12/24");
   $creditCard = $creditCardFactory->create();
   $creditCard->processPayment(100);

   $payPalFactory = new PayPalFactory("saleh@example.com", "password123");
   $payPal = $payPalFactory->create();
   $payPal->processPayment(100);

نحوه ی ایجاد شی به این صورت هست و موضوع مهم در اینجا این هست که متغیر های $paypal و $creditCard در اینجا هر دو
interface با نام PaymentMethod رو پیاده سازی کردن پس می توان هر دو را در برنامه به یک شکل و با فراخوانی متد مشترک
processPayment استفاده کرد.

برای اطلاعات بیشتر می تونید ویدیوی مربوط به Dependency Inversion رو ببینید:

.. raw:: html

    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto;">
        <iframe src="https://www.youtube.com/embed/eCFjTUIbEcg" frameborder="0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
    </div>

.. _`Factory Method`: https://design-patterns-in-persian.readthedocs.io/en/latest/Creational/StaticFactory/README.html