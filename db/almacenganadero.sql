

create database ganadero;

use ganadero;

CREATE TABLE IF NOT EXISTS `usuario` (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombres varchar(110) NOT NULL,
  apellidos varchar(110) not null,
  correo varchar(123) NOT NULL,
  usuario varchar(100) NOT NULL,
  clave varchar(200) NOT NULL,
  primary key (id)
) ENGINE=INNOBD AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

create table rol(
idrol int not null auto_increment,
rol varchar(25) not null,
estado boolean not null,
primary key (idrol)
);


create table rol_usuario(
idrol int not null,
idusuario int NOT NULL,
fecha datetime not null
);


alter table rol_usuario
add constraint fk_rol_r
foreign key (idrol)
references rol (idrol);


ALTER TABLE USUARIO ENGINE=InnoDB;

alter table rol_usuario
add constraint fk_usuario_r
foreign key (idusuario)
references usuario (id);


ALTER TABLE rol CHANGE COLUMN `estado` `estado` ENUM('A', 'I') NOT NULL default 'A';

alter table rol_usuario add column estado boolean;

ALTER TABLE rol_usuario CHANGE COLUMN `estado` `estado` ENUM('A', 'I') NOT NULL default 'A';


insert into rol (rol) values ('Administrador');
insert into rol (rol) values ('Vendedor');


ALTER TABLE rol_usuario MODIFY fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP  
ON UPDATE CURRENT_TIMESTAMP;


insert into rol_usuario (idrol,idusuario) values (1,2);
