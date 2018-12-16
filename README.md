# UniversalOJ.github.io
## 网站生成器使用指北

### 依赖

您需要安装这些包：`Python3`、`PHP`、`pip3`、`python-markdown`、`pygments`。

由于Python-markdown组件在3.0.0及以上版本进行了一些修改可能导致生成器故障，于是需要指定版本。

```sh
sudo apt-get install python3-pip
pip3 install "markdown<3.0.0" "pygments"
```

### 使用

Markdown 文件一般放在`/post`目录下。

有一个叫做`content.php`的文件，里面描述了整个文档的目录。

然后，运行下面的命令就可以生成整个网站了！

```sh
php sitegen.php
```

### 目录下的其他文件

* `content.php`: 网站的整个目录。
* `mdgen.py`: Markdown 解释器。
* `sitegen.php`: 单页面或整个网站的生成脚本。

### 关于

网站生成器的作者： [blue](https://github.com/ruanxingzhi)
