# Git的使用 
git rm 表示记录一个删除的操作
git rm --cached 表示从缓存区删除一个文件
git rm -- cached 是从stage（index，暂存区） 里面删除文件，当你提交（commit）之后文件就会删除了。
git diff 
git diff --cached
git status -s
git reset HEAD (git rm 表示记录一个删除的操作之后)
git reset HEAD -- file

Git必须知道当前版本是哪个版本，在Git中，用HEAD表示当前版本，，上一个版本就是HEAD^，上上一个版本就是HEAD^^，当然往上100个版本写100个^比较容易数不过来，所以写成HEAD~100。


git checkout -- file；撤销对工作区修改；这个命令是以最新的存储时间节点（add和commit）为参照，覆盖工作区对应文件file；这个命令改变的是工作区
git reset HEAD -- file；清空add命令向暂存区提交的关于file文件的修改（Ustage）；这个命令仅改变暂存区，并不改变工作区，


$ git log --pretty=oneline
git reflog


git config --global alias.st status
[alias]  
  ll = log --decorate --graph --oneline  

* git reset file head(^)
表示从commit中还原一个文件到index区域。不用跟上--参数。
* git reset --(hard mixed soft) head(^)
> 表示指针移动到某个commit
>	hard:这个要谨慎使用，因为他会丢失现在工作区的数据
>	soft:仅仅一定指针
>	mixed：默认参数，移动指针+恢复index
>    
>    
>    







