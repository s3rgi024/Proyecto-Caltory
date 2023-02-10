create database caltory;
use caltory;

create table tipo_documento
(
    id_tdoc int(3) not null auto_increment,
    tdoc varchar(6) not null,
    desc_tdoc varchar(30) not null,
    primary key (id_tdoc)
);

create table estados_usuarios
(
    id_estado int (1) not null,
    desc_estado varchar (10) not null,
    primary key (id_estado)
);

create table persona
(
    fk_id_tdoc varchar(15) not null,
    id_persona bigint(12) not null,
    nom1_persona varchar(25) not null,
    nom2_persona varchar(25) null,
    apellido1_persona varchar(25) not null,
    apellido2_persona varchar(25) null,
    correo_persona varchar(30) not null,
    direccion_sede varchar(50) not null,
    nom_usuario varchar(50) not null,
    pass_usuario varchar(50) not null,
    fk_id_estado boolean not null,
    primary key (id_persona)
);

create table roles
(
    id_rol int (4) not null auto_increment,
    nom_rol varchar (30) not null,
    primary key (id_rol)
);

create table permisos
(
    id_permiso int (4) not null auto_increment,
    fk_id_persona bigint(12) not null,
    fk_id_rol int (4) not null,
    primary key (id_permiso)
);

create table categoria
(
    id_categoria int (3) not null,
    nom_categoria varchar (25) not null,
    primary key (id_categoria)
);

create table inventario
(
    id_insumo int (6) not null auto_increment,
    nom_insumo varchar (45) not null,
    stock int(4) not null,
    valor_insumo double not null,
    fk_id_categoria int (10) not null,
    nom_proveedor varchar (10) not null,
    direccion_proveedor varchar (30) not null,
    primary key (id_insumo)
);

create table insumos_defectuosos
(
    fk_id_insumo int(6) not null,
    unidades_defectuosas int(6) not null,
    desc_insumo varchar (50) not null,
    primary key(fk_id_insumo)
);

create table historial
(
    id_historial int(5) not null auto_increment,
    fk_id_insumo int(6) not null,
    fecha_historial datetime not null,
    entrada int(4) not null,
    salida int(4) null,
    fk_unidades_defectuosas int(4) not null,
    stock int(5) not null,
    nom_persona_historial varchar (15) not null,
    apellido_persona_historial varchar (15) not null,
    primary key (id_historial)
);

insert into tipo_documento
values (101,'T.I', 'Tarjeta de Identidad'),
       (102,'C.C', 'Cédula de Ciudadanía'),
       (103,'C.E', 'Cédula de Extranjeria');

insert into estados_usuarios
values (01, 'Activo'),
       (02, 'Inactivo');

insert into persona
values (101, 1063147676, 'Daniel', 'David', 'Altamiranda', 'Galvis', 'ddaltamiranda6@misena.edu.co', 'Diagonal 38f Sur 1 -25E', 'daniel', 'daniel123', 1),
       (102, 1001347307, 'Juan', 'Camilo', 'Leon', 'Herrera', 'jcleon70@misena.edu.co', 'Diagonal 89A #115 55', 'juancamilo', 'juancamilo123', 1),
       (103, 1034685742, 'Sergio', 'Esteban', 'Chaparro', 'Noguera', 'serchap@misena.edu.co', 'Carrera 145 #72 21', 'sergioesteban', 'sergio123', 1),
       (101, 1034279644, 'Emir', 'Santiago', 'Alza', 'Sanchez', 'esalza@misena.edu.co', 'Carrera 103 #130D 21', 'santiago', 'santi123', 1);

insert into roles
values (201, 'Administrador'),
       (202, 'Operario'),
       (203, 'Vendedor');

insert into permisos
values (301, 1063147676, 203),
       (302, 1001347307, 202),
       (303, 1034685742, 201),
       (304, 1034279644, 201);

insert into categoria
values (401, 'Herramientas'),
       (402, 'Yeso'),
       (403, 'Estatuas');

insert into inventario
values (1001, 'Espatula', 10, 12000, 401, 'Tapitas', 'Calle 100 #135F 32'),
       (1002, 'Lamina de Yeso', 12, 63000, 402, 'Yesitos', 'Carrera 45 Sur #21'),
       (1003, 'Leon Asiatico', 24, 120000, 403, 'Zoo', 'Avenida 68 Calle 50'),
       (1004, 'Leona', 21, 125000, 403, 'Zoa', 'Avenida 68 Calle 30'),
       (1005, 'Pantera', 30, 220000, 401, 'zog', 'Avenida 15 Calle 23'),
       (1006, 'Molde', 38, 120000, 402, 'nee', 'Avenida 100');

insert into insumos_defectuosos
values (1001, 5, 'Espatulas rotas'),
       (1002, 3, 'Lamina con talco que generó mala calidad del yeso'),
       (1003, 1, 'Estatua en mal estado por golpe');


insert into historial
values (501, 1001, now(), 15, 0, 5, 10, 'Daniel', 'Altamiranda'),
       (502, 1002, now(), 15, 0, 3, 12, 'Sergio', 'Chaparro'),
       (503, 1003, now(), 25, 0, 1, 24, 'Santiago', 'Alza');