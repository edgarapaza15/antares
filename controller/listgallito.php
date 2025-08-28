<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Listgallito extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->datos = [];
  }
  
  public function exportToExcel()
  {
    // Obtener los parámetros de búsqueda
    $fecInicial = isset($_GET['fecInicial']) ? $_GET['fecInicial'] : (isset($_SESSION['export_params']['fecInicial']) ? $_SESSION['export_params']['fecInicial'] : date('Y-m-d'));
    $fecFinal = isset($_GET['fecFinal']) ? $_GET['fecFinal'] : (isset($_SESSION['export_params']['fecFinal']) ? $_SESSION['export_params']['fecFinal'] : '');
    $mes = isset($_GET['mes']) ? $_GET['mes'] : (isset($_SESSION['export_params']['mes']) ? $_SESSION['export_params']['mes'] : '');
    $anio = isset($_GET['anio']) ? $_GET['anio'] : (isset($_SESSION['export_params']['anio']) ? $_SESSION['export_params']['anio'] : date('Y'));
    
    // Obtener los datos según los parámetros
    if (!empty($mes)) {
      $res = $this->model->ListadoGallitoMes($mes, $anio);
    } elseif (!empty($fecFinal)) {
      $res = $this->model->ListadoGallito2($fecInicial, $fecFinal);
    } else {
      $res = $this->model->ListadoGallito($fecInicial);
    }
    
         // Crear el archivo Excel
     require_once 'vendor/autoload.php';
    
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    // Configurar el título
    $sheet->mergeCells('A1:Y1');
    $sheet->setCellValue('A1', 'EMBALSE GALLITO CIEGO');
    $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    $sheet->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    
    // Configurar encabezados
    $headers = [
      'A2' => 'HORA',
      'B2' => 'VOLUMEN DE CRECIDAS (Hm3)',
      'C2' => 'LAMINACION DEL EMBALSE (M3/S)',
      'D2' => 'NIVEL DE EMBALSE (m.s.n.m)',
      'E2' => 'VOLUMEN TOTAL (Hm3)',
      'F2' => 'VOLUMEN UTIL (Hm3)',
      'G2' => 'CAUDAL TOTAL(m3/s)',
      'H2' => 'INGRESO MIRA PALTAS(m)',
      'I2' => 'INGRESO CAUDAL PALTAS(m3/s)',
      'J2' => 'INGRESO MIRA YONAN(m)',
      'K2' => 'INGRESO CAUDAL YONAN(m3/s)',
      'L2' => 'SALIDA MIRA E2(m)',
      'M2' => 'SALIDA CAUDAL E2(m3/s)',
      'N2' => 'SALIDA MIRA MINICENTRAL(m)',
      'O2' => 'SALIDA CAUDAL MINICENTRAL(m3/s)',
      'P2' => 'SALIDA MIRA CGC(m)',
      'Q2' => 'SALIDA CAUDAL CGC(m3/s)',
      'R2' => 'SALIDA MIRA C TORTA(m)',
      'S2' => 'SALIDA CAUDAL C TORTA(m3/s)',
      'T2' => 'NIVEL EMBALSE COMPENSACION(m.s.n.m.)',
      'U2' => 'VOLUMEN TOTAL EMBALSE (Hm3)',
      'V2' => 'ABERTURA COMP1',
      'W2' => 'CAUDAL COMP1(m3/s)',
      'X2' => 'ABERTURA COMP2',
      'Y2' => 'CAUDAL COMP2(m3/s)'
    ];
    
    foreach ($headers as $cell => $value) {
      $sheet->setCellValue($cell, $value);
      $sheet->getStyle($cell)->getFont()->setBold(true);
      $sheet->getStyle($cell)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
      $sheet->getStyle($cell)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
      $sheet->getStyle($cell)->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('CCCCCC');
      $sheet->getStyle($cell)->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
    }
    
    // Llenar datos
    $row = 3;
    foreach ($res as $data) {
      $sheet->setCellValue('A' . $row, $data->hora);
      $sheet->setCellValue('B' . $row, $data->volumenCrecidas);
      $sheet->setCellValue('C' . $row, $data->laminacionGallito);
      $sheet->setCellValue('D' . $row, $data->nivelEmbalse);
      $sheet->setCellValue('E' . $row, $data->volumenTotal);
      $sheet->setCellValue('F' . $row, $data->volumenUtil);
      $sheet->setCellValue('G' . $row, $data->caudalTotal);
      $sheet->setCellValue('H' . $row, $data->ingresoMiraPaltas);
      $sheet->setCellValue('I' . $row, $data->ingresoCaudalPaltas);
      $sheet->setCellValue('J' . $row, $data->ingresoMiraYonan);
      $sheet->setCellValue('K' . $row, $data->ingresoCaudalYonan);
      $sheet->setCellValue('L' . $row, $data->salidaMiraE2);
      $sheet->setCellValue('M' . $row, $data->salidaCaudalE2);
      $sheet->setCellValue('N' . $row, $data->salidaMiraMinicentral);
      $sheet->setCellValue('O' . $row, $data->salidaCaudalMinicentral);
      $sheet->setCellValue('P' . $row, $data->salidaMiraCGC);
      $sheet->setCellValue('Q' . $row, $data->salidaCaudalCGC);
      $sheet->setCellValue('R' . $row, $data->salidaMiraCTorta);
      $sheet->setCellValue('S' . $row, $data->salidaCaudalCTorta);
      $sheet->setCellValue('T' . $row, $data->nivelEmbalseCompensacion);
      $sheet->setCellValue('U' . $row, $data->volumenTotalEmbalse);
      $sheet->setCellValue('V' . $row, $data->aberturaComp1);
      $sheet->setCellValue('W' . $row, $data->caudalComp1);
      $sheet->setCellValue('X' . $row, $data->aberturaComp2);
      $sheet->setCellValue('Y' . $row, $data->caudalComp2);
      
      // Aplicar bordes a la fila
      $sheet->getStyle('A' . $row . ':Y' . $row)->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
      
      $row++;
    }
    
    // Autoajustar columnas
    foreach (range('A', 'Y') as $col) {
      $sheet->getColumnDimension($col)->setAutoSize(true);
    }
    
    // Generar nombre del archivo
    $filename = 'Reporte_Gallito_' . date('Y-m-d_H-i-s') . '.xlsx';
    
    // Configurar headers para descarga
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    
    // Crear el archivo
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    exit;
  }
  
  public function fecha1()
  {
    $msg = "";
    if(isset($_POST['btnBuscar']))
    {
      #echo "press";
      $fecInicial = $_POST['fecInicial'];
      $fecFinal   = $_POST['fecFinal'];

      if(!empty($fecInicial))
      {
        #$msg = "no vacio";
        if(!empty($fecFinal))
        {
          #echo "Buscar 2 fechas";
          $res = $this->model->ListadoGallito2($fecInicial,$fecFinal);
        }else
        {
          #$msg = "Buscar 1 fechas";
          $res = $this->model->ListadoGallito($fecInicial);
        }
        
        // Guardar parámetros en sesión para export
        $_SESSION['export_params'] = [
          'fecInicial' => $fecInicial,
          'fecFinal' => $fecFinal,
          'mes' => '',
          'anio' => ''
        ];
      }else{
        $msg = "Fecha no seleccionada";
      }
    }

    $this->view->datos = $res;
    $this->view->mensaje = $msg;
    $this->view->Render('listgallito/index');
  }
  public function otro()
  {
    if(isset($_POST['btnBuscar2']))
    {
      #echo "press2";
      $mes  = $_POST['cbomes'];
      $anio = $_POST['cboanio'];
      if(!empty($mes))
      {
        #echo "Con mes";
        $res = $this->model->ListadoGallitoMes($mes,$anio);
        
        // Guardar parámetros en sesión para export
        $_SESSION['export_params'] = [
          'fecInicial' => '',
          'fecFinal' => '',
          'mes' => $mes,
          'anio' => $anio
        ];
      }else{
        #echo "Sin mes";
        $this->view->mensaje = "Debe obligatoriamente seleccionar un MES";

      }
    }
    $this->view->datos = $res;
    $this->view->Render('listgallito/index');
  }

  function render()
  {
    $fechaHoy = date('Y-m-d');
    $res = $this->model->ListadoGallito($fechaHoy);
    
    // Guardar parámetros por defecto en sesión
    $_SESSION['export_params'] = [
      'fecInicial' => $fechaHoy,
      'fecFinal' => '',
      'mes' => '',
      'anio' => date('Y')
    ];
    
    $this->view->datos = $res;
    $this->view->Render('listgallito/index');
  }
}
