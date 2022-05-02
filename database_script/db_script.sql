create database CGGraneros;

use CGGraneros;

create table CGTipo_usuario(
id_tip int not null auto_increment primary key,
nom_tip varchar(30) not null
);

insert into CGTipo_usuario(nom_tip) values('Administrador');
insert into CGTipo_usuario(nom_tip) values('Usuario');

create table CGuser(
id_usu int not null auto_increment primary key,
nom_usu varchar(30) not null,
ape_usu varchar(30) not null,
correo varchar(60) not null,
log_usu varchar(30) not null,
pas_usu varchar(64) not null,
id_tip int not null references CGTipo_usuario(id_tip),
toten varchar(64) not null,
modified timestamp not null
);

insert into CGuser(nom_usu, ape_usu, correo, log_usu, pas_usu, id_tip, toten) values('Wilkens', 'Mompoint', 'mwforlife24@gmail.com','mwforlife',sha1('21chichi'),1,sha1('mwforlife24@gmail.com'));


create table CGUbicacion(
id_ubi int not null auto_increment primary key,
nom_ubi varchar(30) not null
);


insert into CGUbicacion(nom_ubi) values('1 Basico A');
insert into CGUbicacion(nom_ubi) values('1 Basico B');
insert into CGUbicacion(nom_ubi) values('2 Basico A');
insert into CGUbicacion(nom_ubi) values('2 Basico B');
insert into CGUbicacion(nom_ubi) values('3 Basico A');
insert into CGUbicacion(nom_ubi) values('3 Basico B');
insert into CGUbicacion(nom_ubi) values('4 Basico A');
insert into CGUbicacion(nom_ubi) values('4 Basico B');
insert into CGUbicacion(nom_ubi) values('5 Basico A');
insert into CGUbicacion(nom_ubi) values('5 Basico B');
insert into CGUbicacion(nom_ubi) values('6 Basico A');
insert into CGUbicacion(nom_ubi) values('6 Basico B');
insert into CGUbicacion(nom_ubi) values('7 Basico A');
insert into CGUbicacion(nom_ubi) values('7 Basico B');
insert into CGUbicacion(nom_ubi) values('8 Basico A');
insert into CGUbicacion(nom_ubi) values('8 Basico B');
insert into CGUbicacion(nom_ubi) values('1 Medio A');
insert into CGUbicacion(nom_ubi) values('1 Medio B');
insert into CGUbicacion(nom_ubi) values('2 Medio A');
insert into CGUbicacion(nom_ubi) values('2 Medio B');
insert into CGUbicacion(nom_ubi) values('3 Medio');
insert into CGUbicacion(nom_ubi) values('4 Medio');
insert into CGUbicacion(nom_ubi) values('Prekinder A');
insert into CGUbicacion(nom_ubi) values('Prekinder B');
insert into CGUbicacion(nom_ubi) values('Kinder A');
insert into CGUbicacion(nom_ubi) values('Kinder B');
insert into CGUbicacion(nom_ubi) values('Laboratorio Computacion');
insert into CGUbicacion(nom_ubi) values('Sala Computacion');
insert into CGUbicacion(nom_ubi) values('Biblioteca');
insert into CGUbicacion(nom_ubi) values('Laboratorio');
insert into CGUbicacion(nom_ubi) values('Sala Musica');
insert into CGUbicacion(nom_ubi) values('Rectoria');
insert into CGUbicacion(nom_ubi) values('Recursos Humanos');
insert into CGUbicacion(nom_ubi) values('UTP');
insert into CGUbicacion(nom_ubi) values('PIE 1');
insert into CGUbicacion(nom_ubi) values('PIE 2');
insert into CGUbicacion(nom_ubi) values('RACK');



create table CGDocente(
id_doc int not null auto_increment primary key,
nom_doc varchar(30) not null,
ape_doc varchar(30) not null,
con_doc varchar(30) not null
);

create table CGTipoComponente(
id_tip_comp int not null auto_increment primary key,
nom_tip_comp varchar(30) not null
);

insert into CGTipoComponente(nom_tip_comp) values('PC');
insert into CGTipoComponente(nom_tip_comp) values('Monitor');
insert into CGTipoComponente(nom_tip_comp) values('Teclado');
insert into CGTipoComponente(nom_tip_comp) values('Mouse');
insert into CGTipoComponente(nom_tip_comp) values('Impresora');
insert into CGTipoComponente(nom_tip_comp) values('Parlante');
insert into CGTipoComponente(nom_tip_comp) values('Proyector');
insert into CGTipoComponente(nom_tip_comp) values('MousePad');
insert into CGTipoComponente(nom_tip_comp) values('WebCam');
insert into CGTipoComponente(nom_tip_comp) values('Adaptador HDMI - DP');
insert into CGTipoComponente(nom_tip_comp) values('Adaptador VGA');
insert into CGTipoComponente(nom_tip_comp) values('Adaptador Mini HDMI');
insert into CGTipoComponente(nom_tip_comp) values('Adaptador USB-c HDMI');  
insert into CGTipoComponente(nom_tip_comp) values('Notebook');
insert into CGTipoComponente(nom_tip_comp) values('Tablet');
insert into CGTipoComponente(nom_tip_comp) values('Atril');
insert into CGTipoComponente(nom_tip_comp) values('Microfono');
insert into CGTipoComponente(nom_tip_comp) values('UPS');
insert into CGTipoComponente(nom_tip_comp) values('Disco Duro');
insert into CGTipoComponente(nom_tip_comp) values('Puntero Laser');
insert into CGTipoComponente(nom_tip_comp) values('Copiadora CD');
insert into CGTipoComponente(nom_tip_comp) values('OTROS');

select * from CGTipoComponente;

create table EstadoComponentes(
id_est_comp int not null auto_increment primary key,
nom_est_comp varchar(30) not null
);

insert into EstadoComponentes(nom_est_comp) values('Optimo');
insert into EstadoComponentes(nom_est_comp) values('Bueno');
insert into EstadoComponentes(nom_est_comp) values('Regular');
insert into EstadoComponentes(nom_est_comp) values('Malo');


create table StatusComponentes(
id_sta_comp int not null auto_increment primary key,
nom_sta_comp varchar(30) not null
);

insert into StatusComponentes(nom_sta_comp) values('En Bodega');
insert into StatusComponentes(nom_sta_comp) values('En Uso');
insert into StatusComponentes(nom_sta_comp) values('En Reparacion');
insert into StatusComponentes(nom_sta_comp) values('En Baja');
insert into StatusComponentes(nom_sta_comp) values('En Prestamo');
insert into StatusComponentes(nom_sta_comp) values('En Mantenimiento');
insert into StatusComponentes(nom_sta_comp) values('En Asignacion');

create table CGComponentes(
id_comp int not null auto_increment primary key,
folio_comp varchar(30) not null,
nom_comp varchar(30) not null,
id_ubi int not null references CGUbicacion(id_ubi),
descripcion varchar(100) not null,
observacion varchar(100) not null,
id_tip_comp int not null references CGTipoComponente(id_tip_comp),
id_est_comp int not null references EstadoComponentes(id_est_comp),
id_sta_comp int not null references StatusComponentes(id_sta_comp),
);


insert into CGComponentes values(null,'PC100000', 'PC I5',1,'CPU I5, RAM 4G, Windows 10', 'Perfecto estado', 1,1,1);


create table CGEstado_Prestamo(
id_est_pres int not null auto_increment primary key,
nom_est_pres varchar(30) not null
);

insert into CGEstado_Prestamo(nom_est_pres) values('Prestado');
insert into CGEstado_Prestamo(nom_est_pres) values('Devuelto');
insert into CGEstado_Prestamo(nom_est_pres) values('En Espera');


create table CGPrestamos(
id_prest int not null auto_increment primary key,
id_comp int not null references CGComponentes(id_comp),
id_doc int not null references CGDocente(id_doc),
id_est int not null references CGEstado_Prestamo(id_est_pres),
fecha_prest date not null,
fecha_dev date,
observacion varchar(100) not null
);

select * from CGComponentes;

SELECT id_comp, folio_comp, nom_comp, nom_ubi, descripcion, observacion, nom_tip_comp, nom_est_comp, nom_sta_comp FROM CGComponentes,CGUbicacion, CGTipoComponente, EstadoComponentes, StatusComponentes WHERE CGComponentes.id_ubi = CGUbicacion.id_ubi AND CGComponentes.id_tip_comp = CGTipoComponente.id_tip_comp AND CGComponentes.id_est_comp = EstadoComponentes.id_est_comp AND CGComponentes.id_sta_comp = StatusComponentes.id_sta_comp;

create table deBaja(
id_baja int not null auto_increment primary key,
id_comp int not null references CGComponentes(id_comp),
fecha_baja date not null,
motivo varchar(100) not null
);