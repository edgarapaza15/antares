# Funcionalidad de Exportación a Excel - Embalse Gallito Ciego

## Descripción
Se ha implementado la funcionalidad para exportar los datos del embalse Gallito Ciego a archivos Excel (.xlsx) desde la página `http://localhost/antares/listgallito`.

## Características

### 1. Botones de Exportación
- **Botón "Exportar Excel" en el formulario de fechas**: Exporta datos según las fechas seleccionadas
- **Botón "Exportar Excel" en el formulario de mes/año**: Exporta datos según el mes y año seleccionados
- **Botón "Exportar Datos Actuales a Excel"**: Exporta los datos que se están mostrando actualmente en la tabla

### 2. Formato del Archivo Excel
El archivo Excel generado incluye:
- Título centrado: "EMBALSE GALLITO CIEGO"
- Encabezados con formato (negrita, centrado, fondo gris)
- Todos los datos de la tabla con bordes
- Columnas autoajustadas al contenido
- Nombre del archivo con timestamp: `Reporte_Gallito_YYYY-MM-DD_HH-MM-SS.xlsx`

### 3. Columnas Incluidas
1. HORA
2. VOLUMEN DE CRECIDAS (Hm3)
3. LAMINACION DEL EMBALSE (M3/S)
4. NIVEL DE EMBALSE (m.s.n.m)
5. VOLUMEN TOTAL (Hm3)
6. VOLUMEN UTIL (Hm3)
7. CAUDAL TOTAL(m3/s)
8. INGRESO MIRA PALTAS(m)
9. INGRESO CAUDAL PALTAS(m3/s)
10. INGRESO MIRA YONAN(m)
11. INGRESO CAUDAL YONAN(m3/s)
12. SALIDA MIRA E2(m)
13. SALIDA CAUDAL E2(m3/s)
14. SALIDA MIRA MINICENTRAL(m)
15. SALIDA CAUDAL MINICENTRAL(m3/s)
16. SALIDA MIRA CGC(m)
17. SALIDA CAUDAL CGC(m3/s)
18. SALIDA MIRA C TORTA(m)
19. SALIDA CAUDAL C TORTA(m3/s)
20. NIVEL EMBALSE COMPENSACION(m.s.n.m.)
21. VOLUMEN TOTAL EMBALSE (Hm3)
22. ABERTURA COMP1
23. CAUDAL COMP1(m3/s)
24. ABERTURA COMP2
25. CAUDAL COMP2(m3/s)

## Cómo Usar

### Método 1: Exportar con Fechas Específicas
1. Selecciona una fecha inicial (obligatorio)
2. Opcionalmente selecciona una fecha final
3. Haz clic en "Buscar" para ver los datos
4. Haz clic en "Exportar Excel" para descargar el archivo

### Método 2: Exportar por Mes/Año
1. Selecciona un mes (obligatorio)
2. Selecciona un año
3. Haz clic en "Buscar" para ver los datos
4. Haz clic en "Exportar Excel" para descargar el archivo

### Método 3: Exportar Datos Actuales
1. Navega a la página y visualiza cualquier conjunto de datos
2. Haz clic en "Exportar Datos Actuales a Excel" al final de la página
3. Se descargará un archivo con los datos que se están mostrando

## Requisitos Técnicos
- PHP 7.0 o superior
- PhpSpreadsheet 2.0 (ya instalado via Composer)
- Sesiones PHP habilitadas
- Permisos de escritura en el servidor web

## Archivos Modificados
- `controller/listgallito.php`: Agregado método `exportToExcel()`
- `views/listgallito/index.php`: Agregados botones de exportación y JavaScript

## Notas
- Los parámetros de búsqueda se almacenan en la sesión para permitir exportar los datos actuales
- El archivo se descarga automáticamente al navegador
- Si no hay datos para exportar, se generará un archivo vacío con solo los encabezados
