This is some examples I used to my class

Before you use this codes, please set some important things below :

1. Use your own connection to apache server (local or online). If you use online server, use the connection given by administrator
2. Create these tables on your database : 
   - tb_mhs -> CREATE TABLE tb_mhs (id int(11) primary key not null auto_increment,nim varchar(14),nama varchar(255), foto varchar(255))
   - tb_user -> CREATE TABLE tb_user (id int(11) primary key not null auto_increment,nim varchar(14),paswd varchar(255),active tinyint(1),login_time datetime)
   
   Just copy and paste all of the code in this repositor to your htdocs folder
