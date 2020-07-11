<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Encryption Profiling</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" />
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Encryption Profiling</h5>
      <nav class="my-2 my-md-0 mr-md-3">
      </nav>
      <a class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">Encryption Keys / HMAC Code</a>
    </div>

    <div class="container-fluid">
	   <div class="row p-2">
			<div class="col-md-6 mb-2">
       <?PHP 
      // ECHO bin2hex($this->encryption->create_key(16)).'<BR>';
      // ECHO bin2hex($this->encryption->create_key(7)).'<BR>';
      // ECHO bin2hex($this->encryption->create_key(16)).'<BR>';
      // ECHO bin2hex($this->encryption->create_key(56)).'<BR>';
      // ECHO bin2hex($this->encryption->create_key(16));
      //echo $encryptedResult[1];
      ?>  
				<div class="card p-5" id="chartStats">
				<h5 class="text-center">Algorithm Encryption Speed Execution</h5>
				</div>
      </div>
      <div class="col-md-6 mb-2">
				<div class="card p-5">
        <h5 class="text-center">Algorithm Encryption Average Result</h5>
        <table id="encAverage" class="table table-striped display compact" style="width:100%;height:325px;">
              <thead>
                <tr>
                  <th scope="col">Type</th>
                  <th scope="col">Encryption Time</th>
                  <th scope="col">Decryption Time</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td>3DES</td>
                <td><?php echo $encryptionAvg1?></td>
                <td><?php echo $decryptionAvg1?></td>
                </tr> 
                
              <tr>
                <td>DES</td>
                <td><?php echo $encryptionAvg2?></td>
                <td><?php echo $decryptionAvg2?></td>
                </tr> 
                
              <tr>
                <td>AES</td>
                <td><?php echo $encryptionAvg3?></td>
                <td><?php echo $decryptionAvg3?></td>
                </tr> 
                
              <tr>
                <td>BLOWFISH</td>
                <td><?php echo $encryptionAvg4?></td>
                <td><?php echo $decryptionAvg4?></td>
              </tr>       
              
              </tbody>
        </table>
				</div>
			</div>
			<!-- <div class="col-md-6 mb-2">
				<div class="row mb-4">
				<div class="col-md-6">
					<div class="card">
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
            
					</div> 
				</div>
				</div>
				<div class="row">
				<div class="col-md-12">
				<div class="card">
        
				</div>
				</div>
				</div>
			</div> -->
	   </div>
     <div class="row p-2">
      <div class="col-lg-12">
      <div class="card p-4">
      <div class="table-responsive">
			<h5 class="text-center">Test Data</h5>
      <table id="encTable" class="table table-striped display compact" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">Type</th>
                  <th scope="col">Raw Text</th>
                  <th scope="col">Encryption Time</th>
                  <th scope="col">Encryption Result</th>
                  <th scope="col">Decryption Time</th>
                  <th scope="col">Decryption Result</th>
                </tr>
              </thead>
              <tbody>
                
              <?php 
              
                for ($i=0; $i < count($encryptedTimeResult[0])-1; $i++) { 
                  
                  echo '<tr>';
                  echo '<td>"'.$datacipher[0][$i].'"</td>';
                  
                  echo '<td>"'.$rawtext[0][$i].'"</td>';

                  echo '<td>"'.$encryptedTimeResult[0][$i].'"</td>';
                  
                  echo '<td>"'.$encryptedResult[0][$i].'"</td>';
                  
                  echo '<td>"'.$decryptedTimeResult[0][$i].'"</td>';
                  
                  echo '<td>"'.$decryptedResult[0][$i].'"</td>';
                
                  echo '</tr>';

                  echo '<tr>';
                  echo '<td>"'.$datacipher[1][$i].'"</td>';
                  
                  echo '<td>"'.$rawtext[1][$i].'"</td>';

                  echo '<td>"'.$encryptedTimeResult[1][$i].'"</td>';
                  
                  echo '<td>"'.$encryptedResult[1][$i].'"</td>';
                  
                  echo '<td>"'.$decryptedTimeResult[1][$i].'"</td>';
                  
                  echo '<td>"'.$decryptedResult[1][$i].'"</td>';
                
                  echo '</tr>';

                  echo '<tr>';
                  echo '<td>"'.$datacipher[2][$i].'"</td>';
                  
                  echo '<td>"'.$rawtext[2][$i].'"</td>';

                  echo '<td>"'.$encryptedTimeResult[2][$i].'"</td>';
                  
                  echo '<td>"'.$encryptedResult[2][$i].'"</td>';
                  
                  echo '<td>"'.$decryptedTimeResult[2][$i].'"</td>';
                  
                  echo '<td>"'.$decryptedResult[2][$i].'"</td>';
                
                  echo '</tr>';

                  echo '<tr>';
                  echo '<td>"'.$datacipher[3][$i].'"</td>';
                  
                  echo '<td>"'.$rawtext[3][$i].'"</td>';

                  echo '<td>"'.$encryptedTimeResult[3][$i].'"</td>';
                  
                  echo '<td>"'.$encryptedResult[3][$i].'"</td>';
                  
                  echo '<td>"'.$decryptedTimeResult[3][$i].'"</td>';
                  
                  echo '<td>"'.$decryptedResult[3][$i].'"</td>';
                
                  echo '</tr>';

                  
                }
              
                ?>
                
              </tbody>
            </table>
      </div>
      </div>
      </div>
     
     </div>

      <!-- <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer> -->
    </div>
    <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Generated Secret Keys</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <span>Triple Des (112 bit/ 14 key length) = 14 * 2 = 28 key size</span>
              <h6>Secret Key</h6>
              <textarea class="form-control" rows="2"><?php echo $keys[0]?></textarea>
              <span>HMAC(Hash based Message Authentication Code)</span>
              <textarea class="form-control mb-4" rows="2"><?php echo $hmac_value[0];?></textarea>

              <span>DES (56 bit/ 7 key length) = 2(7) = 14 key size</span>
              <h6>Secret Key</h6>
              <textarea class="form-control" rows="2"><?php echo $keys[1]?></textarea>
              <span>HMAC(Hash based Message Authentication Code)</span>
              <textarea class="form-control mb-4" rows="2"><?php echo $hmac_value[1];?></textarea>

              <span>AES-256 (256 bit/ 32 key length) =  2(32) = 64 key size</span>
              <h6>Secret Key</h6>
              <textarea class="form-control" rows="2"><?php echo $keys[2]?></textarea>
              <span>HMAC(Hash based Message Authentication Code)</span>
              <textarea class="form-control mb-4" rows="2"><?php echo $hmac_value[2];?></textarea>

              <span>Blowfish (128 bit/ 16 key length) =  2(16) = 32 key size</span>
              <h6>Secret Key</h6>
              <textarea class="form-control" rows="2"><?php echo $keys[3]?></textarea>
              <span>HMAC(Hash based Message Authentication Code)</span>
              <textarea class="form-control mb-4" rows="2"><?php echo $hmac_value[3];?></textarea>
            </div>
          </div>
        </div>
      </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script> 
<script>
$(document).ready( function () {
    $('#encTable').DataTable({
      paging: true,
    responsive: true,
      columnDefs: [
        { responsivePriority: 1, targets: 0 },
        
        { responsivePriority: 2, targets: 2 },
        
        { responsivePriority: 3, targets: 4 },
    ],
    "order": [[ 2, "asc" ]],
    dom: 'Bfrtip'
});

$('#encAverage').DataTable({
      paging: true,
    responsive: true,
    "order": [[ 2, "asc" ]],
    dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
});

} );
   var options = {
          series: [{
		  name:"Encryption",
          data: [
            <?php 
              echo $encryptionAvg1.','.$encryptionAvg2.','.$encryptionAvg3.','.$encryptionAvg4.',';
            ?> 
          ]
        }, {
			name:"Decryption",
          data: [
            <?php
              echo $decryptionAvg1.','.$decryptionAvg2.','.$decryptionAvg3.','.$decryptionAvg4.',';
          ?> 
          ]
        }],
          chart: {
          type: 'bar',
          height: 420
        },
        plotOptions: {
          bar: {
            horizontal: true,
            dataLabels: {
              position: 'top',
            },
          }
        },
        dataLabels: {
          enabled: true,
          offsetX: -6,
          style: {
            fontSize: '12px',
            colors: ['#fff']
          }
        },
        stroke: {
          show: true,
          width: 1,
          colors: ['#fff']
        },
        xaxis: {
          categories: ['3DES','DES','AES','BLOWFISH'],
        },
        };

        var chart = new ApexCharts(document.querySelector("#chartStats"), options);
        chart.render();
      
      
</script>
</body>
</html>
