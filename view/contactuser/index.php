
<h2 class="text-center mb-5 mt-4">CONTACT</h2>
<div class="container" >
	<div class="row">
    <br/><br/><br/>
       
                   
                    <form action="http://localhost/fill-rouge/contactuser/create" method="post" >
                    <div class="modal-body" style="padding: 5px;">
                          <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                    <input class="form-control" name="nom" placeholder="Nom" type="text" required autofocus />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                    <input class="form-control" name="tel" placeholder="Tel" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="email" placeholder="Email" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="sujet" placeholder="Sujet" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="message" required></textarea>
                                </div>
                            </div>
                        </div>  
                        <div class="panel-footer text-center mb-2 mt-3" style="margin-bottom:-14px;">
                            <input   type="submit" class="btn text-white btnloginenvoyer"  name="contact" value="Envoyer"/>
                             
                            <input type="reset" class="btn btn-danger" value="Vider" />
                                
                        </div>
					</form>
                     </div>
                </div> 
        

<script src="http://localhost/fill-rouge/view/js/panier.js"></script>
</body>
</html>