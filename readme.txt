Struktur Database barbershop-ci
-----------------------------
tbl_register
-----------------------------
id_register (pk) int(11)
nama_register    varchar(50)
date_register    date
time_register    time  
id_pangkas       int(11)
status		 enum (Y,N)
-----------------------------
-----------------------------
tbl_pangkas
-----------------------------
id_pangkas (pk)  int(11)
nama_pangkas	 varchar(50)
id_usia		 int(11)
harga		 int(11)
-----------------------------
-----------------------------
tbl_usia
-----------------------------
id_usia (pk)  	 int(11)
nama_usia	 varchar(50)
-----------------------------
-----------------------------
tbl_pengguna
-----------------------------
id_pengguna (pk) int(11)
nama_pengguna    int(10)
katasandi	 varchar(32)
-----------------------------

-----------------------------
Database 
-----------------------------
'username' => 'root',
'password' => '',
'database' => 'barbershop-ci',

-----------------------------
Login User
-----------------------------
'site' 	   => http://localhost/barbershop-ci/administrator
'username' => admin
'password' => admin123