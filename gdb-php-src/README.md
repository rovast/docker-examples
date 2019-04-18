# gdb-php-src

启动
```bash
docker-compose up -d
```

进入容器
```bash
docker exec -it gdb-php-src bash
```

开始调试
```bash
gdb php

b main
r
```

`ctrl` + `x` + `a` 进入 gui 模式
