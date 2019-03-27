# docker-examples

Dockerfile and docker-compose examples

记录常用的 docker 应用及相关配置

## Projects

- gcc 安装 gcc 和 gdb，便于跨平台开发 C

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
