# soar-web

> 假设使用的是 phpmyadmin 和 mysql 启动的数据库服务

1. 查看mysql容器名称

```bash
# docker-compose ps
                   Name                                 Command             State                 Ports               
----------------------------------------------------------------------------------------------------------------------
docker-phpmyadmin_mysql_1_50bcea533b80        docker-entrypoint.sh mysqld   Up      0.0.0.0:33060->3306/tcp, 33060/tcp
docker-phpmyadmin_phpmyadmin_1_6b41dc7589a1   /run.sh supervisord -n        Up      0.0.0.0:8080->80/tcp, 9000/tcp  
```

2. 查看当前的网络列表

```bash
# docker network ls
NETWORK ID          NAME                        DRIVER              SCOPE
f8cd1ffb5fcd        bridge                      bridge              local
b9d03d3780b8        docker-phpmyadmin_default   bridge              local
1a19093b7daa        host                        host                local
1ab7045afcbe        none                        null                local
```

4. 启用

```bash
docker run -d --link docker-phpmyadmin_mysql_1_50bcea533b80:mysql -p 5077:5077 --net docker-phpmyadmin_default rovast/soar-web 
```

启动好的容器中， mysql 登陆信息为
- host mysql
- port 3306
- user root
- password 112233
