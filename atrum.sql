CREATE TABLE moto
(
    id_moto int not null AUTO_INCREMENT,
    tipo_moto varchar(30),
    modelo varchar(30),
    motor varchar(50),
    trasmision varchar(50),
    tipo_motor varchar(50),
    numero_cilindros varchar(50),
    diametro varchar(50),
    carrera varchar(50),
    desplazamiento varchar(50),
    relacion_compresion varchar(50),
    sistema_lubricacion varchar(50),
    sistema_combustible varchar(50),
    sistema_arranque varchar(50),
    tipo_img char(10),
    foto mediumblob,
    PRIMARY KEY (id_moto)
);
CREATE TABLE anio_moto
(
    id_anio_moto int not null AUTO_INCREMENT,
    anio varchar(30),
    PRIMARY KEY (id_anio_moto)
);
CREATE TABLE accesorio
(
    id_accesorio int not null AUTO_INCREMENT,
    nombre_accesorio varchar(30),
    precio float,
    cantidad int,
    total float,
    PRIMARY KEY (id_accesorio)
);
CREATE TABLE precio_moto
(
    id_precio_moto int not null AUTO_INCREMENT,
    precio int,
    PRIMARY KEY (id_precio_moto)
);
CREATE TABLE moto_anio_precio
(
    id_map int not null AUTO_INCREMENT,
    ref_moto int,
    ref_anio int,
    ref_precio int,
    PRIMARY KEY (id_map),
    FOREIGN KEY(ref_moto) REFERENCES moto(id_moto),
    FOREIGN KEY(ref_anio) REFERENCES anio_moto(id_anio_moto),
    FOREIGN KEY(ref_precio) REFERENCES precio_moto(id_precio_moto)
);
CREATE TABLE tipo_seguro
(
    id_seguro int not null AUTO_INCREMENT,
    tipo_seguro varchar(30),
    PRIMARY KEY (id_seguro)
);
CREATE TABLE tipo_credito
(
    id_credito int not null AUTO_INCREMENT,
    nombre_credito varchar(50),
    PRIMARY KEY (id_credito)
);
CREATE TABLE enganche
(
    id_enganche int not null AUTO_INCREMENT,
    enganche int,
    PRIMARY KEY (id_enganche)
);
CREATE TABLE credito_enganche
(
    id_credito_enganche int not null AUTO_INCREMENT,
    ref_credito int,
    ref_enganche int,
    PRIMARY KEY (id_credito_enganche),
    FOREIGN KEY(ref_credito) REFERENCES tipo_credito(id_credito),
    FOREIGN KEY(ref_enganche) REFERENCES enganche(id_enganche)
);
CREATE TABLE tiempo
(
    id_tiempo int not null AUTO_INCREMENT,
    tiempo varchar(50),
    PRIMARY KEY (id_tiempo)
);
CREATE TABLE credito_tiempo
(
    id_credito_tiempo int not null AUTO_INCREMENT,
    ref_tiempo int,
    ref_credito int,
    PRIMARY KEY (id_credito_tiempo),
    FOREIGN KEY(ref_tiempo) REFERENCES tiempo(id_tiempo),
    FOREIGN KEY(ref_credito) REFERENCES tiempo(id_tiempo)
);
CREATE TABLE moto_seguro
(
    id_moto_seguro int not null AUTO_INCREMENT,
    ref_seguro int,
    ref_moto int,
    precio_seguro int,
    PRIMARY KEY (id_moto_seguro),
    FOREIGN KEY(ref_moto) REFERENCES moto(id_moto),
    FOREIGN KEY(ref_seguro) REFERENCES tipo_seguro(id_seguro)
);
CREATE TABLE seguros
(
    id_seguros int not null AUTO_INCREMENT,
    nombre_seguro varchar(30),
    PRIMARY KEY (id_seguros)
);
CREATE TABLE seguro_credito
(
    id_seguro_credito int not null AUTO_INCREMENT,
    ref_credito int,
    ref_seguro int,
    PRIMARY KEY (id_seguro_credito),
    FOREIGN KEY(ref_credito) REFERENCES tipo_credito(id_credito),
    FOREIGN KEY(ref_seguro) REFERENCES tipo_seguro(id_seguro)
);
CREATE TABLE anios
(
    id_anios int not null AUTO_INCREMENT,
    anios varchar(30),
    meses int,
    PRIMARY KEY (id_anios)
);

CREATE TABLE anios_credito
(
    id_anios_credito int not null AUTO_INCREMENT,
    ref_credito int,
    ref_anios int,
    PRIMARY KEY (id_anios_credito),
    FOREIGN KEY(ref_credito) REFERENCES tipo_credito(id_credito),
    FOREIGN KEY(ref_anios) REFERENCES anios(id_anios)
);
CREATE TABLE placas
(
    id_placas int not null AUTO_INCREMENT,
    lugar_placas varchar(50),
    precio int,
    PRIMARY KEY (id_placas)
);



/*/////////////precio moto año/////////////////*/
SELECT * FROM moto_anio_precio INNER JOIN moto ON moto.id_moto= moto_anio_precio.ref_moto INNER JOIN anio_moto on anio_moto.id_anio_moto= moto_anio_precio.ref_anio INNER JOIN precio_moto on precio_moto.id_precio_moto= moto_anio_precio.ref_precio WHERE moto_anio_precio.id_map=2

-- //////////////// moto año////////////
SELECT * FROM moto_anio_precio INNER JOIN moto on moto.id_moto=moto_anio_precio.ref_moto 
INNER JOIN anio_moto on anio_moto.id_anio_moto= moto_anio_precio.ref_anio WHERE moto.id_moto=1

-- ///////////////////// credito seguro /////////
SELECT * FROM tipo_credito INNER JOIN seguro_credito on seguro_credito.ref_credito= tipo_credito.id_credito
INNER JOIN seguros on seguros.id_seguros= seguro_credito.ref_seguro WHERE tipo_credito.id_credito=1

-- //////////////////////credito años///////////////////////////
SELECT * FROM anios_credito INNER JOIN tipo_credito on tipo_credito.id_credito=anios_credito.ref_credito
INNER JOIN anios on anios.id_anios= anios_credito.ref_anios WHERE tipo_credito.id_credito=1

-- //////////////////////////moto seguro///////////////////////////////////
SELECT * FROM moto INNER JOIN moto_seguro on moto_seguro.ref_moto= moto.id_moto
INNER JOIN tipo_seguro on tipo_seguro.id_seguro= moto_seguro.ref_seguro WHERE moto.id_moto=1