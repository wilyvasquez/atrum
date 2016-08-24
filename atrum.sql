CREATE TABLE alta_equipo
(
    id_equipo serial not null primary key,
    tipo_equipo varchar (50),
    modelo varchar(50),
    anio int,
    transmicion varchar(50),
    tipo_motor varchar(50),
    num_cilindros int,
    diametro int,
    carrera varchar(50),
    desplazamiento varchar(50),
    relacion_compresion varchar(50),
    sistema_lubricacion varchar(50),
    sistema_combustible varchar(50),
    sistema_arranque varchar(50),
    observaciones text,
    costo_unidad integer,
    seguro_amplio integer,
    seguro_foraneo integer,
    seguro_limitado integer,
    foto LONGBLOB
);

CREATE TABLE alta_personal
(
    id_personal serial not null primary key,
    nombre_com varchar(60),
    telefono integer,
    email varchar(50),
    celular integer
);

CREATE TABLE accesorios
(
    id_accesorios serial not null primary key,
    accesorios varchar(50),
    precio integer,
    cantidad int,
    total integer
);

CREATE TABLE alta_clientes
(
    id_clientes serial not null primary key,
    nombre_com varchar(60),
    num_cotizacion int,
    telefono integer
);

CREATE TABLE usuarios
(
    id_usuarios serial not null primary key,
    usuarios varchar(30),
    pass varchar(30),
    permisos varchar(20)
);

CREATE TABLE credito
(
    id_credito serial not null primary key,
    tipo_credito varchar(50)
);

CREATE TABLE seguro
(
    id_seguro serial not null primary key,
    tipo_seguro varchar(30),
    ref_credito int
);

CREATE TABLE tasas
(
    id_tasas serial not null primary key,
    ref_credito int,
    tipo_cotizacion varchar(50),
    tasa_base integer,
    tasa_inc_anual integer,
    tasa_accesorios integer,
    costo apertura integer,
    descuento_apertura integer,
    tasa_seguro_anual integer
)


CREATE TABLE anios
(
    id_anios serial not null primary key,
    ref_credito int,
    anio1 int
    anio2 int
    anio3 int
    anio4 int
);

CREATE TABLE cotizaciones
(
    id_cotizaciones serial primary key not null,
    ref_equipo int,
    ref_personal int not null REFERENCES alta_equipo (id_equipo)ON DELETE CASCADE ON UPDATE CASCADE,
    ref_accesorios int not null REFERENCES accesorios (id_accesorios)ON DELETE CASCADE ON UPDATE CASCADE,
    ref_tasas int not null REFERENCES tasas (id_tasas)ON DELETE CASCADE ON UPDATE CASCADE,
    ref_cliente int not null REFERENCES alta_clientes (id_clientes)ON DELETE CASCADE ON UPDATE CASCADE,
    ref_credito int not null REFERENCES credito (id_credito)ON DELETE CASCADE ON UPDATE CASCADE,
    fecha_cotizacion date,
    enganche integer
);

SELECT * from cotizaciones INNER JOIN alta_equipo ON alta_equipo.id_equipo = cotizaciones.ref_equipo;