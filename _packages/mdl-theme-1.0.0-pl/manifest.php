<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2015 MODX Systems, LLC (hello@modx.com) 

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.',
    'readme' => '# MDL Theme

MODX 2.4 - with Material Design Lite (MDL) theme that lets you add a Material Design look and feel to your site. Row Listing and Grid Listing for resources plus a Contact Form. 
',
    'changelog' => '# MDL Theme 1.0.0
- Basic Package with Config Extra. Grid, Listing, and Page Layouts via MXT Theme System.
',
    'setup-options' => 'mdl-theme-1.0.0-pl/setup-options.php',
    'requires' => 
    array (
      'mxt' => '>=1.2.1',
      'collections' => '>=3.3.0',
      'getresources' => '>=1.6.0',
      'FormIt' => '>=2.2.7',
      'SimpleSearch' => '>=1.9.2',
      'switch' => '>=1.1.0',
      'clientconfig' => '>=1.3.0',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '53117e7d270314c51e3099b084c7c830',
      'native_key' => 'mdl-theme',
      'filename' => 'modNamespace/1183c2427ac03c5e77502fc25949a81c.vehicle',
      'namespace' => 'mdl-theme',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '2acda66b0d3184cf0d5500b946f6a6f3',
      'native_key' => NULL,
      'filename' => 'modCategory/5ef0b3370accee14fa43c1830f83de11.vehicle',
      'namespace' => 'mdl-theme',
    ),
  ),
);