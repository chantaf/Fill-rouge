

var userpanier=[];
// effacer le panier :
function clearpanier(){
    userpanier=[];
    localStorage.setItem('panier',JSON.stringify(userpanier));
    (document.querySelector("#countarticle")).innerHTML=(getpanier());
	(document.querySelector("#countarticle1")).innerHTML=(getpanier());
    (document.querySelector("#cmdvalider")).innerHTML="";
}

//cacluer count produit
function getpanier(){
    var total=0;
    for(i=0;i<userpanier.length;i++){
        total+= parseFloat(userpanier[i].qte);
    }
    return total;
}



//ajouter panier table
function ajouterpanier(e,qte=1){
var id_produit=document.getElementById('id_produit'+e).innerText;
var titre_produit=document.getElementById('titre_produit'+e).innerText;
var prix_produit=document.getElementById('prix'+e).innerText;
// var qte_produit=document.getElementById('qte'+e).value;
var image_produit=document.getElementById('image_produit'+e).innerText;
var exist=false;



for(i=0;i<userpanier.length;i++){
if(userpanier[i].id===id_produit){ 

        exist=true;
        setpanierItemQuantity(i,parseFloat(userpanier[i].qte)+parseFloat(qte)); // i position ligne
    }
}

if(!exist){ 

    userpanier.push({id:id_produit,titre:titre_produit,prix:prix_produit,img:image_produit,qte:parseInt(qte)}); 
    localStorage.setItem('panier',JSON.stringify(userpanier)); // re enregistrement dans localstorage 
    }
    (document.querySelector("#countarticle")).innerHTML=(getpanier());
	(document.querySelector("#countarticle1")).innerHTML=(getpanier());
}


//load
function chargeUserpanier(){
    userpanier=JSON.parse(localStorage.getItem('panier')); 
    if(userpanier===null || userpanier===undefined){
        userpanier=[];
        localStorage.setItem('panier',JSON.stringify(userpanier)); 
    }

    (document.querySelector("#countarticle")).innerHTML=(getpanier());
	(document.querySelector("#countarticle1")).innerHTML=(getpanier());
}

//remove
function removeFrompanier(index){
    userpanier.splice(index, 1);
    localStorage.setItem('panier',JSON.stringify(userpanier));
    afficherpanier();

}


//modifier quantity panier
function setpanierItemQuantity(index,nouvqte){
    userpanier[index].qte=nouvqte;
    localStorage.setItem('panier',JSON.stringify(userpanier));

    (document.querySelector("#countarticle")).innerHTML=(getpanier());
	(document.querySelector("#countarticle1")).innerHTML=(getpanier());

}


function calculertotal(){
	var total=0;
	for(i=0;i<userpanier.length;i++){
		total+= userpanier[i].qte*userpanier[i].prix;
	}
	 return total;
}



function getpanierItemsCount(){

	total=calculertotal();
	(document.querySelector("#total")).innerHTML=("Total a payer  "+total+" DH");
}



function recalculatepanierItem(index){
	
	var nqte= document.getElementById('nqte'+index).value;

	
	setpanierItemQuantity(index,nqte);
	getpanierItemsCount();
	afficherpanier();


}

function setInput()
{
	// afficherpanier();
	var commande="";
	for(i=0;i<userpanier.length;i++){
		commande+=`
		<input type="hidden" name="idproduct`+i+`" value="`+userpanier[i].id+`"/>
		<input type="hidden" name="qteproductqte`+i+`" value="`+userpanier[i].qte+`"/>
		<input type="hidden" name="prixproduct`+i+`" value="`+userpanier[i].prix+`"/>`;

	}

	if(userpanier.length>0){
		total=calculertotal();
	commande+=`
		<input type="hidden" name="products" value="`+userpanier.length+`"/>
		<input type="hidden" name="prixtotal" value="`+total+`"/>`;
		
	}
	
    (document.querySelector("#cmdvalider")).innerHTML=commande;

}

function afficherpanier(){
	chargeUserpanier();
	var panier="";
	for(i=0;i<userpanier.length;i++){
	
    panier+=`<tr>  
                  <td data-th="Product">
                  <div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://localhost/fill-rouge/`+userpanier[i].img+`" alt="..."  width="100px" class="img-responsive"/></div>
									<div class="col-sm-12">
										<h4 class="nomargin">`+userpanier[i].titre+`</h4>
									</div>
								</div>
							</td>
							<td data-th="Price">`+userpanier[i].prix+`</td>
							<td data-th="Quantity">
								<input type="number" id="nqte`+i+`" class="form-control text-center" value="`+userpanier[i].qte+`" min="1" oninput="recalculatepanierItem(`+i+`,this)">
							</td>
							<td data-th="Subtotal">`+(userpanier[i].prix*userpanier[i].qte)+` DH</td>
							<td class="actions" data-th="">
								<button class="btn btn-danger btn-sm text-center" onclick="removeFrompanier(`+i+`)"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>`

  }
 
	document.getElementById("panier").innerHTML=panier;

   
	getpanierItemsCount();
	

	 (document.querySelector("#countarticle")).innerHTML=(getpanier());
	 (document.querySelector("#countarticle1")).innerHTML=(getpanier());

}

chargeUserpanier();



