// Importa la biblioteca jsPDF
import { jsPDF } from "jspdf";
// Función para generar el PDF desde la tabla HTML
function generarPDF() {
    // Crea un nuevo documento PDF
    const doc = new jsPDF();

    // Agrega la tabla desde la tabla HTML
    doc.autoTable({ html: '#tablaproducto' });

    // Guarda o muestra el PDF
    doc.save('tablaproducto.pdf');
}

// Asocia la función de generación de PDF al botón
const btnGenerarPDF = document.getElementById('pdf');
btnGenerarPDF.addEventListener('click', pdf);
