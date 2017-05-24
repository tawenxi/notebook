+ 第二适配器，把ipv4由192.168.10.1设置成192.168.1.1
+ 把homestead.rb 的private_network 设置成了public_network 
+ 192.168.10.10   =>  ip: settings["ip"] ||= "192.168.1.129"
+ 把Homestead.yaml的ip 由192.168.10.10 设置成了192.168.1.129
+ 网络设置 网卡1--网络地址转换（NAT）   接入网线  地址转发
+ 网络设置 网卡2--仅主机HostOnly   接入网线  （不征地可以换成桥接么）