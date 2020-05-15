
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <title>Movie Invoice</title>
  <?php include 'tools2.php'; ?>
  <style>
    body {
      background: rgb(204, 204, 204);
    }

    page[size="A4"] {
      background: white;
      width: 21cm;
      height: 29.7cm;
      display: block;
      margin: 0 auto;
      margin-bottom: 0.5cm;
      box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
      border: 1.25cm solid #000;
    }

    @media print {

      body,
      page[size="A4"] {
        margin: 0;
        box-shadow: 0;
      }
    }
  </style>
</head>

<body>
  <?php 
    function hi(){
      header('location : ticket.php');
    }
  ?>
  
  <page size="A4">
    <div class="container">
      <div class="card">
        <div class="card-header">
          Invoice
          <strong><?php echo $now?></strong>
          <span class="float-right"> <strong>Status:</strong> Pending</span>

        </div>
        <div class="card-body">
          <div class="row mb-4">
            <div class="col-sm-6">
              <h6 class="mb-3">From:</h6>
              <div>
                <strong>Cinemax</strong>
              </div>
              <div>18 Tran Hung Dao, Ho Chi Minh city</div>
              <div>Email: Thecinemaxcompany.co</div>
              <div>Phone: 1900-6035</div>
            </div>

            <div class="col-sm-6">
              <h6 class="mb-3">To:</h6>
              <div>
                <strong><?php echo ucwords($_SESSION['cust']['name']) ?></strong>
              </div>
              <div>Email: <?php echo $_SESSION['cust']['email'] ?></div>
              <div>Phone: <?php echo $_SESSION['cust']['mobile'] ?></div>
            </div>



          </div>

          <div class="table-responsive-sm">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="center">#</th>
                  <th>Item</th>
                  <th>Description</th>

                  <th class="right">Unit Cost</th>
                  <th class="center">Qty</th>
                  <th class="right">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="center">1</td>
                  <td class="left strong">STA</td>
                  <td class="left"><?php echo $movietitle.': '.$_SESSION['movie']['id']."-".$_SESSION['movie']['day']."-".$_SESSION['movie']['hour']?></td>
  

                  <td class="right"><?php echo '$'.number_format($priceSTA, 2) ?></td>
                  <td class="center"><?php echo $_SESSION['seats']['STA'] ?></td>
                  <td class="right"><?php echo '$'.number_format($_SESSION['seats']['STA'] * $priceSTA, 2) ?></td>
                </tr>
                <tr>
                  <td class="center">2</td>
                  <td class="left">STP</td>
                  <td class="left"><?php echo $movietitle.': '.$_SESSION['movie']['id']."-".$_SESSION['movie']['day']."-".$_SESSION['movie']['hour']?></td>
          

                  <td class="right"><?php echo '$'.number_format($priceSTP, 2) ?></td>
                  <td class="center"><?php echo $_SESSION['seats']['STP'] ?></td>
                  <td class="right"><?php echo '$'.number_format($_SESSION['seats']['STP'] * $priceSTP, 2) ?></td>
                </tr>
                <tr>
                  <td class="center">3</td>
                  <td class="left">STC</td>
                  <td class="left"><?php echo $movietitle.': '.$_SESSION['movie']['id']."-".$_SESSION['movie']['day']."-".$_SESSION['movie']['hour']?></td>
               

                  <td class="right"><?php echo '$'.number_format($priceSTC, 2) ?></td>
                  <td class="center"><?php echo $_SESSION['seats']['STC'] ?></td>
                  <td class="right"><?php echo '$'.number_format($_SESSION['seats']['STC'] * $priceSTC, 2) ?></td>
                </tr>
                <tr>
                  <td class="center">4</td>
                  <td class="left">FCA</td>
                  <td class="left"><?php echo $movietitle.': '.$_SESSION['movie']['id']."-".$_SESSION['movie']['day']."-".$_SESSION['movie']['hour']?></td>

                  <td class="right"><?php echo '$'.number_format($priceFCA, 2) ?></td>
                  <td class="center"><?php echo $_SESSION['seats']['FCA'] ?></td>
                  <td class="right"><?php echo '$'.number_format($_SESSION['seats']['FCA'] * $priceFCA, 2) ?></td>
                </tr>

                <tr>
                  <td class="center">5</td>
                  <td class="left">FCP</td>
                  <td class="left"><?php echo $movietitle.': '.$_SESSION['movie']['id']."-".$_SESSION['movie']['day']."-".$_SESSION['movie']['hour']?></td>

                  <td class="right"><?php echo '$'.number_format($priceFCP, 2) ?></td>
                  <td class="center"><?php echo $_SESSION['seats']['FCP'] ?></td>
                  <td class="right"><?php echo '$'.number_format($_SESSION['seats']['FCP'] * $priceFCP, 2) ?></td>
                </tr>

                <tr>
                  <td class="center">6</td>
                  <td class="left">FCC</td>
                  <td class="left"><?php echo $movietitle.': '.$_SESSION['movie']['id']."-".$_SESSION['movie']['day']."-".$_SESSION['movie']['hour']?></td>

                  <td class="right"><?php echo '$'.number_format($priceFCC, 2) ?></td>
                  <td class="center"><?php echo $_SESSION['seats']['FCC'] ?></td>
                  <td class="right"><?php echo '$'.number_format($_SESSION['seats']['FCC'] * $priceFCC, 2) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-lg-5 col-sm-5 ml-auto">
              <table class="table table-clear">
                <tbody>
                  <tr>
                    <td class="left">
                      <strong>Subtotal</strong>
                    </td>
                    <td class="right"><?php echo '$'.( $value1 = $_SESSION['total']['hidden'])?></td>
                  </tr>
                  <tr>
                    <td class="left">
                      <strong>VAT (10%)</strong>
                    </td>
                    <td class="right"><?php echo '$'.number_format( $value2 = $_SESSION['total']['hidden'] * 0.1, 2)?></td>
                  </tr>
                  <tr>
                    <td class="left">
                      <strong>Total</strong>
                    </td>
                    <td class="right">
                      <strong><?php echo '$'.number_format(($value1 + $value2), 2) ?></strong>
                    </td>
                  </tr>
                  <tr>
                    <td class="left">
                      <strong></strong>
                    </td>
                    <td class="right">
                      <button onclick="location.href='ticket.php'" class= "btn btn-info">PAY</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          

        </div>
      </div>
    </div>
  </page>
</body>

</html>