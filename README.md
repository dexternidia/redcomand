# redcomand

SELECT `cedula`,`nombre_1`,`apellido_1`,`municipio` FROM `tabla_cne` WHERE `estado` = 5 AND `municipio` = 1 AND `hogares` = 1 group by `parroquia`