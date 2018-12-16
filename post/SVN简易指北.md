> 这是一份简易的 SVN 指北，帮您在满是 SVN 的 UOJ 中幸存下来。  
> 题目数据管理的 SVN 在将来可能会被移除。
> 这份指北以 Ubuntu 终端中的 SVN 客户端为例，其他版本与之相似。
> 请您不要在 Docker 容器中运行 SVN 命令。

## SVN 的安装

在 Ubuntu 终端（非 Docker 中）中执行：
```bash
sudo apt-get install subversion
```

在 Windows 下，您可以安装 [TortoiseSVN](https://tortoisesvn.net/)。

## UOJ 的 SVN 仓库

UOJ 代码的 SVN 仓库地址是：`svn://<local-uoj-address>/uoj`（网页部分）和 `svn://local_uoj.ac/judge_client`（主评测机部分）。  

UOJ 代码仓库需要您手动添加权限。  
首先，您需要进入 Docker 容器，运行下面的命令：
```bash
echo "uoj=666666" >>/var/svn/uoj/conf/passwd    #增加一位名为 "uoj"，密码为 "666666" 的 svn 仓库管理员
```

**注意**：请不要在 Docker 容器中修改除 `.config.php` 以外的文件，这样可能导致 SVN 仓库混乱。

## SVN 的基本用法

### 检出
```bash
svn co svn://svn地址 [本地目录全路径] --username 用户名 --password 密码
```
若不指定本地目录全路径，则检出到当前目录下。

### 添加新文件
```bash
svn add 文件名
```
您可以在检出的目录的任意地方执行此命令。  
此命令将新文件纳入版本库（与 Git 不同）。

### 删除文件
```bash
svn delete 文件名
```
此命令将文件从版本库和目录中删除。   

### 提交
```bash
svn　commit　-m　"提交备注信息文本" 文件名
```
此命令将本地文件提交到远程版本库（与 Git 不同）。

### 更新文件
```bash
svn　update
```
此命令从远程版本库获取最新版本代码。


