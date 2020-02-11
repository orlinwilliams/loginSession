create or replace database DBUser;
use DBUser;

create table User (
    idUser int auto_increment primary key,
    nameUser varchar(45) not null,
    passwordUser text not null,
    idUserTypeFk int not null

);
create table UserType(
    idUserType int auto_increment primary key,
    typeUser varchar(45) not null
);

insert into UserType(typeUser)
values("administrador");
insert into UserType(typeUser)
values("usuario");

insert into User(nameUser, passwordUser,idUserTypeFk)
values("orlin@gmail.com","orlin",1);
insert into User(nameUser, passwordUser,idUserTypeFk)
values("michi@gmail.com","michi",2);

