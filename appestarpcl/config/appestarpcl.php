<?php

$CI =& get_instance();

$config['root_url']=str_replace('appestarpcl/', '', $CI->config->base_url());

$config['static_root'] = $config['root_url']. 'assets/';

//ปรับแต่งได้เองตามโฟนเดอร์ที่เราอยากจะเรียกเข้าถึง
$config['css'] = $config['static_root']. 'css/';
$config['data'] = $config['static_root'].'data/';
$config['font-awesome'] = $config['static_root'].'font-awesome/'; 
$config['images'] = $config['static_root'].'images/';
$config['js'] = $config['static_root'].'js/';
$config['plugins'] = $config['static_root'].'plugins/';



//ไว้ใช้ config ลิ้งไปหา โฟเดอร์ พวก css หรือ js ที่เราสร้างเอง
$config['appestarpcl'] = $config['static_root'].'';



//ไว้ใช้ config พวกค่าที่ใช้ บ่อยๆๆให้ แต่ละเพส
$config['pageTitle'] = 'Estarpclapp';
$config['pageUsername'] = 'คำเตือน[ให้เรียกจาก pageUsername]';