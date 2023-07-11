"use strict";

function convertHTMLtoPDF() {
  var jsPDF = window.jspdf.jsPDF;
  var doc = new jsPDF('l', 'mm', [1500, 1400]);
  var pdfjs = document.querySelector('body');
  doc.html(pdfjs, {
    callback: function callback(doc) {
      doc.save("facture.pdf");
    },
    x: 12,
    y: 12
  });
  console.log("aaaaaaaaaaaa");
}
//# sourceMappingURL=pdf.dev.js.map
