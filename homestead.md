homestead 

备份homestead 3.0.1修改以下文件名
1 C:\Users\Administrator\VirtualBox VMs
2 Homestead
3 .VirtualBox
4 .vagrant.d
5 .homestead

恢复的时候把名字改回来  再bash init.sh  然后vagrant up  开网线



vagrant box add metadata.json 后会创建 .vagrant.d
git clone https://github.com/laravel/homestead.git Homestead

bash init.sh
