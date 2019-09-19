use shahin;

drop table if exists role;
create table role(
   id int(10) primary key auto_increment,
   name varchar(20) unique
);

insert into role(name)values('Administretor');
insert into role(name)values('Manager');


drop table if exists user;
create table user(
	id int(10) primary key auto_increment,
	username varchar(50),
	password varchar(50),
	role_id int(10)
);
insert into user(username,password,role_id)values('shafin ahmmed','123456',1);


drop table if exists uom;
create table uom(
   uom_id int(255) primary key auto_increment,
   uom_name varchar(255)
);

insert into uom(uom_name) values('piece');
insert into uom(uom_name) values('1K');
insert into uom(uom_name) values('500pc');


drop table if exists company;
create table company( 
  id int(10) primary key auto_increment,
  company_name varchar(20),
  phone varchar(50),
  email varchar(50)
 
  
);
insert into company(company_name,phone,email)values("Health Care Ltd","02885642","healthcare@hotmail.com");


drop table if exists supplier;
create table supplier(
 
  id int(10) primary key auto_increment,  
  supplier_name varchar(50),
  phone varchar(50),
  email varchar(50)
   
);
insert into supplier(supplier_name,phone,email)values("Alom","01721568988","alom@gmail");



drop table if exists product;
create table product(
 
  id int(10) primary key auto_increment,
  company_id int(10),  
  name varchar(50) not null,
  price varchar(50),
  qty double(10,2),
  uom varchar(10)
   
);
insert into product(company_id,name,price,qty,uom)values(1,"Rocal-D Vita","210",1,"piece"),
(2,"Finix 20mg","500",1,"Box"),
(1,"Sergel 20mg","700",1,"Box"),
(1,"Sergel 40mg","1000",1,"Box");


drop table if exists purchase_order;
create table purchase_order(
 
  id int(10) primary key auto_increment,  
  supplier_id int(20),  
  user_id int(20),  
  purchase_date timestamp  
);
insert into purchase_order(supplier_id,user_id,purchase_date)values(1,1,'23/09/2018');
insert into purchase_order(supplier_id,user_id,purchase_date)values(1,2,'25/09/2019');
insert into purchase_order(supplier_id,user_id,purchase_date)values(1,3,'29/09/2018');


drop table if exists purchase_details;
create table purchase_details(
 
  id int(10) primary key auto_increment,  
  purchase_id int(20),
  product_id int(20), 
  uom varchar(20),
  qty double(10,2),
  price double(10,2)
);
insert into purchase_details(purchase_id,product_id,uom,qty,price)values(1,1,'piece',2,210),
	(1,3,'Box',2,700),
	(1,4,'Box',2,1000),
	(1,2,'Box',2,500);


drop table if exists purchase_return;
create table purchase_return(
 
  id int(10) primary key auto_increment,  
  product_id int(20),
  return_date timestamp,  
  purchase_id int(20)
);
insert into purchase_return(product_id,return_date,purchase_id)values(1,'23/09/2018',1);

drop table if exists customer;
create table customer(
 
  id int(10) primary key auto_increment,  
  name varchar(20),
  phone varchar(15),
  email varchar(15),
  address text

);
insert into customer(name,phone,email,address)values("rohim","0288021414","alom@gmail","Dhaka");

drop table if exists sales;
create table sales(
 
  id int(10) primary key auto_increment,  
  customer_id int(20),
  sales_date timestamp,  
  user_id int(20)
);
insert into sales(customer_id,sales_date,user_id)values(1,'23/09/2018',1);


drop table if exists sales_details;
create table sales_details( 
  id int(10) primary key auto_increment,  
  sales_id int(20),
  product_id int(20),  
  uom varchar(20),
  qty double(10,2),
  price double(10,2)
  );
insert into sales_details(sales_id,product_id,uom,qty,price)values(1,1,"piece",2,10);


drop table if exists sales_return;
create table sales_return(
 
  id int(10) primary key auto_increment, 
  product_id int(20),  
  uom varchar(20),
  qty double,
  price double(10,2)
  
);
insert into sales_return(product_id,uom,qty,price)values(1,'piece',1,2);


drop table if exists stock;
create table stock(
 
  id int(10) primary key auto_increment,  
  product_id int(20),
  uom varchar(20),
  qty double
 
);
insert into stock(product_id,uom,qty)values(1,'box',11);


drop table if exists Medicine;
create table Medicine(
      
  id int(10) primary key auto_increment,
  company_id int(10),  
  name varchar(50) not null,
  old_price varchar(50),
  new_price varchar(50) not null,
  qty double(10,2),
  uom varchar(10)
    
);
insert into Medicine(company_id,name,old_price,new_price,qty,uom)values(1,"Rocal-D Vita","150","210",1,"piece"),
(2,"Finix 20mg","400","500",1,"Box"),
(1,"Sergel 20mg","600","700",1,"Box"),
(1,"Sergel 40mg","900","1000",1,"Box");




