<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\cliente;
use App\empleado;
use App\estandar_de_produccion;
use App\gerente;
use App\maquinaria;
use App\materia_prima;
use App\oreden_detrabajo;
use App\oreden_detrabajodescrip;
use App\producto;
use App\venta;
use App\venta_descripcion;
class PDFController extends Controller
{
    public function PDF(){
        $pdf =\PDF::loadView('Report/prueba');
        return $pdf->stream('prueba.pdf');
    }
    public function PDFCliente(){
        $Clientes=cliente::all();
        $pdf =PDF::loadView('Report/ReportC', compact('Clientes'));
        return $pdf->stream('ReporteClientes.pdf');
    }
    public function PDFEmpleado(){
        $Empleados=empleado::all();
        $pdf =PDF::loadView('Report/ReportE', compact('Empleados'));
        return $pdf->stream('ReporteEmpleados.pdf');
    }
    public function PDFEstandar(){
        $Estandar_de_produccions=estandar_de_produccion::all();
        $pdf =PDF::loadView('Report/ReportEs', compact('Estandar_de_produccions'));
        return $pdf->stream('ReporteEstandaresDeProduc.pdf');
    }
    public function PDFGerente(){
        $Gerentes=gerente::all();
        $pdf =PDF::loadView('Report/ReportG', compact('Gerentes'));
        return $pdf->stream('ReporteGerentes.pdf');
    }
    public function PDFMaquinaria(){
        $Maquinarias=maquinaria::all();
        $pdf =PDF::loadView('Report/ReportMq', compact('Maquinarias'));
        return $pdf->stream('ReporteMaquinaria.pdf');
    }
    public function PDFMariaPrima(){
        $Materia_primas=materia_prima::all();
        $pdf =PDF::loadView('Report/ReportMt', compact('Materia_primas'));
        return $pdf->stream('ReporteMateriaPrima.pdf');
    }
    public function PDFOrdenDeTrabajo(){
        $Oreden_detrabajos=oreden_detrabajo::all();
        $pdf =PDF::loadView('Report/ReportOt', compact('Oreden_detrabajos'));
        return $pdf->stream('ReporteOrdenDeTrabajo.pdf');
    }
    public function PDFOrdenDeTrabajoDes(){
        $Oreden_detrabajodescrips=oreden_detrabajodescrip::all();
        $pdf =PDF::loadView('Report/ReportOtDes', compact('Oreden_detrabajodescrips'));
        return $pdf->stream('ReporteOrdenDeTrabajoDes.pdf');
    }
    public function PDFProductos(){
        $Productos=producto::all();
        $pdf =PDF::loadView('Report/ReportP', compact('Productos'));
        return $pdf->stream('ReporteProductos.pdf');
    }
    public function PDFVentas(){
        $Ventas=venta::all();
        $pdf =PDF::loadView('Report/ReportV', compact('Ventas'));
        return $pdf->stream('ReporteVentas.pdf');
    }
    public function PDFVentasDescrip(){
        $Venta_descripcions=venta_descripcion::all();
        $pdf =PDF::loadView('Report/ReportVDes', compact('Venta_descripcions'));
        return $pdf->stream('ReporteVentasDes.pdf');
    }
}