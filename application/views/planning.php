
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="<?php echo base_url('assets/js/jspdf.js'); ?>"></script>
<script type="module" src="<?php echo base_url('assets/js/pdf.js'); ?>"></script>

    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Recent Order Tables
                <div class="card-action">
                    <div class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                            <i class="icon-options"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void();">Action</a>
                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                     <tr>
                       <th>Jour</th>
                       <th>Petit Dejeuner</th>
                       <th>Dejeuner</th>
                       <th>Gouter</th>
                       <th>Dinner</th>
                       <th>Sport</th>
                     </tr>
                     </thead>
                     <tbody>
                    <?php
                      for($i =0 ;$i <count($planning) -1; $i ++){?>
                        <tr>
                        <td><?php  echo $planning[$i]['jour'];?></td>
                        <td><?php  echo $planning[$i]['petit_dejeuner']['nom'];?></td>
                        <td><?php  echo $planning[$i]['dejeuner']['nom'];?></td>
                        <td><?php  echo $planning[$i]['gouter']['nom'];?></td>
                        <td><?php  echo $planning[$i]['diner']['nom'];?></td>
                        <td><?php  echo $planning[$i]['sport']['nom'];?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td><?php echo $planning['total'];?>Ar</td>
                    </tr>
                   </tbody>
                <tr>
                    <td></td>
                    <td></td>
                    
                    <td><button type="button" class="btn btn-light btn-block">Valider</button></td>
                    
                    <form action="<?php echo base_url('Pdf_ctrl/exporting_pdf'); ?>" method="post">
  <input type="hidden" name="data" value="<?php echo htmlspecialchars(json_encode($planning)); ?>">
  <td><button type="submit" class="btn btn-light btn-block" >Export PDF</button>
</form>
                </td>


                    <td></td>
                    <td></td>
                </tr>
                </table>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
<script>
    
    function convertHTMLtoPDF(window) {
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
            
            console.log("aaaaaaaaaaaa");
        }           
        convertHTMLtoPDF(window)
</script>