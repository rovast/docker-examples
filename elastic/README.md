# Elastic

官方指引： https://www.elastic.co/guide/en/elasticsearch/reference/7.6/docker.html

执行完 docker-compose up 后，如果报错，记得进行下述操作：

- Linux

```shell script
grep vm.max_map_count /etc/sysctl.conf
vm.max_map_count=262144
```

```shell script
sysctl -w vm.max_map_count=262144
```
