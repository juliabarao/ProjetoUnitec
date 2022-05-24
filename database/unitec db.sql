create database unitec
default character set utf8mb4
default collate utf8mb4_general_ci;


use unitec;

/*TABELAS*/
create table contatos (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4;

create table basepesq (
id int not null auto_increment,
nome varchar (30) not null,
ramal char (9) not null,
primary key (id)
)default charset = utf8mb4 ;


/*ADICIONANDO DADOS DAS VITIMAS*/

 insert into contatos values
 (default, 'Jilia Barão', '4880-8202'),
 (default, 'Gabriel Tijon da Silva', '4880-8084'),
 (default, 'Alan Castro', '4880-8024'),
 (default, 'Andressa Kelly', '4880-8219'),
 (default, 'Matheus Vilarim', '4880-8303'),
 (default, 'Hugo Silva', '4880-8205'),
 (default, 'tecnico 1', '4880-8292'),
 (default, 'tecnico 2', '4880-8036');
 
 insert into basepesq values
  (default, 'Jilia Barão', '4880-8202'),
 (default, 'Gabriel Tijon da Silva', '4880-8084'),
 (default, 'Alan Castro', '4880-8024'),
 (default, 'Andressa Kelly', '4880-8219'),
 (default, 'Matheus Vilarim', '4880-8303'),
 (default, 'Hugo Silva', '4880-8205'),
 (default, 'tecnico 1', '4880-8292'),
 (default, 'tecnico 2', '4880-8036');
 
 drop table contatos

 
 
