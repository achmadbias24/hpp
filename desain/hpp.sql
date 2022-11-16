/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     16/11/2022 10:51:36                          */
/*==============================================================*/



/*==============================================================*/
/* Table: LEVEL                                                 */
/*==============================================================*/
create table LEVEL
(
   ID_LEVEL             int not null auto_increment comment '',
   NAMA_LEVEL           varchar(10)  comment '',
   primary key (ID_LEVEL)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null auto_increment comment '',
   ID_LEVEL             int  comment '',
   NAMA_USER            varchar(100)  comment '',
   USERNAME             varchar(50)  comment '',
   PASSWORD             varchar(255)  comment '',
   primary key (ID_USER)
);

alter table USER add constraint FK_USER_RELATIONS_LEVEL foreign key (ID_LEVEL)
      references LEVEL (ID_LEVEL) on delete restrict on update restrict;

