
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

  <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://localhost/fill-rouge/view/css/stylepanier.css">


</head>
<body>
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>

          <tbody id="panier">
            <tr>

            </tr>

        </tbody>
    
					<tfoot>
					
						<form method="post" action="http://localhost/fill-rouge/commandeuser/create">
						<tr>
							<td><a href="<?= LIEN ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center" id="total"></td>
							<td><a href="<?= LIEN ?>commandeuser/" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
						
					</tfoot>
				</table>
				
				</form>
</div>
</body>

<script src="http://localhost/fill-rouge/view/js/panier.js"></script>
<script>
 afficherpanier();
</script>
</html>

