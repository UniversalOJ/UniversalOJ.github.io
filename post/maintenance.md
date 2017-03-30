# 维护UOJ

## 容器维护

docker容器很容易维护。您只需要掌握以下命令：

```
docker start uoj                # 启动uoj容器
docker stop uoj                 # 暂停uoj容器
docker restart uoj              # 重启uoj容器

docker exec -it uoj /bin/bash   # 进入uoj容器的终端

docker rm uoj                   # 删除uoj容器（慎用）

docker commit uoj uoj_back      # 保存uoj容器的快照为"uoj_back"镜像
```

在docker中，每个容器需要基于一个镜像来运行。最开始，我们的`uoj`容器是基于安装过程中构建的镜像。

下面是一次典型的数据恢复：

```
docker commit uoj uoj_back_20170101     # 例行备份
docker commit uoj uoj_back_20170201     # 例行备份
docker commit uoj uoj_back_20170301     # 例行备份

# 3月15日，黑恶势力破坏了uoj，uoj容器已经无用，必须恢复

docker stop uoj
docker rm uoj                           # 删除uoj容器
docker run --name uoj -dit -p 80:80 -p 3690:3690 --cap-add SYS_PTRACE  uoj_back_20170301
# 创建新的uoj容器，使用3月1日的备份
```

## 数据迁移

下面的命令可以把`uoj_back`这个容器导出为`uoj.tar`这个文件：
```
docker save -o uoj.tar uoj_back
```
把`uoj.tar`复制到其他机器上，然后可以运行下面的命令导入`uoj_back`镜像：
```
docker load --input uoj.tar
```

下面是一次典型的数据迁移：
```
# 服务器A：
docker commit uoj uoj_back              # 把uoj容器存储为镜像
docker save -o uoj.tar uoj_back         # 把uoj_back镜像导出
# 然后通过某些恶毒的手段把uoj.tar拷到服务器B


# 服务器B：
docker load --input uoj.tar             # 导入uoj_back镜像
docker run --name uoj -dit -p 80:80 -p 3690:3690 --cap-add SYS_PTRACE  uoj_back
# 建立uoj容器，基于之前服务器A的数据，迁移完成
```
