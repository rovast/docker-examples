TensorFlow Docker 映像已经过配置，可运行 TensorFlow。Docker 容器可在虚拟环境中运行，是设置 GPU 支持的最简单方法。

```bash
 docker pull tensorflow/tensorflow:latest  # Download latest stable image
 docker run -it -p 8888:8888 tensorflow/tensorflow:latest-jupyter  # Start Jupyter server 
```
