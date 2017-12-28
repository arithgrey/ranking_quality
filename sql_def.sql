insert into  enidserv_ranking_queality.sector select * from enidserv_ingresos_gastos.sector;
insert into  enidserv_ranking_queality.countries select * from enidserv_ingresos_gastos.countries;
insert into  enidserv_ranking_queality.plan select * from enidserv_ingresos_gastos.plan;
insert into  enidserv_ranking_queality.empresa select * from enidserv_ingresos_gastos.empresa;
insert into  enidserv_ranking_queality.recurso select * from enidserv_ingresos_gastos.recurso;
insert into  enidserv_ranking_queality.perfil select * from enidserv_ingresos_gastos.perfil;
insert into  enidserv_ranking_queality.usuario select * from enidserv_ingresos_gastos.usuario;
insert into  enidserv_ranking_queality.perfil_recurso select * from enidserv_ingresos_gastos.perfil_recurso;
insert into  enidserv_ranking_queality.empresa_permiso select * from enidserv_ingresos_gastos.empresa_permiso;
insert into  enidserv_ranking_queality.perfil_permiso select * from enidserv_ingresos_gastos.perfil_permiso;
insert into  enidserv_ranking_queality.usuario_perfil select * from enidserv_ingresos_gastos.usuario_perfil;



delete from  enidserv_ranking_queality.perfil_recurso where  idrecurso =  2;
delete from  enidserv_ranking_queality.recurso where  idrecurso =  2;

update enidserv_ranking_queality.recurso set nombre= "¿Deseas un recorrido por ranking quality?" where  nombre like  "¿Deseas un recorrido por Time Wallet?%";



create table enidserv_ranking_queality.catalogo_productos_servicios as select  * from   enidserv_ingresos_gastos.catalogo_productos_servicios;
create table enidserv_ranking_queality.imagen_catalogo_productos_servicios as select  * from   enidserv_ingresos_gastos.imagen_catalogo_productos_servicios;
alter table  enidserv_ranking_queality.servicio add  url_next text;


alter table enidserv_ranking_queality.servicio add s_email int(1) not null default 1;
alter table enidserv_ranking_queality.servicio add s_telefono int(1) not null default 0;
alter table enidserv_ranking_queality.servicio add s_nombre int(1) not null default 0;
alter table enidserv_ranking_queality.encuesta add nombre varchar(70);


delete from enidserv_ranking_queality.perfil_recurso where idrecurso =  26;
delete from enidserv_ranking_queality.recurso where idrecurso =  26;

UPDATE enidserv_ranking_queality.recurso SET descripcionrecurso='Información de su cuenta ' 
WHERE idrecurso='1';