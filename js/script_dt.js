$(document).ready(function() {
  $('#empleados').DataTable( {
      dom: 'Bfrtip',
      buttons: [
           'excel', 'pdf', 'print'
      ]
  } );
} );


    // Inicializar DataTable
    $(document).ready(function() {
      $('#empleados').DataTable({
        // Configuraciones de DataTable
      });
    });

    // Función para exportar a Excel
    function exportarExcel() {
      var dataTable = $('#empleados').DataTable();
      var data = dataTable.rows().data().toArray();
      

      var ws = XLSX.utils.aoa_to_sheet(data);
      var wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, ws, 'Hoja1');
      XLSX.writeFile(wb, 'archivo_excel.xlsx');
    }
   
  
    

    // Función para exportar a PDF
    function PDF() {
      var dataTable = $('#empleados').DataTable();
      var data = dataTable.rows().data().toArray();

      var columns = [];
      dataTable.columns().every(function() {
        columns.push(this.header().textContent);
      });

      var doc = new jsPDF();
      doc.autoTable({
        head: [columns],
        body: data
      });
      doc.save('archivo_pdf.pdf');
    }
 
