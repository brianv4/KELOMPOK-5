/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     23/10/2019 9:06:06                           */
/*==============================================================*/


drop table if exists MATERI_KURSUS;

drop table if exists MATERI_PELATIHAN;

drop table if exists MENDAPATKAN1;

drop table if exists MENDAPATKAN2;

drop table if exists PESERTA_KURSUS;

drop table if exists PESERTA_PELAT;

drop table if exists SERTIFIKAT_KURSUS;

drop table if exists SERTIFIKAT_PELATIHAN;

drop table if exists UJIAN_KURSUS;

drop table if exists UJIAN_PELATIHAN;

drop table if exists USER;

/*==============================================================*/
/* Table: MATERI_KURSUS                                         */
/*==============================================================*/
create table MATERI_KURSUS
(
   ID_MATERIKURSUS      int not null,
   NAMA_KURSUS          varchar(255),
   primary key (ID_MATERIKURSUS)
);

/*==============================================================*/
/* Table: MATERI_PELATIHAN                                      */
/*==============================================================*/
create table MATERI_PELATIHAN
(
   ID_MATERIPELATIHAN   int not null,
   NAMA_PELATIHAN       varchar(255),
   primary key (ID_MATERIPELATIHAN)
);

/*==============================================================*/
/* Table: MENDAPATKAN1                                          */
/*==============================================================*/
create table MENDAPATKAN1
(
   NIK_KURSUS           numeric(16,0) not null,
   ID_MATERIKURSUS      int not null,
   HARI                 varchar(10),
   TANGGAL              datetime,
   primary key (NIK_KURSUS, ID_MATERIKURSUS)
);

/*==============================================================*/
/* Table: MENDAPATKAN2                                          */
/*==============================================================*/
create table MENDAPATKAN2
(
   NIK2                 numeric(16,0) not null,
   ID_MATERIPELATIHAN   int not null,
   HARI_PELATIHAN       varchar(10),
   TANGGAL_PELATIHAN    datetime,
   primary key (NIK2, ID_MATERIPELATIHAN)
);

/*==============================================================*/
/* Table: PESERTA_KURSUS                                        */
/*==============================================================*/
create table PESERTA_KURSUS
(
   NIK_KURSUS           numeric(16,0) not null,
   NAMA_PESERTA         varchar(50),
   TEMPAT_LAHIR         varchar(20),
   TANGGAL_LAHIR        date,
   JENIS_KELAMIN        varchar(20),
   ALAMAT               varchar(255),
   KODEPOS              numeric(7,0),
   AGAMA                varchar(10),
   EMAIL                varchar(50),
   NOHP                 varchar(50),
   PROVINSI             varchar(30),
   PENDIDIKAN           varchar(10),
   JENIS_LEVEL          varchar(20),
   FILE_KTP             varchar(20),
   FILE_KK              varchar(20),
   FILE_IJAZAH          varchar(20),
   UNAMEK               varchar(20),
   PASSK                varchar(20),
   primary key (NIK_KURSUS)
);

/*==============================================================*/
/* Table: PESERTA_PELAT                                         */
/*==============================================================*/
create table PESERTA_PELAT
(
   NIK2                 numeric(16,0) not null,
   NAMA_PESERTAPELATIHAN varchar(100),
   TEMPAT_LAHIRPELATIHAN varchar(20),
   TANGGAL_LAHIRPELATIHAN date,
   JENIS_KELAMINPELATIHAN varchar(1),
   ALAMAT_PESERTAPELATIHAN varchar(255),
   KODEPOS_PELATIHAN    varchar(7),
   AGAMA_PELATIHAN      varchar(50),
   EMAIL_PELATIHAN      varchar(50),
   NOHP_PELATIHAN       varchar(50),
   PROVINSI_PELATIHAN   varchar(50),
   PENDIDIKAN_PELATIHAN varchar(8),
   FILE_KTPKURSUS       varchar(10),
   FILE_KKPELATIHAN     varchar(50),
   FILE_IJAZAHPELATIHAN varchar(50),
   PASSWORD_KURSUS      varchar(20),
   PASSP                varchar(20),
   primary key (NIK2)
);

/*==============================================================*/
/* Table: SERTIFIKAT_KURSUS                                     */
/*==============================================================*/
create table SERTIFIKAT_KURSUS
(
   NOMOR_SERTIFIKATKURSUS int not null,
   ID_USER              int not null,
   ID_UJIANKURSUS       int,
   TEMPAT_SERTIFIKATKURSUS varchar(20),
   TANGGAL_SERTIFIKATKURSUS date,
   primary key (NOMOR_SERTIFIKATKURSUS)
);

/*==============================================================*/
/* Table: SERTIFIKAT_PELATIHAN                                  */
/*==============================================================*/
create table SERTIFIKAT_PELATIHAN
(
   NOMOR_SERTIFIKATPELATIHAN int not null,
   ID_USER              int,
   ID_UJIANPELATIHAN    int not null,
   TEMPAT_SERTIFIKATPELATIHAN varchar(20),
   TANGGAL_SERTIFIKATPELATIHAN date,
   primary key (NOMOR_SERTIFIKATPELATIHAN)
);

/*==============================================================*/
/* Table: UJIAN_KURSUS                                          */
/*==============================================================*/
create table UJIAN_KURSUS
(
   ID_UJIANKURSUS       int not null,
   NIK_KURSUS           numeric(16,0) not null,
   NILAI_KURSUS         int,
   primary key (ID_UJIANKURSUS)
);

/*==============================================================*/
/* Table: UJIAN_PELATIHAN                                       */
/*==============================================================*/
create table UJIAN_PELATIHAN
(
   ID_UJIANPELATIHAN    int not null,
   NIK2                 numeric(16,0) not null,
   NILAI_PELATIHAN      int,
   primary key (ID_UJIANPELATIHAN)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null,
   NAMA_USER            varchar(100),
   ALAMAT_USER          varchar(255),
   NOHP_USER            varchar(15),
   LEVEL                varchar(10),
   USERNAME             varchar(20),
   PASSWORD             varchar(20),
   primary key (ID_USER)
);

alter table MENDAPATKAN1 add constraint FK_MENDAPATKAN1 foreign key (NIK_KURSUS)
      references PESERTA_KURSUS (NIK_KURSUS) on delete restrict on update restrict;

alter table MENDAPATKAN1 add constraint FK_MENDAPATKAN2 foreign key (ID_MATERIKURSUS)
      references MATERI_KURSUS (ID_MATERIKURSUS) on delete restrict on update restrict;

alter table MENDAPATKAN2 add constraint FK_MENDAPATKAN3 foreign key (NIK2)
      references PESERTA_PELAT (NIK2) on delete restrict on update restrict;

alter table MENDAPATKAN2 add constraint FK_MENDAPATKAN4 foreign key (ID_MATERIPELATIHAN)
      references MATERI_PELATIHAN (ID_MATERIPELATIHAN) on delete restrict on update restrict;

alter table SERTIFIKAT_KURSUS add constraint FK_MENANDATANGANI2 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table SERTIFIKAT_KURSUS add constraint FK_MENGHASILKAN2 foreign key (ID_UJIANKURSUS)
      references UJIAN_KURSUS (ID_UJIANKURSUS) on delete restrict on update restrict;

alter table SERTIFIKAT_PELATIHAN add constraint FK_MENANDATANGANI1 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table SERTIFIKAT_PELATIHAN add constraint FK_MENGHASILKAN1 foreign key (ID_UJIANPELATIHAN)
      references UJIAN_PELATIHAN (ID_UJIANPELATIHAN) on delete restrict on update restrict;

alter table UJIAN_KURSUS add constraint FK_MELAKSANAKAN1 foreign key (NIK_KURSUS)
      references PESERTA_KURSUS (NIK_KURSUS) on delete restrict on update restrict;

alter table UJIAN_PELATIHAN add constraint FK_MELAKSANAKAN2 foreign key (NIK2)
      references PESERTA_PELAT (NIK2) on delete restrict on update restrict;

