CREATE TABLE seguro
(
    id_seguro int not null AUTO_INCREMENT,
    tipo_seguro varchar(30),
    PRIMARY KEY (id_seguro)
);

CREATE TABLE credito
(
    id_credito int not null AUTO_INCREMENT,
    tipo_credito varchar(50),
    tasa_base integer,
    tasa_inc_anual integer,
    tasa_accesorios integer,
    costo_apertura integer,
    PRIMARY KEY (id_credito)
);

CREATE TABLE segu_cre
(
    id_segu_cre int not null AUTO_INCREMENT,
    ref_seguro int,
    ref_credito int,
    PRIMARY KEY(id_segu_cre),
    FOREIGN KEY (ref_seguro) REFERENCES seguro(id_seguro),
    FOREIGN KEY (ref_credito) REFERENCES credito(id_credito)
);

CREATE TABLE tipo_moto
(
    id_tipo INT NOT NULL AUTO_INCREMENT,
    tipo VARCHAR(30),
    PRIMARY KEY (id_tipo)
);

CREATE TABLE anios
(
    id_anios int NOT null AUTO_INCREMENT,
    anios int,
    PRIMARY KEY (id_anios)
);

CREATE TABLE anio_credito
(
    id_anio_credito int NOT NULL AUTO_INCREMENT,
    ref_anios int,
    ref_credito int,
    PRIMARY KEY(id_anio_credito),
    FOREIGN KEY(ref_anios) REFERENCES anios(id_anios),
    FOREIGN KEY(ref_credito) REFERENCES credito(id_credito)
);
 
CREATE TABLE alta_equipo
(
    id_equipo INT NOT NULL AUTO_INCREMENT,
    modelo varchar(30),
    privilegio   INT(2),
    ref_tipo int,
    ref_anios int,
    PRIMARY KEY(id_equipo),
    FOREIGN KEY (ref_tipo) REFERENCES tipo_moto(id_tipo),
    FOREIGN KEY (ref_anios) REFERENCES anios(id_anios)
);


CREATE TABLE alta_personal
(
    id_personal int not null AUTO_INCREMENT,
    nombre_asesor varchar(60),
    telefono integer,
    email varchar(50),
    celular integer,
    PRIMARY KEY (id_personal)
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
    usuarios varchar(10),
    pass varchar(10),
    permisos varchar(10)
);


CREATE TABLE tasas
(
    id_tasas serial not null primary key,
    ref_credito int not null REFERENCES credito (id_credito) ON DELETE CASCADE ON UPDATE CASCADE,
    tipo_cotizacion varchar(50),
    tasa_base integer,
    tasa_inc_anual integer,
    tasa_accesorios integer,
    costo_apertura integer,
    descuento_apertura integer,
    t_seguro_anual integer
);

CREATE TABLE cotizaciones
(
    id_cotizaciones serial primary key not null,
    ref_equipo int not null REFERENCES  alta_equipo (id_equipo)ON DELETE CASCADE ON UPDATE CASCADE,
    ref_personal int not null REFERENCES alta_personal(id_personal) ON DELETE CASCADE ON UPDATE CASCADE,
    ref_accesorios int not null REFERENCES accesorios (id_accesorios)ON DELETE CASCADE ON UPDATE CASCADE,
    ref_tasas int not null REFERENCES tasas (id_tasas)ON DELETE CASCADE ON UPDATE CASCADE,
    ref_cliente int not null REFERENCES alta_clientes (id_clientes)ON DELETE CASCADE ON UPDATE CASCADE,
    ref_credito int not null REFERENCES credito (id_credito)ON DELETE CASCADE ON UPDATE CASCADE,
    fecha_cotizacion date,
    enganche integer
);

SELECT * from cotizaciones INNER JOIN alta_equipo ON alta_equipo.id_equipo = cotizaciones.ref_equipo;


SELECT * FROM anios INNER JOIN alta_equipo on alta_equipo.ref_anios= anios.id_anios WHERE alta_equipo.modelo='GSX150 GIXXER SF'

