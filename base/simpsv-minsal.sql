/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     13/11/2018 20:25:28                          */
/*==============================================================*/


drop table if exists cliente;

drop table if exists diploma;

drop table if exists empresa;

drop table if exists expediente;

drop table if exists solicitud;

drop table if exists vehiculo;

/*==============================================================*/
/* Table: cliente                                               */
/*==============================================================*/
create table cliente
(
   idcliente            int(8) not null auto_increment,
   nombre               varchar(60),
   apellido             varchar(60),
   dui                  varchar(9),
   nit                  varchar(17),
   cargo                varchar(30),
   primary key (idcliente)
);

/*==============================================================*/
/* Table: diploma                                               */
/*==============================================================*/
create table diploma
(
   iddiploma            int(16) not null auto_increment,
   idsolicitud          int,
   fechainicio          date,
   fechaexpiracion      date,
   primary key (iddiploma)
);

/*==============================================================*/
/* Table: empresa                                               */
/*==============================================================*/
create table empresa
(
   idempresa            int(16) not null auto_increment,
   idcliente            int,
   nombreempresa        varchar(50),
   razonsocial          varchar(50),
   emplfemenino         int,
   emplmasculino        int,
   capital              decimal(16),
   nitempresa           decimal(17),
   direccion            varchar(50),
   municipio            varchar(30),
   primary key (idempresa)
);

/*==============================================================*/
/* Table: expediente                                            */
/*==============================================================*/
create table expediente
(
   idexpediente         int(16) not null auto_increment,
   idvehiculo           int,
   fechaapertura        date,
   primary key (idexpediente)
);

/*==============================================================*/
/* Table: solicitud                                             */
/*==============================================================*/
create table solicitud
(
   idsolicitud          int(16) not null auto_increment,
   idexpediente         int,
   fechaingreso         date,
   fecharesolucion      date,
   resolucion           varchar(60),
   estado               varchar(30),
   primary key (idsolicitud)
);

/*==============================================================*/
/* Table: vehiculo                                              */
/*==============================================================*/
create table vehiculo
(
   idvehiculo           int(16) not null auto_increment,
   idempresa            int,
   modelo               varchar(30),
   placa                varchar(8),
   ano                  int,
   capacidad            decimal(16,0),
   tipo                 varchar(30),
   refigeracion         varchar(2),
   primary key (idvehiculo)
);

alter table diploma add constraint fk_se_genera foreign key (idsolicitud)
      references solicitud (idsolicitud) on delete restrict on update restrict;

alter table empresa add constraint fk_representa foreign key (idcliente)
      references cliente (idcliente) on delete restrict on update restrict;

alter table expediente add constraint fk_tiene foreign key (idvehiculo)
      references vehiculo (idvehiculo) on delete restrict on update restrict;

alter table solicitud add constraint fk_se_crea foreign key (idexpediente)
      references expediente (idexpediente) on delete restrict on update restrict;

alter table vehiculo add constraint fk_posee foreign key (idempresa)
      references empresa (idempresa) on delete restrict on update restrict;

