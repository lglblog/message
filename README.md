 Lanehub message
基于laravel框架的消息组件
###安装

安装组件
```bash
$  composer require lanehub/message
```
###配置文件
配置文件的作用在于配置对应的对接平台的配置信息

###laravel
在项目下执行如下命令
```bash
  php artisan vendor:publish --provider="Lanehub\LanehubMessageServiceProvider"

  cp vendor/lanehub/message/config/message.php AppConfig/message.php
```
