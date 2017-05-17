 INSERT INTO `T_OFFICES`
(
  OFFC_ID,
  OFFC_COUNTRY,
  OFFC_CITY,
  OFFC_DESCRIPTION
)
VALUES
(
  10,
  'España',
  'Madrid',
  'Oficina central'
);


 INSERT INTO `T_OFFICES`
(
  OFFC_ID,
  OFFC_COUNTRY,
  OFFC_CITY
)
VALUES
(
  11,
  'España',
  'Barcelona'
);



INSERT INTO `T_OFFICES` (
OFFC_ID, OFFC_COUNTRY, OFFC_CITY, OFFC_DESCRIPTION
)
VALUES 
(
20, 'Chile', 'Santiago', 'Oficina principal de Chile'
),
(
30, 'Argentina', 'Buenos Aires', NULL
);



#Seleccionar las columnas ID, COUNTRY y CITY de T_OFFICES, 
#con los registros que cumplen con contener la palabra 
#'Oficina' en el campo DESCRIPTION.



SELECT OFFC_ID, OFFC_COUNTRY, OFFC_CITY 
FROM T_OFFICES
WHERE OFFC_DESCRIPTION = '%Oficina%';

#Cambiar "Buenos aires" por "Buenos Aires" 
#en el registro correspondiente, utilizando 
#el ID en la condición.

UPDATE `T_OFFICES`
SET OFFC_CITY = 'Buenos Vientos'
WHERE OFFC_ID = 30;





#Crear la tabla T_KNOWLEDGE_LINES 
#y agregarle datos, utilizando 
#las siguientes sentencias:

CREATE TABLE `T_KNOWLEDGE_LINES` (
  `KNLN_ID` INT(11) NOT NULL,
  `KNLN_NAME` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`KNLN_ID`)
);

INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (10, 'Java');

INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (20, '.NET');

INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (30, 'Mainframe');

#Caso práctico 4-1: Uso de clave primaria

ALTER TABLE `T_OFFICES` 
ADD PRIMARY KEY (`OFFC_ID`);

CREATE TABLE `T_EMPLOYEES` (
  `EMPL_ID` INT NOT NULL AUTO_INCREMENT,
  `OFFC_ID` INT NOT NULL,
  `KNLN_ID` INT,
  `EMPL_FORNAME` VARCHAR(50) NOT NULL,
  `EMPL_MIDDLE_NAME` VARCHAR(50),
  `EMPL_SURNAME` VARCHAR(50) NOT NULL,
  `EMPL_NUMBER` INT NOT NULL,
  `EMPL_HIRE_DATE` DATETIME NOT NULL,
  `EMPL_MENTOR_ID` INT,
  PRIMARY KEY (`EMPL_ID`));


#Insertar en la tabla T_EMPLOYEES el siguiente registro:
#OFFC_ID: 10
#KNLN_ID: 10
#FORNAME: Juan

#SURNAME: Pérez
#NUMBER: 150
#HIRE_DATE: 15/abr/2005

#Tener en cuenta lo siguiente:
#La clave primaria es autogenerada.
#Los campos no informados se omiten en la sentencia SQL.
#Para especificar una fecha sin hora, se hace en modo texto con formato yyyy-mm-dd





INSERT INTO `T_EMPLOYEES` (
`OFFC_ID`,`KNLN_ID`,`EMPL_FORNAME`, `EMPL_MIDDLE_NAME`, `EMPL_SURNAME`,`EMPL_NUMBER`,`EMPL_HIRE_DATE`, `EMPL_MENTOR_ID`
)
VALUES 
(
10, 10, 'Juan', NULL, 'Pérez', 150, '2005-04-15', NULL
);


#Caso práctico 4-2: Uso de relaciones
#Resumen del ejercicio:
#Utilizar una tabla con clave primaria autogenerada.
#Insertar registros basado en la relación entre tablas.


#Insertar en la tabla T_EMPLOYEES el siguiente registro:
#Office: la de Barcelona
#Knowledge line: .NET
#FORNAME: Luis
#SURNAME: González
#NUMBER: 160
#HIRE_DATE: 18/may/2006
#Mentor: Juan Pérez
#Tened en cuenta que en las relaciones se especifica como FK la PK del registro asociado.


USE db_empl;
 
INSERT INTO `T_EMPLOYEES` (
`OFFC_ID`,`KNLN_ID`,`EMPL_FORNAME`, `EMPL_MIDDLE_NAME`, `EMPL_SURNAME`,`EMPL_NUMBER`,`EMPL_HIRE_DATE`, `EMPL_MENTOR_ID`
)
VALUES 
( 
11,
#No estem posant EMPL_ID perquè és la primària
20,
'Luís',
NULL,
'Gonzalez',
161,
'2006-05-06',
2
);

 #Insertar en la tabla T_EMPLOYEES otro registro:
#Office: la de Santiago de Chile
#FORNAME: Pedro
#SURNAME: García
#NUMBER: 180
#HIRE_DATE: 18/may/2006

 
INSERT INTO `T_EMPLOYEES` (
`OFFC_ID`,`KNLN_ID`,`EMPL_FORNAME`, `EMPL_MIDDLE_NAME`, `EMPL_SURNAME`,`EMPL_NUMBER`,`EMPL_HIRE_DATE`, `EMPL_MENTOR_ID`
)
VALUES 
( 
20,
#No estem posant EMPL_ID perquè és la primària
NULL,
'Pedro',
NULL,
'GARCIA',
180,
'2006-05-18',
NULL
);



#Caso práctico 4-3: Tipos de relaciones
#Crear taula de projectes
CREATE TABLE `T_PROJECTS` (
  `PRJT_ID` INT NOT NULL  AUTO_INCREMENT,
  `PRJT_CODE` VARCHAR(16) NOT NULL,
  `PRJT_NAME` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`PRJT_ID`));
  
  
  #Crear la tabla de relación intermedia entre proyectos y empleados:
CREATE TABLE `T_PROJECTS_EMPLOYEES` (
  `PRJT_ID` INT NOT NULL,
  `EMPL_ID` INT NOT NULL,
  PRIMARY KEY (`PRJT_ID`,`EMPL_ID`));
  
  #Añadir datos de proyectos:
#CODE: EXT-001000-01234, NAME: Gestión de usuarios
#CODE: INT-001000-03200, NAME: Cursos de formación

INSERT INTO `T_PROJECTS`
(PRJT_CODE, PRJT_NAME) 
VALUES
('EXT-001000-01234', 'Gestión de usuarios'),
('INT-001000-03200', 'Cursos de formación');

#Añadir asociaciones entre proyecto y empleado:
#Juan Pérez se asocia con los proyectos Gestión de usuarios y Cursos de formación
#Luis González se asocia al proyecto Gestión de usuarios.
INSERT INTO `T_PROJECTS_EMPLOYEES`
(PRJT_ID,EMPL_ID) 
VALUES
(2,1),
(2,2),
(3,1);


#Caso práctico 5-1: Creación de claves foráneas
#Resumen del ejercicio:
#Crear las claves foráneas especificadas en el manual para tablas del modelo.
#Comprobar  la integridad referencial.
#Crear las claves foráneas de una relación many-to-many.

ALTER TABLE T_EMPLOYEES 
    ADD INDEX FK_EMPL_KNLN (KNLN_ID), 
    ADD CONSTRAINT FK_EMPL_KNLN 
        FOREIGN KEY (KNLN_ID) 
        REFERENCES T_KNOWLEDGE_LINES (KNLN_ID);
        
        
ALTER TABLE T_EMPLOYEES 
    ADD INDEX FK_EMPL_OFCC (OFFC_ID), 
    ADD CONSTRAINT FK_EMPL_OFCC 
        FOREIGN KEY (OFFC_ID) 
        REFERENCES T_OFFICES (OFFC_ID);



#Comprovar que dona error i per què? 
#Modificar la oficina del usuario Juan Pérez por el valor 40 (que no existe).
 UPDATE T_EMPLOYEES
 SET OFFC_ID = 40
 WHERE EMPL_ID = 2;
 
 #Eliminar la oficina 10, que es referenciada por un usuario.
 DELETE FROM T_OFFICES
 WHERE OFFC_ID = 10;
 
 
 
#Caso práctico 5-1: Creación de claves foráneas
#Crear las siguientes claves foráneas, de la relación many-to-many:
#Desde T_PROJECTS_EMPLOYEES a T_PROJECTS, nombre FK_PREM_PRJT.
#Desde T_PROJECTS_EMPLOYEES a T_EMPLOYEES, nombre FK_PREM_EMPL.


ALTER TABLE T_PROJECTS_EMPLOYEES 
    ADD INDEX FK_PREM_PRJT (PRJT_ID), 
    ADD CONSTRAINT FK_PREM_PRJT 
        FOREIGN KEY (PRJT_ID) 
        REFERENCES T_PROJECTS (PRJT_ID);
        
        
ALTER TABLE T_PROJECTS_EMPLOYEES 
    ADD INDEX FK_PREM_EMPL (EMPL_ID), 
    ADD CONSTRAINT FK_PREM_EMPL 
        FOREIGN KEY (EMPL_ID) 
        REFERENCES T_PROJECTS (EMPL_ID);
