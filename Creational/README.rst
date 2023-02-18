.. meta::
   :description: مجموعه ای از الگوهای طراحی creational یا سازنده همراه با مثال هایی از PHP8
   :keywords: design patterns, php, creational, best practices

الگوهای Creational
==================

الگوهای creational مسئله ی ایجاد شی رو بررسی می کنن. اینکه در هر شرایطی بهتره ایجاد شی رو به چه صورت انجام بدیم.

ساخت شی با روش معمول یعنی:

.. literalinclude:: newObject.php
   :language: php
   :linenos:

در تمام شرایط جوابگو نیست و میتونه باعث بروز مشکلاتی در طراحی و افزایش پیچیدگی برنامه بشه.

الگوهای طراحی creational یا سازنده اومدن تا این مشکلات رو رفع کنن.

.. toctree::
   :titlesonly:

   StaticFactory/README
   SimpleFactory/README
   FactoryMethod/README
   AbstractFactory/README
   Builder/README
   Prototype/README