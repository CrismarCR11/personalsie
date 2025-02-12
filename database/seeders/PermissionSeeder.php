<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* ADMINISTRACION */
        Permission::create([    /* VER EN EL SIDEBAR REPORTES GENERALES */
            'name' => 'Reporte_Movimientos_General',
            'areaspermissions_id' => 1,
            'descripcion' => 'Reporte de movimientos por sucursales',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'Admin_Views',
            'areaspermissions_id' => 1,
            'descripcion' => '',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'Administracion_Sidebar',
            'areaspermissions_id' => 1,
            'descripcion' => 'Ver Administracion en el Sidebar',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A ROLES */
            'name' => 'Roles_Index',
            'areaspermissions_id' => 1,
            'descripcion' => 'Ingresar a Roles',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A PERMISOS */
            'name' => 'Permission_Index',
            'areaspermissions_id' => 1,
            'descripcion' => 'Ingresar a Permisos',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A ASIGNAR PERMISO */
            'name' => 'Asignar_Index',
            'areaspermissions_id' => 1,
            'descripcion' => 'Ingresar a Asignar Permiso',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A USUARIOS CRUD */
            'name' => 'Usuarios_Index',
            'areaspermissions_id' => 1,
            'descripcion' => 'Ingresar a Usuarios CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A CLIENTE CRUD */
            'name' => 'Cliente_Index',
            'areaspermissions_id' => 1,
            'descripcion' => 'Ingresar a Cliente CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A PROCEDENCIA CRUD */
            'name' => 'Procedencia_Index',
            'areaspermissions_id' => 1,
            'descripcion' => 'Ingresar a Procedencia Clientes CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A EMPRESA CRUD */
            'name' => 'Empresa_Index',
            'areaspermissions_id' => 1,
            'descripcion' => 'Ingresar a Empresa (Compañía) CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A SUCURSAL CRUD */
            'name' => 'Sucursal_Index',
            'areaspermissions_id' => 1,
            'descripcion' => 'Ingresar a Sucursal CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A CAJA CRUD */
            'name' => 'Caja_Index',
            'areaspermissions_id' => 7,
            'descripcion' => 'Ingresar a Caja CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A CARTERA CRUD */
            'name' => 'Cartera_Index',
            'areaspermissions_id' => 7,
            'descripcion' => 'Ingresar a Cartera CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A CORTE DE CAJA */
            'name' => 'Corte_Caja_Index',
            'areaspermissions_id' => 6,
            'descripcion' => 'Ingresar a Corte de Caja',
            'guard_name' => 'web'
        ]);


        /* TIGO MONEY */
        Permission::create([    /* INGRESAR A ORIGEN CRUD */
            'name' => 'Origen_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'Ingresar a Origen CRUD TigoMoney',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A MOTIVO CRUD */
            'name' => 'Motivo_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'Ingresar a Motivo CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A COMISION CRUD */
            'name' => 'Comision_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'Ingresar a Comision CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A ORIGEN MOTIVO */
            'name' => 'Origen_Mot_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'Ingresar a Origen Motivo',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A ORIGEN MOTIVO COMISION */
            'name' => 'Origen_Mot_Com_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'Ingresar a Origen Motivo Comision',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A LA TRANSACCION */
            'name' => 'Tigo_Money_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'Ingresar a Transacción Tigo Money',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A LOS ARQUEOS */
            'name' => 'Arqueos_Tigo_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'Ingresar a los Arqueos',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A REPORTES TIGO MONEY */
            'name' => 'Reportes_Tigo_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'Ingresar a Reportes Tigo Money',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A REPORTE GANANCIAS TIGO MONEY */
            'name' => 'Rep_Gan_Tigo_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'Ingresar a Reporte Ganancias',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR SACAR PDF REPORTE DE TIGO MONEY*/
            'name' => 'Report_Tigo_Export',
            'areaspermissions_id' => 5,
            'descripcion' => 'Permitir Sacar pdf Reporte',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR SACAR PDF REPORTE DE LAS GANANCIAS TIGO MONEY */
            'name' => 'Report_Ganancia_Tigo_Export',
            'areaspermissions_id' => 5,
            'descripcion' => 'Permitir Sacar Pdf reporte de las Ganancias',
            'guard_name' => 'web'
        ]);


        /* STREAMING */
        // Permission::create([    /* INGRESAR A PLATAFORMA CRUD */
        //     'name' => 'Plataforma_Index',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Ingresar a Plataforma CRUD',
        //     'guard_name' => 'web'
        // ]);
        // Permission::create([    /* INGRESAR A PROVEEDOR CRUD */
        //     'name' => 'Proveedor_Index',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Ingresar a Proveedor CRUD',
        //     'guard_name' => 'web'
        // ]);
        // Permission::create([    /* INGRESAR A CORREOS CRUD */
        //     'name' => 'Correos_Index',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Ingresar a Correos CRUD',
        //     'guard_name' => 'web'
        // ]);
        // Permission::create([    /* INGRESAR A CUENTAS  */
        //     'name' => 'Cuentas_Index',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Ingresar a Cuentas',
        //     'guard_name' => 'web'
        // ]);
        // Permission::create([    /* INGRESAR A PERFILES  */
        //     'name' => 'Perfiles_Index',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Ingresar a Perfiles',
        //     'guard_name' => 'web'
        // ]);
        // Permission::create([    /* INGRESAR A PLANES  */
        //     'name' => 'Planes_Index',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Ingresar a Planes',
        //     'guard_name' => 'web'
        // ]);
        // Permission::create([    /* INGRESAR A ARQUEOS  */
        //     'name' => 'Arqueos_Streaming_Index',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Ingresar a Arqueos',
        //     'guard_name' => 'web'
        // ]);
        // Permission::create([    /* INGRESAR A REPORTES  */
        //     'name' => 'Reportes_Streaming_Index',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Ingresar a Reportes',
        //     'guard_name' => 'web'
        // ]);
        // Permission::create([    /* PERMITIR SACAR PDF REPORTE DE STREAMING  */
        //     'name' => 'Reportes_Streaming_Export',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Permitir sacar Pdf Reporte',
        //     'guard_name' => 'web'
        // ]);


        /* SERVICIOS */
        Permission::create([    /* INGRESAR A CATEGORIA PRODUCTO SERVICIO CRUD */
            'name' => 'Cat_Prod_Service_Index',
            'areaspermissions_id' => 4,
            'descripcion' => 'Ingresar a Categoría Producto Servicio CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A SUB CATEGORIA PRODUCTO SERVICIO CRUD */
            'name' => 'SubCat_Prod_Service_Index',
            'areaspermissions_id' => 4,
            'descripcion' => 'Ingresar a Sub Categoría Producto Servicio CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A TIPO DE TRABAJO CRUD */
            'name' => 'Type_Work_Index',
            'areaspermissions_id' => 4,
            'descripcion' => 'Ingresar a Tipo de Trabajo CRUD',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A SERVICIO */
            'name' => 'Service_Index',
            'areaspermissions_id' => 4,
            'descripcion' => 'Ingresar a Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A ORDEN DE SERVICIO */
            'name' => 'Orden_Servicio_Index',
            'areaspermissions_id' => 4,
            'descripcion' => 'Ingresar a Orden de Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR VER EL INICIO CON LOS SERVICIOS */
            'name' => 'Inicio_Index',
            'areaspermissions_id' => 4,
            'descripcion' => 'Permitir ver el Inicio con los Servicios Próximos a Vencer',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITE IMPRIMIR LA ORDEN DE SERVICIO */
            'name' => 'Imprimir_Orden_Servicio_Index',
            'areaspermissions_id' => 4,
            'descripcion' => 'Permite Imprimir la Orden de Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A REPORTES DE SERVICIO */
            'name' => 'Reporte_Servicios_Index',
            'areaspermissions_id' => 3,
            'descripcion' => 'Ingresar a Reportes de Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITE SACAR PDF DE REPORTES DE SERVICIO */
            'name' => 'Reporte_Servicios_Export',
            'areaspermissions_id' => 3,
            'descripcion' => 'Permite Sacar Pdf de Reportes de Servicios',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR ASIGNAR UN TECNICO AL SERVICIO */
            'name' => 'Asignar_Tecnico_Servicio',
            'areaspermissions_id' => 3,
            'descripcion' => 'Permitir Asignar un Técnico al Servicio y Filtrar por Usuarios la Tabla Orden de Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR ENTREGAR EL SERVICIO */
            'name' => 'Boton_Entregar_Servicio',
            'areaspermissions_id' => 4,
            'descripcion' => 'Permitir Entregar el Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR VER BOTONES MODIFICAR ANULAR Y ELIMINAR EL SERVICIO */
            'name' => 'Ver_Modificar_Eliminar_Servicio',
            'areaspermissions_id' => 4,
            'descripcion' => 'Permitir Ver Botones Modificar Anular y eliminar el Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR ANULAR EL SERVICIO */
            'name' => 'Anular_Servicio',
            'areaspermissions_id' => 3,
            'descripcion' => 'Permitir Anular el Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR ELIMINAR EL SERVICIO */
            'name' => 'Eliminar_Servicio',
            'areaspermissions_id' => 3,
            'descripcion' => 'Permitir Eliminar el Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR FILTRAR POR SUCURSAL LOS REPORTES DE SERVICIOS */
            'name' => 'Filtrar_sucursal_Reporte_Servicio',
            'areaspermissions_id' => 3,
            'descripcion' => 'Permitir Filtrar por Sucursal los Reportes de Servicios',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR Cambiar al Técnico Responsable */
            'name' => 'Cambiar_Tecnico_Responsable',
            'areaspermissions_id' => 3,
            'descripcion' => 'Cambiar Técnico Responsable de un Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR APARECER EN LA LISTA DE ASIGNAR TECNICO RESPONSABLE */
            'name' => 'Aparecer_Lista_Servicios',
            'areaspermissions_id' => 4,
            'descripcion' => 'Aparecer en la lista de Usuarios Técnicos a través de una ventana modal para ser Asignados a un Servicio',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'admin_estancia_almacen',
            'areaspermissions_id' => 2,
            'descripcion' => '',
            'guard_name' =>'web'
        ]);

        //Ventas
        //Poder Ver Lista de las Ventas realizados por el usuario logeado
        Permission::create([
            'name' => 'VentasLista_Index',
            'areaspermissions_id' => 6,
            'descripcion' => 'Poder Ver Lista de las Ventas realizados por el usuario logeado',
            'guard_name' =>'web'
        ]);
        //Poder ver las Listas de las Ventas de todos los usuarios + anular venta
        Permission::create([
            'name' => 'VentasListaMasFiltros',
            'areaspermissions_id' => 7,
            'descripcion' => 'Poder ver la lista de Ventas con + Filtros (Ventas por Usuario)',
            'guard_name' =>'web'
        ]);
        //Poder recibir las notificaciones de movimiento de inventario de cualquier destino 
        //dentro de la propia sucursal a la tienda
        Permission::create([
            'name' => 'VentasNotificacionesMovInv',
            'areaspermissions_id' => 7,
            'descripcion' => 'Recibir Notificaciones del Movimiento de Inventario del Almacén a la Tienda',
            'guard_name' =>'web'
        ]);
        //Poder ver el movimiento Diario de Ventas (Sin poder filtrar por Sucursal y ver Utilidad)
        Permission::create([
            'name' => 'VentasMovDia_Index',
            'areaspermissions_id' => 7,
            'descripcion' => 'Ver el movimiento diario de Ventas',
            'guard_name' =>'web'
        ]);
        //Poder ver el movimiento Diario de Ventas filtrando por sucursal y poder ver la utilidad
        Permission::create([
            'name' => 'VentasMovDiaSucursalUtilidad',
            'areaspermissions_id' => 7,
            'descripcion' => 'Ver el movimiento Diario de Ventas + Filtros (Por Sucursal, Ver Utilidad)',
            'guard_name' =>'web'
        ]);
        //Poder filtrar y Anular una devolucion
        Permission::create([
            'name' => 'VentasDevolucionesFiltrar',
            'areaspermissions_id' => 7,
            'descripcion' => 'Poder filtrar y Anular una devolucion',
            'guard_name' =>'web'
        ]);
        //Poder editar venta sin corte de caja
        Permission::create([
            'name' => 'Ventaseditarsincortecaja',
            'areaspermissions_id' => 7,
            'descripcion' => 'Poder editar una venta sin realizar un corte de caja',
            'guard_name' =>'web'
        ]);



        /* VENTAS */
        Permission::create([    /* INGRESAR A CATEGORIA CRUD */
            'name' => 'Category_Index',
            'areaspermissions_id' => 2,
            'descripcion' => '',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A PRODUCTOS CRUD */
            'name' => 'Product_Index',
            'areaspermissions_id' => 2,
            'descripcion' => '',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A COINS CRUD */
            'name' => 'Coins_Index',
            'areaspermissions_id' => 7,
            'descripcion' => 'Crear Monedas para las Ventas',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A VENTAS */
            'name' => 'Sales_Index',
            'areaspermissions_id' => 6,
            'descripcion' => 'Poder ver la Sección de Nueva Venta',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A ARQUEOS VENTAS */
            'name' => 'Cashout_Index',
            'areaspermissions_id' => 7,
            'descripcion' => 'Ingresar a Arqueos Ventas',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* INGRESAR A REPORTES VENTAS */
            'name' => 'Reportes_Index',
            'areaspermissions_id' => 7,
            'descripcion' => 'Ingresar a Reportes Ventas',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR SACAR PDF REPORTE DE VENTAS */
            'name' => 'Report_Sales_Export',
            'areaspermissions_id' => 7,
            'descripcion' => 'Permitir sacar Pdf Reporte de Ventas',
            'guard_name' => 'web'
        ]);

        /* SIDEBAR */
        Permission::create([    /* PERMITIR VER TIGO MONEY EN EL SIDEBAR */
            'name' => 'Ver_TigoMoney_SideBar',
            'areaspermissions_id' => 5,
            'descripcion' => '',
            'guard_name' => 'web'
        ]);
        // Permission::create([    /* PERMITIR VER STREAMING EN EL SIDEBAR */
        //     'name' => 'Ver_Streaming_SideBar',
        //     'areaspermissions_id' => 'Streaming',
        //     'descripcion' => 'Permitir Ver Tigo Money en el Sidebar',
        //     'guard_name' => 'web'
        // ]);
        Permission::create([    /* PERMITIR VER SERVICIOS EN EL SIDEBAR */
            'name' => 'Ver_Servicios_SideBar',
            'areaspermissions_id' => 4,
            'descripcion' => 'PERMITIR VER SERVICIOS EN EL SIDEBAR',
            'guard_name' => 'web'
        ]);

        /* TIGO MONEY */
        Permission::create([    /* PERMITIR VER LOS REPORTES DE JORNADA DE TIGO MONEY */
            'name' => 'Jornada_Tigo_Index',
            'areaspermissions_id' => 5,
            'descripcion' => 'PERMITIR VER LOS REPORTES DE JORNADA DE TIGO MONEY',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR MODIFICAR LA SUCURSAL Y LA CAJA EN REPORTE JORNADA */
            'name' => 'Modificar_Sucursal_Caja_Jornada_Tigo_Money',
            'areaspermissions_id' => 5,
            'descripcion' => 'PERMITIR MODIFICAR LA SUCURSAL Y LA CAJA EN REPORTE JORNADA',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR VER LA GANANCIA DE LAS TRANSACCIONES DE TIGO MONEY */
            'name' => 'Ver_Ganancia_Tigo_Money',
            'areaspermissions_id' => 5,
            'descripcion' => 'PERMITIR VER LA GANANCIA DE LAS TRANSACCIONES DE TIGO MONEY',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR GENERAR INGRESO Y EGRESO */
            'name' => 'Ver_Generar_Ingreso_Egreso_Boton',
            'areaspermissions_id' => 1,
            'descripcion' => 'PERMITIR GENERAR INGRESO Y EGRESO',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR ANULAR TRANSACCION TIGO MONEY */
            'name' => 'Anular_trans_tigomoney_Boton',
            'areaspermissions_id' => 5,
            'descripcion' => 'PERMITIR ANULAR TRANSACCION TIGO MONEY',
            'guard_name' => 'web'
        ]);

        /* SERVICIOS */
        Permission::create([    /* PERMITIR RECEPCIONAR SERVICIOS */
            'name' => 'Recepcionar_Servicio',
            'areaspermissions_id' => 4,
            'descripcion' => 'PERMITIR RECEPCIONAR SERVICIOS',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR VER COSTOS EN REPORTES ENTREGADOS SERVICIOS */
            'name' => 'Ver_Costo_Reportes_Entregados',
            'areaspermissions_id' => 3,
            'descripcion' => 'PERMITIR VER COSTOS EN REPORTES ENTREGADOS SERVICIOS',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR MODIFICAR LOS SERVICIOS ENTREGADOS */
            'name' => 'Modificar_Detalle_Serv_Entregado',
            'areaspermissions_id' => 3,
            'descripcion' => 'PERMITIR MODIFICAR LOS SERVICIOS ENTREGADOS',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR MODIFICAR LOS SERVICIOS */
            'name' => 'Modificar_Detalle_Serv',
            'areaspermissions_id' => 3,
            'descripcion' => 'PERMITIR MODIFICAR LOS SERVICIOS',
            'guard_name' => 'web'
        ]);
        Permission::create([    /* PERMITIR VER REPORTES DE LA CANTIDAD DE VENTAS POR USUARIO */
            'name' => 'Reportes_Sale_Index',
            'areaspermissions_id' => 7,
            'descripcion' => 'Ver Reportes de Ventas',
            'guard_name' => 'web'
        ]);


        Permission::create([
            'name' => 'Inventarios_Registros',
            'areaspermissions_id' => 2,
            'descripcion' => '',
            'guard_name' =>'web'
        ]);
        Permission::create([
            'name' => 'Compras_Index',
            'areaspermissions_id' => 2,
            'descripcion' => '',
            'guard_name' =>'web'
        ]);
        Permission::create([
            'name' => 'Almacen_Index',
            'areaspermissions_id' => 2,
            'descripcion' => '',
            'guard_name' =>'web'
        ]);
        Permission::create([
            'name' => 'Transferencia_Index',
            'areaspermissions_id' => 2,
            'descripcion' => '',
            'guard_name' =>'web'
        ]);
        Permission::create([
            'name' => 'Reportes_Inventarios_Export',
            'areaspermissions_id' => 2,
            'descripcion' => '',
            'guard_name' =>'web'
        ]);

      
    }
}
