# php-fpm-docker-demo

使用 docker 来搭建 php-fpm 的运行环境

**文件介绍**

- `php.ini` 采用生产环境配置 `docker exec php-fpm-docker-demo_php-fpm_1 cat /usr/local/etc/php/php.ini-production > php.ini`
- `nginx.conf` 是 nginx 配置

**运行**

`docker-compose up -d`

**查看**

- 访问 `http://127.0.0.1:8001/` 查看 nginx 默认渲染的结果
- 访问 `http://127.0.0.1:8001/info.php` 查看 php 运行效果

**一些坑**

刚开始配置的时候，在 `docker-compose.yml` 中忘了给 php-fpm 挂载了对应的 www 目录，总是报 401。但是还是觉得不优雅，待进一步改进
