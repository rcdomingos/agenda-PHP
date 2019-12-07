<?php

$dir = '/Agenda';

return [
  'path' => $_SERVER['DOCUMENT_ROOT'].$dir,
  //'path'=> $dir,
  'url' => 'http://'.$_SERVER['HTTP_HOST'].$dir,
  'host' => 'localhost',
  'user' => 'root',
  'pass' => 'usbw',
  'data' => 'listatel',
];