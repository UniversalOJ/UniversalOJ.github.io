请注意，这篇教程与vfk的readme文档有严重不同。    
建议您按照本文的方式安装，这将省去很多不必要的麻烦。  


## 安装前的准备

您需要准备一台**64位**的Linux系统。

然后您需要安装`docker`。它是一个容器技术，暂且可以理解成虚拟机。
```bash
sudo apt install docker.io          # ubuntu, debian系统请使用这条指令
sudo yum install docker				# CentOS系统请使用这条指令


sudo service docker start 			# 启动docker服务
```

另外，您可以通过下面的代码安装docker加速器（强烈推荐）：
```bash
sudo su
curl -sSL https://get.daocloud.io/daotools/set_mirror.sh | sh -s http://3a834d99.m.daocloud.io
service docker restart
```

下载UOJ的源码：  

```bash
git clone https://github.com/UniversalOJ/UOJ-System.git
```

> **如果您需要支持java**，请下载这两个文件：  

> - [JDK7u76](http://www.oracle.com/technetwork/java/javase/downloads/java-archive-downloads-javase7-521261.html#jdk-7u76-oth-JPR)  
> - [JDK8u31](http://www.oracle.com/technetwork/java/javase/downloads/java-archive-javase8-2177648.html#jdk-8u31-oth-JPR)  

> 然后把它们放进`docker/`目录，替换掉`jdk-7u76-linux-x64.tar.gz`和`jdk-8u31-linux-x64.tar.gz`。


## 安装

接着，您需要执行下面的指令来开始安装。请注意不是`docker/`目录下的同名文件。
```bash
./install 
```

如果安装过程顺利的话，您将会看到`Successfully built <image-id>`。

安装过程：  

![安装过程](https://i2.buimg.com/519918/0cd7d21eefa3c0bd.png)

安装完成：  

![安装完成](https://i4.buimg.com/519918/2f19d46c1b742c0f.png)



## 启动
安装完成后，您取得了一个镜像。现在您需要建立一个容器，用于运行UOJ：
```bash
docker run --name uoj -dit -p 80:80 -p 3690:3690 --cap-add SYS_PTRACE  <image-id>
```
接下来这个容器将在后台运行。

> 如果您不希望用80端口来运行uoj，您可以把上面的`-p 80:80`改成`-p <port>:80`。

您需要通过这几条命令管理容器：
```bash
docker start uoj    			# 启动uoj容器
docker stop uoj					# 暂停uoj容器
docker restart uoj				# 重启uoj容器

docker exec -it uoj /bin/bash	# 进入容器的终端！
```

现在请您进入容器的终端，编辑`/var/www/uoj/app/.config.php`，把`local_uoj.ac`改成下面这一段代码：

```php
'host' => isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ''),
```

现在这个文件应该如下图所示：

![config.php](https://i4.buimg.com/519918/956d841d7a8169a0.png)

访问服务器的ip，您现在应该能看到UOJ正在运行了。

