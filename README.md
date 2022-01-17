# docker-examples

Dockerfile and docker-compose examples

记录常用的 docker 应用及相关配置

## Install 

**docker**

- Linux: `curl -sSL https://get.daocloud.io/docker | sh`
- Mac: [https://docs.docker.com/docker-for-mac/install/](https://docs.docker.com/docker-for-mac/install/)

**docker-compose**

Linux:

```bash
sudo curl -L "https://github.com/docker/compose/releases/download/1.23.1/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```

## Examples

| Name | Description |
| ---- | ----------- |
|elastic| |
|gcc| |
|grafana| |
|laravel| |
|mysql| |
|php-fpm| |
|portainer | docker 的 web 版管理工具 |
|redis| |
|soar-web| MySQL 语句规范检查工具 |
|excalidraw| 手绘风格的在线绘图工具 |
|gdb-php-src | 安装 gcc、gdb 工具，方便跨平台调试 PHP 内核源码 |
|jira| |
|mongodb| |
|opengrok | 在线阅读源码的分析神器，很适合阅读 C 相关代码，自动构建索引 |
|phpmyadmin | |
|rabbitmq | |
|skywalking |APM解决方案|

## QA

### Networks

创建的 Networks 名称 `文件夹_default`，比如：MySQL 对应的网络组 `mysql_default`，这样其他地方访问直接配置对应的网络名，通过 service_name 访问即可

举例：MySQL 和 phpmyadmin 访问

mysql
```yaml
version: "3"

services:
  mysql8:
    image: mysql:8
    environment:
      -  MYSQL_ROOT_PASSWORD=112233
    volumes:
      - ./mysql8_data:/var/lib/mysql

  mysql57:
    image: mysql:5.7
    environment:
      - MYSQL_ROOT_PASSWORD=112233
# 默认网络 mysql_default
```

phpmyadmin
```yaml
version: '3'

services:
  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    environment:
      - PMA_ARBITRARY=1
    ports:
      - 9995:80
    networks:
      - mysql_default
    volumes:
      - /sessions

networks:
  mysql_default:
    external: true
# 使用
# HOST: mysql8:3306 或者 mysql58:3306
# 认证: root/112233      root/112233
```
