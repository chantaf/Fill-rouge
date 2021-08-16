
  <link rel="stylesheet" href="<?= LIEN ?>view/css/stylepanier.css">


</head>
<body>
<div class="container" style="min-height: 408px;">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Prix</th>
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
					
						<form method="post" action="<?= LIEN ?>commandeuser/create">
						<tr>
							<td><a href="<?= LIEN ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Vous Achat</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center" id="total"></td>
							<td><a href="<?= LIEN ?>commandeuser/" class="btn btn-success btn-block">Confirmer <i class="fa fa-angle-right"></i></a></td>
						</tr>
						
					</tfoot>
				</table>
				
				</form>
</div>
</body>

<script src="<?= LIEN ?>view/js/panier.js"></script>
<script>
 afficherpanier();
</script>
</html>

