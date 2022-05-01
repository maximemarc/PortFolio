begin transaction;

create table Administrateur
    (
    id_user             integer PRIMARY KEY,
    login                 varchar(20) not null,
    motdepasse          varchar(50) not null
    );

create table projet
    (
    id_proj SERIAL PRIMARY KEY,
    nom VARCHAR(50),
    description VARCHAR(500),
    date date
    );


commit;