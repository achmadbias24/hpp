/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     17/11/2022 11:51:37                          */
/*==============================================================*/



/*==============================================================*/
/* Table: BARANG                                                */
/*==============================================================*/
create table BARANG
(
   ID_BARANG            int not null AUTO_INCREMENT comment '',
   ID_HPP               int  comment '',
   ID_USER              int  comment '',
   NAMA_BARANG          varchar(255)  comment '',
   JUMLAH_BARANG        int  comment '',
   HPP_BARANG           int  comment '',
   primary key (ID_BARANG)
);

/*==============================================================*/
/* Table: HPP                                                   */
/*==============================================================*/
create table HPP
(
   ID_HPP               int not null AUTO_INCREMENT comment '',
   KATUN                int  comment '',
   SUTRA                int  comment '',
   CAT                  int  comment '',
   PENDUKUNG            int  comment '',
   TENAGA               int  comment '',
   JEMURAN              int  comment '',
   MIKA                 int  comment '',
   PACKING              int  comment '',
   primary key (ID_HPP)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null AUTO_INCREMENT comment '',
   NAMA_USER            varchar(100)  comment '',
   USERNAME             varchar(50)  comment '',
   PASSWORD             varchar(255)  comment '',
   primary key (ID_USER)
);

alter table BARANG add constraint FK_BARANG_RELATIONS_HPP foreign key (ID_HPP)
      references HPP (ID_HPP) on delete restrict on update restrict;

alter table BARANG add constraint FK_BARANG_RELATIONS_USER foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

