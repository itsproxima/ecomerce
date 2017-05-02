
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >BIG STORE DASHBOARD</h3>
		<h4><a href="index.html">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>ADD PRODUCTS</h3>
					<form action="get_productdata" enctype="multipart/form-data" accept-charset="utf-8" method="post">
						<div class="key">
							
							<label class="col-md-4 control-label" for="Product_name">Product_name</label>
							<input  type="text" value="Product_name" name="Product_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Productname';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<label class="col-md-4 control-label" for="Product_price">Product_price</label>
							<input  type="text" value="Product_price" name="Product_price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product_price';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							  <label class="col-md-4 control-label" for="product_color">product_color</label>  

							<input  type="text" value="Product_color" name="Product_color" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product_color';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<label class="col-md-4 control-label" for="Product_size">Product_size</label>
							<input  type="text" value="Product_size" name="Product_size" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product_size';}" required="">
							<div class="clearfix"></div>
						</div>
                            <div class="key">
							
							<label class="col-md-4 control-label" for="description">description</label>
							<textarea class="" placeholder="" value="" name="description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'description';}" required=""></textarea>
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
                   <label class="col-md-4 control-label" for="product_catagory">Catagory</label>
                   
    				<select id="product_catagory" name="product_catagory" class="form-control">
      					<option value="1">Option one</option>
      					<option value="2">Option two</option>
      					<option value="3">Option three</option>
    				</select>
  					</div>

  					<div class="key">
                 <label for="imgfile" class="col-md-4 control-label">select imagefile</label>
               <div class="controls">
                <input type="file" name="userfile" size="20000" />
               </div>
               </div>
					

                  
						<input type="submit" value="submit">
						
					</form>
				</div>
				
			</div>
		</div>
