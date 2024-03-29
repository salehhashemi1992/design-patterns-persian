Singleton
=========

تعریف
-----
الگوی طراحی Singleton یک الگوی طراحی از نوع سازنده یا Creational محسوب میشه که هدفش اطمینان از اینه که یک کلاس فقط و فقط یک شی داشته باشه و یک راه دسترسی global هم براش در نظر بگیره.

زمانی که این الگو روی یک کلاس اجرا میشه، اون کلاس فقط یک شی ثابت رو برمیگردونه.

در الگوی طراحی Singleton، سازنده ی کلاس به صورت private در نظر گرفته میشه تا امکان ایجاد شی به صورت مستقیم گرفته بشه
و به جای اون یک متد public در نظر میگیریم تا عملیات return کردن شی از کلاس رو انجام بده.


اجزاء
-----
الگوی طراحی Singleton از چند بخش اصلی تشکیل میشه:

1.   Singleton class

2.   Private constructor

3.   Static instance variable

4.   Static getInstance() method

.. image:: uml.png
   :alt: UML of Singleton Design Pattern
   :align: center

Hpesoj00, CC BY-SA 4.0, via Wikimedia Commons

چه زمانی استفاده میشه؟
----------------------
این الگو زمانی استفاده میشه که مطمئن هستیم از کلاس مورد نظر ما در تمام برنامه فقط و فقط باید یک شی ساخته و از اون
استفاده بشه.

به عنوان مثال در کل برنامه ما فقط به یک کانکشن دیتابیس واحد نیاز داریم یا در فریمورک های MVC فقط یک شی از کلاس اصلی
برنامه ایجاد میشه.

.. caution::
   .. centered:: ✅ مزایای استفاده
   *.   جلوگیری از ایجاد مجدد و بی مورد شی از کلاس های مورد نظر

   *.   دسترسی global به شی مورد نظر

   *.   آبجکت Singleton فقط زمانی ایجاد میشه که بهش نیاز وجود داشته باشه

.. warning::
   .. centered:: ❌ معایب استفاده
   *.   تست نویسی برای این کلاس سخت هست

   *.   برای ساختارهای multithread به راحتی نمیشه اون رو پیاده سازی و استفاده کرد

   *.   ناقض اصل اول SOLID یعنی تک مسئولیتی هست

پیاده سازی
-----------
کلاس Singleton به این صورت تعریف میشه:

.. literalinclude:: Singleton.php
   :language: php
   :linenos:

نحوه فراخوانی
-------------

.. literalinclude:: Call.php
   :language: php
   :linenos:

به همین سادگی!

آموزش ویدیویی
-------------

.. raw:: html

    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto;">
        <iframe src="https://www.youtube.com/embed/Cf_ourYdBDU" frameborder="0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
    </div>