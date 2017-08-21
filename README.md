# UniversalOJ.github.io
几个志同道合的朋友们建立了这样一个组织，Fork了一份UOJ代码，希望把魔改一顿乱套上UOJ（逃  
其实这个暂时作为一个部署指北的网页存储地。

## 网站生成器使用指北

### 依赖

您需要安装这些包：`Python3`、`PHP`、`pip3`、`python-markdown`、`pygments`。

```sh
sudo apt-get install pip3
pip3 install markdown
sudo apt-get install pygments
```

### 使用

Markdown 文件一般放在`/post`目录下。

有一个叫做`content.php`的文件，里面描述了整个文档的目录。

然后，运行下面的命令就可以生成整个网站了！
```sh
php sitegen.php
```

### 目录下的其他文件

* `contet.php`: 网站的整个目录。
* `gen.py`: Markdown 解释器。
* `generate.php`: 单页面生成脚本。
* `nav.php`: 网页侧边栏生成脚本。
* `sitegen.php`: 整个网站的生成脚本。

### 关于

网站生成器的作者： blue
