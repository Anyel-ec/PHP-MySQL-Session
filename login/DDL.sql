create database Login;
use login;

CREATE TABLE usuarios(
    IDUsuario int auto_increment primary key, 
    usuario varchar(25) unique,
    contra varchar(25),
    ciudad varchar(25), 
    nombre varchar(25),
    telefono varchar(10) unique,
    cedula varchar(10) unique,
    foto_path varchar(255) -- We save the image as a path of our projects
);