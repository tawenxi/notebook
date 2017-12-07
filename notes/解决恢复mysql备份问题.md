show variables like 'sql_mode';
set sql_mode='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
SET GLOBAL sql_mode = '';
SET sql_mode = '';

php artisan make:migration add_account_number_to_zb_details_table --table=zb_details


    "color_scheme": "Packages/Material Theme/schemes/Material-Theme.tmTheme",
"theme": "Material-Theme.sublime-theme",



 在delete的sql中  显示修改ZB_ZFSQDNR  和删除PUBAUDITLOG 经核实
 PUBAUDITLOG  :select * From PUBAUDITLOG where GSDM='001'  and BIZNAME='支付凭证'   and KJND='2017' and rownum=1  查找"空";
 ZB_ZFSQDNR :只有ZFFS 为直接支付01  没有02 所以叶为空。 
 授权支付的插入sql叶么有update ，只有3个insert 和1个日志一个delete

 /etc/init.d/cron空格stop
 /etc/init.d/cron start


 




