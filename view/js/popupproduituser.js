
function iconvoir(e){
	document.getElementById("iconvoir"+e).style.display="block";
	}
	
	function iconvoir1(e){
	document.getElementById("iconvoir"+e).style.display="none";
	}



function popup(img,prix,titre,desc,index){
    var divpopup=document.getElementById("popup");
    divpopup.innerHTML=`
     <style >
.btn1 {
margin: .375rem;
color: inherit;
text-transform: uppercase;
word-wrap: break-word;
white-space: normal;
cursor: pointer;
border: 0;
border-radius: 1px;
-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 
0 2px 10px 0 rgba(0,0,0,0.12);
padding: .84rem 2.14rem;
font-size: .81rem;
}


.modal-dialog .modal-header {
background-color: #fb3;
border-radius: 1px;
color: #fff;
}

.modal-footer {
-ms-flex-pack: center !important;
justify-content: center !important;
}

.modal-content {
font-weight: 600;
border-radius: 1px;
box-shadow: 6px 6px 3px #ffc832b0;
}
.btn-danger {
font-weight: 700;
}

.z-depth-1-half {
height: 200px;
}
.close{
    text-decoration:none;
    border:none;
    background-color:#FFBB33;
    color:white;
}
</style>


    <div class="container text-center">
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">`+titre+`</h4>
                    <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <img src="`+img+`" alt="#" class="img-fluid z-depth-1-half">
                            <div style="height: 10px"></div>
                            <p style="text-decoration: line-through; color: #a5a5a5;">13 DH KG </p>
                            <p class="title mb-0"> `+prix+` DH KG</p>
                            <!-- <p class="text-muted " style="font-size: 13px">Web Designer</p> -->
                        </div>
          
                        <div class="col-6 text-left">
                            <h4 class="modal-title">Description:</h4>
                            <p>`+desc+`
                            </p>
                        </div>
                    </div>
                </div>
            
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn1 btn-warning text-white" data-dismiss="modal">Fermer</button>
                     <button type="button" class="btn1 btn-warning  text-white" data-dismiss="modal" onclick="ajouterpanier(`+index+`)">Ajouetr au panier</button>
                </div>
            </div>
        </div>
    </div> 
</div>`

}