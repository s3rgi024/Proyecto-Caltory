create database caltory;
use caltory;

create table tipo_documento
(

    tdoc varchar(10) not null,
    desc_tdoc varchar(30) not null,
    estado_tdoc boolean not null,
    primary key (tdoc)

);

create table persona
(
    pk_fk_tdoc varchar (10) not null,
    id_persona bigint (12) not null,
    nom1_persona varchar (25) not null,
    nom2_persona varchar (25) null,
    apellido1_persona varchar (25) not null,
    apellido2_persona varchar (25) null,
    telefono_persona bigint (12) not null,
    correo_persona varchar (30) not null,
    primary key (pk_fk_tdoc, id_persona)
);

create table roles
(
    nom_rol varchar (15) not null,
    estado_rol boolean not null,
    primary key (nom_rol)
);

create table proveedor
(

    tdoc_proveedor varchar (10) not null,
    id_proveedor bigint (12) not null,
    direccion_sede varchar(50) not null,
    primary key (tdoc_proveedor,id_proveedor)

);

create table cuentas_usuario
(

    nom_usuario varchar (30) not null unique,
    pass_usuario varchar (30) not null,
    foto_usu varchar (40) null,
    primary key (nom_usuario, pass_usuario)

);

create table cuentas_inhabilitadas
(
    fk_pk_nom_usuario varchar (30) not null unique,
    fk_pk_pass_usuario varchar (30) not null,
    primary key (fk_pk_nom_usuario, fk_pk_pass_usuario)
);

create table empleado
(
    tdoc_empleado varchar (10) not null,
    id_empleado bigint (12) not null,
    fk_pk_nom_usuario varchar (30) not null unique,
    fk_pass_usuario varchar (30) not null,
    fk_rol varchar (15) not null,
    primary key (tdoc_empleado, id_empleado, fk_pk_nom_usuario)
);

create table cliente
(

    tdoc_cliente varchar (10) not null,
    id_cliente bigint (12) not null,
    primary key (tdoc_cliente, id_cliente)

);

create table insumos
(

    cod_insumo int (6) not null auto_increment,
    nom_insumo varchar (45) not null,
    valor_insumo double not null,
    cant_insu_disp int (5) not null,
    proveedor_tdoc varchar (10) not null,
    proveedor_id bigint (12) not null,
    fecha_ingreso date not null,
    primary key (cod_insumo)

);

create table factura_venta
(

    n_factura_vent int (6) not null,
    cliente_tdoc varchar (10) not null,
    cliente_id bigint (12) not null,
    empleado_tdoc_v varchar (10) not null,
    empleado_id_v bigint (12) not null,
    primary key (n_factura_vent)

);

create table factura
(

    n_factura int (6) not null auto_increment,
    fecha_factura date,
    subtotal double not null,
    iva double not null,
    total_factura double not null,
    primary key (n_factura)

);

create table factura_productos
(

    fk_pk_n_factura int (6) not null,
    fk_pk_cod_producto int (6) not null,
    cantidad_prod int (3) not null,
    valor_prod_cant double not null,
    primary key (fk_pk_cod_producto, fk_pk_n_factura)

);

create table productos
(

    cod_producto int (6) not null auto_increment,
    nom_producto varchar (45) not null,
    valor_producto double not null,
    cant_prod_disp int (3) not null,
    fk_tipo_prod varchar (20) not null,
    fecha_ingreso_prod date not null,
    primary key (cod_producto)

);

create table prod_defectuoso
(
    fk_pk_cod_producto int (6) not null,
    fk_nom_producto varchar (45) not null,
    fk_valor_producto double not null,
    fk_cant_prod_def int (3) not null,
    fk_tipo_prod_def varchar (20) not null,
    fk_fecha_ingreso_prod date not null,
    primary key (fk_pk_cod_producto)
);

create table categoria_producto
(

    tipo_prod varchar (20) not null,
    estado_tprod boolean not null,
    primary key (tipo_prod)

);


alter table persona 
add constraint fk_tdoc_persona
foreign key (pk_fk_tdoc)
references tipo_documento (tdoc);

alter table empleado
add constraint fk_cuentas_usuarios
foreign key (fk_pk_nom_usuario, fk_pass_usuario)
references cuentas_usuario (nom_usuario, pass_usuario);

alter table empleado
add constraint fk_nom_rol
foreign key (fk_rol)
references roles (nom_rol);

alter table proveedor
add constraint fk_persona_proveedor
foreign key (tdoc_proveedor, id_proveedor)
references persona (pk_fk_tdoc, id_persona);

alter table empleado
add constraint fk_persona_empleado
foreign key (tdoc_empleado, id_empleado)
references persona (pk_fk_tdoc, id_persona);

alter table cliente
add constraint fk_persona_cliente
foreign key (tdoc_cliente, id_cliente)
references persona (pk_fk_tdoc, id_persona);

alter table insumos
add constraint fk_insumo_proveedor
foreign key (proveedor_tdoc, proveedor_id)
references proveedor (tdoc_proveedor, id_proveedor);

alter table factura_venta
add constraint fk_factura_factura
foreign key (n_factura_vent)
references factura (n_factura);

alter table factura_venta
add constraint fk_fact_empleado
foreign key (empleado_tdoc_v, empleado_id_v)
references empleado (tdoc_empleado, id_empleado);

alter table factura_venta
add constraint fk_factura_cliente
foreign key (cliente_tdoc, cliente_id)
references cliente (tdoc_cliente, id_cliente);

alter table factura_productos
add constraint fk_pro_fact
foreign key (fk_pk_n_factura)
references factura (n_factura);

alter table factura_productos
add constraint fk_factpro_prod
foreign key (fk_pk_cod_producto)
references productos (cod_producto);

alter table productos
add constraint fk_tprod_prod
foreign key (fk_tipo_prod)
references categoria_producto (tipo_prod);

alter table prod_defectuoso
add constraint fk_prods_defectuosos
foreign key (fk_pk_cod_producto)
references productos (cod_producto);

alter table cuentas_inhabilitadas
add constraint fk_cuentas_desactivadas
foreign key (fk_pk_nom_usuario, fk_pk_pass_usuario)
references cuentas_usuario (nom_usuario, pass_usuario);

insert into roles
values ('Administrador', 1),
('Operario', 1),
('Vendedor', 1);

insert into tipo_documento
values ('C.C', 'Cedula De Ciudadania', 1),
('C.E', 'Cedula De Extranjeria', 1),
('T.I', 'Tarjeta De Identidad', 1),
('N.I.T', 'No. identificacion tributaria', 1);

insert into cuentas_usuario
values ('admin12', '12345', null),
('operario21', '2468', null),
('vendedor31', '1524', null);

insert into persona
values ('C.C', 1024635847, 'Juan', 'David', 'Rodriguez', 'Orquijo', 3137249586, 'juanda@gmail.com'),
('C.E', 67158945, 'Karen', 'Juliana', 'Castillo', 'Rincon', 3217684595, 'kaju05@gmail.com'),
('N.I.T', 13354789561, 'Santiago', 'Esteban', 'Buitrago', 'Gomez', 3112756859, 'sanbu32@gmail.com');

insert into empleado
values ('C.C', 1024635847, 'admin12', '12345', 'Administrador'),
('C.E', 67158945, 'operario21', '2468', 'Operario'),
('N.I.T', 13354789561, 'vendedor31', '1524', 'Vendedor');

insert into categoria_producto
values ('Estatua',1),
('Herramienta',1);

insert into productos
values (1, 'Estatuas-40cm', 50.000, 5, 'Estatua', now()),
(2, 'Martillo', 15.000, 3, 'Herramienta', now());

select id_empleado, nom1_persona, nom2_persona, apellido1_persona, apellido2_persona, fk_pk_nom_usuario, fk_rol
from empleado
inner join persona
on id_empleado=id_persona
where fk_rol='Administrador' or fk_rol='Operario' or fk_rol='Vendedor';