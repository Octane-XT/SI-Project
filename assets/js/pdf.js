
        function convertHTMLtoPDF() {
            const { jsPDF } = window.jspdf;
 
            let doc = new jsPDF('l', 'mm', [1500, 1400]);
            let pdfjs = document.querySelector('body');
 
            doc.html(pdfjs, {
                callback: function(doc) {
                    doc.save("facture.pdf");
                },
                x: 12,
                y: 12
            });               
        }           
        convertHTMLtoPDF();