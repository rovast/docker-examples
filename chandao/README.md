重新部署

```bash
# 清除数据
rm -rf data

# 建立数据文件
mkdir -p data/db data/file

# 赋权
chmod -R 777 data

# 启动
docker compose up -d
```

## HTTPS

官方这个问题没修复，nginx 代理使用 https 不能登录。见：https://www.zentao.net/ask/53129.html

```bash
docker exec -it zentao bash

echo '$config->framework->filterCSRF = false;' >> /apps/zentao/config/my.php
```

